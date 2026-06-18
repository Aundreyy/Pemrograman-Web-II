<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="POST">
        Nilai: <input type="number" step="any" name="nilai" value="<?php if(isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>
        Dari:<br>
        <input type="radio" name="dari" value="Celcius" <?php if(isset($_POST['dari']) && $_POST['dari'] == "Celcius") echo "checked"; ?>> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?php if(isset($_POST['dari']) && $_POST['dari'] == "Fahrenheit") echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?php if(isset($_POST['dari']) && $_POST['dari'] == "Rheamur") echo "checked"; ?>> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?php if(isset($_POST['dari']) && $_POST['dari'] == "Kelvin") echo "checked"; ?>> Kelvin<br>
        Ke:<br>
        <input type="radio" name="ke" value="Celcius" <?php if(isset($_POST['ke']) && $_POST['ke'] == "Celcius") echo "checked"; ?>> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?php if(isset($_POST['ke']) && $_POST['ke'] == "Fahrenheit") echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?php if(isset($_POST['ke']) && $_POST['ke'] == "Rheamur") echo "checked"; ?>> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?php if(isset($_POST['ke']) && $_POST['ke'] == "Kelvin") echo "checked"; ?>> Kelvin<br>
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        if ($dari == "Celcius") {
            $celsius = $nilai;
        } elseif ($dari == "Fahrenheit") {
            $celsius = ($nilai - 32) * 5 / 9;
        } elseif ($dari == "Rheamur") {
            $celsius = $nilai * 5 / 4;
        } elseif ($dari == "Kelvin") {
            $celsius = $nilai - 273.15;
        }

        if ($ke == "Celcius") {
            $hasil = $celsius;
            $simbol = "°C";
        } elseif ($ke == "Fahrenheit") {
            $hasil = ($celsius * 9 / 5) + 32;
            $simbol = "°F";
        } elseif ($ke == "Rheamur") {
            $hasil = $celsius * 4 / 5;
            $simbol = "°Re";
        } elseif ($ke == "Kelvin") {
            $hasil = $celsius + 273.15;
            $simbol = "°K";
        }

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " " . $simbol . "</h2>";
    }
    ?>
</body>
</html>