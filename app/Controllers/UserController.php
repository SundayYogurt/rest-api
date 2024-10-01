<?php namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        // เชื่อมต่อฐานข้อมูล
        $db = \Config\Database::connect();

        // ดึงข้อมูลจากตาราง users
        $query = $db->query('SELECT * FROM users');
        $users = $query->getResult();

        // แสดงข้อมูล
        foreach ($users as $user) {
            echo 'ID: ' . $user->id . '<br>';
            echo 'Username: ' . $user->username . '<br>';
            echo '<hr>';
        }
    }
}
