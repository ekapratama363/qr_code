<?php

require_once __DIR__ . '/vendor/autoload.php';

use Da\QrCode\QrCode;

$qrCode = (new QrCode('This is my text'))
    ->setSize(300)
    ->setMargin(5);

$qrCode->writeFile(__DIR__ . '/code.png'); // writer defaults to PNG when none is specified

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unduh QR</title>
    <style>

        body {
            background-color: #e5e5e5;
            font-family: sans-serif;
        }

        .wrapper {
            background-image: url("./bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
            position: relative;
            width: 500px;
        }

        .qr-code {
            margin-left: 158px;
            margin-top: 145px;
            width: 200px;
        }

        .table-number {
            margin-left: 300px;
            margin-top: 65px;
            text-align: center;
        }

        .table-number .floor {
            margin: 0;
            font-size: 20px;
        }

        .table-number .number {
            margin: 0;
            line-height: 55px;
            font-size: 65px;
        }
    </style>
</head>

<body>
    <section class="wrapper">
        <img class="qr-code" src="<?= $qrCode->writeDataUri(); ?>" alt="qr code" />
        <div class="table-number">
            <p class="floor">OUTDOOR</p>
            <p class="number">01</p>
        </div>
    </section>
</body>

</html>