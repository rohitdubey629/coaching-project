<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_Model extends Model
{
    // protected $db;
    public function getData($table)
    {

        $db = \config\Database::connect();
        $builder = $db->table($table);
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function checkLogin($email, $password)
    {

        $db = \Config\Database::connect();
        $builder = $db->table("login");
        $builder->select('*');
        $builder->where('email', $email);
        $builder->orWhere('contact', $email);

        $query = $builder->get();
        $result = $query->getRowArray();
        if (!empty($result) && sizeof($result) > 0) {

            $id = $result['id'];
            $pass_code = $result['pass_code'];
            $salt = $result['salt'];
            $encrypt = $result['password'];

            if ($id == 1 && $pass_code == $password) {

                $result['status'] = true;
            } else {
                $hash = $this->checkhash($salt, $password);

                if ($encrypt == $hash) {
                    $result['status'] = true;
                } else {
                    $result['status'] = false;
                }
            }
        } else {
            $result['status'] = false;
        }
        return $result;
    }



    public function changePassword($userId, $password)
    {
        $db = \Config\Database::connect();
        $builder = $db->table("login");
        $builder->select('*');
        $builder->where('email', $userId);
        $builder->orWhere('contact', $userId);

        $query = $builder->get();
        $result = $query->getRowArray();

        if (!empty($result)) {
            $id = $result['id'];

            $uid = uniqid('', 'true');

            $hash = $this->hashSSHA($password);

            $encryptedPwd = $hash["encrypted"];
            $salt = $hash["salt"];
            $data = array("unique_code" => $uid, "password" => $encryptedPwd, "salt" => $salt);
            $builder->where('id', $id);
            if ($builder->update($data) == true) {

                $result['status'] = true;
            } else {
                $result['status'] = false;
            }
        } else {
            $result['status'] = false;
        }
        return $result;
    }







    public function hashSSHA($password)
    {
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    public function checkhash($salt, $password)
    {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }
}
