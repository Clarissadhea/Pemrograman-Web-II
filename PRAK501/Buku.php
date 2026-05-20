<?php
require 'Model.php';
$bukus = getBuku();

if (isset($_GET['delete'])) {
    deleteBuku($_GET['delete']);
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Buku Perpustakaan</h2>
            <div>
                <a href="Member.php" class="btn btn-outline-secondary">Data Member</a>
                <a href="Peminjaman.php" class="btn btn-outline-secondary">Data Peminjaman</a>
                <a href="FormBuku.php" class="btn btn-primary">+ Tambah Buku</a>
            </div>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bukus as $row) : ?>
                        <tr>
                            <td><?= $row['id_buku'] ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td><?= $row['penulis'] ?></td>
                            <td><?= $row['penerbit'] ?></td>
                            <td><?= $row['tahun_terbit'] ?></td>
                            <td>
                                <a href="FormBuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="Buku.php?delete=<?= $row['id_buku'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data buku ini?')">Hapus</a>
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