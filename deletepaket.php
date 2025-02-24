<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM paket WHERE idpaket = '$_GET[idpaket]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="form_paket.php";
    </script>
    <?php
}
?>
