<?php
header('Content-Type: application/json');
include 'connection.php'; // Update with your actual database connection file

if (isset($_GET['idpemandu'])) {
    $idpemandu = $_GET['idpemandu'];
    $query = "SELECT * FROM pemandu WHERE idpemandu = $idpemandu";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
?>
