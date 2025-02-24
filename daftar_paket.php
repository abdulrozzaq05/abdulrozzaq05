<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGUNJUNG | Form Pembelian Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Tour Terpercaya ✨</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- BUTTON -->
            <div class="d-grid gap-4 d-md-block">
                <a href="home_pengunjung.php"><button class="btn btn-primary" type="button">Kembali</button></a>
                <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- FIRST LAYOUT -->
    <div class="row justify-content-center">
        <div class="card m-3" style="max-width: 540px;cursor: pointer">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../PROJEK UAS/images/download.jpg" class="img-fluid" alt="gambar paket 1" style="height: 100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Ceria Sementara 👌😁</h3>
                        <h5 class="card_title">Paket Awal Bulan</h5>
                        <p class="card-text">Anda akan mendapatkan :
                        <br>- Tour Guide Kelas Expert
                        <br>- Transportasi Super Nyaman
                        <br>- Fotographer Kelas Expert
                        </p>
                            <b>Jadwal Berangkat : 20 Januari - 6 Februari</b>
                        <br class="card-text"><small class="text-muted">Rp. 500.000,- / orang</small>
                        <div class="d-grid gap-4 d-md-block">
                            <div class="container">
                                <a href="beli_paket.php?row=1" class="float-right"><button class="btn btn-outline-primary" name="button1" type="button">Beli Sekarang</button></a>
                            </div>
                        </div>                        

                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3" style="max-width: 540px; cursor: pointer">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../PROJEK UAS/images/download (1).jpg" class="img-fluid" alt="gambar paket 2" style="height: 100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Mulai Linglung 😒</h3>
                        <h5 class="card_title">Paket Pertengahan Bulan</h5>
                        <p class="card-text">Anda akan mendapatkan :
                        <br>- Tour Guide Kelas Middle
                        <br>- Transportasi
                        <br>- Fotographer Kelas Middle
                        </p>
                            <b>Jadwal Berangkat : 10 Februari - 25 Februari</b>
                        <br class="card-text"><small class="text-muted">Rp. 400.000,- / orang</small>
                        <div class="d-grid gap-4 d-md-block">
                            <div class="container">
                                <a href="beli_paket.php?row=2" class="float-right"><button class="btn btn-outline-primary" name="button2" type="button">Beli Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3" style="max-width: 540px; cursor: pointer">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../PROJEK UAS/images/download (2).jpg" class="img-fluid" alt="gambar paket 3" style="height: 100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Mau Gajian niichh...😉</h5>
                        <p class="card-text">Anda akan mendapatkan :
                        <br>- Tour Guide Kelas Beginner
                        <br>- Transportasi (berangkat sendiri)
                        <br>- Fotographer
                        </p>
                            <b>Jadwal Berangkat : 27 Februari - 5 Maret</b>
                        <br class="card-text"><small class="text-muted">Rp. 270.000,- / orang</small>
                        <div class="d-grid gap-4 d-md-block">
                            <div class="container">
                                <a href="beli_paket.php?row=3" class="float-right"><button class="btn btn-outline-primary" name="button3" type="button">Beli Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LAYOUT -->

    <!-- </div>
        </div>
    </div> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>