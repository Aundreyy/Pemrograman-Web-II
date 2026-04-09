<?php
$samsung = [
    "hp1" => "Samsung Galaxy S22",
    "hp2" => "Samsung Galaxy S22+",
    "hp3" => "Samsung Galaxy A03",
    "hp4" => "Samsung Galaxy Xcover 5"
];
?>
<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
    th {
        background-color: red;
        font-size: 24px;
        text-align: left;
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach($samsung as $kunci => $nilai) { ?>
        <tr>
            <td><?php echo $nilai; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>