<?php

namespace App\Controllers;

use App\Models\M_kendaraan;

class Data_kendaraan extends BaseController
{

    public function kendaraan()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/kendaraan/data_kendaraan');
        echo view('Backend/Template/footer');
    }
    public function tambah_kendaraan()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/aset/kendaraan/tambah_kendaraan');
    }
}
