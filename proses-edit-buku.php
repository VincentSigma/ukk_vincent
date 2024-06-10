<?php

$id_tamu = $_GET['id_tamu'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$asal_tamu = $_POST['asal_tamu'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include 'koneksi.php';
$sql = "UPDATE tamu SET nama='$nama', email='$email', asal_tamu='$asal_tamu', pekerjaan='$pekerjaan', keperluan='$keperluan' WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=buku');
    </script>";
}