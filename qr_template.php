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
    <script src="jquery.min.js"></script>
    <script src="html2canvas.js"></script>
    <script src="download.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #e5e5e5;
            font-family: "Quicksand", sans-serif;
        }

        .wrapper {
            background: linear-gradient(180deg, #76f3b7 0%, #22bdb6 100%);
            border-radius: 25px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            /* height: 150px; */
            justify-content: center;
            overflow: hidden;
            padding-bottom: 85px;
            position: relative;
            text-align: center;
            width: 500px;
        }

        .ellipse1 {
            position: absolute;
            top: 0;
            width: 50px;
            margin-left: -350px;
        }

        .ellipse2 {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 220px;
        }

        .title {
            color: white;
            font-size: 36px;
            line-height: 42px;
            margin: 0;
        }

        .qr-wrapper {
            background-color: white;
            border-radius: 12px;
            box-sizing: border-box;
            height: 240px;
            position: relative;
            padding: 20px;
            margin: 20px auto 0 auto;
            width: 240px;
        }

        .illust1 {
            position: absolute;
            left: -1500px;
            bottom: -30px;
            width: 80px;
        }

        .illust2 {
            position: absolute;
            right: -1500px;
            bottom: -30px;
            width: 90px;
        }

        .qr-code {
            width: 20%;
        }

        .powered-by {
            align-items: center;
            color: white;
            display: flex;
            font-size: 10px;
            justify-content: center;
        }

        .logo-majoo {
            margin-left: 5px;
            width: 50px;
        }

        .info-table {
            align-items: center;
            display: flex;
            background-color: white;
            box-sizing: border-box;
            bottom: 0;
            height: 96px;
            justify-content: space-between;
            padding: 0 50px;
            position: absolute;
            width: 100%;
        }

        .table-info-scan {
            font-size: 13px;
            line-height: 20px;
            text-align: left;
        }

        .table-number {
            display: flex;
            flex-direction: column;
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

<body style="position:absolute;top:0px;left:3000px;">
    <section class="wrapper" id="html-content-holder">
        <img class="ellipse1" src="./images/ellipse2.png" alt="ellipse1" />
        <h3 class="title">
            Pesan Online <br />
            tersedia di toko ini
        </h3>
        <div class="qr-wrapper">
            <img class="illust1" src="./images/illust1.png" alt="illust1" />
            <img class="qr-code" src="<?php echo $qrCode->writeDataUri(); ?>" alt="qr code" />
            <img class="illust2" src="./images/illust2.png" alt="illust2" />
        </div>
        <p class="powered-by">
            <span>Powered By</span>
            <img class="logo-majoo" src="./images/logo.png" alt="logo majoo" />
        </p>
        <div class="info-table">
            <p class="table-info-scan">
                Scan barcode di atas untuk<br />
                melakukan pesanan online<br />
                di toko ini
            </p>
            <div class="table-number">
                <p class="floor">OUTDOOR</p>
                <p class="number">01</p>
            </div>
        </div>
    </section>
</body>

</html>