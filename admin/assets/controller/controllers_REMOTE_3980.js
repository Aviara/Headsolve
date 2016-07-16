'use strict';

/* Controllers */

var laundryCtrl = angular.module('laundryCtrl', []);

/* Contoller coding started from here */

laundryCtrl.controller('DashbordCtrl', ['$scope', '$routeParams', '$http', 'erpSystem',
    function ($scope, $routeParams, $http, erpSystem) {
        $scope.isAdmin = false;
        var url = erpSystem.baseUrl + 'dashbord/getUser';

        $http.get(url).success(function (objUser) {
            $scope.user = objUser.user;
            $scope.status = objUser.status;


            if (1 == objUser.user.employee_type_id || 2 == objUser.user.employee_type_id) {
                $scope.isAdmin = true;
                $scope.laodData();
            }
        });
     /*******************************************************************************************
     * *********************** this is for displaying todays total collection********************
     * *****************************************************************************************/ 
     
                $scope.totalPaymentAmmount1 = 0;
        var url = erpSystem.baseUrl + 'payment/laundrysHoleCollectionForToday/';
	$http.get(url).success(function (data) {
		if (data.hasOwnProperty('found')) {
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
            
             /*******************************************************************************************
     * *********************** this is for displaying todays total collection********************
     * *****************************************************************************************/ 
     
                $scope.totalPaymentAmmount2 = 0;
        var url = erpSystem.baseUrl + 'payment/laundrysCurrentMonthCollection/';
	$http.get(url).success(function (data) {
		if (data.hasOwnProperty('found')) {
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
        
// var url = erpSystem.baseUrl + 'CountryStateCity/getAllCities/';
//                $http.get(url).success(function (data) {
//                    $scope.todayPickupedChallans = data;
//                });
        $scope.laodData = function () {
            if (true == $scope.isAdmin) {

//                //for todays pick up challans.
//                var url = erpSystem.baseUrl + 'dashbord/getPickupDetails/';
//                $http.get(url).success(function (data) {
//                    $scope.todayPickupedChallans = data;
//                });
//
//                //for todays Delivered challans.
//                var url = erpSystem.baseUrl + 'dashbord/getTodaysDeliveredChallans/';
//                $http.get(url).success(function (data) {
//                    $scope.todaysDeliveredChallans = data;
//                });
//                //for todays remaining deliveries 
//                var url = erpSystem.baseUrl + 'dashbord/getTodaysRemainingDeliveryCount/';
//                $http.get(url).success(function (data) {
//                    $scope.pickupRowCount = data;
//                });
//                //for todays urgencies deliveries 
//                var url = erpSystem.baseUrl + 'dashbord/getTodaysUrgenciesCount/';
//                $http.get(url).success(function (data) {
//                    $scope.todaysUrgencies = data;
//                });
//
//                //for todays Todays Added customers. 
//                var url = erpSystem.baseUrl + 'dashbord/getTodaysNewAddedCustomers/';
//                $http.get(url).success(function (data) {
//                    $scope.todaysNewCust = data;
//                });
//                //for todays delivered clothList
//                var url = erpSystem.baseUrl + 'dashbord/getTodaysDeliveredChallans/';
//                $http.get(url).success(function (data) {
//                    $scope.todaysDeliveredClothsList = data.todaysDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
//                //for yesterdays delivered clothList
//                var url = erpSystem.baseUrl + 'dashbord/getYesterdaysDeliveredChallans/';
//                $http.get(url).success(function (data) {
//                    $scope.yesterdaysDeliveredClothsList = data.yesterdaysDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
//                //for two Days Ago delivered clothList
//                var url = erpSystem.baseUrl + 'dashbord/twoDaysAgoDeliveredClothsList/';
//                $http.get(url).success(function (data) {
//                    $scope.twoDaysAgoDeliveredClothsList = data.twoDaysAgoDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
//                var url = erpSystem.baseUrl + 'dashbord/soonTodayDeliveredClothsList/';
//                $http.get(url).success(function (data) {
//                    $scope.soonTodayDeliveredClothsList = data.soonTodayDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
//                var url = erpSystem.baseUrl + 'dashbord/soonTomarrowDeliveredClothsList/';
//                $http.get(url).success(function (data) {
//                    $scope.soonTomarrowDeliveredClothsList = data.soonTodayDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
//                var url = erpSystem.baseUrl + 'dashbord/soonAfterTwoDaysDeliveredClothsList/';
//                $http.get(url).success(function (data) {
//                    $scope.soonAfterTwoDaysDeliveredClothsList = data.soonTodayDelivery;
//                    //$scope.updatad_date = todaysDeliveredClothsList.updated_on;
//                    //alert('vfvfd'+$scope.updatad_date);
//                    //alert(JSON.stringify($scope.todaysDeliveredClothsList));
//                });
            }
        }
    }
]).controller('DashbordReports', ['$scope', '$routeParams', '$http', 'erpSystem',
    function ($scope, $routeParams, $http, erpSystem) {

        $scope.pickupDetails = function () {
            var url = erpSystem.baseUrl + 'report/getPickupDetails/?from_date=' + $scope.from_date + '&to_date=' + $scope.to_date;
            $http.get(url).success(function (data) {
                $scope.challanList = data;
            });
        }
        $scope.dateRangeCollection = function () {
            var url = erpSystem.baseUrl + 'report/dateRangeCollection/?from_date=' + $scope.from_date + '&to_date=' + $scope.to_date;
            $http.get(url).success(function (data) {
                $scope.challanList = data;
            });
        }
        $scope.downloadTodaysDeliveredClothes = function () {
            var url = erpSystem.baseUrl + 'report/downloadTodaysDeliveredClothes/';
            $http.get(url).success(function (data) {
                $scope.first_table = true;
                $scope.second_table = false;
                $scope.deliveriesInLineForToday = data;
            });
        }
        $scope.downloadLinedupPickups = function () {
            var url = erpSystem.baseUrl + 'report/downloadLinedupPickups/';
            $http.get(url).success(function (data) {
                $scope.first_table = false;
                $scope.second_table = true;
                $scope.challanList = data;
            });
        }
        $scope.downloadGoldenSilverPlatPackagesForToday = function (packagename) {
            $scope.package = true;
//            if (packagename == 1) {
//                $scope.golden = true;
//                $scope.platinum = false;
//                $scope.silver = false;
//            } else if (packagename == 2) {
//                $scope.silver = true;
//                $scope.golden = false;
//                $scope.platinum = false;
//            } else if (packagename == 3) {
//                $scope.platinum = true;
//                $scope.silver = false;
//                $scope.golden = false;
//            }
            $scope.dryclean = false;
            $scope.urgencies = false;

            var url = erpSystem.baseUrl + 'report/downloadGoldenSilverPlatPackagesForToday/' + packagename;
            $http.get(url).success(function (data) {
              
              $scope.challanList = data;
                if (packagename == 1) {
                $scope.golden = true;
                $scope.platinum = false;
                $scope.silver = false;
            } else if (packagename == 2) {
                $scope.silver = true;
                $scope.golden = false;
                $scope.platinum = false;
            } else if (packagename == 3) {
                $scope.platinum = true;
                $scope.silver = false;
                $scope.golden = false;
            }
                
            });
        }
        $scope.downloadDrycleanRecordForToday = function () {
                $scope.dryclean = true;
                $scope.package = false;
                $scope.urgencies = false;
                $scope.platinum = false;
                $scope.silver = false;
                $scope.golden = false;


            var url = erpSystem.baseUrl + 'report/downloadDrycleanRecordForToday/';
            $http.get(url).success(function (data) {
                  $scope.challanList = data;

            });
        }
        $scope.downloadUrgenciesRecordForToday = function () {
            $scope.urgencies = true;
            $scope.package = false;
            $scope.dryclean = false;
                $scope.platinum = false;
                $scope.silver = false;
                $scope.golden = false;
            var url = erpSystem.baseUrl + 'report/downloadUrgenciesRecordForToday/';
            $http.get(url).success(function (data) {
                  $scope.challanList = data;

            });
        }
        $scope.downloadByEmployeeTodaysCollection = function () {
            var url = erpSystem.baseUrl + 'report/downloadUrgenciesRecordForToday/';
            $http.get(url).success(function (data) {
                  $scope.challanList = data;

            });
        }

    }
]).controller('Branches', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {


        if ($routeParams.branchId) {
            $scope.updateData = true;
            $scope.branchId = $routeParams.branchId;
            var url = erpSystem.baseUrl + 'branch/getBranch/' + $scope.branchId;
            $http.get(url).success(function (data) {
                $scope.branch = data;
            });
        } else {
            $scope.updateData = false;
        }

        $scope.isUpdate = function () {
            return $scope.update;
        }

        var url = erpSystem.baseUrl + 'branch/getManagers';
        $http.get(url).success(function (data) {
            $scope.managerList = data;
        });
         var url = erpSystem.baseUrl + 'branch/getAllCities';
        $http.get(url).success(function (data) {
            $scope.citiesList = data;
        });

        $scope.updateBranchData = function () {
            var postData = $.param({
                params: $scope.branch
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = erpSystem.baseUrl + 'branch/editBranch';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {

                    $location.url('view-branches?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }
        var url = erpSystem.baseUrl + 'branch/getBranchList';
        $http.get(url).success(function (data) {
            $scope.branchList = data.branchList;
        });

        $scope.saveBranchData = function (branch) {

            var url = erpSystem.baseUrl + 'branch/saveBranch';

            if (branch.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'branch/editBranch';
            }

            var postData = $.param({
                params: branch
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            //var url = erpSystem.baseUrl + 'branch/saveBranch';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $scope.message = "Operation Successful !!!";
                    if (branch.hasOwnProperty('id')) {
                        $location.url('view-branches?update=true&id=' + branch.id);
                    } else {
                        $scope.message = "Operation Successful !!!";
                        $location.url('view-branches?insert=true');
                    }
                }
            }).error(function (data, status, headers, config) {
            });

        }

        $scope.deleteBranches = function () {
            console.log($scope.deleteMenuId);

            var url = erpSystem.baseUrl + 'branch/deleteBranch/' + $scope.deleteMenuId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteMenuId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (branchId) {
            $scope.deleteMenuId = branchId;
        }
    }
]).controller('Employees', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

        var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
        
        $http.get(url).success(function (data) {
            $scope.employeeTypeList = data.employeeTypeList;
        });

        if ($routeParams.employeeId) {
            $scope.employeeId = $routeParams.employeeId;
            var url = erpSystem.baseUrl + 'employee/getEmployee/' + $scope.employeeId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.employee = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'employee/getEmployeeList';
            $http.get(url).success(function (data) {
                $scope.employeeList = data.employeeList;
            });
        }

        $scope.saveEmployeeData = function (employee) {
            var url = '';
            if (employee.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'employee/editEmployee'
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'employee/saveEmployee'
            }

            var postData = $.param({
                params: employee
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config) //Ajax Request for saving data
                    .success(function (data, status, headers, config) {
                        boolIsInsert = data.success;

                if (employee.hasOwnProperty('id') && 1 == boolIsInsert) {
                    $location.url('view-employees?update=true&id=' + employee.id);
                } else {
                    $location.url('view-employees?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });

        }
        $scope.deleteEmployees = function (){
            console.log($scope.deleteEmployeeId);

            var url = erpSystem.baseUrl + 'employee/deleteEmployee/' + $scope.deleteEmployeeId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteEmployeeId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (employeeId) {
            $scope.deleteEmployeeId = employeeId;
        }
    }
]).controller('EmployeeTypes', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        if ($routeParams.employeeTypeId) {
            $scope.updateData = true;
            $scope.employeeTypeId = $routeParams.employeeTypeId;
            var url = erpSystem.baseUrl + 'employee/getEmployeeType/' + $scope.employeeTypeId;
            $http.get(url).success(function (data) {
                $scope.employeeType = data;
            });
        } else {
            $scope.updateData = false;

            var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
            $http.get(url).success(function (data) {
                $scope.employeeTypeList = data.employeeTypeList;
            });
        }
        $scope.saveEmployeeTypeData = function (employee) {
            var url = erpSystem.baseUrl + 'employee/saveEmployeeType';

            if (employee.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'employee/editEmployeeType';
            }
            var postData = $.param({
                params: employee
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            // var url = erpSystem.baseUrl + 'employee/saveEmployeeType';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    if (employee.hasOwnProperty('id')) {
                        $scope.message = "Operation Successful !!";
                        $location.url('view-employee-types?update=true&id=' + employee.id);
                    } else {
                        $scope.message = "Operation Successful !!";
                        $location.url('view-employee-types?insert=true');
                    }
                }
            }).error(function (data, status, headers, config) {
            });

        }

        //$scope.update = false;

        if ($routeParams.employeeTypeId) {
            $scope.employeeTypeId = $routeParams.employeeTypeId;
            var url = erpSystem.baseUrl + 'employee/getEmployeeType/' + $scope.employeeTypeId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.employeeTypeDetails = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
            $http.get(url).success(function (data) {
                $scope.employeeTypeList = data.employeeTypeList;
            });
        }

        $scope.editMenu = function () {
//            $routeParams
        }

        $scope.deleteEmployeeType = function () {
            console.log($scope.deleteEmployeeTypeId);

            var url = erpSystem.baseUrl + 'employee/deleteEmployeeType/' + $scope.deleteEmployeeTypeId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteEmployeeTypeId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (employeeTypeId) {
            $scope.deleteEmployeeTypeId = employeeTypeId;
        }
    }
]).controller('Packages', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        if ($routeParams.packageId) {
            $scope.updateData = true;
            $scope.packageId = $routeParams.packageId;
            var url = erpSystem.baseUrl + 'package/getPackage/' + $scope.packageId;
            $http.get(url).success(function (data) {
                $scope.package = data;
            });
        } else {
            $scope.updateData = false;
        }

        $scope.isUpdate = function () {
            return $scope.update;
        }
        $scope.updatePackageData = function () {
            var postData = $.param({
                params: $scope.package
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = erpSystem.baseUrl + 'package/editPackage';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-packages?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }
        $scope.savePackageData = function (packages) {
            var url = erpSystem.baseUrl + 'package/savePackage';

            if (packages.hasOwnProperty('id')) {

                url = erpSystem.baseUrl + 'package/editPackage';
            }
            var postData = $.param({
                params: packages
            });
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            // var url = erpSystem.baseUrl + 'package/savePackage';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    if (packages.hasOwnProperty('id')) {
                        $scope.message = "Operation Successful !!!";
                        $location.url('view-packages?update=true&id=' + packages.id);
                    } else {
                        $scope.message = "Operation Successful !!!";
                        $location.url('view-packages?insert=true');
                    }
                }
            }).error(function (data, status, headers, config) {
            });
        }

        $scope.update = false;

        if ($routeParams.packageId) {
            $scope.packageId = $routeParams.packageId;
            var url = erpSystem.baseUrl + 'package/getPackage/' + $scope.packageId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.clientDetails = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'package/getPackageList';
            $http.get(url).success(function (data) {
                $scope.packagetList = data;
            });
        }

        $scope.deletePackage = function () {
            console.log($scope.deletePackageId);

            var url = erpSystem.baseUrl + 'package/deletePackage/' + $scope.deletePackageId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deletePackageId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (packageId) {
            $scope.deletePackageId = packageId;
        }
    }
]).controller('WashingPowders', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

        $scope.saveWashingPowderData = function (washingPowder) {
            var url = '';

            console.log(washingPowder);
            if (washingPowder.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'washing/editWashing'
            } else {
                url = erpSystem.baseUrl + 'washing/saveWashing'
            }

            var postData = $.param({
                params: washingPowder
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
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-washing-powders?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.washingPowderId) {
            $scope.washingPowderId = $routeParams.washingPowderId;
            var url = erpSystem.baseUrl + 'washing/getWashing/' + $scope.washingPowderId;
            $http.get(url).success(function (data) {
                $scope.updateData = true;
                $scope.washing = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'washing/getWashingList';
            $http.get(url).success(function (data) {
                $scope.washingPowderList = data.washingPowderList;
            });
        }

        $scope.deleteWashingPowder = function () {
            var url = erpSystem.baseUrl + 'washing/deleteWashing/' + $scope.deleteWashingId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteWashingId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (washingId) {
            $scope.deleteWashingId = washingId;
        }
    }
]).controller('Clothes', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        //$scope.update = true;
        if ($routeParams.clothInfoId) {
            $scope.updateData = true;
            $scope.clothInfoId = $routeParams.clothInfoId;
            var url = erpSystem.baseUrl + 'cloth/getCloth/' + $scope.clothInfoId;
            $http.get(url).success(function (data) {
                $scope.cloth = data;
            });
        } else {
            $scope.updateData = false;
        }

        $scope.isUpdate = function () {
            return $scope.update;
        }

        $scope.saveClothInfoData = function (clothInfo) {
            var postData = $.param({
                params: clothInfo
            });
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            var url = erpSystem.baseUrl + 'cloth/saveCloth';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-clothes?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.clothInfoId) {
            $scope.clothInfoId = $routeParams.clothInfoId;
            var url = erpSystem.baseUrl + 'cloth/getCloth/' + $scope.clothInfoId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.clothDetails = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'cloth/getClothList';
            $http.get(url).success(function (data) {
                $scope.clothList = data.clothInfoList;
            });
        }

        $scope.deleteClothInfo = function () {
            console.log($scope.deleteClothId);

            var url = erpSystem.baseUrl + 'cloth/deleteCloth/' + $scope.deleteClothId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteClothId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (deleteClothId) {
            $scope.deleteClothId = deleteClothId;
        }
    }
]).controller('ClothTypes', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

        if ($routeParams.clothTypeId) {
            $scope.updateData = true;
            $scope.clothTypeId = $routeParams.clothTypeId;
            var url = erpSystem.baseUrl + 'clothtype/getClothType/' + $scope.clothTypeId;
            $http.get(url).success(function (data) {
                $scope.cloth = data;
            });
        } else {
            $scope.updateData = false;

            var url = erpSystem.baseUrl + 'clothtype/getClothTypeList';
            $http.get(url).success(function (data) {
                $scope.clothTypeList = data.clothTypeList;
            });
        }

        $scope.saveClothTypeData = function (clothType) {
            var url = erpSystem.baseUrl + 'clothtype/saveClothType';

            if (clothType.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'clothtype/editClothType';
            }

            var postData = $.param({
                params: clothType
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
                    if (clothType.hasOwnProperty('id')) {
                        $scope.message = "Operation Successful !!!";
                        $location.url('view-cloth-types?update=true&id=' + clothType.id);
                    } else {
                        $scope.message = "Operation Successful !!!";
                        $location.url('view-cloth-types?insert=true');
                    }
                }
            }).error(function (data, status, headers, config) {
            });
        }

        // Cloth types views coding start from here

        $scope.insertSuccess = false;
        $scope.showMessage = false;

        if ('true' == $routeParams.update) {
            $scope.insertSuccess = true;
            $scope.showMessage = true;
            $scope.message = 'Cloth Type updated successfully!';
        }

        $scope.deleteClothType = function () {
            console.log($scope.deleteClothTypeId);

            var url = erpSystem.baseUrl + 'clothtype/deleteClothType/' + $scope.deleteClothTypeId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteClothTypeId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (clothTypeId) {
            $scope.deleteClothTypeId = clothTypeId;
        }
    }
]).controller('Payments', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
        var url = erpSystem.baseUrl + 'payment/getPaymentList';
        $http.get(url).success(function (data) {
            $scope.paymentList = data;
        });

        $scope.editPaymentDetails = function (intPaymentId) {
            $scope.payment_id = intPaymentId;
            $('#payment-details-copy').html($('#row-' + intPaymentId).html());
            $('#payment-details-copy button').hide();
        }

        $scope.viewPaymentDetails = function (intPaymentId) {
            $scope.payment_id = intPaymentId;
            $('#payment-details-view-copy').html($('#row-' + intPaymentId).html());
            $('#payment-details-view-copy button').hide();

            var url = erpSystem.baseUrl + 'payment/getPaymentTransactions/' + $scope.payment_id;
            $http.get(url).success(function (data) {
                $scope.paymentTransactionList = data;
            });
        }

        $scope.savePaymentUpdate = function (payment) {
            var postData = $.param({
                params: payment,
                paymentId: $scope.payment_id
            });
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;
            var url = erpSystem.baseUrl + 'payment/addPaymentAmount';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                   alert('Your payment is added Successfully.');
                    $('#close-edit-payment').click();
                    $location.url('view-payments?update=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }
    }
]).controller('UsersProfile', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
//        $scope.result1 = '';
//        $scope.options1 = null;
//        $scope.details1 = '';

        var pendingTask;

        if ($scope.search === undefined) {
            $scope.search = "";
            //fetch();
        }

        $scope.change = function () {
            if (pendingTask) {
                clearTimeout(pendingTask);
            }
            pendingTask = setTimeout(fetch, 800);
        };

        var url = erpSystem.baseUrl + 'client/getClientList?search=' + $scope.search + '&type=name';
        $http.get(url).success(function (response) {
            $scope.clientList = response;
        });

        function fetch() {
            var url = erpSystem.baseUrl + 'client/searchClients?search=' + $scope.search + '&type=name';
            $http.get(url).success(function (response) {
                $scope.clientList = response;
                $("#search-clients").autocomplete({
                    source: response
                });
            });
        }

        $scope.update = function (movie) {
            $scope.search = movie.Title;
            $scope.change();
        };

        $scope.select = function () {
            this.setSelectionRange(0, this.value.length);
        }
    }
]).controller('ChallanSearchController', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

        var url = erpSystem.baseUrl + 'challan/getDeliveryStatus';
        $http.get(url).success(function (data) {
            $scope.deliveryStatusList = data;
        });
        $scope.printchallan = function (challan_no_mod) {
           window.open("index.php/dashbord/printChallan?challan_id="+challan_no_mod, "Challan Print", "width=40, height=300"); 
        }
        
        $scope.searchChallan = function (challan_no_mod) {
            $scope.totalItems = 0;
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + $scope.challan_no_mod;
            $http.get(url).success(function (response) {
                if (response.hasOwnProperty('challan_list')) {
                    $scope.challanno = $scope.challan_no_mod;
                    $scope.number_of_times = 1;
                    $scope.client_name = response.challan_list[0].client_name;
                    $scope.weight = response.challan_list[0].weight;
                   
                }

                $scope.challanList = response.challan_list;
                $scope.challanTimeLog = response.challan_time_log;

                if (response.challan_list[0].package_name) {
                    $scope.updateData = true;
                } else {
                    $scope.updateData = false;
                }

                if (response.isStart) {
                    $scope.isStart = true;
                } else {
                    $scope.isStart = false;
                }

                $scope.isCompleted = response.isCompleted;
                  
                  
                    angular.forEach(response.challan_list, function(value, key) {
                        //console.log(value);
                          $scope.totalItems += parseInt(value.total_item_count);
//                        $scope.remainingPaymentAmmount += parseInt(value.remaining_amount);
//                        $scope.paidPaymentAmmount += parseInt(value.paid_amount);
//                        $scope.totalCompletedPaymentAmmount += parseInt(value.is_completed);
                    });   
                        var range = [];
                         for(var i=0;i<$scope.totalItems;i++) {
                           range.push(i);
                         }
                         $scope.range = range;
            });
        }


        $scope.updateChallaStatus = function (status) {

            var postData = $.param({
                challan_id: $scope.challan_no_mod,
                is_start: $scope.isStart
            });
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;
            var url = erpSystem.baseUrl + 'challan/updateChallanStatus';
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (true == boolIsInsert || 1 == boolIsInsert) {
                    $scope.message = "Operation Successful !!!";
                    $location.url('challan-status/edit/' + $scope.challan_no_mod + '?update=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.challanId) {
            $scope.challanId = $routeParams.challanId;
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + $scope.challanId;
            $http.get(url).success(function (response) {
                if (response.hasOwnProperty('challan_list')) {
                    $scope.challan_no_mod = $scope.challanId;
                    $scope.challanno = $scope.challanId;
                    $scope.number_of_times = 1;
                    $scope.client_name = response.challan_list[0].client_name;
                }

                $scope.challanList = response.challan_list;
                $scope.challanTimeLog = response.challan_time_log;

                if (response.challan_list[0].package_name) {
                    $scope.updateData = true;
                } else {
                    $scope.updateData = false;
                }

                if (response.isStart) {
                    $scope.isStart = true;
                } else {
                    $scope.isStart = false;
                }

                $scope.isCompleted = response.isCompleted;
            });
        }
    }
]).controller('reports', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

//        var url = erpSystem.baseUrl + 'report/getDateList';
//        $http.get(url).success(function(data) {
//            $scope.deliveryStatusList = data;
//              });
//              
//        var url = erpSystem.baseUrl + 'report/getChallanDateList';
//        $http.get(url).success(function(data) {
//            $scope.deliveryStatusList1 = data;
//              });

        var url = erpSystem.baseUrl + 'report/getEmployeeNames';
        $http.get(url).success(function (data) {
            $scope.deliveryStatusList1 = data;
        });

        $scope.getPaymentReport = function (status_id) {
            if (status_id == "")
                $scope.messageSelect = "Select Moonth And Year !!!";
            else
                window.location.href = erpSystem.baseUrl + '/report/downloadPaymentReportDetails/' + status_id;
        }
        $scope.getChallanReport = function (challan_id) {

            if (challan_id == "")
                $scope.messageSelect = "Select Moonth And Year !!!";
            else
                window.location.href = erpSystem.baseUrl + '/report/downloadChallanReportDetails/' + challan_id;
        }
        $scope.getPaymentReportByDateRange = function () {
            var dateRange = $('#date-range-payment-report').val();
            var devide_date = dateRange.split(" ");
            var from_date = devide_date[0].split("/");
            var from_month = from_date[0];
            var from_day = from_date[1];
            var from_year = from_date[2];

            var to_date = devide_date[2].split("/");
            var to_month = to_date[0];
            var to_day = to_date[1];
            var to_year = to_date[2];

            var date_concatinated = from_month + " " + from_day + " " + from_year + " " + to_month + " " + to_day + " " + to_year;
            window.location.href = erpSystem.baseUrl + '/report/downloadPaymentReportDetailsByDateRange/' + date_concatinated;
        }
        $scope.getChallanReportByDateRange = function () {
            var dateRange = $('#date-range-payment-report').val();
            var devide_date = dateRange.split(" ");
            var from_date = devide_date[0].split("/");
            var from_month = from_date[0];
            var from_day = from_date[1];
            var from_year = from_date[2];

            var to_date = devide_date[2].split("/");
            var to_month = to_date[0];
            var to_day = to_date[1];
            var to_year = to_date[2];

            var date_concatinated = from_month + " " + from_day + " " + from_year + " " + to_month + " " + to_day + " " + to_year;
            window.location.href = erpSystem.baseUrl + '/report/downloadChallanReportDetailsByDateRange/' + date_concatinated;
        }
        $scope.showChallanReportByDate = function (challan_id) {
            if (challan_id == "")
            {
                $scope.messageSelect = "Select Moonth And Year !!!";
            } else
            {
                var url = erpSystem.baseUrl + 'report/showChallanReportByDate/' + $scope.challan_id;
                $http.get(url).success(function (data) {
                    $scope.challanList = data;
                });
            }
        }
        //for showing reports by selecting month.
        $scope.showPaymentReportByDate = function (challan_id) {
            if (challan_id == "")
            {
                $scope.messageSelect = "Select Moonth And Year !!!";
            } else
            {
                var url = erpSystem.baseUrl + 'report/showPaymentReportByDate/' + $scope.challan_id;
                $http.get(url).success(function (data) {
                    $scope.challanList = data;
                });
            }
        }

        //for showing reports by date range
        $scope.showPaymentReportByDateRange = function () {

            var dateRange = $('#date-range-payment-report').val();
            var devide_date = dateRange.split(" ");
            var from_date = devide_date[0].split("/");
            var from_month = from_date[0];
            var from_day = from_date[1];
            var from_year = from_date[2];

            var to_date = devide_date[2].split("/");
            var to_month = to_date[0];
            var to_day = to_date[1];
            var to_year = to_date[2];

            var date_concatinated = from_month + " " + from_day + " " + from_year + " " + to_month + " " + to_day + " " + to_year;
            //alert(date_concatinated);
            var url = erpSystem.baseUrl + 'report/showPaymentReportByDateRange/' + date_concatinated;
            $http.get(url).success(function (data) {
                //alert(date);
                $scope.challanList = data;
            });

        }
        $scope.showChallanReportByDateRange = function () {
            var dateRange = $('#date-range-payment-report').val();
            var devide_date = dateRange.split(" ");
            var from_date = devide_date[0].split("/");
            var from_month = from_date[0];
            var from_day = from_date[1];
            var from_year = from_date[2];
            var to_date = devide_date[2].split("/");
            var to_month = to_date[0];
            var to_day = to_date[1];
            var to_year = to_date[2];
            var date_concatinated = from_month + " " + from_day + " " + from_year + " " + to_month + " " + to_day + " " + to_year;
            var url = erpSystem.baseUrl + 'report/showChallanReportByDateRange/' + date_concatinated;
            $http.get(url).success(function (data) {
                $scope.challanList = data;
            });

        }

        $scope.showPaymentReportByEmployeeName = function (emp_name_id) {

            var name_id = emp_name_id.split("-");
            var id = name_id[1];
            // alert(name_id[1]);

            var url = erpSystem.baseUrl + 'report/showPaymentReportByEmployeeName/' + id;
            $http.get(url).success(function (data) {
                $scope.challanList = data;
            });

        }
    }
]).controller('AutoCompleteController', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParams, $http) {
        $scope.fruitName = undefined;
        $scope.items = ["Apple", "Banana", "Orange"];
    }
])
.controller('add_room', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

//        var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
//       // alert (url);
//        $http.get(url).success(function (data) {
//            $scope.employeeTypeList = data.employeeTypeList;
       // });

        if ($routeParams.id) {
            $scope.id = $routeParams.id;
            var url = erpSystem.baseUrl + 'Rooms/getRoomByRoomId/' + $scope.id;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.hrm = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'Rooms/getRoomListByResortId';
            $http.get(url).success(function (data) {
                $scope.RoomList = data;
            });
        }

        $scope.saveRoom = function (hrm) {
            
           // alert('hi');
            var url = '';
            if (hrm.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'Rooms/editroom';
               // alert (url);
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'Rooms/saveRoom';
                //alert (url);
            }
//              if (clothType.hasOwnProperty('id')) {
//                url = erpSystem.baseUrl + 'clothtype/editClothType';
//            }

            var postData = $.param({
                params: hrm
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (hrm.hasOwnProperty('id') && 1 == boolIsInsert) {
                    $location.url('view-room?update=true');
                } else {
                    $location.url('view-room?insert=true');
                }
            }).error(function  (data, status, headers, config) {
            });

        }
        $scope.deleteRoom = function (){
//            console.log($scope.deleteEmployeeId);

            var url = erpSystem.baseUrl + 'Rooms/deleteRoom/' + $scope.deleteRoomId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteRoomId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (RoomId) {
            $scope.deleteRoomId = RoomId;
        }
    }
])
.controller('Resorts', ['$scope', '$routeParams', '$http', 'erpSystem', '$location','$upload', '$timeout',
    function ($scope, $routeParams, $http, erpSystem, $location, $upload, $timeout) {

        $scope.updateData = false;

       // var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
      
      //  $http.get(url).success(function (data) {
          //      $scope.employeeTypeList = data.employeeTypeList;
       // });

        if ($routeParams.resortId) {
            $scope.resortId = $routeParams.resortId;
            var url = erpSystem.baseUrl + 'Resorts/getResortByResortId/' + $scope.resortId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.res = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'Resorts/getAllResorts';
            $http.get(url).success(function (data) {
                $scope.ResortsList = data;
            });
        }

 $scope.uploadResult = [];
        $scope.onFileSelect = function($files) {
//       alert($files);
    for (var i = 0; i < $files.length; i++) {
      var $file = $files[i];
      $upload.upload({
        url: erpSystem.baseUrl + 'resorts/uploadfiles/',
        file: $file,
        progress: function(e){}
      }).then(function(response) {
          $scope.new_name = response.data[0][1];
//          alert(JSON.stringify(response.data[0][1]));
        // file is uploaded successfully
		$timeout(function() {
					$scope.uploadResult.push(response.data[0][0]);
//					console.log($scope.uploadResult);
				});
      }); 
    }
  };

        $scope.saveResortsData = function (res) {
            var url = '';
            if (res.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'Resorts/editResortData';
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'Resorts/saveResortsData';
            }

            var postData = $.param({
                params: res,
                file_name : $scope.new_name,
                place_id:'ChIJv8a-SlENCDsRkkGEpcqC1Qs',
                xCoordinate:'cvfvf',
                yCoordinate:'vfvfv'
                
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (res.hasOwnProperty('id') && 1 == boolIsInsert) {
                    $location.url('view-resorts?update=true&id=' + res.id);
                } else {
                    $location.url('view-resorts?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });

        }
         $scope.deleteResorts = function (){
//            console.log($scope.deleteResortsId);

            var url = erpSystem.baseUrl + 'resorts/deleteResort/' + $scope.deleteResortsId;
            $http.delete(url)
            
            .success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteResortsId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (ResortsId) {
            $scope.deleteResortsId = ResortsId;
        }
    }
])
<<<<<<< HEAD
.controller('Images', ['$scope', '$routeParams', '$http', 'erpSystem','$upload','$timeout',
    function ($scope, $routeParams, $http, erpSystem, $upload, $timeout) {
        
   $scope.uploadResult = [];
   $scope.base_url = erpSystem.baseUrl; 
     
   $scope.onFileSelect = function($files) {
//       alert();
    for (var i = 0; i < $files.length; i++) {
      var $file = $files[i];
      $upload.upload({
        url: erpSystem.baseUrl + 'Images/uploadfiles/',
        file: $file,
        progress: function(e){}
      }).then(function(response) {
        // file is uploaded successfully
		$timeout(function() {
					$scope.uploadResult.push(response.data[0]);
					console.log($scope.uploadResult);
				});
      }); 
    }
  };
  
  var url = erpSystem.baseUrl + 'Images/getAllImages';
        $http.get(url).success(function (data) {
            $scope.allImages = data;
        });

         $scope.deleteImage = function () {
//            console.log($scope.deleteMenuId);

            var url = erpSystem.baseUrl + 'Images/deleteImage/' + $scope.deleteMenuId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteMenuId));
                    myEl.empty();  //clears contents

                    $('.modal-footer .btn-default').click();
                }
            });
        };

        $scope.deleteConfirm = function (branchId) {
            $scope.deleteMenuId = branchId;
        };
        
        $scope.showImage = function (imageId){
            
            var url = erpSystem.baseUrl + 'Images/getImageById/' + imageId;
        $http.get(url).success(function (data) {
            $scope.currentImage = data;
          
        });
            
        };

    

    }
])
.controller('add-offer', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
=======
.controller('add-offer-benefit', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
>>>>>>> 6e1df09148d742fed3ab11177ff07498be5a4746
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

       // var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
      
      //  $http.get(url).success(function (data) {
          //      $scope.employeeTypeList = data.employeeTypeList;
       // });

        if ($routeParams.RoomOfferId) {
            $scope.RoomOfferId = $routeParams.RoomOfferId;
            var url = erpSystem.baseUrl + 'RoomOfferBenefit/getRoomBenefitOfferById/' + $scope.RoomOfferId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.sro = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'RoomOfferBenefit/getAllRoomOfferBEnefitByResortId';
            $http.get(url).success(function (data) {
                $scope.RoomOfferList = data;
            });
        }

        $scope.saveRoomOffer = function (sro) {
            var url = '';
            if (sro.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'RoomOfferBenefit/editRoomOffer';
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'RoomOfferBenefit/saveRoomOffer';
            }

            var postData = $.param({
                params: sro
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (sro.hasOwnProperty('id') && 1 == boolIsInsert) {
                    $location.url('view-room-offer-benefit?update=true&id=' + sro.id);
                } else {
                    $location.url('view-room-offer-benefit?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });

        }
         $scope.deleteRoomOffer = function (){
//            console.log($scope.deleteResortsId);

            var url = erpSystem.baseUrl + 'RoomOfferBenefit/deleteRoomOffer/' + $scope.deleteRoomOfferId
            $http.delete(url)
            
            .success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteRoomOfferId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (RoomOfferId) {
            $scope.deleteRoomOfferId = RoomOfferId;
        }
    }
])
.controller('add-policies', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;

       // var url = erpSystem.baseUrl + 'employee/getEmployeeTypeList';
      
      //  $http.get(url).success(function (data) {
          //      $scope.employeeTypeList = data.employeeTypeList;
       // });

        if ($routeParams.ResortPoliciesId) {
            $scope.ResortPoliciesId = $routeParams.ResortPoliciesId;
            var url = erpSystem.baseUrl + 'ResortPolicies/getPoliciesByid/' + $scope.ResortPoliciesId;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.srp = data;
            });
        } else {
            var url = erpSystem.baseUrl + 'ResortPolicies/getAllPoliciesByResottId';
            $http.get(url).success(function (data) {
                $scope.ResortPoliciesList = data;
            });
        }

        $scope.saveResortPolicies = function (srp) {
            var url = '';
            if (srp.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'ResortPolicies/editResortPolicies';
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'ResortPolicies/saveResortPolicies';
            }

            var postData = $.param({
                params: srp
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data.success;

                if (srp.hasOwnProperty('id') && 1 == boolIsInsert) {
                    $location.url('view-policies?update=true&id=' + srp.id);
                } else {
                    $location.url('view-policies?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });

        }
       $scope.deleteResortPolicies = function (){
//            console.log($scope.deleteResortsId);

            var url = erpSystem.baseUrl + 'ResortPolicies/deleteResortPolicies/' + $scope.deleteResortPoliciesId
            $http.delete(url)
            
            .success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.deleteResortPoliciesId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }

        $scope.deleteConfirm = function (ResortPoliciesId) {
            $scope.deleteResortPoliciesId = ResortPoliciesId;
        }
    }
]);
