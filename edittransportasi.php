<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Edit Transportasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php   
    include "connection.php";
    $idtransportasi = $_GET['idtransportasi'];
    $sql = mysqli_query($koneksi, "SELECT * FROM transportasi WHERE idtransportasi = '$idtransportasi'") or die (mysqli_error($koneksi));
    $data = mysqli_fetch_array($sql);    
    ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin : Edit Transportasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- BUTTON -->
            <div class="d-grid gap-4 d-md-block">
                <a href="form_transportasi.php"><button class="btn btn-primary" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->
    <center>
        <form method="POST" class="form-horizontal" action="insert.php?status=edittransportasi">
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Transportasi</label>
                <div class="col-sm-3">
                    <input type="hidden" class="form-control" name="idtransportasi" value="<?=$data['idtransportasi']?>">
                    <input type="text" class="form-control" name="jenis_transportasi" value="<?=$data['jenis_transportasi']?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 mt-2">
                    <button class="btn btn-danger" type="reset">Cancel</button>
                    <button class="btn btn-success" type="submit">Save</button>
                    <div class="d-grid mt-2 d-md-block">
                        <button id="btn-transport" class="btn btn-outline-primary" type="button">Tabel Transportasi</button></a>
                    </div>
                    <div id="tableContainer" class="mt-4"></div>
                </div>
            </div>

        </form>

        <script>
            document.getElementById('btn-transport').addEventListener('click', function() {
                fetch('dt_transportasi.php')
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