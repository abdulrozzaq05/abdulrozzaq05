<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM beli_paket WHERE idbeli = '$_GET[idbeli]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Pesanan berhasil dihapus");
        document.location="dt_belipaket.php";
    </script>
    <?php
}
?>