<?php
    $nombre = "Proyecto Uno";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($nombre); ?>: Ejemplo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div ng-app="proyectoUno" ng-controller="ProyectoUnoController">
    <div class="col-md-4 col-md-offset-4">
        <div class="page-header text-center">
            <h1><?php echo($nombre); ?>: Ejemplo</h1>
        </div>
        <pre>{{saludo}}</pre>
    </div>
</div>
<script src="js/angular.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
