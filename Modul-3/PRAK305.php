<!DOCTYPE html>
<html>
<head>
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="string">
        <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $string = $_POST['string'];
        $panjang = strlen($string);
        echo "Input:<br>$string<br><br>Output:<br>";
        for ($i = 0; $i < $panjang; $i++) {
            $char = $string[$i];
            for ($j = 0; $j < $panjang; $j++) {
                if ($j == 0) {
                    echo strtoupper($char);
                } else {
                    echo strtolower($char);
                }
            }
        }
    }
    ?>
</body>
</html>