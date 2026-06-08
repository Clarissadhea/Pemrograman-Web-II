<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container" style="max-width: 500px;">
    <h2>Edit Data Buku</h2>

    <form action="/buku/update/<?= $buku['id'] ?>" method="post">
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?= $buku['judul'] ?>" required>
        
        <label>Penulis</label>
        <input type="text" name="penulis" value="<?= $buku['penulis'] ?>" required>
        
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?>" required>
        
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" required>
        
        <div style="display: flex; gap: 10px; margin-top: 10px;">
            <button type="submit" class="btn" style="flex: 1;">Update Data</button>
            <a href="/buku" class="btn btn-secondary" style="flex: 1; text-align: center;">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>