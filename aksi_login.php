<?php
session_start();
include "connection.php";

$user = $_POST['username'];
$psw = $_POST['password'];
$op = $_GET['op'];

if ($op == "in") {
    // Filter input untuk mencegah SQL Injection
    $user = $koneksi->real_escape_string($user);
    $psw = $koneksi->real_escape_string($psw);

    $sql = "SELECT * FROM register WHERE username = '$user'";
    $query = $koneksi->query($sql);

    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        if ($psw == $data['password']) {  // Ganti ini dengan password_verify jika menggunakan hash
            $_SESSION['username'] = $data['username'];            
            $_SESSION['level'] = $data['level'];
            if ($data['level'] == "Admin") {
                header("location: home_admin.php");
            } else if ($data['level'] == "Pengunjung") {
                header("location: home_pengunjung.php");
            }
        } else {
        ?>
            <script language="javascript">
                alert("Username/Password Anda Salah. Coba Lagi..");
                history.back(-1);
            </script>
        <?php
        }
    } else {
        ?>
        <script language="javascript">
            alert("Anda Belum Registrasi. Silahkan Registrasi Terlebih Dahulu");
            window.location.href = "form_register.php";
        </script>
<?php
    }
} else if ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location: form_login.php");
}
?>