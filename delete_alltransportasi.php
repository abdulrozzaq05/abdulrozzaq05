<?php
include "connection.php";

$sql = "DELETE FROM transportasi";
if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href = "form_transportasi.php";
    </script>
    <?php
} else {
    echo "Error deleting records: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>