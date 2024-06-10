<h5>Halaman Buku Tamu.</h5>
<a href="?url=tambah-buku" class="btn btn-primary"> Tambah buku tamu </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama</td>
        <td>email</td>
        <td>asal Tamu</td>
        <td>pekerjaan</td>
        <td>keperluan</td>
        <td>+</td>
        <td>-</td>
    </tr>
    <?php

    include'koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM tamu ORDER BY id_tamu DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['asal_tamu'] ?></td>
            <td><?= $data['pekerjaan'] ?></td>
            <td><?= $data['keperluan'] ?></td>
            <td>
               <a href="?url=edit-buku&id_tamu=<?= $data['id_tamu'] ?>" class='btn btn-warning'>EDIT</a> 
            </td>
            <td>
               <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" 
               href="?url=hapus-buku&id_tamu=<?= $data['id_tamu'] ?>" class='btn btn-danger'>HAPUS</a> 
            </td>
        </tr>
    <?php } ?>

</table>