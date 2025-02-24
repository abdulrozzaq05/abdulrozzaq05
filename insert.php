<?php
include "connection.php";
$stts = $_GET['status'];
if ($stts == "transportasi") {
    if (isset($_POST['jenis_transportasi'])) {
        // Mendapatkan data fotographer dari $_POST
        $jeniss = $_POST['jenis_transportasi'];

        // Melakukan iterasi untuk setiap data fotographer
        foreach ($jeniss as $key => $jenis) {
            // Memeriksa apakah data fotographer tidak kosong
            if (!empty($jenis)) {
                // Mendapatkan data fotographer
                $jenis = $jeniss[$key];

                // Melakukan query untuk memasukkan data fotographer ke dalam database
                $sql = "INSERT INTO transportasi (jenis_transportasi) VALUES ('$jenis')";
                $koneksi->query($sql);
            }
        }
    }
    header("location:form_transportasi.php");
} elseif ($stts == "tempat") {
    if (isset($_POST['nmtempat']) && isset($_POST['harga_tempat'])) {
        // Mendapatkan data fotographer dari $_POST
        $names = $_POST['nmtempat'];
        $hargas = $_POST['harga_tempat'];

        // Melakukan iterasi untuk setiap data fotographer
        foreach ($names as $key => $nmtempat) {
            // Memeriksa apakah data fotographer tidak kosong
            if (!empty($nmtempat) && !empty($hargas[$key])) {
                // Mendapatkan data fotographer
                $harga = $hargas[$key];

                // Melakukan query untuk memasukkan data fotographer ke dalam database
                $sql = "INSERT INTO tempat_wisata (nmtempat, harga_tempat) VALUES ('$nmtempat','$harga')";
                $koneksi->query($sql);
            }
        }
    }
    header("location:form_tempat.php");
} elseif ($stts == "pemandu") {
    if (isset($_POST['nmpemandu']) && isset($_POST['pengalaman']) && isset($_POST['harga_pemandu'])) {
        // Mendapatkan data pemandu dari $_POST
        $nmpemandus = $_POST['nmpemandu'];
        $pengalamans = $_POST['pengalaman'];
        $harga_pemandus = $_POST['harga_pemandu'];

        // Melakukan iterasi untuk setiap data pemandu
        foreach ($nmpemandus as $key => $nmpemandu) {
            // Memeriksa apakah data pemandu tidak kosong
            if (!empty($nmpemandu) && !empty($pengalamans[$key]) && !empty($harga_pemandus[$key])) {
                // Mendapatkan data pemandu
                $pengalaman = $pengalamans[$key];
                $harga_pemandu = $harga_pemandus[$key];

                // Melakukan query untuk memasukkan data pemandu ke dalam database
                $sql = "INSERT INTO pemandu (nmpemandu, pengalaman, harga_pemandu) VALUES ('$nmpemandu','$pengalaman','$harga_pemandu')";
                $koneksi->query($sql);
            }
        }
    }
    header("location:form_pemandu.php");
} elseif ($stts == "fotographer") {
    if (isset($_POST['nmfotographer']) && isset($_POST['kelas'])) {
        // Mendapatkan data fotographer dari $_POST
        $nmfotographers = $_POST['nmfotographer'];
        $kelass = $_POST['kelas'];

        // Melakukan iterasi untuk setiap data fotographer
        foreach ($nmfotographers as $key => $nmfotographer) {
            // Memeriksa apakah data fotographer tidak kosong
            if (!empty($nmfotographer) && !empty($kelass[$key])) {
                // Mendapatkan data fotographer
                $kelas = $kelass[$key];

                // Melakukan query untuk memasukkan data fotographer ke dalam database
                $sql = "INSERT INTO fotographer (nmfotographer, kelas) VALUES ('$nmfotographer','$kelas')";
                $koneksi->query($sql);
            }
        }
    }
    header("location:form_fotographer.php");
} elseif ($stts == "paket") {
    $nmpaket = $_POST['nmpaket'];
    $jenis_paket = $_POST['jenis_paket'];
    $harga_paket = $_POST['harga_paket'];
    $sql = "INSERT INTO paket (nmpaket, jenis_paket, harga_paket) VALUES ('" . $nmpaket . "','" . $jenis_paket . "','" . $harga_paket . "')";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_paket.php");
    }
} elseif ($stts == "edittransportasi") {
    $idtransportasi = $_POST['idtransportasi'];
    $jenis = $_POST['jenis_transportasi'];
    $sql = "UPDATE transportasi SET jenis_transportasi = '$jenis' WHERE idtransportasi = '$idtransportasi'";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_transportasi.php");
    }
} elseif ($stts == "edittempat") {
    $idtempat = $_POST['idtempat'];
    $nmtempat = $_POST['nmtempat'];
    $harga = $_POST['harga_tempat'];
    $sql = "UPDATE tempat_wisata SET nmtempat = '$nmtempat', harga_tempat = '$harga' WHERE idtempat = '$idtempat'";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_tempat.php");
    }
} elseif ($stts == "editpemandu") {
    $idpemandu = $_POST['idpemandu'];
    $nmpemandu = $_POST['nmpemandu'];
    $pengalaman = $_POST['pengalaman'];
    $harga_pemandu = $_POST['harga_pemandu'];
    $sql = "UPDATE pemandu SET nmpemandu = '$nmpemandu', pengalaman = '$pengalaman', harga_pemandu = '$harga_pemandu' WHERE idpemandu = '$idpemandu'";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_pemandu.php");
    }
} elseif ($stts == "editfotographer") {
    $idfotographer = $_POST['idfotographer'];
    $nmfotographer = $_POST['nmfotographer'];
    $kelas = $_POST['kelas'];
    $sql = "UPDATE fotographer SET nmfotographer = '$nmfotographer', kelas = '$kelas' WHERE idfotographer = '$idfotographer'";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_fotographer.php");
    }
} elseif ($stts == "editpaket") {
    $idpaket = $_POST['idpaket'];
    $nmpaket = $_POST['nmpaket'];
    $jenis_paket = $_POST['jenis_paket'];
    $harga_paket = $_POST['harga_paket'];
    $sql = "UPDATE paket SET nmpaket = '$nmpaket', jenis_paket = '$jenis_paket', harga_paket = '$harga_paket' WHERE idpaket = '$idpaket'";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header("location:form_paket.php");
    }
} elseif ($stts == "editpemesanan") {
    $idpesan = $_POST['idpesan'];
    $nmlengkap = $_POST['nmlengkap'];
    $email = $_POST['email'];
    $nmtempat = $_POST['nmtempat'];
    $jenis_transportasi = $_POST['jenis_transportasi'];
    $tgl = $_POST['tgl_berangkat'];

    // Query untuk mendapatkan idregister dari tabel register
    $sql_register = "SELECT idregister FROM register WHERE nmlengkap = '$nmlengkap' AND email = '$email'";
    $aksi_register = $koneksi->query($sql_register);

    if ($aksi_register->num_rows > 0) {
        $row = $aksi_register->fetch_assoc();
        $idregister = $row['idregister'];

        // Query untuk update tabel pesan_tour
        $sql = "UPDATE pesan_tour SET 
                 idregister='$idregister', 
                 idtempat='$nmtempat', 
                 idtransportasi='$jenis_transportasi', 
                 tgl_berangkat='$tgl' 
             WHERE idpesan='$idpesan'";

        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script language="javascript">
                alert("Pesanan Berhasil Diperbarui. Lanjutkan Pembayaran.");
                window.location.href = "form_bayar.php?idpesan=<?= $idpesan ?>";
            </script>
        <?php
        } else {
            echo "Error: " . $koneksi->error;
        }
    } else {
        echo "User tidak ditemukan di tabel register.";
    }

} elseif ($stts == "pesan") {
    $nmlengkap = $_POST['nmlengkap'];
    $email = $_POST['email'];
    $nmtempat = $_POST['nmtempat'];
    $jenis_transportasi = $_POST['jenis_transportasi'];
    $tgl = $_POST['tgl_berangkat'];

    // Query untuk mendapatkan idregister dari tabel register
    $sql_register = "SELECT idregister FROM register WHERE nmlengkap = '$nmlengkap' AND email = '$email'";
    $aksi_register = $koneksi->query($sql_register);

    if ($aksi_register->num_rows > 0) {
        $row = $aksi_register->fetch_assoc();
        $idregister = $row['idregister'];

        // Query untuk insert ke tabel pesan_tour
        $sql = "INSERT INTO pesan_tour (idregister, idtempat, idtransportasi, tgl_berangkat) VALUES ('$idregister', '$nmtempat', '$jenis_transportasi', '$tgl')";
        $a = $koneksi->query($sql);

        if ($a === true) {
            $idpesan = $koneksi->insert_id;
        ?>
            <script language="javascript">
                alert("Pesanan Berhasil Ditambahkan. Lanjutkan Pembayaran.");
                window.location.href = "form_bayar.php?idpesan=<?= $idpesan ?>";
            </script>
        <?php
        } else {
            echo "Error: " . $koneksi->error;
        }
    } else {
        echo "User not found in register table.";
    }
} elseif ($stts == "pembayaran") {
    $idpesann = $_POST['idpesan'];
    $pengalaman = $_POST['pengalaman'];
    $kelas = $_POST['kelas'];
    $metode = $_POST['metode_bayar'];
    $tgl_bayar = $_POST['tgl_bayar'];

    // Query untuk insert ke tabel pembayaran
    $sql = "
            INSERT INTO pembayaran (
                idpesan,   
                idpemandu, 
                idfotographer, 
                metode_bayar, 
                tgl_bayar              
            ) VALUES (
                '$idpesann',  
                '$pengalaman', 
                '$kelas', 
                '$metode', 
                '$tgl_bayar'                
            )
        ";
    $a = $koneksi->query($sql);

    if ($a === true) {
        $idbayar = $koneksi->insert_id;
        ?>
        <script language="javascript">
            alert("Pesanan Berhasil Ditambahkan. Lanjutkan Pembayaran.");
            window.location.href = "totalan.php?idbayar=<?= $idbayar ?>";
        </script>
    <?php
    } else {
        echo "Error: PEMBAYARAN GAGAL" . $koneksi->error;
    }
} elseif ($stts == "totalan") {
    $idbayar = $_POST['idbayar'];
    $total = $_POST['total'];

    // Query untuk insert ke tabel total
    $sql = "
        INSERT INTO total (
            idbayar, 
            total
        ) VALUES (
            '$idbayar', 
            '$total'
        )
    ";
    $a = $koneksi->query($sql);

    if ($a === true) {
    ?>
        <script language="javascript">
            alert("Pembayaran Berhasil !!. Screenshot Rincian Pesanan Anda");
            window.location.href = "totalan.php?idbayar=<?= $idbayar ?>";
        </script>
        <?php
    } else {
        echo "Error: Gagal menyimpan total" . $koneksi->error;
    }
    
} elseif ($stts == "belipaket") {
    $idpaket = $_POST['idpaket'];
    $nama = $_POST['nmlengkap'];
    $email = $_POST['email'];
    $metode = $_POST['metode_bayar'];
    $tgl = $_POST['tgl_bayar'];

    // Query untuk mendapatkan idregister dari tabel register
    $sql_register = "SELECT idregister FROM register WHERE nmlengkap = '$nama' AND email = '$email'";
    $aksi_register = $koneksi->query($sql_register);

    if ($aksi_register->num_rows > 0) {
        $row = $aksi_register->fetch_assoc();
        $idregister = $row['idregister'];

        // Query untuk insert ke tabel pesan_tour
        $sql = "INSERT INTO beli_paket (idpaket, idregister, metode_bayar, tgl_bayar) VALUES ('$idpaket', $idregister, '$metode', '$tgl')";
        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script language="javascript">
                alert("PEMBAYARAN BERHASIL. Screenshot pesan ini sebagai bukti pembayaran");
                window.location.href = "../PROJEK UAS/upload/form_upload.php";
            </script>
        <?php
        } else {
            echo "Error: " . $koneksi->error;
        }
    } else {
        echo "User not found in register table.";
    }
} elseif ($stts == "rating") {
    $nmlengkap = $_POST['nmlengkap'];
    $nilai = $_POST['nilai'];
    $komentar = $_POST['komentar'];

    // Query untuk mendapatkan idregister dari tabel register
    $sql_register = "SELECT idregister FROM register WHERE nmlengkap = '$nmlengkap'";
    $aksi_register = $koneksi->query($sql_register);

    if ($aksi_register->num_rows > 0) {
        $row = $aksi_register->fetch_assoc();
        $idregister = $row['idregister'];

        // Query untuk insert ke tabel pesan_tour
        $sql = "INSERT INTO rating (idregister, nilai, komentar) VALUES ('$idregister', '$nilai', '$komentar')";
        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script language="javascript">
                alert("Terima Kasih atas Saran dan Komentar Anda 😉.");
                window.location.href = "home_pengunjung.php";
            </script>
<?php
        } else {
            echo "Error: " . $koneksi->error;
        }
    } else {
        echo "User not found in register table.";
    }
}
