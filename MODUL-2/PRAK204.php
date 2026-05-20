<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
    <form method="POST">
        Nilai: <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>" required><br>
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $hasil = "";

        if ($nilai < 0 || $nilai >= 1000) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        } elseif ($nilai == 0) {
            $hasil = "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "Satuan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 99)) {
            $hasil = "Puluhan";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            $hasil = "belasan";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            $hasil = "Ratusan";
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>