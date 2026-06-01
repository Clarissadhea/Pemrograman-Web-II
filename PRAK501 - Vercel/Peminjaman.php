<?php
require 'Model.php';
$peminjaman = getPeminjaman();

if (isset($_GET['delete'])) {
    deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require 'Navbar.php'; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark mb-0">Data Transaksi Peminjaman</h3>
            <a href="FormPeminjaman.php" class="btn btn-custom btn-primary-custom">+ Catat Peminjaman</a>
        </div>
        
        <div class="card card-custom">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Nama Member</th>
                            <th>Judul Buku</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peminjaman as $row) : ?>
                        <tr>
                            <td class="fw-bold text-secondary">#<?= $row['id_peminjaman'] ?></td>
                            <td><?= date('d M Y', strtotime($row['tgl_pinjam'])) ?></td>
                            <td><?= date('d M Y', strtotime($row['tgl_kembali'])) ?></td>
                            <td class="fw-medium text-dark"><?= $row['nama_member'] ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td class="text-center">
                                <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="btn btn-warning btn-action text-dark fw-medium">Edit</a>
                                <a href="Peminjaman.php?delete=<?= $row['id_peminjaman'] ?>" class="btn btn-danger btn-action fw-medium" onclick="return confirm('Yakin hapus data transaksi ini?')">Hapus</a>
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