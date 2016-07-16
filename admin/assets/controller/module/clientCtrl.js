'use strict';

/* Controllers */

var clientCtrl = angular.module('clientCtrl', []);

/* Contoller coding started from here */

clientCtrl.controller('Clients', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
        if ($routeParams.clientId) {
            $scope.updateData = true;
            $scope.clientId = $routeParams.clientId;
            var url = erpSystem.baseUrl + 'client/getClient/' + $scope.clientId;
            $http.get(url).success(function (data) {
                $scope.client = data;
            });
        } else {
            $scope.updateData = false;
        }


        $scope.isUpdate = function () {
            return $scope.update;
        }
        /**************** List of customer types and getting city_id *******************************/
        var url = erpSystem.baseUrl + 'client/getClientType/';
            $http.get(url).success(function (data) {
                $scope.custTypeList = data;
          });
        /************** For Displaying Packages for pune and goa model ***********/
        
         var url = erpSystem.baseUrl + 'package/getPackageForClientsList/';
            $http.get(url).success(function (data) {
                //$scope.sessionUserCityId = 0;
                $scope.sessionUserCityId = data.session_user_id;
                if($scope.sessionUserCityId == 1)
                {
                    $scope.thisIsPuneGoaModel = false;
                }
                else{
                    $scope.thisIsPuneGoaModel = true;
                    $scope.packagesList = data;
                }
                    
            });
        
        $scope.updateClientData = function () {
            var postData = $.param({
                params: $scope.client
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = erpSystem.baseUrl + 'client/editClient';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                   $scope.message = "Operation Successful !!!";
                    $location.url('view-clients?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }
        $scope.saveClientData = function (client) {

            var url = erpSystem.baseUrl + 'client/saveClient';

            if (client.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'client/editClient';
            }
            var postData = $.param({
                params: client
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            // var url = erpSystem.baseUrl + 'client/saveClient';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (client.hasOwnProperty('id')) {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-clients?update=true&id=' + client.id);
                } else {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-clients?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        $scope.update = false;

        if ($routeParams.clientId) {
            $scope.clientId = $routeParams.clientId;
            var url = erpSystem.baseUrl + 'client/getClient/' + $scope.clientId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.clientDetails = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'client/getClientList';
            $http.get(url).success(function (data) {
                $scope.clientList = data;
            });
        }

        $scope.deleteClient = function () {
            console.log($scope.deleteClientId);

            var url = erpSystem.baseUrl + 'client/deleteClient/' + $scope.deleteClientId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteClientId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (clientId) {
            $scope.deleteClientId = clientId;
        }
    }
]);