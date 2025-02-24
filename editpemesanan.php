<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGUNJUNG | Form Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include "connection.php";
    $idpesan = $_GET['idpesan'];
    $sql = mysqli_query($koneksi, "SELECT * FROM pesan_tour, register, tempat_wisata, transportasi WHERE pesan_tour.idregister = register.idregister AND pesan_tour.idtempat = tempat_wisata.idtempat AND pesan_tour.idtransportasi = transportasi.idtransportasi AND idpesan = '$idpesan'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_array($sql);
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
    <center>
        <h5>Isi Terlebih Dahulu Data Diri Anda</h5>
        <form method="POST" class="form-horizontal mt-4" action="insert.php?status=editpemesanan">
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Lengkap</label>
                <div class="col-sm-3">
                    <input type="hidden" class="form-control" name="idpesan" value="<?= $data['idpesan'] ?>">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nmlengkap" value="<?= $data['nmlengkap'] ?>" required>
                </div>
                <label class="col-sm-2 control-label mt-3">E-mail</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" placeholder="example@gmail.com" name="email" value="<?= $data['email'] ?>" required>
                </div>
                <label class="col-sm-2 control-label mt-3">Pilih Destinasi Wisata:</label>
                <label class="col-sm-2 control-label mt-1">Harga</label>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="col-md-12 mt-1">
                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example" name="nmtempat" id="nmtempat" required>
                                <option selected disabled>~ Pilih tujuan Anda ~</option>
                                <?php
                                include "connection.php";
                                $query = "SELECT * FROM tempat_wisata";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['idtempat'] . "'>" . $row['nmtempat'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 mt-1">
                        <input type="text" class="form-control" placeholder="" aria-label="harga" id="harga" readonly>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('nmtempat').addEventListener('change', function() {
                    var idTempat = this.value;

                    if (idTempat) {
                        fetch('get_harga.php?idtempat=' + idTempat)
                            .then(response => response.json())
                            .then(data => {
                                if (data && data.harga_tempat !== undefined) {
                                    document.getElementById('harga').value = data.harga_tempat;
                                } else {
                                    document.getElementById('harga').value = 'Harga tidak ditemukan';
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                document.getElementById('harga').value = 'Error';
                            });
                    } else {
                        document.getElementById('harga').value = '';
                    }
                });
            </script>

            <label class="col-sm-2 control-label mt-3">Pilih Transportasi Anda:</label>
            <div class="col-sm-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jenis_transportasi" id="jenis_transportasi" required>
                    <option selected disabled>~ Pilih Kendaraan Anda ~</option>
                    <?php
                    include "connection.php";
                    $query = "SELECT * FROM transportasi";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['idtransportasi'] . "'>" . $row['jenis_transportasi'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="mb-1">
                            <label for="tgl_berangkat" class="form-label">Tanggal Berangkat</label>
                            <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" value="<?= $data['tgl_berangkat'] ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 mt-2">
                    <button class="btn btn-danger m-2" type="reset">Reset</button>
                    <button class="btn btn-success" style="width: 7%" type="submit">Daftar</button>
                </div>
            </div>
        </form>

    </center>
    <!-- END LAYOUT -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>