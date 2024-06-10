<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN.</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"> 
</head>
<body>
<div class="container mt-5">
    <h3>Aplikasi Buku Tamu.</h3>
    <div class="alert alert-info">
        Anda Login Sebagai User<b></b>
    </div>
    <a href="user.php" class="btn btn-primary"> Home</a>
    <a href="user.php?url=buku" class="btn btn-primary"> Buku Tamu</a>
    <a href="user.php?url=logout" class="btn btn-primary"> Logout</a>


    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Buku Tamu.</h4>";
                echo""; 
            }else{
                include $file.'.php';
            } 
            ?>
        </div>
    </div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>