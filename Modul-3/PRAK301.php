<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Peserta: <input type="number" name="jumlah" value="<?= isset($_POST['jumlah']) ? $_POST['jumlah'] : '' ?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;
        while ($i <= $jumlah) {
            if ($i % 2 == 0) {
                echo "<p style='color: green; font-size: 24px; font-weight: bold;'>Peserta ke-$i</p>";
            } else {
                echo "<p style='color: red; font-size: 24px; font-weight: bold;'>Peserta ke-$i</p>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>