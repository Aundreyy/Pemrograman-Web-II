<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 10px 15px; border: none; border-radius: 4px; color: white; cursor: pointer; }
        .btn-submit { background-color: #28a745; }
        .btn-kembali { background-color: #6c757d; text-decoration: none; display: inline-block; }
        .error-text { color: red; font-size: 14px; margin-top: 5px; display: block; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tambah Data Buku</h2>
        
        <form action="/buku/store" method="post">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="judul" name="judul" value="<?= old('judul'); ?>">
                <span class="error-text"><?= $validation->getError('judul'); ?></span>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                <span class="error-text"><?= $validation->getError('penulis'); ?></span>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                <span class="error-text"><?= $validation->getError('penerbit'); ?></span>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit'); ?>">
                <span class="error-text"><?= $validation->getError('tahun_terbit'); ?></span>
            </div>

            <button type="submit" class="btn btn-submit">Simpan Data</button>
            <a href="/buku" class="btn btn-kembali">Kembali</a>
        </form>
    </div>

</body>
</html>