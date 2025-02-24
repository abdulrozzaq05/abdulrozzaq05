<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
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
                <a href="form_register.php"><button class="btn btn-danger" type="button">Register</button></a>
                <a href="form_login.php"><button class="btn btn-primary" type="button">Login</button></a>
            </div>
            <!-- END BUTTON -->
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- INPUT -->
    <center>
        <h3>Silahkan Registrasi Terlebih Dahulu ✨</h3>
        <form method="POST" class="form-horizontal mt-2" action="aksi_register.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <label class="col-sm-2 control-label mt-2">Password</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="Only number" name="password" required>
                </div>
                <label class="col-sm-2 control-label mt-2">Ulangi Password</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="Only number" name="password2" required>
                </div>
                <label class="col-sm-2 control-label mt-2">Nama Lengkap</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Nama Lengkap Anda" name="nmlengkap" required>
                </div>
                <label class="col-sm-2 control-label mt-2">E-mail</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="example@gmail.com" name="email" required>
                </div>
                <label class="col-sm-2 control-label mt-2">Level</label>
                <div class="col-sm-3 mt-2">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="level">                        
                        <option selected class="text-center" required>Admin</option>
                        <option selected class="text-center" required>Pengunjung</option>
                    </select>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 mt-2">
                    <button class="btn btn-success" type="submit">Register</button>
                </div>
            </div>
        </form>
    </center>
    <!-- END INPUT -->

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- END JAVASCRIPT -->
</body>

</html>