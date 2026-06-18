<?php
require 'Koneksi.php';

function getMembers() {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = getKoneksi();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = getKoneksi();
    $sql = "UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
}

function deleteMember($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

function getBuku() {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM buku");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBukuById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $pdo = getKoneksi();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun]);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $pdo = getKoneksi();
    $sql = "UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun, $id]);
}

function deleteBuku($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

function getPeminjaman() {
    $pdo = getKoneksi();
    $sql = "SELECT p.*, m.nama_member, b.judul_buku 
            FROM peminjaman p 
            JOIN member m ON p.id_member = m.id_member 
            JOIN buku b ON p.id_buku = b.id_buku";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPeminjamanById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = getKoneksi();
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = getKoneksi();
    $sql = "UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deletePeminjaman($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}
?>