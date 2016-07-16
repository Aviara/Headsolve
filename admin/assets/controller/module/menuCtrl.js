'use strict';

/* Controllers */

var menuCtrl = angular.module('menuCtrl', []);

/* Contoller coding started from here */

menuCtrl.controller('MenuBuilder', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
        $scope.orderNumber = 20;
        $scope.orderNumber = Array($scope.orderNumber);

        if ($routeParams.menuId) {
            $scope.updateData = true;
            $scope.menuId = $routeParams.menuId;
            var url = erpSystem.baseUrl + 'menu/getMenu/' + $scope.menuId;
            $http.get(url).success(function (data) {
                $scope.menu = data;
            });
        } else {
            $scope.updateData = false;
        }

        $scope.isUpdate = function () {
            return $scope.update;
        }

        $scope.updateMenuData = function () {
            var postData = $.param({
                params: $scope.menu
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = erpSystem.baseUrl + 'menu/editMenu';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $location.url('menu-listing?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        $scope.getMenuList = function () {
            var arrMenuList = new Array();

            var url = erpSystem.baseUrl + 'getMenuList.php';
            $http.get(url).success(function (response) {
                angular.forEach(response, function (value, key) {
                    arrMenuList.puch(key, value);
                });
            });

            return arrMenuList;
        }

        $scope.saveMenuData = function (menu) {
            var url = erpSystem.baseUrl + 'menu/saveMenu';

            if (menu.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'menu/editMenu';
            }

            var postData = $.param({
                params: $scope.menu
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    if (menu.hasOwnProperty('id')) {
                        $location.url('menu-listing?update=true&id=' + menu.id);
                    } else {
                        $location.url('menu-listing?insert=true');
                    }
                }
            }).error(function (data, status, headers, config) {
            });
        }
    }
]).controller('MenuListing', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
        var url = erpSystem.baseUrl + 'menu/getMenuList';
        $http.get(url).success(function (data) {
            $scope.menuList = data.menuList;
        });

        $scope.insertSuccess = false;
        $scope.showMessage = false;

        if ('true' == $routeParams.insert) {
            $scope.insertSuccess = true;
            $scope.showMessage = true;
        }

        $scope.deleteMenu = function () {
            console.log($scope.deleteMenuId);

            var url = erpSystem.baseUrl + 'menu/deleteMenu/' + $scope.deleteMenuId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteMenuId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (menuId) {
            $scope.deleteMenuId = menuId;
        }
    }
]);