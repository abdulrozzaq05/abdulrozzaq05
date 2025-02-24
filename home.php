<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
                <a href="form_register.php"><button class="btn btn-outline-danger" type="button">Register</button></a>
                <a href="form_login.php"><button class="btn btn-outline-primary" type="button">Login</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- COLUMN -->
    <div class="container-fluid bg-light" style="height : 100%">

        <!-- CAROUSEL -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../PROJEK UAS/images/pinteres.jpg" class="d-block w-100" alt="gambar1" style="height : 550px">
                    <div class="carousel-caption">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../PROJEK UAS/images/pinteres2.jpg" class="d-block w-100" alt="gambar2" style="height : 550px">
                    <div class="carousel-caption">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../PROJEK UAS/images/pinteres3.jpg" class="d-block w-100" alt="gambar3" style="height : 550px">
                    <div class="carousel-caption">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END CAROUSEL -->

        <div class="row text-center align-items-center mt-4">
            <div class="col-12">
                <img src="../Projek UAS/images/daendels.jpg" alt="gambar" width="150" hight="150">
                <h4 class="mt-2">JASA TOUR AND TRAVEL</h4>
                <h5><i>Menemani Kemanapun Anda Pergi</i></h5>
            </div>
        </div>

        <!-- CARD -->
        <div class="row">
            <div class="col-sm-4 g-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tour Bersama Kami</h5>
                        <p class="card-text">Dapatkan Pengalaman Menarik Bersama Kami.</p>
                        <a href="form_pesan_tiruan.php" class="btn btn-outline-dark d-block">Daftar Sekarang</a>
                    </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success   ">
                        120k
                    </span>
                </div>
            </div>
            <div class="col-sm-4 g-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Paket Tour</h5>
                        <p class="card-text">Ada Paket Menarik niih...Buruan Cobain! 🤑.</p>
                        <a href="form_paket_tiruan.php" class="btn btn-outline-dark d-block">Pesan Sekarang</a>
                    </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success   ">
                        200k
                    </span>
                </div>
            </div>
            <div class="col-sm-4 g-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Beri Kami Rating ✨</h5>
                        <p class="card-text">Kasih Nilai Untuk Membantu Pelayanan Kami 😉.</p>
                        <a href="form_rating_tiruan.php" class="btn btn-outline-dark d-block">Ulas Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CARD -->
    </div>
    <!-- END COLUMNS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>