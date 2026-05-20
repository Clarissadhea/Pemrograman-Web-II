<?php
require_once 'Koneksi.php';

function getMembers() {
    $conn = getConnection();
    $stmt = $conn->query("SELECT * FROM member");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $conn = getConnection();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_bayar) 
            VALUES (:nama, :nomor, :alamat, :tgl_mendaftar, :tgl_bayar)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['nama' => $nama, 'nomor' => $nomor, 'alamat' => $alamat, 'tgl_mendaftar' => $tgl_mendaftar, 'tgl_bayar' => $tgl_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $conn = getConnection();
    $sql = "UPDATE member SET nama_member=:nama, nomor_member=:nomor, alamat=:alamat, 
            tgl_mendaftar=:tgl_mendaftar, tgl_bayar=:tgl_bayar WHERE id_member=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id, 'nama' => $nama, 'nomor' => $nomor, 'alamat' => $alamat, 'tgl_mendaftar' => $tgl_mendaftar, 'tgl_bayar' => $tgl_bayar]);
}

function deleteMember($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member = :id");
    $stmt->execute(['id' => $id]);
}

function getMemberById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getBuku() {
    $conn = getConnection();
    $stmt = $conn->query("SELECT * FROM buku");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = getConnection();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (:judul, :penulis, :penerbit, :tahun)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['judul' => $judul, 'penulis' => $penulis, 'penerbit' => $penerbit, 'tahun' => $tahun]);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = getConnection();
    $sql = "UPDATE buku SET judul_buku=:judul, penulis=:penulis, penerbit=:penerbit, tahun_terbit=:tahun WHERE id_buku=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id, 'judul' => $judul, 'penulis' => $penulis, 'penerbit' => $penerbit, 'tahun' => $tahun]);
}

function deleteBuku($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku = :id");
    $stmt->execute(['id' => $id]);
}

function getBukuById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPeminjaman() {
    $conn = getConnection();
    $sql = "SELECT p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali, m.nama_member, b.judul_buku 
            FROM peminjaman p 
            JOIN member m ON p.id_member = m.id_member 
            JOIN buku b ON p.id_buku = b.id_buku";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addPeminjaman($tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = getConnection();
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member, id_buku) VALUES (:pinjam, :kembali, :member, :buku)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['pinjam' => $tgl_pinjam, 'kembali' => $tgl_kembali, 'member' => $id_member, 'buku' => $id_buku]);
}

function updatePeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = getConnection();
    $sql = "UPDATE peminjaman SET tgl_pinjam=:pinjam, tgl_kembali=:kembali, id_member=:member, id_buku=:buku WHERE id_peminjaman=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id, 'pinjam' => $tgl_pinjam, 'kembali' => $tgl_kembali, 'member' => $id_member, 'buku' => $id_buku]);
}

function deletePeminjaman($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = :id");
    $stmt->execute(['id' => $id]);
}

function getPeminjamanById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
