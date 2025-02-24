<?php
include "connection.php";
$query = mysqli_query($koneksi, "DELETE FROM fotographer WHERE idfotographer = '$_GET[idfotographer]'") or die (mysqli_error($koneksi));

if ($query === true) {
    ?>
    <script>
        alert("Data berhasil dihapus");
        document.location="form_fotographer.php";
    </script>
    <?php
}
?>