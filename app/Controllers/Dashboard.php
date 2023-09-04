<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        //
        return view('v_home');
    }

    public function hasil()
    {
        //
        $this->data['Perhitungan'] =  $this->mPerhitungan->findAll();

        return view('v_hasil', $this->data);
    }
}
