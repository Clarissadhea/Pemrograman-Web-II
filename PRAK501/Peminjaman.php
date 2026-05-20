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
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Peminjaman Buku</h2>
            <div>
                <a href="Member.php" class="btn btn-outline-secondary">Data Member</a>
                <a href="Buku.php" class="btn btn-outline-secondary">Data Buku</a>
                <a href="FormPeminjaman.php" class="btn btn-primary">+ Catat Peminjaman</a>
            </div>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Nama Member</th>
                            <th>Judul Buku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peminjaman as $row) : ?>
                        <tr>
                            <td><?= $row['id_peminjaman'] ?></td>
                            <td><?= $row['tgl_pinjam'] ?></td>
                            <td><?= $row['tgl_kembali'] ?></td>
                            <td><?= $row['nama_member'] ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td>
                                <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="Peminjaman.php?delete=<?= $row['id_peminjaman'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data transaksi ini?')">Hapus</a>
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