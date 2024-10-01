<?php

$jurusan =
  [
    "siswa" => [
      ["nama" => "marsina", "umur" => "18 tahun", "jabatan" => "ketua kelas"],
      ["nama" => "satria", "umur" => "18 tahun","jabatan" => NULL],
      ["nama" => "fattah", "umur" => "20 tahun", "jabatan" => NULL],
      ["nama" => "faiz", "umur" => "22 tahun", "jabatan" => NULL],
      ["nama" => "shakira", "umur" => "17 tahun", "jabatan" => "sekretaris"],
      ["nama" => "adrian", "umur" => "21 tahun", "jabatan" => "bendahara"],
    ],
  ]
?>
<?php
$siswa_jabatan = [];
$siswa_nojabatan = [];

foreach ($jurusan['siswa'] as $siswa){
    if ($siswa["jabatan"]){
        $siswa_jabatan[] = $siswa;
    }else {
        $siswa_nojabatan[] = $siswa;
    }
}
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
    <h1>Soal 1</h1>
<table class="table">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jabatan</th>  
        </tr>
        <?php foreach ($siswa_jabatan as $siswa) :?>
        <tr>
            <td><?php echo $siswa['nama']?></td>
            <td><?php echo $siswa['umur']?></td>
            <td><?php echo $siswa['jabatan']?></td>
        </tr>
        <?php endforeach; ?>
</table>
<br>
<table class="table">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
             
        </tr>
        <?php foreach ($siswa_nojabatan as $siswa) :?>
        <tr>
            <td><?php echo $siswa['nama']?></td>
            <td><?php echo $siswa['umur']?></td>
            
        </tr>
        <?php endforeach; ?>
</table>

</body>
</html>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    img{
        width:100px
    }
  </style>
</head>
<body>
    <br>
    <h1>Soal 4</h1>
<?php
$rating = 3; 

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $rating) {
        echo '<img src="https://simpleicon.com/wp-content/uploads/star.svg" alt="Filled star">';
    } else {
        echo '<img src="https://www.svgrepo.com/show/379262/star-empty.svg" alt="Empty star">';
    }
}
?>
</body>
</html>