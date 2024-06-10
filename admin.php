<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Buku Tamu Sekolah.</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
       
        <h3>APLIKASI BUKU SEKOLAH</h3>
        <div class="alert alert-info">
            ANDA LOGIN SEBAGAI <b>ADMIN</b> APLIKASI BUKU TAMU SEKOLAH
        </div>
        <a href="admin.php" class="btn btn-primary"> Admin </a>
        <a href="admin.php?url=buku" class="btn btn-primary"> Buku Tamu </a>
        
        <a href="admin.php?url=logout" class="btn btn-primary"> Log Out </a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- isi web -->
                <?php
                    $file = @$_GET['url'];
                    if(empty($file)){
                        echo "<h4> Selamat Datang Di Halaman Admin </h4>";
                        echo "Aplikasi BUKU TAMU SEKOLAH";
                    } else {
                        include $file.'.php';
                    }
                ?>
            </div>
        </div>

    </div>    


<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>