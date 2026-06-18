<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK402</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #bbbbbb; }
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

    for ($i = 0; $i < count($mahasiswa); $i++) {
        $mahasiswa[$i]["akhir"] = ($mahasiswa[$i]["uts"] * 0.4) + ($mahasiswa[$i]["uas"] * 0.6);
        $akhir = $mahasiswa[$i]["akhir"];

        if ($akhir >= 80) {
            $huruf = "A";
        } elseif ($akhir >= 70) {
            $huruf = "B";
        } elseif ($akhir >= 60) {
            $huruf = "C";
        } elseif ($akhir >= 50) {
            $huruf = "D";
        } else {
            $huruf = "E";
        }
        $mahasiswa[$i]["huruf"] = $huruf;
    }
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $m) : ?>
        <tr>
            <td><?= $m["nama"] ?></td>
            <td><?= $m["nim"] ?></td>
            <td><?= $m["uts"] ?></td>
            <td><?= $m["uas"] ?></td>
            <td><?= $m["akhir"] ?></td>
            <td><?= $m["huruf"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>