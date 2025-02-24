<?php
include "connection.php";

$sql = "DELETE FROM beli_paket";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("Pesanan berhasil dihapus");
        window.location.href = "dt_belipaket.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>