<?php

class siswa {
    public $nama;
    public $kelas;
    public $umur;
    public $jabatan;

    function __construct($nama,$kelas,$umur,$jabatan){
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->umur = $umur;
        $this->jabatan = $jabatan;
    }


    function membaca(){
       return "Siswa sedang membaca";
    }

}

$siswa = new siswa("Ahmad",12,"RPL","Murid");
// $siswa->nama = "Dumbledore";
// $siswa->kelas = 11;
// $siswa->umur = "2657 tahun";
// $siswa->jabatan = "Ketua Kelas";
// $siswa->membaca();


echo  $siswa->nama . "<br>";
echo  $siswa->kelas . "<br>";
echo  $siswa->umur . "<br>";
echo  $siswa->jabatan . "<br>";
echo  $siswa->membaca();
?>