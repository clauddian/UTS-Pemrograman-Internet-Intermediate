<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $data['title'] = "Sistem Informasi Sekolah Anak-Anak";
        echo view("welcome_message", $data);
    }
    }
