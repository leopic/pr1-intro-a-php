angular.module('proyectoUno', [])
    .controller('ProyectoUnoController',
        ['$scope', function ($scope) {
            $scope.init = function() {
                $scope.saludo = 'Hola Mundo!';
            };

            $scope.init();
        }])
;
