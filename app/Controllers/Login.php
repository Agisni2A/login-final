<?php

namespace App\Controllers;


class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $userModel = new \App\Models\UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $userModel->get_data($email, $password);

        if (($cek['email'] == $email) && ($cek['password'] == $password)) {
            session()->set('email', $cek['email']);
            session()->set('username', $cek['username']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('dashboard'));
        } else {
            return redirect()->to(base_url('login'))->with('errors', 'Username / Password salah');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('email');
        $session->remove('username');
        $session->remove('id');
        return redirect()->to('/');
    }
}
