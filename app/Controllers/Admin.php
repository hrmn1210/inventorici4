<?php

namespace App\Controllers;

use App\Models\M_Admin;

class Admin extends BaseController
{
    public function login(): string
    {
        return view('Backend/Login/login');
    }

    public function dashboard()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/Login/dashboard_admin');
        echo view('Backend/Template/footer');
    }
}
