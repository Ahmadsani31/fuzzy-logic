<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perhitungan extends BaseController
{
    public function index()
    {
        $this->data['Perhitungan'] =  $this->mPerhitungan->findAll();
        return view('v_perhitungan', $this->data);
    }

    public function detail($PerhitunganID)
    {

        $this->data['Perhitungan'] =  $this->mPerhitungan->find($PerhitunganID);

        $this->data['Hasil'] =  $this->mHasil->where(['PerhitunganID' => $PerhitunganID])->first();
        return view('v_detail', $this->data);
    }
}
