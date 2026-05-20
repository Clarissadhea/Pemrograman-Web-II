<?php
$smartphone = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22",
    "Samsung Galaxy S22",
    "Samsung Galaxy S22",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Samsung</title>
    <Style>
        table {
            border: 1px double black;
            border-collapse: collapse;
        }
        th, td {
            padding: 1px double black;
            border: 1px double black;
        }
        th {
            background-color: red;
            font-size: 67px;
        }
    </Style>
</head>
<body>
    <table>
        <tr>
            <th>Nama Smartphone</th>
        </tr>
        <?php foreach ($smartphone as $samsung) { ?>
            <tr>
                <td><?= $samsung ?></td>
            </tr>
        <?php } ?>
    </table>
</body></html>