<?php
require 'Model.php';

$id = '';
$judul = '';
$penulis = '';
$penerbit = '';
$tahun = '';

if (isset($_GET['id_buku'])) {
    $id = $_GET['id_buku'];
    $buku = getBukuById($id);
    $judul = $buku['judul_buku'];
    $penulis = $buku['penulis'];
    $penerbit = $buku['penerbit'];
    $tahun = $buku['tahun_terbit'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    if (!empty($_POST['id_buku'])) {
        updateBuku($_POST['id_buku'], $judul, $penulis, $penerbit, $tahun);
    } else {
        insertBuku($judul, $penulis, $penerbit, $tahun);
    }
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
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
        <h2>Formulir Buku</h2>
        <form method="POST">
            <input type="hidden" name="id_buku" value="<?= $id ?>">
            
            <label>Judul Buku</label>
            <input type="text" name="judul" value="<?= $judul ?>" required>
            
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= $penulis ?>" required>
            
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= $penerbit ?>" required>
            
            <label>Tahun Terbit</label>
            <input type="number" name="tahun" value="<?= $tahun ?>" required>
            
            <button type="submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>