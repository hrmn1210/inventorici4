<?php

namespace App\Controllers;

use App\Models\M_elektronik;

class Data_elektronik extends BaseController
{

    public function elektronik()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/elektronik/data_elektronik');
        echo view('Backend/Template/footer');
    }
    public function tambah_elektronik()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/elektronik/tambah_elektronik');
        echo view('Backend/Template/footer');
    }
}
