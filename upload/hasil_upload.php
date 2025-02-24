<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- BUTTON -->
            <div class="d-grid gap-4 d-md-block">
                <a href="../home_admin.php"><button class="btn btn-primary float-right" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <center>
        <h3>HASIL UPLOAD</h3>
        <div class="box" style="width: 80%">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama </th>
                            <th>Nama Dokumen</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../connection.php";

                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM bukti_bayar, register WHERE bukti_bayar.idregister=register.idregister") or die(mysqli_error($koneksi));
                        if (mysqli_num_rows($sql)) {
                            while ($row = mysqli_fetch_array($sql)) {
                                $idbukti = $row['idbukti'];
                                $nmfile = $row['file'];
                                $nmuser = $row['nmlengkap'];
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo $nmuser; ?></td>
                                    <td><?php echo $nmfile; ?></td>
                                    <td>
                                        <a href="../dokumen/<?php echo $nmfile; ?>" target="_blank"><button type="button" class="btn btn-primary">Download</button></a> |
                                        <a href='../deletebukti.php?idbukti=<?php echo $idbukti; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan=\"3\" align=\"center\">Tidak ada file ditemukan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="btn mt-1">
                    <a href="../delete_allbukti.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua file upload ?')" class="btn btn-outline-danger">Delete All</button></a>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>