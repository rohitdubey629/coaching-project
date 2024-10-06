<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('public/assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('public/assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</head>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard/') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            Maacc
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Webside Enquiry
    </div>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Enquirys</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo base_url('admission_quickly/') ?>">Admission Enquiry</a>
                <a class="collapse-item" href="<?php echo base_url('admin_quickly/') ?>">Quickly Enquiry</a>
                <a class="collapse-item" href="<?php echo base_url('admin_faqs/') ?>">Faqs Enquiry</a>
                <a class="collapse-item" href="<?php echo base_url('admin_contact/') ?>">Contact Enquiry</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        maacc
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>maacc pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo base_url('links/') ?>">Add Link</a>
                <a class="collapse-item" href="<?php echo base_url('admin_home/') ?>">Add Home Slider</a>
                <a class="collapse-item" href="<?php echo base_url('admin/about/') ?>">About Us</a>
                <a class="collapse-item" href="<?php echo base_url('admin/courses/') ?>">Add Courses</a>
                <a class="collapse-item" href="<?php echo base_url('admin/teachers/') ?>">Add Teachers</a>
                <h6 class="collapse-header">Pages</h6>
                <a class="collapse-item" href="#">Faqs</a>
                <a class="collapse-item" href="<?php echo base_url('admin/event/') ?>">News/Event</a>
                <h6 class="collapse-header">Our Gallery</h6>
                <a class="collapse-item" href="<?php echo base_url('admin/gallery_grid/') ?>">Gallery Grid</a>
                <a class="collapse-item" href="<?php echo base_url('admin/gallery_masonary') ?>">Gallery Masonary</a>
                <a class="collapse-item" href="<?php echo base_url('admin/testimonial/') ?>">Add Testimonial</a>
                <!-- <a class="collapse-item" href="404.html">Gallery Tiles Filter</a> -->
            </div>
        </div>
    </li>



    <!-- Divider -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?php echo base_url('public/assets/') ?>img/undraw_rocket.svg" alt="...">
        <!-- <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p> -->

    </div>

</ul>