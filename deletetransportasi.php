<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM transportasi WHERE idtransportasi = '$_GET[idtransportasi]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="form_transportasi.php";
    </script>
    <?php
}
?>

<!-- window.location='edittransport.php' -->