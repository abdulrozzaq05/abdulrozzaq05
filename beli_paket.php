<?php
include "connection.php";

// Mendapatkan parameter row dari URL
$row_num = isset($_GET['row']) ? intval($_GET['row']) : 1;  // Default ke baris pertama jika tidak ada parameter

// Mengambil data baris tertentu dari tabel paket
$sql = "SELECT * FROM paket LIMIT 1 OFFSET " . ($row_num - 1);
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Mengambil data baris
    $row = $result->fetch_assoc();
    $idpaket = $row['idpaket'];
    $nmpaket = $row['nmpaket'];
    $jenis_paket = $row['jenis_paket'];
    $harga_paket = $row['harga_paket'];
} else {
    echo "0 results";
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Beli Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <a href="daftar_paket.php"><button class="btn btn-primary" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- FIRST LAYOUT -->
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-5">
                <p>
                <h3>Paket Liburan</h3>
                </p>
                <form method="POST" class="form-horizontal" action="insert.php?status=belipaket">
                    <div class="form-group mt-1">
                        <label class="control-label">Nama Paket Wisata</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" name="idpaket" readonly value="<?php echo $idpaket; ?>">
                            <input type="text" class="form-control" name="nmpaket" readonly value="<?php echo $nmpaket; ?>">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Jenis Paket Wisata</label>
                        <input type="text" class="form-control" name="jenis_paket" readonly value="<?php echo $jenis_paket; ?>">
                    </div>
                    <div class="form-group col-sm-3">
                        <label class="control-label">Harga Paket</label>
                        <input type="text" class="form-control" name="harga_paket" readonly value="<?php echo $harga_paket; ?>">
                    </div>
                    <!-- </form> -->
            </div>

            <!-- Form Pembayaran -->
            <div class="col-md-6">
                <div class="mt-3">
                    <h3>Masukkan Data Diri Anda</h3>
                    <div class="form-group mt-3">
                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nmlengkap" required>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label class="col-sm-3 control-label">E-mail</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" placeholder="example@gmail.com" name="email" required>
                        </div>
                    </div>
                </div>

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
                                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group mt-4">
                    <div class="d-flex justify-content-left">
                        <button class="btn btn-danger me-3" style="width : 15%" type="reset">Reset</button>
                        <button class="btn btn-success" style="width : 20%" type="submit">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LAYOUT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>