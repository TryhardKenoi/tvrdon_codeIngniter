<?php

namespace App\Controllers;

class Spoustec extends BaseController
{
     public function ind()
    {
        return view('vitaj');
    }
    public function galery(){
        return view('galery');
    }

    public function progres(){
        return view('progres');
    }
    public function kontakt(){
        return view('kontakt');
    }

    public function zbytek(){
        return view('zbytek');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }


}

