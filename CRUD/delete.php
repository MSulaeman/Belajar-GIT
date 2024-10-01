<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "DELETE FROM siswa WHERE nama ='$nama'";
$query = mysqli_query($conn, $sql);
if (!$query) {
die(mysqli_error($conn));   
}
header("Location: index.php");