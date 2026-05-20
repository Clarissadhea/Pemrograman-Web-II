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
    <title>Form Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><?= $id ? 'Edit' : 'Tambah' ?> Data Buku</h4>
                    </div>
                    <div class="card-body">
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
                            <div class="mb-3">
                                <label class="form-label">Tahun Terbit</label>
                                <input type="number" name="tahun" class="form-control" value="<?= $tahun ?>" required>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            <a href="Buku.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>