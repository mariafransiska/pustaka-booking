<?php
namespace App\Controllers;

use App\Models\Model_latihan1;

class latihan1 extends BaseController
{
    public function index()
    {
        echo " Selamat Datang.. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }
    public function penjumlahan($n1, $n2){
       // $model = new model_latihan1();
       // $hasil = model->jumlah($n1, $n2);
      // $echo "hasil penjumlahan dari ". $n1 ."+". $n2."=". $hasil;
    $model = new Model_latihan1(); 
    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $model-> jumlah($n1,$n2);
    return view('view-latihan',$data);
    }
}