<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK401</title>
    <style>
        table { border-collapse: collapse; margin-top: 10px; }
        td { border: 1px solid black; text-align: center; width: 25px; height: 27px; }
    </style>
</head>
<body>
    <form method="POST">
        Panjang: <input type="text" name="panjang" value="<?= $_POST['panjang'] ?? '' ?>"><br>
        Lebar: <input type="text" name="lebar" value="<?= $_POST['lebar'] ?? '' ?>"><br>
        Nilai: <input type="text" name="nilai" value="<?= $_POST['nilai'] ?? '' ?>"><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai_string = $_POST['nilai'];
        $nilai_array = explode(" ", $nilai_string);

        if ($panjang * $lebar == count($nilai_array)) {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $nilai_array[$index] . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        }
    }
    ?>
</body>
</html>