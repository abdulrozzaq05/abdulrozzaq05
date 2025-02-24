<?php
include "connection.php";

$sql = "DELETE FROM pesan_tour WHERE idpesan";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href = "dt_pemesanan_tour.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

