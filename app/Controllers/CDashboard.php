<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ItemModel;

class CDashboard extends BaseController
{
    public function index()
    {
        if (session()->has('username')) {
            return view('/dashboard/dashboard');
        } else {
            return view('login');
        }
    }
    public function maset()
    {
        //
        $itemModel = new ItemModel();
        $data['items'] = $itemModel->findAll();
        if (session()->has('username')) {
            return view('/dashboard/master/maset', $data);
        } else {
            return view('login');
        }
    }


    public function muser()
    {
        if (session()->has('username')) {
            return view('/dashboard/master/muser');
        } else {
            return view('login');
        }
    }

    public function pinjam()
    {
        if (session()->has('username')) {
            return view('/dashboard/mmenu/pinjam');
        } else {
            return view('login');
        }
    }
    public function kembali()
    {
        if (session()->has('username')) {
            return view('/dashboard/mmenu/kembali');
        } else {
            return view('login');
        }
    }

    public function addItem()
    {
        if (session()->has('username')) {
            return view('/dashboard/master/addItem');
        } else {
            return view('login');
        }
    }
}
