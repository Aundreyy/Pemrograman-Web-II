<!DOCTYPE html>
<html>
<head>
    <title>PRAK304</title>
</head>
<body>
    <?php
    $bintang = 0;
    if (isset($_POST['bintang'])) {
        $bintang = $_POST['bintang'];
    }
    if (isset($_POST['tambah'])) {
        $bintang++;
    }
    if (isset($_POST['kurang'])) {
        $bintang--;
    }
    ?>

    <?php if ($bintang == 0): ?>
        <form action="" method="POST">
            Jumlah bintang <input type="number" name="bintang"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php endif; ?>

    <?php if ($bintang > 0): ?>
        Jumlah bintang <?= $bintang ?><br><br>
        <?php
        for ($i = 0; $i < $bintang; $i++) {
            echo "<img src='star-images-9441.png' width='50px'> ";
        }
        ?>
        <br><br>
        <form action="" method="POST">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>
</body>
</html>