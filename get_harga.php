<?php
include 'connection.php';

if (isset($_GET['idtempat'])) {
    header('Content-Type: application/json');
    $idtempat = $_GET['idtempat'];
    $query = "SELECT harga_tempat FROM tempat_wisata WHERE idtempat = '$idtempat'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(['harga_tempat' => $row['harga_tempat']]);
    } else {
        echo json_encode(['harga_tempat' => '']);
    }
    exit;
}
?>