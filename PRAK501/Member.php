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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require 'Navbar.php'; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark mb-0">Data Member Perpustakaan</h3>
            <a href="FormMember.php" class="btn btn-custom btn-primary-custom">+ Tambah Member</a>
        </div>
        
        <div class="card card-custom">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor Member</th>
                            <th>Alamat</th>
                            <th>Tgl Mendaftar</th>
                            <th>Tgl Terakhir Bayar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $row) : ?>
                        <tr>
                            <td class="fw-bold text-secondary">#<?= $row['id_member'] ?></td>
                            <td class="fw-medium text-dark"><?= $row['nama_member'] ?></td>
                            <td><span class="badge bg-light text-dark border"><?= $row['nomor_member'] ?></span></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= date('d M Y, H:i', strtotime($row['tgl_mendaftar'])) ?></td>
                            <td><?= date('d M Y', strtotime($row['tgl_terakhir_bayar'])) ?></td>
                            <td class="text-center">
                                <a href="FormMember.php?id=<?= $row['id_member'] ?>" class="btn btn-warning btn-action text-dark fw-medium">Edit</a>
                                <a href="Member.php?delete=<?= $row['id_member'] ?>" class="btn btn-danger btn-action fw-medium" onclick="return confirm('Yakin hapus data member ini?')">Hapus</a>
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