<?php

namespace App\Controllers;

use App\Models\ItemModel;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        return view('welcome_message');
    }
    public function dashboard()
    {

        $itemModel = new ItemModel();
        $data['items'] = $itemModel->findAll();
        if (session()->has('username')) {
            return view('/dashboard/master/maset', $data);
        } else {
            return view('login');
        }
    }
}
