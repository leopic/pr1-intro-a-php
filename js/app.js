angular.module('proyectoUno', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .service('CalculadoraService', ['$http',
        function($http) {
            /**
             * El método calcular toda dos enteros como parametros.
             * Junto con la operacion a realizar
             * @param primerValor
             * @param segundoValor
             * @param operacion
             * @returns String
             */
            var calcular = function calcular(primerValor, segundoValor, operacion) {
                var url = 'controlador.php';
                   url += '?primerValor=' + primerValor;
                   url += '&segundoValor=' + segundoValor;
                   url += '&operacion=' + operacion;

                return $http({url: url});
            };

            return {
                calcular: calcular
            };

        }])
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('ProyectoUnoController',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.resultado = null;
                    $scope.operacionARealizar = null;
                    $scope.primerValor = '';
                    $scope.segundoValor = '';
                };

                $scope.presionar = function(valor) {
                    if ($scope.operacionARealizar) {
                        $scope.segundoValor = '' + $scope.segundoValor + valor;
                    } else {
                        $scope.primerValor = '' + $scope.primerValor + valor;
                    }
                };

                $scope.suma = function suma() {
                    $scope.operacionARealizar = 'suma';
                };

                $scope.resta = function resta() {
                    $scope.operacionARealizar = 'resta';
                };

                $scope.calcular = function calcular() {
                    if ($scope.formularioSuma.$valid) {
                        CalculadoraService
                            .calcular(
                                parseInt($scope.primerValor, 10),
                                parseInt($scope.segundoValor, 10),
                                $scope.operacionARealizar
                            )
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
