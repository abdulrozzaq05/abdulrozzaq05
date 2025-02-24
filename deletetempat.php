<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM tempat_wisata WHERE idtempat = '$_GET[idtempat]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="form_tempat.php";
    </script>
    <?php
}
?>

<!-- window.location='edittransport.php' -->