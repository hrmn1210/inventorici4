<?php

namespace App\Controllers;

use App\Models\M_Peminjaman;

class Peminjaman extends BaseController
{

    public function peminjaman()
    {

        echo view('Backend/Template/header');
        echo view('Backend/Template/sidebar');
        echo view('Backend/peminjaman');
        echo view('Backend/Template/footer');
    }
}
