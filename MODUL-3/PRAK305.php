<!DOCTYPE html>
<html>
<head>
    <title>PRAK305</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="string">
        <button type="submit" name="submit">submit</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $string = $_POST['string'];
        $panjang = strlen($string); 
        
        echo "<h3>Input:</h3>";
        echo $string;
        echo "<h3>Output:</h3>";
        
        for ($i = 0; $i < $panjang; $i++) {
            $char = $string[$i];
            
            for ($j = 0; $j < $panjang; $j++) {
                if ($j == 0) {
                    echo strtoupper($char);
                } else {
                    echo strtolower($char);
                }
            }
        }
    }
    ?>
</body>
</html>