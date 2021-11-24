<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function ind()
    {
        return view('vitaj');
    }

    public function nova(){
        return view('novaS');
    }
}
