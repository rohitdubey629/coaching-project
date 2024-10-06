<?php

namespace App\Controllers;

use App\Models\Data_model;

class Admission_quickly extends BaseController
{

    public function index()
    {
        $session = \Config\Services::session();
        $quickly = new Data_model();
        $table = "admission_form";
        if ($session->get('is_login')) {
            $data['admission_enquiry'] = $quickly->get_data($table);
            return view('Admin/admission_enquiry_view', $data);
        } else {
            return redirect()->to(base_url());
        }
    }



    public function filterData()
    {

        $quickyEnquiry = new Data_model();
        $table = "admission_form";
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
                            <td>" . $filter['full_name'] . "</td>
                            <td>" . $filter['father_name'] . "</td>
                            <td>" . $filter['mother_name'] . "</td>
                            <td>" . $filter['dob'] . "</td>
                            <td>" . $filter['gender'] . "</td>
                            <td>" . $filter['mobile_no'] . "</td>
                            <td>" . $filter['email'] . "</td>
                            <td>" . $filter['adhar_no'] . "</td>
                            <td>" . $filter['course_name'] . "</td>
                            <td>" . $filter['address'] . "</td>
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
        $table = "admission_form";
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
            $arr['full_name'] = $filter['full_name'];
            $arr['father_name'] = $filter['father_name'];
            $arr['mother_name'] = $filter['mother_name'];
            $arr['dob'] = $filter['dob'];
            $arr['gender'] = $filter['gender'];
            $arr['mobile_no'] = $filter['mobile_no'];
            $arr['email'] = $filter['email'];
            $arr['adhar_no'] = $filter['adhar_no'];
            $arr['course_name'] = $filter['date'];
            $arr['address'] = $filter['address'];
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
