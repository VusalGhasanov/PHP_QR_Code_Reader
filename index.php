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
                <form action="decode.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="qrimage" accept="image/*" class="form-control"><br/>
                    <input type="submit" class="btn btn-md btn-block btn-danger" value="Decode the Code">
                </form>
            </div>
        </div>
    </div>
</body>
</html>