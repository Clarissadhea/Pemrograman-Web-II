<!DOCTYPE html>
<html>
<head>
    <title>PRAK401</title>
    <style>
        table { border-collapse: collapse; margin-top: 10px; }
        td { border: 1px solid black; padding: 7px 7px; }
    </style>
</head>
<body>
    <form method="POST" action="">
        Panjang: <input type="number" name="panjang" required><br>
        Lebar: <input type="number" name="lebar" required><br>
        Nilai: <input type="text" name="nilai" required><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];

        $arr_nilai = explode(" ", $nilai);
        $total_elemen = $panjang * $lebar;

        if (count($arr_nilai) != $total_elemen) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $arr_nilai[$index] . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>