<?php

namespace App\Controllers;

use App\Models;
use App\Models\Data_model;

class Home extends BaseController
{

    public function index()
    {
        $quickly = new Data_model();
        $visiter_record = $quickly->get_data('visiter_record');
        if (!empty($visiter_record)) {
            $visiter_count = $visiter_record[0]['total_visiter'];
            $record['total_visiter'] =  $visiter_count + 1;
            $quickly->update_data('visiter_record', $visiter_record[0]['id'], $record);
        }

        $data['links'] = $quickly->get_data('links');
        $data['home_scrollbar'] = $quickly->get_data('home_scrollbar');
        $data['courses'] = $quickly->get_data('courses');
        $data['teachers'] = $quickly->get_data('teachers');
        $data['event'] = $quickly->get_data("event");
        $data['gallery_grid'] = $quickly->get_data("gallery_grid");
        $data['gallery_masonary'] = $quickly->get_data("gallery_masonary");
        $data['testimonial'] = $quickly->get_data("testimonial");
        return view('maacc/home', $data);
    }

    public function totalCall()
    {
        $quickly = new Data_model();
        $call_record = $quickly->get_data('call_visiter');
        if (!empty($call_record)) {
            $call_count = $call_record[0]['call_visiter'];
            $record['call_visiter'] =  $call_count + 1;
            $quickly->update_data('call_visiter', $call_record[0]['id'], $record);
        }
    }
    public function add_home_enquiry()
    {
        $contactModel = new Data_model();
        $table = "home_enquiry";
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'date' => date("Y-m-d H:i:s"),
        ];



        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }
    public function about()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        $data['teachers'] = $quickly->get_data('teachers');
        $data['testimonial'] = $quickly->get_data("testimonial");
        $data['gallery_grid'] = $quickly->get_data("gallery_grid");
        $data['about'] = $quickly->get_data('about');

        return view('maacc/about', $data);
    }
    public function about2()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        $data['teachers'] = $quickly->get_data('teachers');
        $data['testimonial'] = $quickly->get_data("testimonial");
        $data['gallery_grid'] = $quickly->get_data("gallery_grid");
        $data['event'] = $quickly->get_data("event");
        $data['about'] = $quickly->get_data('about');

        return view('maacc/about2', $data);
    }
    public function courses()
    {
        $quickly = new Data_model();
        $table = "courses";
        $data['courses'] = $quickly->get_data($table);
        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/courses', $data);
    }

    public function course_details($id)
    {

        $quickly = new Data_model();

        $data['course_details'] = $quickly->getsingleDataId("courses", $id);
        $data['links'] = $quickly->get_data("links");
        $data['courses'] = $quickly->get_data("courses");
        return view('maacc/course_details', $data);
    }


    public function admission()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/admission', $data);
    }
    public function addAdmission()
    {
        $galleryModal = model('App\Models\Data_Model');
        $session = \Config\Services::session();
        $table = "admission_form";

        // Insert The Data

        $imagefile = $this->request->getFile('img');

        if ($imagefile) {

            if ($imagefile->isValid()) {

                $ext = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG');
                if (in_array($imagefile->getClientExtension(), $ext)) {

                    $newName = $imagefile->getRandomName();

                    $imagefile->move('uploads/admission_form', $newName);
                    // try {
                    //     $image = \Config\Services::image()->withFile("uploads/home_slider/" . $newName)->resize(1600, 889, true)->save("uploads/home_slider/" . $newName);
                    // } catch (CodeIgniter\Images\ImageException $e) {
                    //     $responce['status'] = False;
                    //     $responce['msg'] = '';
                    // }
                    $record['img'] = $newName;
                    $chk_img_file = true;
                } else {
                    $chk_img_file = false;
                    $responce['status'] = false;
                    $responce['msg'] = " Please Insert The Correct Image Format...";
                }
            }
        }

        // $record['img'] = "dsdsdsd";
        $record['full_name'] =  $this->request->getpost('full_name');
        $record['father_name'] =  $this->request->getpost('father_name');
        $record['mother_name'] =  $this->request->getpost('mother_name');
        $record['dob'] =  $this->request->getpost('dob');
        $record['gender'] =  $this->request->getpost('gender');
        $record['mobile_no'] =  $this->request->getpost('mobile_no');
        $record['email'] =  $this->request->getpost('email');
        $record['adhar_no'] =  $this->request->getpost('adhar_no');
        $record['course_name'] =  $this->request->getpost('course_name');
        $record['address'] =  $this->request->getpost('address');
        $record['date'] = date('Y-m-d H:i:s');

        $galleryModal->add_data($table, $record);
        $responce['status'] = true;
        $responce['msg'] = "Record Inserted! Please Wait...";


        echo json_encode($responce);
        // }else{
        //     return redirect()->to(base_url());
        // }
    }
    public function teachers()
    {
        $quickly = new Data_model();
        $table = "teachers";
        $data['teachers'] = $quickly->get_data($table);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        return view('maacc/teachers', $data);
    }
    public function faqs()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/faqs', $data);
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
            'date' => date("Y-m-d H:i:s"),
        ];


        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }
    public function event()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $data['event'] = $quickly->get_data("event");
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/event', $data);
    }
    public function gallery_grid()
    {
        $quickly = new Data_model();
        $table = "gallery_grid";
        $data['gallery_grid'] = $quickly->get_data($table);
        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/gallery_grid', $data);
    }
    public function gallery_masonary()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        $data['gallery_masonary'] = $quickly->get_data("gallery_masonary");
        return view('maacc/gallery_masonary', $data);
    }
    public function gallery_filter()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/gallery_filter', $data);
    }

    public function contact()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('maacc/contact', $data);
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
            'date' => date("Y-m-d H:i:s"),
        ];


        $addContact = $contactModel->add_data($table, $data);

        if ($addContact) {
        }
    }




    public function admin()
    {
        $quickly = new Data_model();

        $table1 = "links";
        $data['links'] = $quickly->get_data($table1);
        $table2 = "courses";
        $data['courses'] = $quickly->get_data($table2);
        return view('Admin/index', $data);
    }
}
