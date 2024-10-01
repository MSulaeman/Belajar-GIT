<?php


// Soal 1 >>>>>>
$mahasiswa = [
    ["nama" => "Ahmad","usia"=>"16","mata kuliah"=>"komputer"],
    ["nama" => "Harry","usia"=>"16","mata kuliah"=>"b_inggris"]
];

echo $mahasiswa [0]["nama"]."<br>";
echo $mahasiswa [0]["usia"]."<br>";
echo $mahasiswa [0]["mata kuliah"]."<br>";
echo "<br>";
echo $mahasiswa [1]["nama"]."<br>";
echo $mahasiswa [1]["usia"]."<br>";
echo $mahasiswa [1]["mata kuliah"]."<br>";


// Soal 2 >>>>>>

$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun"],
        ["nama" => "fattah", "umur" => "19 tahun"],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun"],
          ["nama" => "marsina", "umur" => "20 tahun"],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun"],
          ["nama" => "Fariz", "umur" => "20 tahun"],
      ]
    ]
];

echo "<br>";
echo "Data-Data Jurusan Beserta Siswanya"."<br>";
echo "<br>";
foreach($jurusan as $Siswa){
    echo "Nama Jurusan: ". $Siswa ["nama"]."<br>";
    foreach($Siswa["siswa"] as $siswa){
        echo "Nama Siswa : ".$siswa ["nama"] ."<br>";
    }
    echo "<hr>";
}
echo "<br>";
// Soal 3 >>>>>>>
echo "BUKU Terbitan Tahun 2000 sampai sekarang"."<br>";
echo "<br>";
$buku = [
    ['judul' => 'Harry Potter', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 2001],
    ['judul' => 'Cara membuat kue', 'penulis' => 'Julia', 'tahun_terbit' => 1999],
    ['judul' => 'Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun_terbit' => 1954],
    ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2023],
    ['judul' => 'Filosofi Untuk diri', 'penulis' => 'Asep', 'tahun_terbit' => 1993],
    ['judul' => 'Belajar PHP kurang dari 2 menit', 'penulis' => 'Safitri', 'tahun_terbit' => 2019],
    ['judul' => 'Ada apa dengan Gavi', 'penulis' => 'Hartati', 'tahun_terbit' => 2011],
  ];


  
    foreach($buku as $terbit){
        if($terbit['tahun_terbit'] > 2000){
        echo "Judul : ".$terbit ['judul']."<br>";
        echo "Tahun : ".$terbit ['tahun_terbit']."<br>";
        echo "<hr>";
    }
  }

?>