<?php
require 'Model.php';
$buku_list = getBuku();

if (isset($_GET['id_hapus'])) {
    deleteBuku($_GET['id_hapus']);
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; color: #333; }
        .container { max-width: 900px; margin: auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); animation: fadeIn 0.6s ease-in-out; }
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(-10px); } 100% { opacity: 1; transform: translateY(0); } }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #007bff; color: white; }
        tr:hover { background-color: #f1f1f1; transition: background 0.3s; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; color: white; display: inline-block; transition: transform 0.2s, background 0.3s; }
        .btn:hover { transform: scale(1.05); }
        .btn-add { background-color: #28a745; margin-bottom: 15px; }
        .btn-add:hover { background-color: #218838; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-edit:hover { background-color: #e0a800; }
        .btn-delete { background-color: #dc3545; }
        .btn-delete:hover { background-color: #c82333; }
        .nav-back { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #007bff; font-weight: bold; margin-right: 15px; }
        .nav-back:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Buku</h2>
        <a href="index.php" class="nav-back">Kembali ke Dashboard</a>
        <a href="FormBuku.php" class="btn btn-add">Tambah Buku</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($buku_list as $buku): ?>
            <tr>
                <td><?= $buku['id_buku'] ?></td>
                <td><?= $buku['judul_buku'] ?></td>
                <td><?= $buku['penulis'] ?></td>
                <td><?= $buku['penerbit'] ?></td>
                <td><?= $buku['tahun_terbit'] ?></td>
                <td>
                    <a href="FormBuku.php?id_buku=<?= $buku['id_buku'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Buku.php?id_hapus=<?= $buku['id_buku'] ?>" class="btn btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>