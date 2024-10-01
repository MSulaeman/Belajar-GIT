/SOAL 1/
<?php
$wisata = [
        ["nama" => "Ragunan Jakarta", "lokasi" => "Jakarta", "Hari" => "senin - rabu", "foto" => "https://www.nativeindonesia.com/foto/2021/09/burung-pelikan-timor.jpg"],
        ["nama" => "Gunung Merapi", "lokasi" => "Magelang", "Hari" => "senin - rabu", "foto" => "https://awsimages.detik.net.id/community/media/visual/2020/11/06/penampakan-merapi-dari-kaliadem-2_169.jpeg"],
        ["nama" => "Gunung Tangkuban Parahu", "lokasi" => "Bandung", "Hari" => "senin - rabu", "foto" => "https://asset.kompas.com/crops/ilcgxQBDmeUuoES_SK8mjjhAEvU=/0x0:1000x667/750x500/data/photo/2022/06/27/62b946699ed13.jpg"],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">TRIP TO INDONESIA</h1>

        <div class="d-flex gap-5 justify-content-center mt-5">
            <?php foreach ($wisata as $item): ?>
            <div class="card" style="width: 18rem">
                <img src="<?= htmlspecialchars($item['foto']); ?>" class="card-img-top"
                     alt="<?= htmlspecialchars($item['nama']); ?>" />
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($item['nama']); ?></h5>
                    <p class="card-text">
                        Lokasi: <?= htmlspecialchars($item['lokasi']); ?><br>
                        Hari Operasional: <?= htmlspecialchars($item['Hari']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>


/SOAL 2/
<?php
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
    <div class="container my-5">
        <h1>Data Siswa</h1>
        <?php foreach ($jurusan as $jur): ?>
        <h2><?= htmlspecialchars($jur["nama"]); ?></h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jur["siswa"] as $siswa): ?>
                <tr>
                    <td><?= htmlspecialchars($siswa["nama"]); ?></td>
                    <td><?= htmlspecialchars($siswa["umur"]); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
