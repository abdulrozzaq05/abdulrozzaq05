<?php
include "connection.php";

$sql = "DELETE FROM paket";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href = "form_paket.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

