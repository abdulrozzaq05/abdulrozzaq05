<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Pemesanan</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin | Daftar Pemesanan Tourguide</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- BUTTON -->
            <div class="d-grid gap-4 d-md-block">
                <a href="home_admin.php"><button class="btn btn-primary" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <center>
        <h4>Daftar Pemesanan</h4>
        <div class="box" style="width: 70%">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>E-mail</th>
                            <th>Destinasi Wisata</th>
                            <th>Harga</th>
                            <th>Transportasi</th>
                            <th>Tanggal Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM pesan_tour, register, tempat_wisata, transportasi WHERE pesan_tour.idregister = register.idregister AND pesan_tour.idtempat = tempat_wisata.idtempat AND pesan_tour.idtransportasi = transportasi.idtransportasi") or die(mysqli_error($koneksi));
                        if (mysqli_num_rows($sql)) {
                            while ($dt_pemesanan = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo $dt_pemesanan['nmlengkap']; ?></td>
                                    <td><?php echo $dt_pemesanan['email']; ?></td>
                                    <td><?php echo $dt_pemesanan['nmtempat']; ?></td>
                                    <td><?php echo $dt_pemesanan['harga_tempat']; ?></td>
                                    <td><?php echo $dt_pemesanan['jenis_transportasi']; ?></td>
                                    <td><?php echo $dt_pemesanan['tgl_berangkat']; ?></td>
                                    <td>                                        
                                        <a href='deletepemesanan.php?idpesan=<?php echo $dt_pemesanan['idpesan']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus daftar pemesanan  ?')">Delete</button></a>                                        
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            echo "<tr><td colspan=\"5\" align=\"center\">Tidak ada pesanan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="btn mt-1">
                    <a href="delete_allpesan.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua pesanan ?')" class="btn btn-outline-danger">Delete All</button></a>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>