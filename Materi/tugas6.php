<?php

class kucing {
    public $nama,$kaki,$warna_mata,$warna_pupil;
    // protected $jumlah_bulu;
    // private $jenis;

    function __construct($nama,$kaki,$warna_mata,$warna_pupil){
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->warna_mata = $warna_mata;
        $this->warna_pupil = $warna_pupil;
    }

    function dipanggil(){
        return "Dia Cueek";
    }   


}

$kucing = new kucing("Nama : Kattie","Jumlah Kaki : 4","Warna Mata : Putih","Warna Pupil : Hitam");

echo $kucing->nama . "<br>";
echo $kucing->kaki . "<br>";
echo $kucing->warna_mata . "<br>";
echo $kucing->warna_pupil . "<br>";
echo "Kalau Dipanggil ". $kucing->dipanggil();


?>