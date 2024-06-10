<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Buku Tamu.</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN ADMIN</h4>
                <div class="card">
                    <div class="card-header text-center">
                        <h5>login sebagai admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses-login-admin.php" method="post">
                            <div class="form-group mb-2">
                                <label>username</label>
                                <input type="text" name="username" class="form-control" placeholder="masukkan Username anda..." required>
                            </div>
                            <div class="form-group mb-2">
                                <label>password</label>
                                <input type="password" name="password" class="form-control" placeholder="masukkan password anda..." required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> LOGIN </button>
                            </div>
                            <a href="index2.php"> LOGIN SEBAGAI TAMU</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>