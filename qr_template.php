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
                <td style="height: 137px;"></td>
            </tr>
            <tr>
                <td>
                    <div class="qr-wrapper">
                        <img style="width: 210px; margin-left: 120px; padding: 30px;" src="<?= $qrCode->writeDataUri(); ?>" alt="qr code" />
                    </div>
                </td>
            </tr>
            <tr>
                <td style="height: 40px"></td>
            </tr>
            <tr>
                <td style="width: 500px; padding-left: 30px; height: 160px;">
                    <table>
                        <tr>
                            <td style="font-size: 25px; padding-bottom: 10px; padding-right: 30px; color: #00B7B5">lantai asixxxx</td>
                        </tr>
                        <tr>
                            <td style="font-size: 23px; padding-right: 30px">Meja makan9939182091029101</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>