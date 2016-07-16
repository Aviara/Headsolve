'use strict';

/* Controllers */

var clientCtrl = angular.module('paymentAccount', []);

/* Contoller coding started from here */

clientCtrl.controller('EmployeePayment', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
		$scope.totalPaymentAmmount = 0;
		$scope.remainingPaymentAmmount = 0;
		$scope.paidPaymentAmmount = 0;
		$scope.totalCompletedPaymentAmmount = 0;
				
        $scope.searchEmployee = function (intEmployeeId) {
			var url = erpSystem.baseUrl + 'payment/paymenyByEmployee/' + intEmployeeId;
			$http.get(url).success(function (data) {
				if (data.hasOwnProperty('found')) {
					$scope.isEmployeeSearched = true;
					$scope.payemnts = data.payments;
					
					angular.forEach(data.payments, function(value, key) {
						//console.log(value);
						$scope.totalPaymentAmmount += parseInt(value.total_amount);
						$scope.remainingPaymentAmmount += parseInt(value.remaining_amount);
						$scope.paidPaymentAmmount += parseInt(value.paid_amount);
						$scope.totalCompletedPaymentAmmount += parseInt(value.is_completed);
					});
				} else {
                                    $scope.isEmployeeSearched = false;
                                }
            });
        }
    }
]).controller('EmployeePaymentForToday', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
		$scope.totalPaymentAmmount = 0;
		$scope.remainingPaymentAmmount = 0;
		$scope.paidPaymentAmmount = 0;
		$scope.totalCompletedPaymentAmmount = 0;
                
                $scope.totalPaymentAmmount1 = 0;
		$scope.remainingPaymentAmmount1 = 0;
		$scope.paidPaymentAmmount1 = 0;
		$scope.totalCompletedPaymentAmmount1 = 0;
                
                $scope.totalPaymentAmmount2 = 0;
		$scope.remainingPaymentAmmount2 = 0;
		$scope.paidPaymentAmmount2 = 0;
		$scope.totalCompletedPaymentAmmount2 = 0;
                
	$scope.makeFirstTabActive = function () {
            $scope.firsttab = true;
            $scope.secondttab = false;
            $scope.thirdtab = false;
        }
        $scope.makeThirdTabActive = function () {
            $scope.firsttab = false;
            $scope.secondttab = false;
            $scope.thirdtab = true;
        }
        $scope.searchEmployee = function (intEmployeeId) {
            
			var url = erpSystem.baseUrl + 'payment/paymenyByEmployee/' + intEmployeeId;
			$http.get(url).success(function (data) {
				if (data.hasOwnProperty('found')) {
					$scope.isEmployeeSearched = true;
					$scope.payemnts = data.payments;
					
					angular.forEach(data.payments, function(value, key) {
						//console.log(value);
						$scope.totalPaymentAmmount += parseInt(value.total_amount);
						$scope.remainingPaymentAmmount += parseInt(value.remaining_amount);
						$scope.paidPaymentAmmount += parseInt(value.paid_amount);
						$scope.totalCompletedPaymentAmmount += parseInt(value.is_completed);
					});
				} else {
                                    $scope.isEmployeeSearched = false;
                                }
            });
        }
        $scope.laundrysHoleCollectionForToday = function () {
             $scope.firsttab = false;
             $scope.secondttab = true;
             $scope.thirdtab = false;
			var url = erpSystem.baseUrl + 'payment/laundrysHoleCollectionForToday/';
			$http.get(url).success(function (data) {
				if (data.hasOwnProperty('found')) {
					$scope.isEmployeeSearched = true;
					$scope.payemnts1 = data.payments;
					
					angular.forEach(data.payments, function(value, key) {
						//console.log(value);
						$scope.totalPaymentAmmount1 += parseInt(value.total_amount);
						$scope.remainingPaymentAmmount1 += parseInt(value.remaining_amount);
						$scope.paidPaymentAmmount1 += parseInt(value.paid_amount);
						$scope.totalCompletedPaymentAmmount1 += parseInt(value.is_completed);
					});
				} else {
                                    $scope.isEmployeeSearched = false;
                                }
            });
        }
        $scope.dateRangePaymentReport = function () {
            
             $scope.firsttab     = false;
             $scope.secondttab   = false;
             $scope.thirdtab     = true;
  
             // var url = erpSystem.baseUrl + 'report/getPickupDetails/?from_date=' + $scope.from_date + '&to_date=' + $scope.to_date;

			var url = erpSystem.baseUrl + 'payment/dateRangePaymentReport/?from_date=' + $scope.from_date + '&to_date=' + $scope.to_date;
			$http.get(url).success(function (data) {
				if (data.hasOwnProperty('found')) {
					$scope.isEmployeeSearched = true;
					$scope.payemnts2 = data.payments;
					
					angular.forEach(data.payments, function(value, key) {
						//console.log(value);
						$scope.totalPaymentAmmount2 += parseInt(value.total_amount);
						$scope.remainingPaymentAmmount2 += parseInt(value.remaining_amount);
						$scope.paidPaymentAmmount2 += parseInt(value.paid_amount);
						$scope.totalCompletedPaymentAmmount2 += parseInt(value.is_completed);
					});
				} else {
                                    $scope.isEmployeeSearched = false;
                                }
            });
        }
        
            
    }
]);