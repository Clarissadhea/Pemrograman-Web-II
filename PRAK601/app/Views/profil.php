<?php
/**
 * @var string $nama
 * @var string $nim
 * @var string $prodi
 * @var string $hobi
 * @var string $skill
 */
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-lg-7">
        <div class="card card-custom">
            <div class="card-header card-header-custom p-4 text-center">
                <h4 class="mb-0 fw-bold tracking-wide">Profil Praktikan</h4>
            </div>
            <div class="card-body p-4 bg-white">
                
                <div class="text-center mb-4 mt-2">
                    <img src="/profil.jpeg" alt="Foto Profil" class="rounded-circle shadow-sm" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid var(--pink-lavender);">
                </div>
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <th width="35%" class="text-muted pb-3">Nama Lengkap</th>
                            <td class="fw-bold text-space-cadet pb-3"><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted pb-3">NIM</th>
                            <td class="text-space-cadet fw-semibold pb-3"><?= $nim; ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted pb-3">Asal Prodi</th>
                            <td class="text-space-cadet pb-3"><?= $prodi; ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted pb-3">Hobi</th>
                            <td class="text-space-cadet pb-3"><?= $hobi; ?></td>
                        </tr>
                        <tr>
                            <th class="text-muted align-middle">Skill Utama</th>
                            <td>
                                <?php 
                                $skills = explode(',', $skill); 
                                foreach($skills as $s): 
                                ?>
                                    <span class="badge badge-custom me-1 mb-1 px-3 py-2 rounded-pill">
                                        <?= trim($s); ?>
                                    </span>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-pink-lavender text-center border-0 p-3">
                <small class="text-space-cadet fw-semibold">Modul 6 - Pemrograman Web II</small>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>