<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK403</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 5px; text-align: left; }
        th { background-color: #d3d3d3; }
        .revisi { background-color: #f91b1b; }
        .aman { background-color: #2fab33; }
    </style>
</head>
<body>
    <?php
    $data = [
        [
            "no" => 1, "nama" => "Ridho",
            "mk" => [
                ["nama_mk" => "Pemrograman I", "sks" => 2],
                ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
                ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],
        [
            "no" => 2, "nama" => "Ratna",
            "mk" => [
                ["nama_mk" => "Basis Data I", "sks" => 2],
                ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                ["nama_mk" => "Kalkulus", "sks" => 3]
            ]
        ],
        [
            "no" => 3, "nama" => "Tono",
            "mk" => [
                ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["nama_mk" => "Komputasi Awan", "sks" => 3],
                ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ];

    for ($i = 0; $i < count($data); $i++) {
        $total_sks = 0;
        foreach ($data[$i]["mk"] as $mk) {
            $total_sks += $mk["sks"];
        }
        $data[$i]["total_sks"] = $total_sks;
        $data[$i]["keterangan"] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
    }
    ?>

    <table>
        <tr>
            <th style="width: 5%;">No</th>
            <th style="width: 15%;">Nama</th>
            <th style="width: 40%;">Mata Kuliah diambil</th>
            <th style="width: 10%;">SKS</th>
            <th style="width: 15%;">Total SKS</th>
            <th style="width: 15%;">Keterangan</th>
        </tr>
        <?php
        foreach ($data as $mhs) {
            $jml_mk = count($mhs["mk"]);
            for ($j = 0; $j < $jml_mk; $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>" . $mhs["no"] . "</td>";
                    echo "<td>" . $mhs["nama"] . "</td>";
                    echo "<td>" . $mhs["mk"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $mhs["mk"][$j]["sks"] . "</td>";
                    echo "<td>" . $mhs["total_sks"] . "</td>";

                    $kelas_bg = ($mhs["keterangan"] == "Revisi KRS") ? "revisi" : "aman";
                    echo "<td class='$kelas_bg'>" . $mhs["keterangan"] . "</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>" . $mhs["mk"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $mhs["mk"][$j]["sks"] . "</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>