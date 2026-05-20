<?php
$data = ["Samsung Galaxy S22", "Sambung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PRAK104</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 2px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php foreach($data as $hp): ?>
            <tr>
                <td><?= $hp ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>