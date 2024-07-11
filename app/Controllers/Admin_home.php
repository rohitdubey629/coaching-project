<?php

namespace App\Controllers;

use App\Models;
use App\Models\Data_model;

class Admin_home extends BaseController
{


    public function index()
    {
        $contactModel = new Data_model();
        $table = "home_scrollbar";
        $data['homeSlider'] = $contactModel->get_data($table);

        return view('Admin/home_view', $data);
    }



    public function addHomeSlider()
    {

        $contactModel = new Data_model();
        $table = "home_scrollbar";
        $id = $this->request->getPost('heading_id');

        $getData = $contactModel->get_single_data($table, $id);
        $data = [
            'heading' => $this->request->getPost('heading'),
            'content' => $this->request->getPost('content'),
            'img1' =>  $_FILES["img1"]["name"],
            'date' => date('Y-m-d'),
        ];
        if (!empty($getData)) {
            $updateSlider = $contactModel->update_data($table, $id, $data);
            $response = [
                'status' => $updateSlider ? true : false,
                'msg' => $updateSlider ? 'Slider data update successfully' : 'Failed to update slider',
            ];
        } else {
            $addSlider = $contactModel->add_data($table, $data);
            $response = [
                'status' => $addSlider ? true : false,
                'msg' => $addSlider ? 'Slider add data successfully' : 'Failed to add slider',
            ];
        }

        if ($response) {
            // Return JSON response
            return $this->response->setJSON($response);
        } else {
            // Handle non-AJAX requests (if needed)
            return redirect()->to(site_url());
        }
    }
    public function updateHomeslider()
    {

        $contactModel = new Data_model();
        $table = "home_scrollbar";
        $id = $this->request->getPost('id');

        $getData = $contactModel->get_single_data($table, $id);

        // Prepare response data
        $response = [
            'status' => $getData ? true : false,
            'msg' => $getData ? 'Slider get data successfully' : 'Failed to get slider',
            'data' => $getData
        ];
        if ($getData) {
            // Return JSON response
            return $this->response->setJSON($response);
        } else {
            // Handle non-AJAX requests (if needed)
            return redirect()->to(base_url('admin_home'));
        }
    }
}
