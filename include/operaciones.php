<?php
error_reporting (0);
if (isset($_POST['btn'])){

    $numero1=$_POST['caja1'];
    $numero2=$_POST['caja2'];
    $numero1=(int)$numero1;
    $numero2=(int)$numero2;
    $resultado=$numero1 + $numero2;
    $valor=$resultado;
}
else{
    echo "no existe datos";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>suma</title>
</head>
<body>
    <div class="col-lg-12">
        <div class="row">
            <h1 class="text-center" >sumas</h1>
        </div>

        <div class="row">
            <form action="<?php echo $_SERVER[PHP_SELF];?>" method="POST">
            <input type="text" name="caja1" required>+
            <input type="text" name="caja2" required>=
            <input type="text" name="resultado" value="<?php echo $valor;?>">
            <input type="submit" value="calcular" name="btn">
            </form>
        </div>
        <div class="row">
        <?php echo $valor; ?>
        </div>






    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>