<?php
$nombre = "Proyecto 1";

// Lista de archivos de JavaScript a cargar
$scripts = ["js/angular.min.js", "js/app.js"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($nombre); ?>: Ejemplo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Calculadora</h3>
            </div>
            <div class="panel-body" ng-app="proyectoUno" ng-controller="ProyectoUnoController">
                <p><pre>{{primerValor}}</pre></p>
                <p><pre>{{segundoValor}}</pre></p>
                <p><pre>{{operacionARealizar}}</pre></p>
                <form name="formularioSuma" novalidate>
                    <div class="form-group">
                        <a class="btn btn-primary" ng-click="presionar(1)">1</a>
                        <a class="btn btn-primary" ng-click="presionar(2)">2</a>
                        <a class="btn btn-primary" ng-click="presionar(3)">3</a>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-info" ng-click="suma()">+</a>
                        <a class="btn btn-info" ng-click="resta()">-</a>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-default" ng-click="calcular()">=</a>
                    </div>
                    <div class="form-group"><p>{{resultado}}</p></div>
                </form>
            </div>
        </div>

    </div>
</div>
<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>
