<?php

namespace App\Controllers;

use App\Models;
use App\Models\Data_model;

use CodeIgniter\Images\ImageException;

class About extends BaseController
{


    public function index()
    {
        $session = \Config\Services::session();

        $contactModel = new Data_model();
        $table = "about";
        if ($session->get('is_login')) {

            $data['about'] = $contactModel->get_data($table);

            return view('Admin/about_view', $data);
        } else {
            return redirect()->to(base_url());
        }
    }


    public function addAbout()
    {
        $galleryModal = model('App\Models\Data_Model');
        $session = \Config\Services::session();
        $table = "about";

        if ($session->get('is_login')) {
            $chk_img_file = true;
            if (!empty($this->request->getpost('heading_id'))) {
                //Update the Data

                $id = $this->request->getpost('heading_id');
                //fetch the data
                $getSliderData = $galleryModal->get_single_data($table, $id);

                for ($i = 1; $i <= 3; $i++) {
                    $img_name = "img" . $i;
                    $imagefile = $this->request->getFile($img_name);

                    $imageSize = $imagefile->getSizeByUnit('kb');
                    if ($imageSize <= 1024) {

                        if ($imagefile->isValid()) {

                            $ext = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG');
                            if (in_array($imagefile->getClientExtension(), $ext)) {

                                //get the previous image 
                                $imagename = $getSliderData[$img_name];

                                if (!empty($imagename)) {
                                    //remove the previos image
                                    if (file_exists("uploads/about/" . $imagename)) {
                                        unlink("uploads/about/" . $imagename);
                                    }
                                }
                                $newName = $imagefile->getRandomName();
                                $imagefile->move('uploads/about', $newName);

                                // try {
                                //     $image = \Config\Services::image()->withFile("uploads/home_slider/" . $newName)->resize(1600, 889, true)->save("uploads/home_slider/" . $newName);
                                // } catch (CodeIgniter\Images\ImageException $e) {
                                //     $responce['status'] = False;
                                //     $responce['msg'] = '';
                                // }
                                $record[$img_name] = $newName;
                            } else {
                                $chk_img_file = false;
                                $responce['status'] = false;
                                $responce['msg'] = " Please Insert The Correct Image Format...";
                            }
                        }
                    } else {
                        $chk_img_file = false;
                        $responce['status'] = false;
                        $responce['msg'] = " Image Size Should be less than 1MB";
                    }
                }
                if ($chk_img_file) {
                    $record['heading'] =  $this->request->getpost('heading');
                    $record['paragraph'] =  $this->request->getpost('paragraph');
                    $record['paragraph2'] =  $this->request->getpost('paragraph2');
                    $record['heading2'] =  $this->request->getpost('heading2');
                    $record['option'] =  $this->request->getpost('option');
                    $record['url_heading'] =  $this->request->getpost('url-heading');
                    $record['url'] =  $this->request->getpost('url');
                    $record['event_url'] =  $this->request->getpost('event_url');

                    $record['date'] = date('Y-m-d');
                    $galleryModal->update_data($table, $id, $record);
                    $responce['status'] = true;
                    $responce['msg'] = "Record Updated! Please Wait...";
                }
            } else {
                // Insert The Data
                for ($i = 1; $i <= 3; $i++) {
                    $img_name = "img" . $i;
                    $imagefile = $this->request->getFile($img_name);
                    if ($imagefile->isValid()) {
                        $ext = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG');
                        if (in_array($imagefile->getClientExtension(), $ext)) {
                            $newName = $imagefile->getRandomName();
                            $imagefile->move('uploads/about', $newName);
                            // try {
                            //     $image = \Config\Services::image()->withFile("uploads/home_slider/" . $newName)->resize(1600, 889, true)->save("uploads/home_slider/" . $newName);
                            // } catch (CodeIgniter\Images\ImageException $e) {
                            //     $responce['status'] = False;
                            //     $responce['msg'] = '';
                            // }
                            $record[$img_name] = $newName;
                        } else {
                            $chk_img_file = false;
                            $responce['status'] = false;
                            $responce['msg'] = " Please Insert The Correct Image Format...";
                        }
                    }
                }
                if ($chk_img_file) {

                    $record['heading'] =  $this->request->getpost('heading');
                    $record['paragraph'] =  $this->request->getpost('paragraph');
                    $record['paragraph2'] =  $this->request->getpost('paragraph2');
                    $record['heading2'] =  $this->request->getpost('heading2');
                    $record['option'] =  $this->request->getpost('option');
                    $record['url_heading'] =  $this->request->getpost('url-heading');
                    $record['url'] =  $this->request->getpost('url');
                    $record['event_url'] =  $this->request->getpost('event_url');

                    $record['date'] = date('Y-m-d');
                    $galleryModal->add_data($table, $record);
                    $responce['status'] = true;
                    $responce['msg'] = "Record Inserted! Please Wait...";
                }
            }
            echo json_encode($responce);
        } else {
            return redirect()->to(base_url());
        }
    }





    public function updateAbout()
    {

        $contactModel = new Data_model();
        $table = "about";
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
