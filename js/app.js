angular.module('proyectoUno', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .service('SumatoriaService', ['$http', function($http) {
        /**
         * El método sumar toda dos enteros como parámetros
         * @param primerValor
         * @param segundoValor
         * @returns String
         */
        var sumar = function sumar(primerValor, segundoValor) {
            var url = 'sumador.php';
                url += '?primerValor=' + primerValor;
                url += '&segundoValor=' + segundoValor;

            return $http({
                url: url
            });
        };

        return {
            sumar: sumar
        }
    }])
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('ProyectoUnoController',
        ['$scope', 'SumatoriaService',
            function ($scope, SumatoriaService) {
                $scope.init = function() {
                    $scope.resultado = null;
                };

                $scope.sumar = function sumar() {
                    if ($scope.formularioSuma.$valid) {
                        SumatoriaService.sumar($scope.primerValor, $scope.segundoValor)
                            .then(function(response) {
                                if (response.data) {
                                    $scope.resultado = response.data;
                                }
                            }, function(response) {
                                $scope.resultado = response;
                            });
                    }
                };

                $scope.init();
            }])
;
