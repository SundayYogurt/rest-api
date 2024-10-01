<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'UserController::index');
$routes->get('/login', 'Auth::login'); // สำหรับแสดงฟอร์ม login
$routes->post('/auth/login', 'Auth::login'); // สำหรับจัดการข้อมูลเมื่อกดปุ่ม login
$routes->get('/logout', 'Auth::logout'); // สำหรับ logouts
$routes->get('/logout', 'Auth::logout');
$routes->get('/home', 'Home::index');

