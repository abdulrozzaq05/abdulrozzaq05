<?php
include "connection.php";

$sql = "DELETE FROM rating";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href = "dt_rating.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

