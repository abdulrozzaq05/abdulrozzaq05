<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM pemandu WHERE idpemandu = '$_GET[idpemandu]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="form_pemandu.php";
    </script>
    <?php
}
?>

<!-- window.location='edittransport.php' -->