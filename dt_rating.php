<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pemandu Wisata</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin | Form Pemandu Wisata</a>
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
        <h4>Daftar Penilaian Customer</h4>
        <div class="box" style="width: 70%">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Nilai</th>
                            <th>Komentar dan Saran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM rating, register WHERE rating.idregister=register.idregister") or die(mysqli_error($koneksi));
                        if (mysqli_num_rows($sql)) {
                            while ($dt_rating = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $dt_rating['nmlengkap'] ?></td>
                                    <td><?= $dt_rating['nilai'] ?></td>
                                    <td><?= $dt_rating['komentar'] ?></td>
                                    <td>
                                        <a href='deleterating.php?idrating=<?php echo $dt_rating['idrating']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan=\"5\" align=\"center\">Tidak ada penilaian</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="btn mt-1">
                    <a href="delete_allrating.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua penilaian?')" class="btn btn-outline-danger">Delete All</button></a>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>