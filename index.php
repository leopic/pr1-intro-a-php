<?php
$nombre = "Proyecto 1";

// Primer ejemplo, sumando antes de que cargue la pagina
$primerValor = 1;
$segundoValor = 2;
$resultado = $primerValor + $segundoValor;

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
        <div class="page-header text-center">
            <h1>Ejemplos PHP</h1>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Sumando antes de cargar de la página</h3>
            </div>
            <div class="panel-body">
                <p>El resultado de sumar
                    <?php echo($primerValor); ?> y <?php echo($segundoValor); ?> es
                    <?php echo($resultado); ?>.
                </p>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Sumando usando un formulario</h3>
            </div>
            <div class="panel-body">
                <form action="sumador.php" method="post">
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" name="primerValor" id="primerValor" />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" name="segundoValor" id="segundoValor" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Sumar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Sumando usando un formulario con $http</h3>
            </div>
            <div class="panel-body" ng-app="proyectoUno" ng-controller="ProyectoUnoController">
                <form name="formularioSuma" ng-submit="sumar()" novalidate>
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" id="primerValor"
                               ng-model="primerValor" required />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" id="segundoValor"
                               ng-model="segundoValor" required />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Sumar</button>
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
