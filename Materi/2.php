<?php

$list_buah = ["pepaya","mangga","pisang","jambu"]; //(Aray)

$siswa = [
    "nama"=>"sule",
    "kelas"=>"11"
];// Array asosiatif //

echo $siswa["nama"];
echo $siswa["kelas"];


$list_siswa = [     // Aray didalam aray //
    ["nama" => "sule","kelas" => 11,"hobi" => ["badminton","makan"]],
    ["nama" => "lesul","kelas" => 11,"hobi" => "voli"],
    ["nama" => [
        ["kelas" => 11,"hobi" => "voli"],
        ["kelas" => 11,"hobi" => "badminton"]
        ]
    ],
    
];

echo $list_siswa[0]["hobi"][0],"<br>";
echo $list_siswa[1]["nama"],"<br>";
echo $list_siswa[2]["nama"][0]["hobi"]





?>