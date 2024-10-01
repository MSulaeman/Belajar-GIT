<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbrumahsakit_eman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO rekam_medis (id,rawat_inap_id, dokter_id, perawat_id, tanggal_pemeriksaan, diagnosis, resep)
VALUES 
(1,1, 1, 1, '2024-09-02', 'Heart Attack', 'Aspirin, Beta Blockers'),
(2,2, 2, 2, '2024-09-04', 'Severe Flu', 'Antibiotics, Rest')
";


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}


?>
