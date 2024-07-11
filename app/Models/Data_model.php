<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
    public function add_data($table, $data)
    {

        $db = \config\Database::connect();
        $builder = $db->table($table);
        $query = $builder->insert($data);
        return $query;
    }

    public function get_single_data($table, $id)
    {

        $db = \config\Database::connect();
        $builder = $db->table($table);
        $query = $builder->getWhere(['id' => $id]);

        // Return the single result as an associative array
        return $query->getRowArray();
    }

    public function get_data($table)
    {

        $db = \config\Database::connect();
        $builder = $db->table($table);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function update_data($table, $id, $data)
    {

        $db = \config\Database::connect();
        $builder = $db->table($table);
        $builder->set($data);
        $builder->where('id', $id);
        $builder->update();
        return $this->db->affectedRows();
    }
}
