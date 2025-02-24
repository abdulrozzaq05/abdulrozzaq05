<?php
include "../connection.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$nmuser = $_POST['nmlengkap'];
$nama_file = $_FILES['uproposal']['name'];
$ukuran_file = $_FILES['uproposal']['size'];
$tipe_file = $_FILES['uproposal']['type'];
$tmp_file = $_FILES['uproposal']['tmp_name'];
$path = "../dokumen/" . $nama_file;
$allowed_types = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];

if (in_array($tipe_file, $allowed_types)) {
    if ($ukuran_file <= 2097152) {
        if (move_uploaded_file($tmp_file, $path)) {
            // Retrieve idregister from register table
            $query = "SELECT idregister FROM register WHERE nmlengkap = '$nmuser'";
            $result = $koneksi->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $idregister = $row['idregister'];

                // Insert into bukti_bayar table
                $query = "INSERT INTO bukti_bayar (file, type, size, nmlengkap, idregister) VALUES ('$nama_file', '$tipe_file', '$ukuran_file', '$nmuser', '$idregister')";
                $a = $koneksi->query($query);

                if ($a === true) {
                    ?>
                    <script language="javascript">
                        alert("UPLOAD BERHASIL.");
                        window.location.href = "form_upload.php";
                    </script>
                    <?php
                } else {
                    echo "<script>alert('File gagal masuk database');history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('User tidak ditemukan');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('File gagal terupload');history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Ukuran file lebih dari 2 MB');history.go(-1);</script>";
    }
} else {
    echo "<script>alert('File bukan PDF atau image yang diperbolehkan');history.go(-1);</script>";
}
?>
