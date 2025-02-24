<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Transportasi</title>
</head>

<body>
    <h4>Tabel Transportasi</h4>
    <div class="box" style="width: 50%">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>                        
                        <th>No.</th>
                        <th>Jenis Transportasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM transportasi") or die(mysqli_error($koneksi));
                    if (mysqli_num_rows($sql)) {
                        while ($dt_transportasi = mysqli_fetch_array($sql)) {
                    ?>
                            <tr>                                
                                <td><?php echo htmlspecialchars($no++); ?>.</td>
                                <td><?php echo htmlspecialchars($dt_transportasi['jenis_transportasi']); ?></td>
                                <td>
                                    <a href='edittransportasi.php?idtransportasi=<?php echo $dt_transportasi['idtransportasi']; ?>'><button type="button" class="btn btn-warning">Edit</button></a> |
                                    <a href='deletetransportasi.php?idtransportasi=<?php echo $dt_transportasi['idtransportasi']; ?>'><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan=\"3\" align=\"center\">Data tidak ditemukan</td></tr>";
                    }
                    ?>
                </tbody>                            
            </table>

            <div class="btn mt-1">
                <a href="delete_alltransportasi.php"><button type="button" onclick="return confirm('Yakin ingin menghapus semua data?')" class="btn btn-outline-danger">Delete All</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>