<?php
namespace App\Controllers;

use App\Models\BarangModel;

class Admin extends BaseController
{
    protected $mod;
    function __construct()
    {
    $this->mod = new BarangModel();
    }
    public function index()
    {
    $data['d'] = $this->mod->getData();
    return view('adm-barang',$data);
    }

    public function tambahData() //buat function dengan nama tambahData
    {
        $data = [
        'nama' => $this->request->getPost('input_nama'),
        'harga' => $this->request->getPost('input_harga'),
        'jumlah' => $this->request->getPost('input_jumlah')
        ];
        $this->mod->insertData($data); //panggil function insertData di model dan kirim datanya
        return redirect()->to(base_url('public/Admin')); //kembali ke halaman index
    }
}