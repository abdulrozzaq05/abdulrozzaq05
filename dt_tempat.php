<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h4>Tabel Tempat Wisata</h4>
    <div class="box" style="width : 50%">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tempat Wisata</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM tempat_wisata") or die(mysqli_error($koneksi));
                    if (mysqli_num_rows($sql)) {
                        while ($dt_tempat = mysqli_fetch_array($sql)) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?>.</td>
                                <td><?php echo $dt_tempat['nmtempat']; ?></td>
                                <td><?php echo $dt_tempat['harga_tempat']; ?></td>
                                <td>
                                    <a href='edittempat.php?idtempat=<?php echo $dt_tempat['idtempat']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> |
                                    <a href='deletetempat.php?idtempat=<?php echo $dt_tempat['idtempat']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
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
                <a href="delete_alltempat.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua data?')" class="btn btn-outline-danger">Delete All</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>