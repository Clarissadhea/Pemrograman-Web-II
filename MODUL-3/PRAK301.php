<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form method="POST">
        Jumlah Peserta: <input type="number" name="peserta"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['peserta'];
        $i = 1;
        
        while ($i <= $jumlah) {
            if ($i % 2 == 1) {
                echo "<h3 style='color: red;'>Peserta ke-$i</h3>";
            } else {
                echo "<h3 style='color: green;'>Peserta ke-$i</h3>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>