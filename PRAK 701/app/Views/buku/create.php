<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container" style="max-width: 500px;">
    <h2>Tambah Buku Baru</h2>
    <p style="text-align: center;">Buku apa yang ingin kamu tambahkan ke koleksi?</p>

    <?php if(session()->has('errors')): ?>
        <div class="alert alert-error" style="text-align: left;">
            <ul style="margin: 0; padding-left: 20px;">
                <?php foreach(session('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/buku/store" method="post">
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?= old('judul') ?>">
        <?php if(isset(session('errors')['judul'])): ?>
            <div style="color: #d9534f; font-size: 0.85em; margin-top: -15px; margin-bottom: 15px;">* <?= session('errors')['judul'] ?></div>
        <?php endif; ?>
        
        <label>Penulis</label>
        <input type="text" name="penulis" value="<?= old('penulis') ?>">
        <?php if(isset(session('errors')['penulis'])): ?>
            <div style="color: #d9534f; font-size: 0.85em; margin-top: -15px; margin-bottom: 15px;">* <?= session('errors')['penulis'] ?></div>
        <?php endif; ?>
        
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?= old('penerbit') ?>">
        <?php if(isset(session('errors')['penerbit'])): ?>
            <div style="color: #d9534f; font-size: 0.85em; margin-top: -15px; margin-bottom: 15px;">* <?= session('errors')['penerbit'] ?></div>
        <?php endif; ?>
        
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="<?= old('tahun_terbit') ?>">
        <?php if(isset(session('errors')['tahun_terbit'])): ?>
            <div style="color: #d9534f; font-size: 0.85em; margin-top: -15px; margin-bottom: 15px;">* <?= session('errors')['tahun_terbit'] ?></div>
        <?php endif; ?>
        
        <div style="display: flex; gap: 10px; margin-top: 10px;">
            <button type="submit" class="btn" style="flex: 1;">Simpan</button>
            <a href="/buku" class="btn btn-secondary" style="flex: 1; text-align: center;">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>