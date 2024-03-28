<?php
namespace App\Controllers ;

use App\Models\Model_Latihan1;

class latihan1 extends BaseController
{
    public function index()
    {
        echo " Selamat Datang Maria. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }
    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1(); // Membuat instance dari model
        $hasil = $model->jumlah($n1, $n2); // Memanggil method jumlah dari model
        echo "Hasil penjumlahan dari ". $n1 ." + ". $n2 ." = ".$hasil;

    }
}