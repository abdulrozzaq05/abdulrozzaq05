<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pemandu Wisata</title>
</head>
<body>
    <h4>Tabel Pemandu Wisata</h4>
    <div class="box" style="width: 70%">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pemandu Wisata</th>
                        <th>Pengalaman</th>
                        <th>Harga Jasa</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM pemandu") or die(mysqli_error($koneksi));
                    if (mysqli_num_rows($sql)) {
                        while ($dt_pemandu = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $dt_pemandu['nmpemandu'] ?></td>
                                <td><?= $dt_pemandu['pengalaman'] ?></td>
                                <td><?= $dt_pemandu['harga_pemandu'] ?></td>
                                <td>
                                    <a href='editpemandu.php?idpemandu=<?php echo $dt_pemandu['idpemandu']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> |
                                    <a href='deletepemandu.php?idpemandu=<?php echo $dt_pemandu['idpemandu']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan=\"5\" align=\"center\">Data tidak ditemukan</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="btn mt-1">
                <a href="delete_allpemandu.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua data?')" class="btn btn-outline-danger">Delete All</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
