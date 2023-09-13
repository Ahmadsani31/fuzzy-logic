<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fuzzyfication extends BaseController
{
    public function index()
    {
        $this->data['data'] = $this->mFuzzyfication->findAll();
        return view('v_fuzzyfication', $this->data);
    }

    public function tambah($id)
    {
        $FuzzyficationID = $id;
        $Nama = '';
        $Keterangan = '';
        if ($id != 0) {
            $sql = $this->mFuzzyfication->find($id);
            $Nama = $sql['Nama'];
            $Keterangan = $sql['Keterangan'];
        }

        $data = [
            'Nama' => $Nama,
            'Keterangan' => $Keterangan,
            'FuzzyficationID' => $FuzzyficationID,
        ];
        return view('v_fuzzyfication_simpan', $data);
    }
    function simpan()
    {
        // echo '<pre>';
        // print_r($this->request->getPost());
        // echo '</pre>';
        // exit();
        $FuzzyficationID = $this->request->getPost('FuzzyficationID');
        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Keterangan' => $this->request->getPost('Keterangan'),
        ];

        if ($FuzzyficationID == 0) {
            $param = $this->mFuzzyfication->insert($data);
        } else {
            $param = $this->mFuzzyfication->update($FuzzyficationID, $data);
        }
        if ($param) {
            return redirect()->to('admin/fuzzyfication');
        }
    }

    function delete($id)
    {
        $param = $this->mFuzzyfication->delete($id);
        return redirect()->to('admin/fuzzyfication');
    }
}
