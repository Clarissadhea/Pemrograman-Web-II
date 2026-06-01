<?php
/**
 * @var string $nama
 * @var string $nim
 */
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row align-items-center mt-5">
    <div class="col-lg-8 mx-auto text-center">
        <div class="p-5 bg-white card-custom">
            <h1 class="display-5 fw-bold text-space-cadet mb-3">Selamat Datang!</h1>
            <p class="lead text-muted mb-5">
                Halo, ini adalah halaman beranda untuk modul 6.
            </p>
            
            <div class="d-inline-block px-5 py-4 bg-pink-lavender rounded-4 mb-5 shadow-sm">
                <h4 class="mb-2 text-space-cadet fw-bold"><?= $nama; ?></h4>
                <p class="mb-0 text-space-cadet fs-5">NIM: <strong><?= $nim; ?></strong></p>
            </div>
            
            <br>
            <a href="/profil" class="btn btn-custom px-5 py-3 rounded-pill shadow-sm fw-bold">
                Lihat Profil Lengkap
            </a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>