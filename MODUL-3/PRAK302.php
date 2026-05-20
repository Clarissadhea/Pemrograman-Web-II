<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form method="POST">
        Tinggi: <input type="number" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="gambar"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];
        $i = 1;
        
        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "<img src='$gambar' style='width: 30px; opacity: 0;'>";
                $j++;
            }
            
            $k = 1;
            while ($k <= ($tinggi - $i + 1)) {
                echo "<img src='$gambar' style='width: 30px;'>";
                $k++;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>