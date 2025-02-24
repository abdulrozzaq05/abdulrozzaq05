<head>
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
                <a href="../home_pengunjung.php"><button class="btn btn-primary float-right" type="button">Kembali</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <center>
        <b>
            <H3>FORM UPLOAD</H3>
        </b>
        <form method="POST" class="form-horizontal mt-4" enctype="multipart/form-data" action="aksi_upload.php">
            <div class="form-group">
                <label class="col-sm-4 control-label">
                    <h3>Upload Bukti Pembayaran</h3><br>
                    <h5><i>Screenshot Rincian Pesanan dari Halaman Sebelumnya</i></h5>
                </label>

                <div class="col-sm-4 mt-2">
                    <label class="col-sm-4 control-label mt-3">Nama Lengkap</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control text-center" name="nmlengkap" placeholder="Nama Anda">
                    </div>
                </div>

                <div class="col-sm-3 mt-3">
                    <input type="file" class="form-control" name="uproposal" required>
                </div>
                <div class="form md-2">
                    <div class="col-sm-offset-2 mt-3">
                        <button class="btn btn-success" style="width : 15%" type="submit">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>