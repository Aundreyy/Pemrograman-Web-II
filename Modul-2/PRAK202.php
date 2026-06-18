<?php
$pesanNama = "";
$pesanNim = "";
$pesanJk = "";
$nama = "";
$nim = "";
$jk = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['nama'])) {
        $pesanNama = "nama tidak boleh kosong";
    } else {
        $nama = $_POST['nama'];
    }

    if (empty($_POST['nim'])) {
        $pesanNim = "nim tidak boleh kosong";
    } else {
        $nim = $_POST['nim'];
    }

    if (empty($_POST['jk'])) {
        $pesanJk = "jenis kelamin tidak boleh kosong";
    } else {
        $jk = $_POST['jk'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PRAK202</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <form action="" method="POST">
        Nama: <input type="text" name="nama" value="<?php if(isset($_POST['nama'])) echo $_POST['nama']; ?>">
        <span class="error">* <?php if(isset($_POST['submit']) && empty($_POST['nama'])) echo "nama tidak boleh kosong"; ?></span><br>
        
        Nim: <input type="text" name="nim" value="<?php if(isset($_POST['nim'])) echo $_POST['nim']; ?>">
        <span class="error">* <?php if(isset($_POST['submit']) && empty($_POST['nim'])) echo "nim tidak boleh kosong"; ?></span><br>
        
        Jenis Kelamin: <span class="error">* <?php if(isset($_POST['submit']) && empty($_POST['jk'])) echo "jenis kelamin tidak boleh kosong"; ?></span><br>
        <input type="radio" name="jk" value="Laki-Laki" <?php if(isset($_POST['jk']) && $_POST['jk'] == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if(isset($_POST['jk']) && $_POST['jk'] == "Perempuan") echo "checked"; ?>> Perempuan<br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['nama']) && !empty($_POST['nim']) && !empty($_POST['jk'])) {
            echo "<h2>Output:</h2>";
            echo $_POST['nama'] . "<br>";
            echo $_POST['nim'] . "<br>";
            echo $_POST['jk'] . "<br>";
        }
    }
    ?>
</body>
</html>