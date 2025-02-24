<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM pesan_tour WHERE idpesan = '$_GET[idpesan]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="dt_pemesanan_tour.php";
    </script>
    <?php
}
?>

<!-- window.location='edittransport.php' -->