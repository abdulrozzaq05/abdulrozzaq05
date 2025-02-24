<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM bukti_bayar WHERE idbukti = '$_GET[idbukti]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="../PROJEK UAS/upload/hasil_upload.php";
    </script>
    <?php
}
?>