<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a href="home_pengunjung.php"><button class="btn btn-primary" type="button">Kembali</button></a>
                <a href="logout.php"><button class="btn btn-danger" type="button">Logout</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <center>
        <h5>Beri Kami Bintang 🌟🌟🌟🌟🌟</h5>
        <form method="POST" class="form-horizontal mt-4" action="insert.php?status=rating">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nmlengkap" required>
                </div>

                <label class="col-sm-2 control-label mt-3">Rate : 1-10</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Masukkan Angka Berapapun" name="nilai" required>
                </div>

                <label class="col-sm-2 control-label mt-3">Komentar dan Saran</label>
                <div class="col-sm-3">
                    <textarea style="height : 20vh; width: 50vh" name="komentar" id="komentar" required></textarea>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group mt-4">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger me-3" style="width : 10%" type="reset">Reset</button>
                    <button class="btn btn-success" style="width : 10%" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>