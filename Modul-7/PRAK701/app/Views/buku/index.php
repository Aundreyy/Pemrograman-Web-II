<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; color: white; display: inline-block; margin-bottom: 10px; }
        .btn-tambah { background-color: #28a745; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-hapus { background-color: #dc3545; }
        .btn-logout { background-color: #6c757d; float: right; }
        .alert-success { padding: 10px; background-color: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 15px; }
    </style>
</head>
<body>

    <a href="/logout" class="btn btn-logout">Logout</a>
    <h2>Daftar Buku</h2>

    <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert-success"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>

    <a href="/buku/create" class="btn btn-tambah">+ Tambah Data Buku</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($buku as $b): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['judul']; ?></td>
                <td><?= $b['penulis']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td>
                    <a href="/buku/edit/<?= $b['id']; ?>" class="btn btn-edit">Edit</a>
                    <form action="/buku/<?= $b['id']; ?>" method="post" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            
            <?php if(empty($buku)): ?>
            <tr>
                <td colspan="6" style="text-align: center;">Belum ada data buku.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>