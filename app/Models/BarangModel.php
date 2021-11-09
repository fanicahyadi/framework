<?php
namespace App\Models;

use CodeIgniter\Model;

    class BarangModel extends Model
    {
        protected $table = 'barang'; //nama tabel
        protected $primaryKey = 'id'; // kolom primary key
        protected $useAutoIncrement = true; //autoincrement primary key
        protected $allowedFields = ['nama', 'harga' , 'jumlah'];
        public function getData() //buat function bernama geData
    {
        $objectmodel = new BarangModel(); //buat object bernama objectmodel dengan class BarangModel
        $databarang = $objectmodel->findAll(); //gunakan perintah findall dan masukkan hasilnya ke variable databarang
        return $databarang; //kirim balik data yang didapat ke controller
    }

    public function insertData($d) //buat function bernama insertData
    {
        $objectmodel = new BarangModel(); //buat object bernama objectmodel dengan class BarangModel
        $objectmodel->insert($d); //gunakan perintah insert dan masukkan datanya
    }
}

?>
