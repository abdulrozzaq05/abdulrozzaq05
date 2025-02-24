<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h4>Tabel Paket Wisata</h4>
    <div class="box" style="width : 70%">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Paket Wisata</th>
                        <th>Jenis Paket Wisata</th>
                        <th>Harga Paket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM paket") or die(mysqli_error($koneksi));
                    if (mysqli_num_rows($sql)) {
                        while ($dt_paket = mysqli_fetch_array($sql)) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?>.</td>
                                <td><?php echo $dt_paket['nmpaket']; ?></td>
                                <td><?php echo $dt_paket['jenis_paket']; ?></td>
                                <td><?php echo $dt_paket['harga_paket']; ?></td>
                                <td>
                                    <a href='editpaket.php?idpaket=<?php echo $dt_paket['idpaket']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> |
                                    <a href='deletepaket.php?idpaket=<?php echo $dt_paket['idpaket']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
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
                <a href="delete_allpaket.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua data?')" class="btn btn-outline-danger">Delete All</button></a>
            </div>
        </div>
    </div>


    <!-- <div class="btn-group" role="group" aria-label="Basic example">
        <a href=""></a><button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-danger">Right</button>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>