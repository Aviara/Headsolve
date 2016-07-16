'use strict';
var laundryCtrl = angular.module('laundryCtrl', []);

/* Contoller coding started from here */

laundryCtrl.controller('DashbordCtrl', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParams, $http) {
        var url = '/getusers.php';
        $http.get(url).success(function (response) {
            $scope.userData = response;
        });

        $scope.getUsers = function () {
            var userId = $routeParams.userId;
            var url = '/getusers.php?userId=' + userId;
            $http.get(url).success(function (response) {
                $scope.userData = response;
            });
        }
    }
]).controller('MenuBuilder', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParams, $http) {
        $scope.orderNumber = 20;
        $scope.getOrderNumbers = function () {
            return new Array($scope.orderNumber);
        }

        $scope.update = false;

        if ($routeParams.menuId) {
            $scope.menuId = $routeParams.menuId;
            var url = 'menu/getMenu/' + $scope.menuId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.menuDetails = data;
            });
        }

        $scope.editMenu = function () {
//            $routeParams
        }

        $scope.getMenuList = function () {
            var arrMenuList = new Array();

            var url = '/getMenuList.php';
            $http.get(url).success(function (response) {
                angular.forEach(response, function (value, key) {
                    arrMenuList.puch(key, value);
                });
            });

            return arrMenuList;
        }

        $scope.saveMenuData = function (menu) {
            var postData = $.param({
                params: $scope.menu
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = '/menu/saveMenu';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $location.url('/#/menu-listing');
                    var url = '/menu/getMenuList';
                    $http.get(url).success(function (data) {
                        $scope.menuList = data.menuList;
                    });
                }
            }).error(function (data, status, headers, config) {
            });
        }
    }
]).controller('MenuListing', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParams, $http) {
        var url = '/menu/getMenuList';
        $http.get(url).success(function (data) {
            $scope.menuList = data.menuList;
        });

        $scope.deleteMenu = function () {
            console.log($scope.deleteMenuId);
            
            var url = '/menu/deleteMenu/' + $scope.deleteMenuId
            $http.delete(url).success( function(data) {
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
]).controller('Branches', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParams, $http) {
        var url = '/menu/getMenuList';
        $http.get(url).success(function (data) {
            $scope.menuList = data.menuList;
        });

        $scope.deleteMenu = function () {
            console.log($scope.deleteMenuId);
            
            var url = '/menu/deleteMenu/' + $scope.deleteMenuId
            $http.delete(url).success( function(data) {
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
