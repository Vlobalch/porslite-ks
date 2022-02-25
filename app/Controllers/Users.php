<?php

namespace App\Controllers;

class Users extends BaseController
{

    public function validauser()
    {
        $data = [];
        return view('dashboard', $data);
    }
}
