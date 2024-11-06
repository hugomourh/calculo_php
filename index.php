<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    
<?php 


if (isset($_GET['percurso'], $_GET['litro'], $_GET['gasolina'])) {

    $percurso = $_GET['percurso'];
    $litro = $_GET['litro'];
    $gasolina = $_GET['gasolina'];


    $valor_total = ($percurso / $litro) * $gasolina;


    
    echo "<div class='css'>O custo total com gasolina será: R$ ".number_format($valor_total, 2, ',', '.')."</div>";
}


?>










</body>
</html>