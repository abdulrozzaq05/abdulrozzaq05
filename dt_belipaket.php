<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Pembelian Paket Wisata</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin | Daftar Pembelian Paket Wisata</a>
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
        <h4>Daftar Pembelian Paket Wisata</h4>
        <div class="box" style="width: 90%">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Paket</th>
                            <th>Jenis Paket</th>
                            <th>Harga Paket</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Metode Pembayaran</th>
                            <th>Tanggal Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM beli_paket, paket, register WHERE beli_paket.idpaket=paket.idpaket AND beli_paket.idregister=register.idregister") or die(mysqli_error($koneksi));
                        if (mysqli_num_rows($sql)) {
                            while ($dt_belipaket = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo $dt_belipaket['nmpaket']; ?></td>
                                    <td><?php echo $dt_belipaket['jenis_paket']; ?></td>
                                    <td><?php echo $dt_belipaket['harga_paket']; ?></td>
                                    <td><?php echo $dt_belipaket['nmlengkap']; ?></td>
                                    <td><?php echo $dt_belipaket['email']; ?></td>
                                    <td><?php echo $dt_belipaket['metode_bayar']; ?></td>
                                    <td><?php echo $dt_belipaket['tgl_bayar']; ?></td>
                                    <td>                                        
                                        <a href='deletebelipaket.php?idbeli=<?php echo $dt_belipaket['idbeli']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus daftar pemesanan  ?')">Delete</button></a>
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
                    <a href="deleteall_belipaket.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua pesanan ?')" class="btn btn-outline-danger">Delete All</button></a>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>