<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/home', 'home::index');
$routes->get('/admin', 'home::admin');
$routes->get('/about', 'home::about');
$routes->get('/courses', 'home::courses');
$routes->get('/teachers', 'home::teachers');
$routes->get('/faqs', 'home::faqs');
$routes->get('/event', 'home::event');
$routes->get('/gallery_grid', 'home::gallery_grid');
$routes->get('/gallery_masonary', 'home::gallery_masonary');
$routes->get('/gallery_filter', 'home::gallery_filter');
$routes->get('/contact', 'home::contact');
$routes->post('/add_contact', 'home::add_contact');
$routes->post('/add_home_enquiry', 'home::add_home_enquiry');
$routes->post('/faqs_enquiry', 'home::faqs_enquiry');


$routes->get('/admin_home', 'admin_home::index');
$routes->get('/home', 'admin_home::home');
$routes->post('/addHomeSlider', 'admin_home::addHomeSlider');
$routes->post('/updateHomeslider', 'admin_home::updateHomeslider');
