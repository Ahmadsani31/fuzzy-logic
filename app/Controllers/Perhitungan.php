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

        $sql = $this->mPerhitungan->find($PerhitunganID);

        $this->data['Perhitungan'] = $sql;
        $this->data['Daerah'] = $sql['Daerah'];
        $this->data['PhTanah'] = db_connect()->query('SELECT Nama FROM phtanah WHERE "' . $sql['VarF'] . '" BETWEEN NilaiMin AND NilaiMax')->getRow();

        $this->data['TanahSubur'] = $sql['JenisTanah'];
        $sqHasil =  $this->mHasil->where(['PerhitunganID' => $PerhitunganID])->first();
        $this->data['Hasil'] =  $sqHasil;
        $this->data['KeTanah'] = db_connect()->query('SELECT Nama FROM kesuburantanah WHERE "' . json_decode($sqHasil['Hitung3'])->Z1 . '" BETWEEN NilaiMin AND NilaiMax')->getRow();
        return view('v_detail', $this->data);
    }
}
