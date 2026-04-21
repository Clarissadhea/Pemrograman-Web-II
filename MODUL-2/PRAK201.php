<!DOCTYPE html>
<html>
<head>
    <title>PRAK201</title>
</head>
<body>
    <form method="POST">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n1 = $_POST['nama1'];
        $n2 = $_POST['nama2'];
        $n3 = $_POST['nama3'];

        if ($n1 > $n2) {
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }
        if ($n2 > $n3) {
            $temp = $n2;
            $n2 = $n3;
            $n3 = $temp;
        }
        if ($n1 > $n2) {
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }

        echo "<br>$n1 <br>";
        echo "$n2 <br>";
        echo "$n3 <br>";
    }
    ?>
</body>
</html>