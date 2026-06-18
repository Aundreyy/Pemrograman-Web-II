<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="POST">
        Nilai: <input type="number" name="nilai" value="<?php if(isset($_POST['nilai'])) echo $_POST['nilai']; ?>" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        
        echo "<h2>Hasil: ";
        if ($nilai == 0) {
            echo "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            echo "Satuan";
        } elseif ($nilai >= 11 && $nilai < 20) {
            echo "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            echo "Puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            echo "Ratusan";
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "</h2>";
    }
    ?>
</body>
</html>