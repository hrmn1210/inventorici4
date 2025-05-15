<?php

namespace App\Controllers;

use App\Models\M_Pengembalian;

class Pengembalian extends BaseController
{

    public function pengembalian()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/pengembalian');
        echo view('Backend/Template/footer');
    }
}
