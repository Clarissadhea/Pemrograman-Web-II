<?php
require 'Model.php';

$id = '';
$judul = '';
$penulis = '';
$penerbit = '';
$tahun = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getBukuById($id);
    if ($data) {
        $judul = $data['judul_buku'];
        $penulis = $data['penulis'];
        $penerbit = $data['penerbit'];
        $tahun = $data['tahun_terbit'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['id_buku'] == '') {
        addBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    } else {
        updateBuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    }
    header("Location: Buku.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php require 'Navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-custom p-4">
                    <h4 class="fw-bold text-dark mb-4"><?= $id ? 'Edit' : 'Tambah' ?> Data Buku</h4>
                    <form action="" method="POST">
                        <input type="hidden" name="id_buku" value="<?= $id ?>">
                        
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" value="<?= $judul ?>" required maxlength="500">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?= $penulis ?>" required maxlength="500">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" value="<?= $penerbit ?>" required maxlength="250">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="number" name="tahun" class="form-control" value="<?= $tahun ?>" required>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="Buku.php" class="btn btn-light border text-dark">Batal</a>
                            <button type="submit" class="btn btn-custom btn-primary-custom">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>