<?php






    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $asal_tamu = $_POST['asal_tamu'];
    $pekerjaan = $_POST['pekerjaan'];
    $keperluan = $_POST['keperluan'];

  



    include'koneksi.php';
    $sql = "INSERT INTO tamu(nama,email,asal_tamu,pekerjaan,keperluan) VALUES('$nama','$email','$asal_tamu','$pekerjaan','$keperluan')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("Location:?url=buku");
    }else{
        echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=buku');</script>";
    }


?>