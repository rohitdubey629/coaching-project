<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/home', 'home::index');
$routes->get('/admin', 'home::admin');
$routes->get('/about', 'home::about');
$routes->get('/about2', 'home::about2');
$routes->get('/courses', 'home::courses');
$routes->get('/course_details', 'home::course_details');
$routes->get('/course_details/(:any)', 'home::course_details/$1');
$routes->post('/totalCall', 'home::totalCall');

$routes->get('/teachers', 'home::teachers');
$routes->get('/faqs', 'home::faqs');
$routes->get('/event', 'home::event');

$routes->get('/gallery_grid', 'home::gallery_grid');
$routes->get('/gallery_masonary', 'home::gallery_masonary');
$routes->get('/gallery_filter', 'home::gallery_filter');

$routes->get('/contact', 'home::contact');
$routes->get('/admission', 'home::admission');
$routes->post('/add_contact', 'home::add_contact');
$routes->post('/add_home_enquiry', 'home::add_home_enquiry');
$routes->post('/faqs_enquiry', 'home::faqs_enquiry');
$routes->post('/addAdmission', 'home::addAdmission');


$routes->get('/login', 'login::index');
$routes->post('/checkLogin', 'login::checkLogin');
$routes->post('/changePassword', 'login::changePassword');
$routes->get('/fPassword', 'login::fPassword');
$routes->get('/logout', 'login::logout');


$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/admin_home', 'admin_home::index');
$routes->get('/home', 'admin_home::home');
$routes->post('/addHomeSlider', 'admin_home::addHomeSlider');
$routes->post('/updateHomeslider', 'admin_home::updateHomeslider');

$routes->get('/admin_quickly', 'admin_quickly::index');
$routes->get('/admin_faqs', 'admin_faqs::index');
$routes->get('/admin_contact', 'admin_contact::index');
$routes->get('/admission_quickly', 'admission_quickly::index');

$routes->get('/admin/gallery_masonary', 'gallery_masonary::index');
$routes->post('/addGalleryMasonary', 'gallery_masonary::addGalleryMasonary');
$routes->post('/updateGalleryMasonary', 'gallery_masonary::updateGalleryMasonary');

$routes->get('/admin/gallery_grid', 'gallery_grid::index');
$routes->post('/addGalleryGrid', 'gallery_grid::addGalleryGrid');
$routes->post('/updateGalleryGrid', 'gallery_grid::updateGalleryGrid');

$routes->get('/admin/notice', 'notice::index');
$routes->post('/addNotice', 'notice::addNotice');
$routes->post('/updateNotice', 'notice::updateNotice');


$routes->get('/admin/testimonial', 'testimonial::index');
$routes->post('/addTestimonial', 'testimonial::addTestimonial');
$routes->post('/updateTestimonial', 'testimonial::updateTestimonial');

$routes->get('/admin/courses', 'courses::index');
$routes->post('/addCourses', 'courses::addCourses');
$routes->post('/updateCourses', 'courses::updateCourses');

$routes->get('/admin/event', 'event::index');
$routes->post('/addEvent', 'event::addEvent');
$routes->post('/updateEvent', 'event::updateEvent');

$routes->get('/admin/about', 'about::index');
$routes->post('/addAbout', 'about::addAbout');
$routes->post('/updateAbout', 'about::updateAbout');

$routes->get('/admin/teachers', 'teachers::index');
$routes->post('/addTeachers', 'teachers::addTeachers');
$routes->post('/updateTeachers', 'teachers::updateTeachers');

$routes->post('/filterData', 'admin_faqs::filterData');
$routes->get('/dataDownload', 'admin_faqs::dataDownload');


$routes->post('/quickly/filterData', 'admin_quickly::filterData');
$routes->get('/quickly/dataDownload', 'admin_quickly::dataDownload');

$routes->post('/admin_contact/filterData', 'admin_contact::filterData');
$routes->get('/admin_contact/dataDownload', 'admin_contact::dataDownload');

$routes->post('/admission/filterData', 'admission_quickly::filterData');
$routes->get('/admission/dataDownload', 'admission_quickly::dataDownload');



$routes->get('/links', 'links::index');
$routes->post('/updateLinks', 'links::updateLinks');
$routes->post('/addLinks', 'links::addLinks');
