<!DOCTYPE html>
<html>
<head>
    <title>PRAK402</title>
    <style>
        table { border-collapse: collapse; text-align: left; }
        th, td { border: 1px solid black; padding: 5px 15px; }
        th { background-color: #c0c0c0; }
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

    foreach ($mahasiswa as &$mhs) {
        $mhs["nilai_akhir"] = ($mhs["uts"] * 0.4) + ($mhs["uas"] * 0.6);

        if ($mhs["nilai_akhir"] >= 80) {
            $mhs["huruf"] = "A";
        } elseif ($mhs["nilai_akhir"] >= 70) {
            $mhs["huruf"] = "B";
        } elseif ($mhs["nilai_akhir"] >= 60) {
            $mhs["huruf"] = "C";
        } elseif ($mhs["nilai_akhir"] >= 50) {
            $mhs["huruf"] = "D";
        } else {
            $mhs["huruf"] = "E";
        }
    }
    unset($mhs); 
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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs["nama"] ?></td>
                <td><?= $mhs["nim"] ?></td>
                <td><?= $mhs["uts"] ?></td>
                <td><?= $mhs["uas"] ?></td>
                <td><?= $mhs["nilai_akhir"] ?></td>
                <td><?= $mhs["huruf"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>