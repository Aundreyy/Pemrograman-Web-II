<?php
date_default_timezone_set('Asia/Makassar');
require 'Model.php';

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tgl_mendaftar = date('Y-m-d\TH:i');
$tgl_terakhir_bayar = date('Y-m-d');

if (isset($_GET['id_member'])) {
    $id = $_GET['id_member'];
    $member = getMemberById($id);
    $nama = $member['nama_member'];
    $nomor = $member['nomor_member'];
    $alamat = $member['alamat'];
    $tgl_mendaftar = date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar']));
    $tgl_terakhir_bayar = $member['tgl_terakhir_bayar'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if (!empty($_POST['id_member'])) {
        updateMember($_POST['id_member'], $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
    header("Location: Member.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select, textarea { width: 100%; padding: 10px; margin: 8px 0 15px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; }
        button:hover { background-color: #218838; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Member</h2>
        <form method="POST">
            <input type="hidden" name="id_member" value="<?= $id ?>">
            
            <label>Nama Member</label>
            <input type="text" name="nama" value="<?= $nama ?>" required>
            
            <label>Nomor Member</label>
            <input type="text" name="nomor" value="<?= $nomor ?>" required>
            
            <label>Alamat</label>
            <textarea name="alamat" rows="3" required><?= $alamat ?></textarea>
            
            <label>Tanggal Mendaftar</label>
            <input type="datetime-local" name="tgl_mendaftar" value="<?= $tgl_mendaftar ?>" required>
            
            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_terakhir_bayar ?>" required>
            
            <button type="submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>