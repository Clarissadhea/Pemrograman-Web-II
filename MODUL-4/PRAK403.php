<!DOCTYPE html>
<html>
<head>
    <title>PRAK403</title>
    <style>
        table { 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid black; 
            padding: 7px; 
            text-align: left; 
        }
        th { 
            background-color: #c0c0c0;
            font-weight: bold;
        }
        .revisi {
            background-color: #ff0000; 
            color: black;
        }
        .tidak-revisi {
            background-color: #00b050; 
            color: black;
        }
    </style>
</head>
<body>
    <?php
    $data_krs = [
        [
            "no" => 1,
            "nama" => "Ridho",
            "matkul" => [
                ["nama_mk" => "Pemrograman I", "sks" => 2],
                ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
                ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],
        [
            "no" => 2,
            "nama" => "Ratna",
            "matkul" => [
                ["nama_mk" => "Basis Data I", "sks" => 2],
                ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                ["nama_mk" => "Kalkulus", "sks" => 3]
            ]
        ],
        [
            "no" => 3,
            "nama" => "Tono",
            "matkul" => [
                ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["nama_mk" => "Komputasi Awan", "sks" => 3],
                ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ];

    foreach ($data_krs as &$mhs) {
        $total_sks = 0;
        foreach ($mhs["matkul"] as $mk) {
            $total_sks += $mk["sks"];
        }
        $mhs["total_sks"] = $total_sks;
        $mhs["keterangan"] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
    }
    unset($mhs);
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($data_krs as $mhs) : ?>
            <?php 
            $is_first = true; 
            foreach ($mhs["matkul"] as $mk) : 
            ?>
                <tr>
                    <?php if ($is_first) : ?>
                        <td><?= $mhs["no"] ?></td>
                        <td><?= $mhs["nama"] ?></td>
                        <td><?= $mk["nama_mk"] ?></td>
                        <td><?= $mk["sks"] ?></td>
                        <td><?= $mhs["total_sks"] ?></td>
                        
                        <?php $class_warna = ($mhs['keterangan'] == 'Revisi KRS') ? 'revisi' : 'tidak-revisi'; ?>
                        <td class="<?= $class_warna ?>">
                            <?= $mhs["keterangan"] ?>
                        </td>
                        
                        <?php $is_first = false; ?>
                    <?php else : ?>
                        <td></td>
                        <td></td>
                        <td><?= $mk["nama_mk"] ?></td>
                        <td><?= $mk["sks"] ?></td>
                        <td></td>
                        <td></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>