<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM | TOTALAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include "connection.php";

    // Ambil ID pembayaran dari URL
    $idbayar = $_GET['idbayar'];

    // Query untuk mengambil data dari tabel pembayaran berdasarkan ID pembayaran
    $sql = mysqli_query($koneksi, "
        SELECT pembayaran.*, 
               pesan_tour.*, 
               pemandu.*, 
               fotographer.*, 
               tempat_wisata.harga_tempat, 
               tempat_wisata.nmtempat, 
               transportasi.jenis_transportasi, 
               register.nmlengkap, 
               register.email,
               pemandu.harga_pemandu
        FROM pembayaran
        JOIN pesan_tour ON pembayaran.idpesan = pesan_tour.idpesan
        JOIN pemandu ON pembayaran.idpemandu = pemandu.idpemandu
        JOIN fotographer ON pembayaran.idfotographer = fotographer.idfotographer
        JOIN tempat_wisata ON pesan_tour.idtempat = tempat_wisata.idtempat
        JOIN transportasi ON pesan_tour.idtransportasi = transportasi.idtransportasi
        JOIN register ON pesan_tour.idregister = register.idregister
        WHERE pembayaran.idbayar = '$idbayar'
    ") or die(mysqli_error($koneksi));

    $data = mysqli_fetch_array($sql);
    
    // Hitung total harga dan gunakan number_format untuk format desimal
    $total_harga = $data['harga_tempat'] + $data['harga_pemandu'];
    $total_harga_formatted = number_format($total_harga, 2); // Menampilkan 3 angka di belakang koma
    ?>

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
                        <a class="nav-link" aria-current="page" href="home_pengunjung.php">Home</a>
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
                <a href="form_bayar.php"><button class="btn btn-primary" type="button">Kembali</button></a>
                <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- FIRST LAYOUT -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" class="form-horizontal mt-2" action="insert.php?status=totalan">
                    <h3>Rincian Pesanan Anda</h3>
                    <div class="form-group">
                        <label class="col-sm-4 control-label mt-3">Nama Lengkap</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" name="idbayar" value="<?= $data['idbayar'] ?>">
                            <input type="text" class="form-control" name="nmlengkap" readonly value="<?= $data['nmlengkap'] ?>">
                        </div>

                        <label class="col-sm-2 control-label mt-3">E-mail</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" readonly value="<?= $data['email'] ?>">
                        </div>

                        <label class="col-sm-6 control-label mt-3">Destinasi Anda</label>
                        <label class="col-sm-5 control-label mt-1">Harga</label>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="nmtempat" readonly value="<?= $data['nmtempat'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="harga_tempat" readonly value="<?= $data['harga_tempat'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <label class="col-sm-4 control-label mt-3">Transportasi Anda </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="jenis_transportasi" readonly value="<?= $data['jenis_transportasi'] ?>">
                    </div>
                    <center>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="tgl_berangkat" class="form-label">Tanggal Berangkat</label>
                                        <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" readonly value="<?= $data['tgl_berangkat'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
            </div>

            <div class="col-md-6">
                <div class="mt-2"></div>
                <label class="col-sm-4 control-label mt-3">Pemandu</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="pengalaman" readonly value="<?= $data['pengalaman'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Nama Pemandu" readonly aria-label="nmpemandu" id="nmpemandu" value="<?= $data['nmpemandu'] ?>" readonly>
                    </div>

                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Harga" readonly aria-label="harga_pemandu" id="harga_pemandu" value="<?= $data['harga_pemandu'] ?>" readonly>
                    </div>
                </div>

                <label class="col-sm-4 control-label mt-3">Fotographer</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="kelas" readonly value="<?= $data['kelas'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Nama Fotographer" aria-label="nmfotographer" id="nmfotographer" readonly value="<?= $data['nmfotographer'] ?>" readonly>
                    </div>
                </div>

                <label class="col-sm-4 control-label mt-3">Metode Pembayaran :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="metode_bayar" readonly value="<?= $data['metode_bayar'] ?>">
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <center><label for="tgl_bayar" class="form-label">Tanggal Bayar</label></center>
                                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" readonly value="<?= $data['tgl_bayar'] ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <center><label for="total" class="form-label">Total</label></center>
                                <input type="text" class="form-control" id="total" name="total" value="<?= $total_harga_formatted ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <center>
                    <div class="form md-2">
                        <div class="col-sm-offset-2 mt-2">
                            <button class="btn btn-success" style="width : 20%" type="submit">Bayar </button>
                            <a href="../PROJEK UAS/upload/form_upload.php"><button class="btn btn-outline-primary m-3" style="width : 25%" type="button">Upload Bukti</button></a>
                        </div>
                    </div>
                </center>
            </div>
            <!-- </form> -->
        </div>
    </div>
    <!-- END LAYOUT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>