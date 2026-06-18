<?php
date_default_timezone_set('Asia/Makassar');
require 'Model.php';

$id = '';
$id_member = '';
$id_buku = '';
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d', strtotime('+7 days'));

$members = getMembers();
$buku_list = getBuku();

if (isset($_GET['id_peminjaman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman = getPeminjamanById($id);
    $id_member = $peminjaman['id_member'];
    $id_buku = $peminjaman['id_buku'];
    $tgl_pinjam = $peminjaman['tgl_pinjam'];
    $tgl_kembali = $peminjaman['tgl_kembali'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (!empty($_POST['id_peminjaman'])) {
        updatePeminjaman($_POST['id_peminjaman'], $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    }
    header("Location: Peminjaman.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select { width: 100%; padding: 10px; margin: 8px 0 15px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; }
        button:hover { background-color: #0069d9; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Peminjaman</h2>
        <form method="POST">
            <input type="hidden" name="id_peminjaman" value="<?= $id ?>">
            
            <label>Member</label>
            <select name="id_member" required>
                <option value="">Pilih Member</option>
                <?php foreach ($members as $m): ?>
                    <option value="<?= $m['id_member'] ?>" <?= $m['id_member'] == $id_member ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            
            <label>Buku</label>
            <select name="id_buku" required>
                <option value="">Pilih Buku</option>
                <?php foreach ($buku_list as $b): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= $b['id_buku'] == $id_buku ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam ?>" required>
            
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" value="<?= $tgl_kembali ?>" required>
            
            <button type="submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>