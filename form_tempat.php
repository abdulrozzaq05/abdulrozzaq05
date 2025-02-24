<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Form Tempat Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <a class="navbar-brand" href="#">Admin | Form Tempat Wisata</a>
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

    <form method="POST" class="form-horizontal" action="insert.php?status=tempat">
        <div class="container d-flex justify-content-center">
            <div class="col-md-8">
                <div class="col-12 text-center mt-2">
                    <h4>Tempat Wisata</h4>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tempat Wisata 1" name="nmtempat[1]">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga 1" name="harga_tempat[1]">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tempat Wisata 2" name="nmtempat[2]">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga 2" name="harga_tempat[2]">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tempat Wisata 3" name="nmtempat[3]">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga 3" name="harga_tempat[3]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 mt-4">
                    <button class="btn btn-danger" type="reset">Cancel</button>
                    <button class="btn btn-success" type="submit">Save</button>
                    <div class="d-grid mt-2 d-md-block">
                        <button id="btn-tempat" class="btn btn-outline-primary" type="button">Tabel Tempat Wisata</button></a>
                    </div>
                    <div id="tableContainer" class="mt-4"></div>
                </div>
            </div>
        </center>
    </form>
    <script>
        document.getElementById('btn-tempat').addEventListener('click', function() {
            fetch('dt_tempat.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('tableContainer').innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>