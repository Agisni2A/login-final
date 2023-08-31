<?php

namespace App\Controllers;

use App\Models\UserModel;

class CLogin extends BaseController
{
    public function index()
    {
        // Load the session library
        $session = session();

        // Check if the username is already set in the session
        if ($session->has('username')) {
            return redirect()->to(base_url('/dashboard/master/maset'));
        } else {
            return view('login');
        }
    }


    public function process()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userData = $userModel->getUser($username);

        $sql = $userModel->getLastQuery();

        // echo "SQL Query: $sql <br><br>";
        // print_r(($userData));
        // die();

        if ($userData) {
            $pass = $userData['password'];
            $authPass = password_verify($password, $pass);

            if ($authPass) {
                // Password match, set session and redirect to dashboard
                $ses_data = [
                    'id' => $userData['id'],
                    'username' => $userData['username'],
                    'isLoggedIn' => TRUE
                ];
                // var_dump($userData['password']); // Cetak hash password dari basis data
                // var_dump($password); // Cetak password yang dimasukkan oleh pengguna
                // die();

                session()->set($ses_data);
                return redirect()->to(base_url('/dashboard/master/maset'));
            } else {
                // Incorrect password, redirect back to login
                return redirect()->to(base_url('login'))->withInput()->with('error', 'Password salah.');
            }
        } else {
            // User not found, redirect back to login
            return redirect()->to(base_url('login'))->withInput()->with('error', 'Username tidak ditemukan.');
        }
    }


    // public function process()
    // {
    //     $userModel = new UserModel();

    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');

    //     $cek = $userModel->getUser($username);

    //     $sql = $userModel->getLastQuery();

    //     // print_r(count($cek));
    //     // echo "SQL Query: $sql <br>";
    //     // die();

    //     if ($cek && $cek['username'] === $username && $cek['password'] === $password) {
    //         session()->set('username', $cek['username']);
    //         session()->set('id', $cek['id']);
    //         return redirect()->to(base_url('dashboard'));
    //     } else {
    //         return redirect()->back()->withInput()->with('error', 'Username atau Password anda salah.');
    //     }
    // }

    // public function process()
    // {
    //     $userModel = new \App\Models\UserModel();

    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');

    //     $cek = $userModel->get_data($username);

    //     // Get the last executed query and print the count of rows
    //     $lastQuery = $userModel->db->getLastQuery();
    //     $rowCount = count($cek);
    //     echo "Last Query: " . $lastQuery . "<br>";
    //     echo "Row Count: " . $rowCount;

    //     if ($cek && $cek['username'] === $username && $cek['password'] === $password) {
    //         session()->set('username', $cek['username']);
    //         session()->set('id', $cek['id']);
    //         return redirect()->to(base_url('dashboard'));
    //     } else {
    //         return redirect()->back()->withInput()->with('errors', 'Username / Password salah');
    //     }
    // }

    public function logout()
    {
        $session = session();
        $session->remove('username');
        $session->remove('id');
        return redirect()->to('/');
    }
}
