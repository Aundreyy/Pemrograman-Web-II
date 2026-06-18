<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi: <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar: <input type="text" name="url" value="<?= isset($_POST['url']) ? $_POST['url'] : '' ?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];
        $i = 1;
        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                $j++;
            }
            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$url' width='20px'>";
                $k--;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>