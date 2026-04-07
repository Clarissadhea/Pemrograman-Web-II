<?php
$data = [
    "S22" => "Samsung Galaxy S22",
    "S22+" => "Samsung Galaxy S22+",
    "A03" => "Samsung Galaxy A03",
    "Xcover 5" => "Samsung Galaxy Xcover 5"
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PRAK105</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 2px;
                text-align: left;
            }
            th {
                background-color: red;
                font-size: 24px;
                font-weight: bold;
                padding-bottom: 15px;
                padding-top: 15px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php foreach($data as $key => $value): ?>
            <tr>
                <td><?= $value ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>