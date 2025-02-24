<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGUNJUNG | Form Pembayaran</title>
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
                <a href="form_pesan.php"><button class="btn btn-primary" type="button">Kembali</button></a>
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
                <form method="POST" class="form-horizontal mt-2" action="insert.php?status=pembayaran">
                    <h3>Cek Kembali Pesanan Anda..😁👌</h3>
                    <div class="form-group">
                        <label class="col-sm-4 control-label mt-3">Nama Lengkap</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" name="idpesan" value="<?= $data['idpesan'] ?>">
                            <input type="text" class="form-control" name="nmlengkap" value="<?= $data['nmlengkap'] ?>">
                        </div>

                        <label class="col-sm-2 control-label mt-3">E-mail</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>">
                        </div>

                        <label class="col-sm-6 control-label mt-3">Destinasi Anda</label>
                        <label class="col-sm-5 control-label mt-1">Harga</label>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="nmtempat" value="<?= $data['nmtempat'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="harga_tempat" value="<?php echo $data['harga_tempat'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <label class="col-sm-4 control-label mt-3">Transportasi Anda </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="jenis_transportasi" value="<?= $data['jenis_transportasi'] ?>">
                    </div>
                    <center>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="tgl_berangkat" class="form-label">Tanggal Berangkat</label>
                                        <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" value="<?= $data['tgl_berangkat'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-4 d-md-block">
                            <a href="editpemesanan.php?idpesan=<?= $idpesan ?>"><button class="btn btn-warning" type="button">Edit Pemesanan</button></a>
                        </div>
                    </center>
            </div>

            <div class="col-md-6">
                <div class="mt-2"></div>
                <h3>Form Pembayaran💲</h3>
                <label class="col-sm-4 control-label mt-3">Pilih Pemandu</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example" name="pengalaman" id="pengalaman" required>
                                <option selected disabled class="text-center" required>~ Pilih Pemandu ~</option>
                                <?php
                                // $ht
                                $query = "SELECT * FROM pemandu";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['idpemandu'] . "'>" . $row['pengalaman'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Nama Pemandu" aria-label="nmpemandu" id="nmpemandu" readonly>
                    </div>

                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Harga" aria-label="harga_pemandu" id="harga_pemandu" readonly>
                    </div>
                </div>

                <script>
                    document.getElementById('pengalaman').addEventListener('change', function() {
                        var idPemandu = this.value;
                        if (idPemandu) {
                            fetch('get_pemandu.php?idpemandu=' + idPemandu)
                                .then(response => response.json())
                                .then(data => {
                                    if (data) {
                                        if (data.nmpemandu !== undefined) {
                                            document.getElementById('nmpemandu').value = data.nmpemandu;
                                        } else {
                                            document.getElementById('nmpemandu').value = 'Nama tidak ditemukan';
                                        }

                                        if (data.harga_pemandu !== undefined) {
                                            document.getElementById('harga_pemandu').value = data.harga_pemandu;
                                        } else {
                                            document.getElementById('harga_pemandu').value = 'Tidak Valid';
                                        }
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    document.getElementById('nmpemandu').value = 'Error';
                                    document.getElementById('harga_pemandu').value = 'Error';
                                });
                        } else {
                            document.getElementById('nmpemandu').value = '';
                            document.getElementById('harga_pemandu').value = '';
                        }
                    });
                </script>

                <label class="col-sm-4 control-label mt-3">Pilih Fotographer : </label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example" name="kelas" id="kelas" required>
                                <option selected disabled class="">~ Pilih Fotographer ~</option>
                                <?php
                                include "connection.php";
                                $query = "SELECT * FROM fotographer";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['idfotographer'] . "'>" . $row['kelas'] . "</option>";
                                }
                                ?>
                                </td>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <input type="text" class="form-control" placeholder="Nama Fotographer" aria-label="nmfotographer" id="nmfotographer" readonly>
                    </div>
                </div>

                <script>
                    document.getElementById('kelas').addEventListener('change', function() {
                        var idKelas = this.value;

                        if (idKelas) {
                            fetch('get_kelas.php?idfotographer=' + idKelas)
                                .then(response => response.json())
                                .then(data => {
                                    if (data && data.nmfotographer !== undefined) {
                                        document.getElementById('nmfotographer').value = data.nmfotographer;
                                    } else {
                                        document.getElementById('nmfotographer').value = 'Nama tidak ditemukan';
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    document.getElementById('nmfotographer').value = 'Error saat mengambil data';
                                });
                        } else {
                            document.getElementById('nmfotographer').value = '';
                        }
                    });
                </script>

                <label class="col-sm-4 control-label mt-3">Metode Pembayaran :</label>
                <div class="col-sm-6">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="metode_bayar" id="metode_bayar" required>
                        <option class="text-center" selected disabled>~ Pilih Metode Pembayaran ~</option>
                        <option class="text-center">Tunai</option>
                        <option class="text-center">COD (Cash On Duel)</option>
                        <option class="text-center">Transfer : Mandiri</option>
                        <option class="text-center">Transfer : BNI</option>
                        <option class="text-center">Transfer : BRI</option>
                        <option class="text-center">Transfer : BCA</option>
                        <option class="text-center">Transfer : BTN</option>
                        <option class="text-center">Transfer : Bank Jatim</option>
                    </select>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <center><label for="tgl_bayar" class="form-label">Tanggal Bayar</label></center>
                                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" required>
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <div class="form md-2">
                        <div class="col-sm-offset-2 mt-2">
                            <button class="btn btn-success" style="width : 20%" type="submit">Next</button>
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