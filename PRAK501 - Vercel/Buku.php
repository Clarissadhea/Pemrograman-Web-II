<?php
require 'Model.php';
$buku = getBuku();

if (isset($_GET['delete'])) {
    deleteBuku($_GET['delete']);
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require 'Navbar.php'; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark mb-0">Data Buku Perpustakaan</h3>
            <a href="FormBuku.php" class="btn btn-custom btn-primary-custom">+ Tambah Buku</a>
        </div>
        
        <div class="card card-custom">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $row) : ?>
                        <tr>
                            <td class="fw-bold text-secondary">#<?= $row['id_buku'] ?></td>
                            <td class="fw-medium text-dark"><?= $row['judul_buku'] ?></td>
                            <td><?= $row['penulis'] ?></td>
                            <td><?= $row['penerbit'] ?></td>
                            <td><span class="badge bg-light text-dark border"><?= $row['tahun_terbit'] ?></span></td>
                            <td class="text-center">
                                <a href="FormBuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-warning btn-action text-dark fw-medium">Edit</a>
                                <a href="Buku.php?delete=<?= $row['id_buku'] ?>" class="btn btn-danger btn-action fw-medium" onclick="return confirm('Yakin hapus data buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>