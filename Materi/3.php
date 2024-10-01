<?php

// Pengulangan

$data = ["satria","asep","siti"];

// foreach($data as $data){
//     echo $data ."<br>";
// };


$list_siswa = [     
    ["nama" => "sule","kelas" => 11,"hobi" => "makan"],
    ["nama" => "lesul","kelas" => 11,"hobi" => "voli"],
    ["nama" => "le","kelas" => 11,"hobi" => "main"],
];

foreach($list_siswa as $siswa){
    echo $siswa["nama"] ."<br>";
    echo $siswa["kelas"] ."<br>";
    echo $siswa["hobi"] ."<br>";
    echo "<hr>";
}







?>