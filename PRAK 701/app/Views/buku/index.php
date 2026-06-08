<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="nav">
    <a href="/buku">Koleksi</a>
    <a href="/logout" style="color: #ffe4e1;">Logout</a>
</div>

<div class="container" style="max-width: 1000px;">
    <h2>Koleksi Buku</h2>
    
    <div style="text-align: right; margin-bottom: 15px;">
        <a href="/buku/create" class="btn">+ Tambah Buku Baru</a>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            🌸 <b>Yey!</b> <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th style="text-align: center;">Aksi Manis</th>
        </tr>
        <?php $no=1; foreach($buku as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><b><?= $row['judul'] ?></b></td>
            <td><?= $row['penulis'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun_terbit'] ?></td>
            <td style="text-align: center;">
                <a href="/buku/edit/<?= $row['id'] ?>" class="btn" style="padding: 5px 15px; font-size: 0.9em;">Edit</a>
                <a href="/buku/delete/<?= $row['id'] ?>" class="btn btn-danger" style="padding: 5px 15px; font-size: 0.9em;" onclick="return confirm('Yakin ingin membuang buku ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>