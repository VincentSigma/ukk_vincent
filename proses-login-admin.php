<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "select * from petugas where username='$username' and password='$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
   
    
        header('Location:admin.php');
   
} else {
    echo "<script>
    alert ('maaf, login anda gagal, silahkan ulangi lagi');
    window.location.assign('index2.php');
    </script>";
}


?>