<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_tourguide";
$koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
    echo "";
} else {
    echo "Server gagal tersambung";
}