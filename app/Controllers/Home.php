<?php

namespace App\Controllers;

use App\Models;
use App\Models\Data_model;

class Home extends BaseController
{


    public function index()
    {
        return view('maacc/home');
    }
    public function add_home_enquiry()
    {
        $contactModel = new Data_model();
        $table = "home_enquiry";
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'date' => date('Y-m-d'),
        ];



        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }
    public function about()
    {
        return view('maacc/about');
    }

    public function courses()
    {
        return view('maacc/courses');
    }
    public function teachers()
    {
        return view('maacc/teachers');
    }
    public function faqs()
    {
        return view('maacc/faqs');
    }
    public function faqs_enquiry()
    {
        $contactModel = new Data_model();
        $table = "faqs_enquiry";
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
            'date' => date('Y-m-d'),
        ];


        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }
    public function event()
    {
        return view('maacc/event');
    }
    public function gallery_grid()
    {
        return view('maacc/gallery_grid');
    }
    public function gallery_masonary()
    {
        return view('maacc/gallery_masonary');
    }
    public function gallery_filter()
    {
        return view('maacc/gallery_filter');
    }

    public function contact()
    {

        return view('maacc/contact');
    }




    public function add_contact()
    {
        $contactModel = new Data_model();
        $table = "contact";
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
            'date' => date('Y-m-d'),
        ];


        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }




    public function admin()
    {
        return view('Admin/index');
    }
}
