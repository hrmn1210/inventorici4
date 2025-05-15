<?php

namespace App\Controllers;

use App\Models\M_properti;

class Data_properti extends BaseController
{

    public function properti()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/properti/data_properti');
        echo view('Backend/Template/footer');
    }
    public function tambah_properti()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/properti/tambah_properti');
        echo view('Backend/Template/footer');
    }
}
