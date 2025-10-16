
<?php
$ad = "Buse Doğan";
$uzmanlik = "Full Stack Development";
$hakkinda_bilgisi = "Full stack olarak görev alıyorum. C# ı çok severim.";
$projeSayisi = 220;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Giriş dersi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="d-flex justify-content-center mt-5 p-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">İsim : <?php echo $ad ?> </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Uzmanlık : <?php echo $uzmanlik?></h6>
                <p class="card-text"><?php echo $hakkinda_bilgisi?></p>
                <p class="card-text">Proje sayısı : <strong><?php echo $projeSayisi; ?> </strong></p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>


</div>






</body>
</html>



