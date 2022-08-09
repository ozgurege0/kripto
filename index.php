<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payid19 Test</title>
  </head>
  <body style="background-color: #e3f2fd;">
    

    <div class="container">
<form action="payid19.php" method="post">
<div class="row mt-5">

<div class="col-md-6">
    <label>E-mail Adresiniz</label>
    <input type="email" class="form-control" name="email">
</div>

<div class="col-md-6">
<label>Ücret</label>
<input type="text" class="form-control" name="ucret">
</div>

<div class="col-md-6 mt-3">
    <label>Başlık</label>
    <input type="text" class="form-control" name="baslik">
</div>

<div class="col-md-6 mt-3">
<label>Açıklama</label>
<input type="text" class="form-control" name="aciklama">
</div>

<button class="btn btn-primary mt-3">Satın Al</button>

</div>
</form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>