<?php
$id_tamu = $_GET['id_tamu'];
include'koneksi.php';
$sql = "SELECT * FROM tamu WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Kamar.</h5>
<a href="?url=buku" class="btn btn-primary"> KEMBALI </a>
<hr>
<form action="?url=proses-edit-buku&id_tamu=<?= $id_tamu; ?>" method="post">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>email</label>
        <input value="<?= $data['email'] ?>" type="text" name="email" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Asal</label>
        <input value="<?= $data['asal_tamu'] ?>" type="text" name="asal_tamu" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Pekerjaan</label>
        <input value="<?= $data['pekerjaan'] ?>" type="text" name="pekerjaan" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Keperluan</label>
        <input value="<?= $data['keperluan'] ?>" type="text" name="keperluan" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>