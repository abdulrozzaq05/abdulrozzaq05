<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM rating WHERE idrating = '$_GET[idrating]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="dt_rating.php";
    </script>
    <?php
}
?>

<!-- window.location='edittransport.php' -->