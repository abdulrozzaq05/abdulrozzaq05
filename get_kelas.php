<?php
include 'connection.php';

if (isset($_GET['idfotographer'])) {
    header('Content-Type: application/json');
    $idfoto = $_GET['idfotographer'];
    $query = "SELECT nmfotographer FROM fotographer WHERE idfotographer = '$idfoto'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(['nmfotographer' => $row['nmfotographer']]);
    } else {
        echo json_encode(['nmfotographer' => '']);
    }
    exit;
}
?>