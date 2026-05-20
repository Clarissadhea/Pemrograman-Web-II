<?php
require 'Model.php';

date_default_timezone_set('Asia/Makassar'); 

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tgl_daftar = date('Y-m-d\TH:i'); 
$tgl_bayar = date('Y-m-d'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getMemberById($id);
    if ($data) {
        $nama = $data['nama_member'];
        $nomor = $data['nomor_member'];
        $alamat = $data['alamat'];
        $tgl_daftar = date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar'])); 
        $tgl_bayar = $data['tgl_bayar'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['id_member'] == '') {
        addMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
    } else {
        updateMember($_POST['id_member'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
    }
    header("Location: Member.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><?= $id ? 'Edit' : 'Tambah' ?> Data Member</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id_member" value="<?= $id ?>">
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Member</label>
                                <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required maxlength="250">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Member</label>
                                <input type="text" name="nomor" class="form-control" value="<?= $nomor ?>" required maxlength="15">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" required><?= $alamat ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Mendaftar</label>
                                <input type="datetime-local" name="tgl_daftar" class="form-control" value="<?= $tgl_daftar ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Bayar</label>
                                <input type="date" name="tgl_bayar" class="form-control" value="<?= $tgl_bayar ?>" required>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            <a href="Member.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>