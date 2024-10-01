<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // ถ้ารับ request แบบ POST
        if ($this->request->getMethod() === 'post') {
            $model = new UserModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // ตรวจสอบข้อมูลผู้ใช้
            $user = $model->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // ตั้งค่า session
                session()->set('loggedIn', true);
                session()->set('username', $user['username']);
                return redirect()->to('/home'); // เปลี่ยนไปหน้าหลังจาก login สำเร็จ
            } else {
                // ส่งกลับไปที่หน้า login พร้อมข้อผิดพลาด
                return redirect()->to('/login')->with('error', 'Invalid credentials.');
            }
        }

        // ถ้าเป็นการเข้าถึงแบบ GET ให้แสดงหน้า login
        return view('login'); // แสดงหน้า login
    }

    public function logout()
    {
        session()->destroy(); // ล้าง session
        return redirect()->to('/login');
    }
}
