<?php
include "connection.php";

$sql = "DELETE FROM bukti_bayar";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("File berhasil dihapus");
        window.location.href = "../PROJEK UAS/upload/hasil_upload.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

