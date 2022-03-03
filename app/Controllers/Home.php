<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('login');
    }    
    

    public function dashboard()
    {
        $data = [];
        return view('dashboard', $data);
    }

}
