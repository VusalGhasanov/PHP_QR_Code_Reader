<?php

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    header('Location: index.php');
    die();
}

require "vendor/autoload.php";

$qrcode = new \Zxing\QrReader($_FILES['qrimage']['tmp_name']);
$text = $qrcode->text();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deconding QR Codes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html, body{
            height: 100%;
            width: 100% ;
        }
    </style>
</head>
<body class="bg">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888">
            <h1 class="text-center">Decode QR codes</h1>
            <hr>
            <p><strong>Data in QR-code:</strong></p>
            <p><?php echo $text; ?></p>
            <hr/>
            <a href="index.php">Decode Another</a>
        </div>
    </div>
</div>
</body>
</html>
