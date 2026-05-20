<?php
require 'Model.php';
$members = getMembers();

if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Member Perpustakaan</h2>
            <a href="FormMember.php" class="btn btn-primary">+ Tambah Member</a>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor Member</th>
                            <th>Alamat</th>
                            <th>Tanggal Mendaftar</th>
                            <th>Tanggal Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $row) : ?>
                        <tr>
                            <td><?= $row['id_member'] ?></td>
                            <td><?= $row['nama_member'] ?></td>
                            <td><?= $row['nomor_member'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['tgl_mendaftar'] ?></td>
                            <td><?= $row['tgl_bayar'] ?></td>
                            <td>
                                <a href="FormMember.php?id=<?= $row['id_member'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="Member.php?delete=<?= $row['id_member'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>