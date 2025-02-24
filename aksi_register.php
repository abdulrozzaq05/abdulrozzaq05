<?php
include "connection.php";

$username = $_POST['username'];
$nama = $_POST['nmlengkap'];
$pw = $_POST['password'];
$pw2 = $_POST['password2'];
$email = $_POST['email'];
$level = $_POST['level'];

if ($pw !== $pw2) {
    ?>
    <script language="javascript">
        alert("Password Tidak Sama. Ulangi Password");
        history.back(-1);        
    </script>
    <?php
} else {
    $sql = "INSERT INTO register (username, nmlengkap, password, level, email)
            VALUES ('" . $username . "', '" . $nama . "', '" . $pw . "', '" . $level . "', '" . $email . "')";
    $query = $koneksi->query($sql);

    if ($query === true) {
        ?>
        <script language="javascript">
            alert("REGISTER BERHASIL.");
            window.location.href="form_login.php";
        </script>
        <?php
    } else {
        ?>
        <script language="javascript">
            alert("Terjadi kesalahan saat memasukkan data. Silakan coba lagi.");
            history.back(-1);
        </script>
        <?php
    }
}
?>