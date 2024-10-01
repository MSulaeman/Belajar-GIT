<?php
$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun", "nilai_uas" => 102],
        ["nama" => "fattah", "umur" => "19 tahun", "nilai_uas" => 74],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun", "nilai_uas" => 79],
          ["nama" => "marsina", "umur" => "20 tahun", "nilai_uas" => 73],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun","nilai_uas" => 82],
          ["nama" => "Fariz", "umur" => "20 tahun","nilai_uas" => 85],
      ]
    ]
  ];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1>Data Siswa</h1>
        <?php foreach ($jurusan as $jur): ?>
        <h2><?= ($jur["nama"]); ?></h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                    <th>Keterangan Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jur["siswa"] as $siswa): ?>
                <tr class="<?php if($siswa['nilai_uas'] >=75) echo "table-success"; else echo "table-danger"?>">
                    <td><?= ($siswa["nama"]); ?></td>
                    <td><?= ($siswa["umur"]); ?></td>
                    <td><?= ($siswa["nilai_uas"]); ?></td>
                    <td>
                    <?php
                    if ($siswa ['nilai_uas'] >=75){
                        echo "LULUS";
                    }else{
                        echo "TIDAK LULUS";
                    }
                    ?>
                    </td>


                    <td>
                    <?php
                    if ($siswa ['nilai_uas'] >=75 AND $siswa['nilai_uas']<=100){
                        echo "BAIK";
                    }else if($siswa['nilai_uas'] > 100){
                        echo "Kebangetan";
                    }else{
                        echo "BELAJAR LAGI";
                    }
                    ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
    </div>

    
</body>

</html>