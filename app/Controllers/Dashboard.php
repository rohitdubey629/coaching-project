<?php

namespace App\Controllers;

use App\Models;
use App\Models\Data_model;

use CodeIgniter\Images\ImageException;

class Dashboard extends BaseController
{
    public function index()
    {
        $quickly = new Data_model();
        $home_enquiry = $quickly->get_data('home_enquiry');
        $faqs_enquiry = $quickly->get_data('faqs_enquiry');
        $contact_enquiry = $quickly->get_data('contact');
        $admission_enquiry = $quickly->get_data('admission_form');
        $data['total_enquiry'] = count($home_enquiry) + count($faqs_enquiry) + count($contact_enquiry) + count($admission_enquiry);
        $data['total_visiter'] = $quickly->get_data('visiter_record');
        $data['call_record'] = $quickly->get_data('call_visiter');

        return view('Admin/dashboard_view', $data);
    }
}
