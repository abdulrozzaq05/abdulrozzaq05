<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
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
                <a href="logout.php"><button class="btn btn-danger" type="button">Logout</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <center><br><h3>Halaman Admin</h3></center>
    <div class="staircase-container mt-5 text-center">
        <a href="../PROJEK UAS/upload/hasil_upload.php"><button class="btn btn-outline-dark" type="button">Upload</button></a>
        <a href="dt_pemesanan_tour.php"><button class="btn btn-outline-dark" type="button">Daftar Pemesanan</button></a>
        <a href="dt_belipaket.php"><button class="btn btn-outline-dark" type="button">Daftar Pembelian Paket</button></a>
        <a href="dt_rating.php"><button class="btn btn-outline-dark" type="button">Daftar Penilaian</button></a>
    </div>
    <div class="staircase-container mt-5 text-center">
        <a href="form_transportasi.php"><button class="btn btn-outline-dark" type="button">Transportasi</button></a>
        <a href="form_tempat.php"><button class="btn btn-outline-dark" type="button">Tempat Wisata</button></a>
        <a href="form_pemandu.php"><button class="btn btn-outline-dark" type="button">Pemandu Wisata</button></a>
        <a href="form_fotographer.php"><button class="btn btn-outline-dark" type="button">Jasa Fotographer</button></a>
        <a href="form_paket.php"><button class="btn btn-outline-dark" type="button">Paket Wisata</button></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>