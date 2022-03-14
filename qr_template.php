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
            height: 640px;
            position: relative;
            width: 500px;
        }
    </style>
</head>

<body>
    <section class="wrapper">
        <table width="500px">
            <tr>
                <td style="height: 165px;"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="qr-wrapper">
                        <img style="width: 210px; padding: 30px;" src="<?= $qrCode->writeDataUri(); ?>" alt="qr code" />
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 60px"></td>
            </tr>
            <tr>
                <td style="text-align: center; padding-left: 20px;">
                    <h2 style="font-size: 100px;">01</h2>
                </td>
                <td style="width: 400px; padding-left: 20px; height: 170px">
                    <table>
                        <tr>
                            <td style="font-size: 25px; padding-bottom: 20px; color: #00B7B5">OUTDOOR</td>
                        </tr>
                        <tr>
                            <td style="font-size: 23px; padding-right: 20px">MEJA 1 - DEKAT JENDELA UTAMA</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>