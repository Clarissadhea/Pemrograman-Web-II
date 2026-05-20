<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Control Flow</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .result { margin-top: 20px; padding: 15px; border: 1px solid #ccc; background-color: #f9f9f9; width: 300px; }
    </style>
</head>
<body>
    <h2>Latihan Control Flow: If-Else & Switch-Case</h2>

    <form method="get">
        <label for="nilai">Masukkan Nilai Angka:</label>
        <input type="number" name="nilai" id="nilai" required>
        <input type="submit" value="Cek Nilai">
    </form>

    <?php
    if (isset($_GET['nilai'])) {
        $nilai = $_GET['nilai'];

        if ($nilai >= 80) {
            $huruf_if = "A";
        } elseif ($nilai >= 70) {
            $huruf_if = "B";
        } elseif ($nilai >= 60) {
            $huruf_if = "C";
        } elseif ($nilai >= 50) {
            $huruf_if = "D";
        } else {
            $huruf_if = "E";
        }

        switch (true) {
            case ($nilai >= 80):
                $huruf_switch = "A";
                break;
            case ($nilai >= 70):
                $huruf_switch = "B";
                break;
            case ($nilai >= 60):
                $huruf_switch = "C";
                break;
            case ($nilai >= 50):
                $huruf_switch = "D";
                break;
            default:
                $huruf_switch = "E";
                break;
        }

        echo "<div class='result'>";
        echo "<h3>Hasil Evaluasi:</h3>";
        echo "<strong>Nilai Input:</strong> " . $nilai . "<br><br>";
        echo "<strong>Hasil If-Else:</strong> " . $huruf_if . "<br>";
        echo "<strong>Hasil Switch:</strong> " . $huruf_switch . "<br>";
        echo "</div>";
    }
    ?>
</body>
</html>