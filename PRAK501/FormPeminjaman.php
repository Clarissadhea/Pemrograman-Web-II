<?php
require 'Model.php';

date_default_timezone_set('Asia/Makassar');

$id = '';
$tgl_pinjam = date('Y-m-d'); 
$tgl_kembali = date('Y-m-d', strtotime('+7 days')); 
$id_member = '';
$id_buku = '';

$data_members = getMembers();
$data_bukus = getBuku();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getPeminjamanById($id);
    if ($data) {
        $tgl_pinjam = $data['tgl_pinjam'];
        $tgl_kembali = $data['tgl_kembali'];
        $id_member = $data['id_member'];
        $id_buku = $data['id_buku'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['id_peminjaman'] == '') {
        addPeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali'], $_POST['id_member'], $_POST['id_buku']);
    } else {
        updatePeminjaman($_POST['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali'], $_POST['id_member'], $_POST['id_buku']);
    }
    header("Location: Peminjaman.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require 'Navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-custom p-4">
                    <h4 class="fw-bold text-dark mb-4"><?= $id ? 'Edit' : 'Tambah' ?> Data Peminjaman</h4>
                    <form action="" method="POST">
                        <input type="hidden" name="id_peminjaman" value="<?= $id ?>">
                        
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" value="<?= $tgl_pinjam ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" value="<?= $tgl_kembali ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Pilih Member</label>
                            <select name="id_member" class="form-select form-control" required>
                                <option value="" disabled <?= $id ? '' : 'selected' ?>>-- Pilih Member --</option>
                                <?php foreach ($data_members as $m) : ?>
                                    <option value="<?= $m['id_member'] ?>" <?= ($m['id_member'] == $id_member) ? 'selected' : '' ?>>
                                        <?= $m['nama_member'] ?> (<?= $m['nomor_member'] ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Pilih Buku</label>
                            <select name="id_buku" class="form-select form-control" required>
                                <option value="" disabled <?= $id ? '' : 'selected' ?>>-- Pilih Buku --</option>
                                <?php foreach ($data_bukus as $b) : ?>
                                    <option value="<?= $b['id_buku'] ?>" <?= ($b['id_buku'] == $id_buku) ? 'selected' : '' ?>>
                                        <?= $b['judul_buku'] ?> - <?= $b['penulis'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="Peminjaman.php" class="btn btn-light border text-dark">Batal</a>
                            <button type="submit" class="btn btn-custom btn-primary-custom">Simpan Transaksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>