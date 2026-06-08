<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container" style="max-width: 400px; margin-top: 100px;">
    <h2>Welcome!</h2>
    <p style="text-align: center; color: #d05b74;">Silakan masuk untuk mengelola koleksi manismu.</p>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-error">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="/loginProcess" method="post">
        <label><b>Username</b></label>
        <input type="text" name="username" placeholder="Masukkan username..." required>
        
        <label><b>Password</b></label>
        <input type="password" name="password" placeholder="Masukkan password..." required>
        
        <button type="submit" class="btn" style="width: 100%; font-size: 1.1em; margin-top: 10px;">Masuk</button>
    </form>
</div>
<?= $this->endSection() ?>