<?php

namespace App\Controllers;

use App\Models\Login_Model;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
        $contactModel = new Login_Model();
        $data['login'] = $contactModel->getData('links');

        return view('Admin/login', $data);
    }

    public function checkLogin()
    {
        $userModel = new Login_Model();
        $formData = $this->request->getPost();

        $result = $userModel->checkLogin($formData['userName'], $formData['password']);

        if ($result['status']) {
            $session = \Config\Services::session();
            $session->start();

            $sess_array = [
                'id' => $result['id'],
                'email' => $result['email'],
                'name' => $result['name'],
            ];

            $session->set('loginData', $sess_array);
            $session->set('is_login', true);

            // Verify session data for debugging
            // echo "Session loginData: " . json_encode($session->get('loginData')) . "<br>";
            // echo "Session is_login: " . json_encode($session->get('is_login')) . "<br>";

            $response['status'] = true;
            $response['msg'] = "Login Successful Please Wait...";
        } else {
            $response['status'] = false;
            $response['msg'] = "Login Credentials are wrong";
        }

        echo json_encode($response);
    }



    public function fPassword()
    {
        return view('Admin/forgetPassword');
    }
    public function changePassword()
    {
        $userModel = new Login_Model();
        $formData = $this->request->getPost();

        $result = $userModel->changePassword($formData['userName'], $formData['password']);

        if ($result['status']) {

            $response['status'] = true;
            $response['msg'] = "Password Change Successful";
        } else {

            $response['status'] = false;
            $response['msg'] = "Something Went Wrong";
        }

        echo json_encode($response);
    }





    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
