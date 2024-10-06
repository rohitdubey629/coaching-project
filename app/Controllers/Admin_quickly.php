<?php

namespace App\Controllers;

use App\Models\Data_model;

class Admin_quickly extends BaseController
{

    public function index()
    {
        $session = \Config\Services::session();
        $quickly = new Data_model();
        $table = "home_enquiry";
        if ($session->get('is_login')) {

            $data['quickly_enquiry'] = $quickly->get_data($table);
            return view('Admin/quickly_view', $data);
        } else {
            return redirect()->to(base_url());
        }
    }



    public function filterData()
    {

        $quickyEnquiry = new Data_model();
        $table = "home_enquiry";
        $custom_data = array();
        $number = 0;


        if (!empty($this->request->getpost('date_from'))) {

            $date_from = $this->request->getpost('date_from');
            $custom_data['DATE(date)>='] = $date_from;
        }
        if (!empty($this->request->getpost('date_to'))) {

            $date_to = $this->request->getpost('date_to');
            $custom_data['DATE(date)<='] = $date_to;
        }
        $html = "";
        $filter_data = $quickyEnquiry->getfaqsRecord($table, $custom_data);


        if (!empty($filter_data)) {
            $styleClass = array("table-warning", "table-success");
            $i = 0;
            foreach ($filter_data as $filter) {
                if ($i % 2 == 0) {
                    $style = $styleClass['1'];
                } else {
                    $style = $styleClass['0'];
                }
                $html .= "<tr class=" . $style . ">
                            <td>" . $filter['id'] . "</td>
                            <td>" . $filter['name'] . "</td>
                            <td>" . $filter['email'] . "</td>
                            <td>" . $filter['message'] . "</td>
                            <td>" . date("d/m/Y H:i:s", strtotime($filter['date'])) . "</td>
                        </tr>";
                $i++;
            }
        } else {
            $html .= "<tr><td colspan='10' align='center'>No Record Found</td></tr>";
        }
        return $html;
    }

    public function dataDownload()
    {
        $quickyEnquiry = new Data_model();
        $get_date_from = $this->request->getGet('date_from');
        $get_date_to = $this->request->getGet('date_to');
        // Fetch records from database 
        $table = "home_enquiry";
        $custom_data = array();
        $search_data = array();
        if (!empty($get_date_from)) {
            $date_from = $get_date_from;
            $custom_data['DATE(date)>='] = $date_from;
        }
        if (!empty($get_date_to)) {
            $date_to = $get_date_to;
            $custom_data['DATE(date)<='] = $date_to;
        }
        $filter_data = $quickyEnquiry->getfaqsRecord($table, $custom_data);
        $i = 1;
        foreach ($filter_data as $filter) {
            $arr = array();
            $arr['id'] = $i;
            $arr['name'] = $filter['name'];
            $arr['email'] = $filter['email'];
            $arr['message'] = $filter['message'];
            $arr['date'] = $filter['date'];
            $download_array[] = $arr;
            $i++;
        }

        $timestamp = time();
        $filename = 'faqs' . $timestamp . '.xls';
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        $isPrintHeader = false;
        foreach ($download_array as $row) {
            if (!$isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
        exit();
    }
}
