<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Edit Pemandu Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include "connection.php";
    $idpemandu = $_GET['idpemandu'];
    $sql = mysqli_query($koneksi, "SELECT * FROM pemandu WHERE idpemandu = '$idpemandu'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_array($sql);
    ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin : Edit Pemandu Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- BUTTON -->
            <div class="d-grid gap-4 d-md-block">
                <a href="form_pemandu.php"><button class="btn btn-primary" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->
    <center>
        <form method="POST" class="form-horizontal" action="insert.php?status=editpemandu">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Pemandu Wisata</label>
                <div class="col-sm-3">
                    <input type="hidden" class="form-control" name="idpemandu" value="<?= $data['idpemandu'] ?>">
                    <input type="text" class="form-control" name="nmpemandu" value="<?= $data['nmpemandu'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Pengalaman</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="pengalaman" value="<?= $data['pengalaman'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Harga Jasa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="harga_pemandu" value="<?= $data['harga_pemandu'] ?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 mt-2">
                    <button class="btn btn-danger" type="reset">Cancel</button>
                    <button class="btn btn-success" type="submit">Save</button>
                    <div class="d-grid mt-2 d-md-block">
                        <button id="btn-pemandu" class="btn btn-outline-primary" type="button">Tabel Pemandu Wisata</button></a>
                    </div>
                    <div id="tableContainer" class="mt-4"></div>
                </div>
            </div>

        </form>

        <script>
            document.getElementById('btn-pemandu').addEventListener('click', function() {
                fetch('dt_pemandu.php')
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('tableContainer').innerHTML = data;
                    })
                    .catch(error => console.error('Error:', error));
            });
        </script>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>