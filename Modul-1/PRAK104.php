<?php
$samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
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
        text-align: left;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach($samsung as $hp): ?>
        <tr>
            <td><?php echo $hp; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>