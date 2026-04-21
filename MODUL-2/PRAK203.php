<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form method="POST">
        Nilai: <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        Dari: <br>
        <input type="radio" name="dari" value="C" <?php if(isset($_POST['dari']) && $_POST['dari']=="C") echo "checked";?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?php if(isset($_POST['dari']) && $_POST['dari']=="F") echo "checked";?>> Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?php if(isset($_POST['dari']) && $_POST['dari']=="R") echo "checked";?>> Rheamur<br>
        <input type="radio" name="dari" value="K" <?php if(isset($_POST['dari']) && $_POST['dari']=="K") echo "checked";?>> Kelvin<br>
        Ke: <br>
        <input type="radio" name="ke" value="C" <?php if(isset($_POST['ke']) && $_POST['ke']=="C") echo "checked";?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?php if(isset($_POST['ke']) && $_POST['ke']=="F") echo "checked";?>> Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?php if(isset($_POST['ke']) && $_POST['ke']=="R") echo "checked";?>> Rheamur<br>
        <input type="radio" name="ke" value="K" <?php if(isset($_POST['ke']) && $_POST['ke']=="K") echo "checked";?>> Kelvin<br>
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        $suhu_c = 0;
        if ($dari == "C") $suhu_c = $nilai;
        elseif ($dari == "F") $suhu_c = ($nilai - 32) * 5/9;
        elseif ($dari == "R") $suhu_c = $nilai * 5/4;
        elseif ($dari == "K") $suhu_c = $nilai - 273.15;

        if ($ke == "C") $hasil = $suhu_c;
        elseif ($ke == "F") $hasil = ($suhu_c * 9/5) + 32;
        elseif ($ke == "R") $hasil = $suhu_c * 4/5;
        elseif ($ke == "K") $hasil = $suhu_c + 273.15;

        $simbol = "";
        if ($ke == "C") $simbol = "°C";
        elseif ($ke == "F") $simbol = "°F";
        elseif ($ke == "R") $simbol = "°R";
        elseif ($ke == "K") $simbol = "°K";

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " $simbol</h2>";
    }
    ?>
</body>
</html>