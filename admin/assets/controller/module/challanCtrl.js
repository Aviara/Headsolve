'use strict';

/* Controllers */

var challanCtrl = angular.module('challanCtrl', []);

challanCtrl.controller('Challans', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;
        $scope.rowCount = 1;

        // Load Cloth Types
        var url = erpSystem.baseUrl + 'clothtype/getClothTypeList/';
        $http.get(url).success(function (data) {
            $scope.itemNameList = data.clothTypeList;
        });
        /*********************************************************************************
         *************** Displaying Package Cycle Record *********************************
         *********************************************************************************/
        var url = erpSystem.baseUrl + 'packagesCycle/getCycleDetails/';
        $http.get(url).success(function (data) {
            $scope.packageCycleList = data.PackageCyCle;
        });


        /*********************************************************************************
         ************************** Delete Package Cycle Record ***************************
         *********************************************************************************/

        $scope.deletePackageCycleRecord = function () {
            console.log($scope.packageCycleId);
            var url = erpSystem.baseUrl + 'packagescycle/deletePackageCycleRecord/' + $scope.packageCycleId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.packageCycleId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }
        $scope.deleteConfirm = function (employeeId) {
            $scope.packageCycleId = employeeId;
        }



        // Load Package List
        var url = erpSystem.baseUrl + 'package/getPackageList/';
        $http.get(url).success(function (data) {
            $scope.packageList = data;
        });

        if (!$routeParams.challanId) {
            // Load Client list for search and select.
            var url = erpSystem.baseUrl + 'client/getClientList?search=' + $scope.search + '&type=name';
            $http.get(url).success(function (response) {
                $scope.clientList = response;
                
            });
        }

        $scope.addNewRowCount = 1;
        $scope.insertSuccess = false;
        $scope.showMessage = false;

        if ('true' == $routeParams.insert) {
            $scope.insertSuccess = true;
            $scope.showMessage = true;
        }

        if ($location.url().indexOf('view-challans') >= 1) {
            // Need to pass current loged in employee id to fetch the all challans createed by him only.
            var url = erpSystem.baseUrl + 'challan/getChallanesByEmployeeId/12';
            $http.get(url).success(function (data) {
                $scope.challanList = data;
            });
        }

        
        $scope.addNewRow = function () {

            $scope.addNewRowCount += 1;
            $('#new-rows').append($('#item-list').html());
            $scope.rowCount += 1;
        }
        
       // Load Branches FOR Out-Sourcing
        var url = erpSystem.baseUrl + 'branch/getAllBranches/';
        $http.get(url).success(function (data) {
            $scope.branchList = data;
        });
        
         // Load All  Out-Sourced Data
//        var url = erpSystem.baseUrl + 'outsource/getAllOutsourced/';
//        $http.get(url).success(function (data) {
//            $scope.outsourceList = data;
//        });

 	  
        
         if ($routeParams.challanIdToEdit) {
            $scope.challanIdToEdit = $routeParams.challanIdToEdit;
            var url = erpSystem.baseUrl + 'outsource/getOutsourcedById/' + $scope.challanIdToEdit;
            $http.get(url).success(function (data) {
                $scope.update = true;
                $scope.voucherout = data;
            });
        } else {
        var url = erpSystem.baseUrl + 'outsource/getAllOutsourced/';
            $http.get(url).success(function (data) {
            
                $scope.outsourceList = data;
                
            });
           
        }
            
                
        $scope.saveChallanData = function ($event) {

            if ($routeParams.challanId) {
                var url = erpSystem.baseUrl + 'challan/editChallan';
            } else {
                var url = erpSystem.baseUrl + 'challan/saveChallan';
            }

            var postData = $.param({
                params: $scope.challanList,
                total_amount: $scope.totalCost,
                total_items: $scope.totalItems,
                packageId: $scope.selectedPackageId,
                challan_id: $scope.challaId,
                payment_id: $scope.payment_id,
                client_id: $scope.searchedClientId
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
                    $location.url('view-challans?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }
        
        $scope.saveOutsourcedData = function (voucherout) {
           
            if (!voucherout.hasOwnProperty('payment_id')) {
                var url = erpSystem.baseUrl + 'outsource/updateOutsourced';
            }else{
                 url = erpSystem.baseUrl + 'outsource/saveOutsourced';
            }
            var postData = $.param({
                params     : voucherout,
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

                if (voucherout.hasOwnProperty('id')) {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-outsourced/add?update=true&id=' + voucherout.id);
                } else {
                    $scope.message = "Operation Successful !!!";
                    $location.url('view-outsourced/?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.challanId) {
            $scope.updateData = true;
            $scope.challan_id = $routeParams.challanId;
            var url = erpSystem.baseUrl + 'challan/getChallan/' + $routeParams.challanId;
            $http.get(url).success(function (data) {
                $scope.challanList = data;
                $scope.voucherout = data[0];  //for oursoursing data
               // $scope.challanId = data[0].challan_id;  //for oursoursing data
                if (data.hasOwnProperty("0")) {
                    $scope.challaId = data[0].challan_id;
                    $scope.totalCost = data[0].total_amount;
                    $scope.totalItems = data[0].total_items;
                    //$scope.packageName = data[0].package;
                    $scope.selected_package_id = $scope.selectedPackageId = data[0].package_id;
                    $scope.payment_id = data[0].payment_id;
                    $scope.isPackageSelected = true;
                    $scope.total_weight = data[0].total_items;
                    $scope.searchedClientId = data[0].client_id;
                }

                url = erpSystem.baseUrl + 'client/getClient/' + $scope.searchedClientId;
                $scope.clientDetails = {};

                $http.get(url).success(function (data) {
                    $scope.clientDetails = data;
                });
            });
        }
        
        

        var counter = 0;
        $scope.challanList = [{
                id: counter,
                item_id: '',
                quntity: '',
                is_iron: ''
            }];

        $scope.addFormField = function ($event) {
            counter++;
            $scope.challanList.push({
                id: counter,
                item_id: '',
                quntity: '',
                is_iron: ''
            });
            $event.preventDefault();
        }

        $scope.packageName = 'Gold';
        $scope.totalItems = '0000';
        $scope.totalCost = '0000';
        $scope.isPackageSelected = false;

        $scope.isSelectClient = function () {
            console.log();
        }

        $scope.assignPackage = function (event, packageId) {
            //$('#package_details').removeClass('btn-success');
            //$('.removeClass').removeClass('btn-success');
            $scope.selectedPackageId = packageId;
            $scope.isPackageSelected = true;
            $scope.calculateCosting();
            $(event.target).addClass('btn-success');
        }

        $scope.calculateCosting = function () {

            var objPackage = $scope.packageList[$scope.selectedPackageId];
            if (!objPackage) {
                return true;
            }

            $scope.packageName = objPackage.name;
            $scope.totalItems = 0;
            $scope.totalCost = 0;
            
            if($scope.total_weight > 6){
                $scope.extraWeight = (6 - $scope.total_weight);
            }
            
            angular.forEach($scope.challanList, function (data, key) {

                $scope.totalCost = 0;
                var itemObj = $scope.itemNameList[data.item_id];
                var packageId = objPackage.id;

                if (!itemObj)
                    return true;

                var intTotalRoundKg = Math.ceil(parseInt($scope.total_weight) / 6);

                //console.log('total KG :: ' + intTotalRoundKg);

                $scope.totalItems = $scope.total_weight;

                //console.log('package ID : ' + packageId);

                if (1 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.gold_per_kg_price) * parseInt(intTotalRoundKg));
                } else if (2 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.silver_per_kg_price) * parseInt(intTotalRoundKg));
                } else if (3 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.platinum_per_kg_price) * parseInt(intTotalRoundKg));
                } else {
                    $scope.totalCost = '00';
                }

                //console.log('total cost :: '  + $scope.totalCost);

                if (true == isNaN($scope.totalCost)) {
                    $scope.totalCost = '00';
                }

                if (true == isNaN($scope.totalItems)) {
                    $scope.totalItems = '0';
                }

//                if (true == data.is_iron) {
//                    $scope.totalCost += parseInt(itemObj.iron_price);
//                }
            });
        }

        $scope.showChallanDetails = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + intChallanId;
            $http.get(url).success(function (data) {
                var challan_list;
                $scope.challan_id = intChallanId;
                $scope.challanItemList = data.challan_list;
                $scope.client_name = data.challan_list[0].client_name;
                $scope.weight = data[0].weight;
            });
        }

        $scope.showChallanDetailslog = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanDetailslog/' + intChallanId;
            $http.get(url).success(function (data) {
                $scope.dataNotAvialble = true;
                if (data.length > 0) {
                    $scope.challan_id = intChallanId;
                    $scope.challanStatusLogList = data;
                } else {
                    $scope.dataNotAvialble = false;
                }

                if (data.hasOwnProperty('0')) {
                    $scope.client_name = data[0].client_name;
                } else {
                    $scope.client_name = '';
                }
            });
        }
          /*******************for getting city_id of loged in user********************/
         var url = erpSystem.baseUrl + 'challan/getLogedInUserDetails/';
            $http.get(url).success(function (data) {
             //   $scope.challanList = data;
                $scope.thisIsPuneAndGoaAddChallanForm = data.city_id;
                if($scope.thisIsPuneAndGoaAddChallanForm == 1){
                    $scope.thisIsPuneAndGoaAddChallanForm = false;
                    $scope.thisIsraipurAddChallanForm = true;
               }else{
                    $scope.thisIsPuneAndGoaAddChallanForm = true;
                    $scope.thisIsraipurAddChallanForm = false;
               }
            });
        $scope.showChallanTimelogs = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanTimelogs/' + intChallanId;
            $http.get(url).success(function (data) {
                $scope.dataNotAvialble = true;
                if (data.length > 0) {
                    $scope.challan_id = intChallanId;
                    $scope.challanTimeLogList = data;
                } else {
                    $scope.dataNotAvialble = false;
                }

                if (data.hasOwnProperty('0')) {
                    $scope.client_name = data[0].client_name;
                } else {
                    $scope.client_name = '';
                }
            });
        }

        $scope.editChallanView = function () {
            $('#closeButton').click();
            $location.url('challan/edit/' + $scope.challan_id);
        }

        $scope.loadClientDetails = function (intClientId) {
            if (!intClientId) {
                $scope.isPackageSelected = false;
            }

            $scope.searchedClientId = intClientId;

            var url = erpSystem.baseUrl + 'client/getClient/' + $scope.searchedClientId;
            $http.get(url).success(function (data) {
                $scope.clientDetails = data;
            });
        }
    }
]).controller('ChallanDelivery', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {
      
        
        $scope.searchChallan = function () {
              $scope.totalItems = 0;
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + $scope.challan_no_mod;
            $http.get(url).success(function (response) {
                if (response.hasOwnProperty('challan_list')) {
                    $scope.challanno = $scope.challan_no_mod;
                    $scope.clientname = response.challan_list[0].id;
                    $scope.package = response.challan_list[0].package_name;
                    $scope.weight = response.challan_list[0].weight;
                    $scope.number_of_times = 1;
                    $scope.client_name = response.challan_list[0].client_name;
                }
                angular.forEach(response.challan_list, function(value, key) {
                       
                          $scope.totalItems += parseInt(value.total_item_count);
                     });

                $scope.challanList = response.challan_list;

                var url = erpSystem.baseUrl + 'payment/getPaymentByChallanId/' + $scope.challan_no_mod;
                $http.get(url).success(function (data) {
                    if (data.hasOwnProperty('id')) {
                        $scope.payment = data;
                    }
                });

                if (response.challan_list[0].package_name) {
                    $scope.updateData = true;
                } else {
                    $scope.updateData = false;
                }
            });
        }
        

        $scope.addDeliveryPayment = function () {

            $scope.paymentAddFailed = false;
            if ($scope.amount > $scope.payment.remaining_amount || $scope.amount == 0) {
                $scope.paymentAddFailed = true;
                $scope.message = 'Paid Amount is more than actual billing Amount.';
                return true;
            }

            var postData = $.param({
                challan_id: $scope.challanno,
                payment_amount: $scope.amount,
                payment: $scope.payment,
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
                    alert("Your status has been successfully updated...");
                    $location.url('challan-delivery/edit/' + $scope.challanno + '?update=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.challanId) {
            $scope.challanId = $routeParams.challanId;
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + $scope.challanId;
            $http.get(url).success(function (response) {
                $scope.challanno = $scope.challanId;
                $scope.challanList = response.challan_list;
            });
        }

        /*******************************************************************
         ********************* Challan Time Log *****************************
         *******************************************************************/
}]).controller('ChallansPune', ['$scope', '$routeParams', '$http', 'erpSystem', '$location',
    function ($scope, $routeParams, $http, erpSystem, $location) {

        $scope.updateData = false;
        $scope.rowCount = 1;

        // Load Cloth Types
        var url = erpSystem.baseUrl + 'clothtype/getClothTypeList/';
        $http.get(url).success(function (data) {
            $scope.itemNameList = data.clothTypeList;
        });
        /*********************************************************************************
         *************** Displaying Package Cycle Record *********************************
         *********************************************************************************/
        var url = erpSystem.baseUrl + 'packagesCycle/getCycleDetails/';
        $http.get(url).success(function (data) {
            $scope.packageCycleList = data.PackageCyCle;
        });


        /*********************************************************************************
         ************************** Delete Package Cycle Record ***************************
         *********************************************************************************/

        $scope.deletePackageCycleRecord = function () {
            console.log($scope.packageCycleId);
            var url = erpSystem.baseUrl + 'packagesCycle/deletePackageCycleRecord/' + $scope.packageCycleId
            $http.delete(url).success(function (data) {
                if (1 == data.success || 1 === data.success) {
                    var myEl = angular.element(document.querySelector('#row-' + $scope.packageCycleId));
                    myEl.empty();  //clears contents
                    $('.modal-footer .btn-default').click();
                }
            });
        }
        $scope.deleteConfirm = function (employeeId) {
            $scope.packageCycleId = employeeId;
        }
        /*******************for getting city_id of loged in user********************/
         var url = erpSystem.baseUrl + 'challan/getLogedInUserDetails/';
            $http.get(url).success(function (data) {
             //   $scope.challanList = data;
                $scope.thisIsPuneAndGoaAddChallanForm = data.city_id;
                if($scope.thisIsPuneAndGoaAddChallanForm !== 1){
                    $scope.thisIsPuneAndGoaAddChallanForm = true;
               }else
                   $scope.thisIsPuneAndGoaAddChallanForm = false;
            });
        $scope.selectedItemChanged = function () {
            var url = erpSystem.baseUrl + 'package/getPackageCycleDetails/' + $scope.selected_client_id;
            
            $http.get(url).success(function (data) {
                $scope.packageList = data;
                $scope.user_city = data['user_city'];
                $scope.total_cycles = data['total_cycles'];
                $scope.remaining_cycles = data['remaining_cycles'];
            });
        }
        if (!$routeParams.challanId) {
            // Load Client list for search and select.
            var url = erpSystem.baseUrl + 'client/getClientList?search=' + $scope.search + '&type=name';
            $http.get(url).success(function (response) {
                $scope.clientList = response;
                $scope.client_id1 = response.id;
            });
        }

        $scope.addNewRowCount = 1;

        $scope.insertSuccess = false;
        $scope.showMessage = false;

        if ('true' == $routeParams.insert) {
            $scope.insertSuccess = true;
            $scope.showMessage = true;
        }

        if ($location.url().indexOf('view-challans') >= 1) {
            // Need to pass current loged in employee id to fetch the all challans createed by him only.
            var url = erpSystem.baseUrl + 'challan/getChallanesByEmployeeId/';
            $http.get(url).success(function (data) {
                $scope.challanList = data;
                $scope.thisIsPuneAndGoaAddChallanForm = data.city_id;
                if($scope.thisIsPuneAndGoaAddChallanForm !== 1){
                    $scope.thisIsPuneAndGoaAddChallanForm = true;
               }else
                   $scope.thisIsPuneAndGoaAddChallanForm = false;
            });
        }

        $scope.addNewRow = function () {
            $scope.addNewRowCount += 1;
            $('#new-rows').append($('#item-list').html());
            $scope.rowCount += 1;
        }

        $scope.saveChallanData = function ($event) {

            if ($routeParams.challanId) {
                var url = erpSystem.baseUrl + 'challan/editChallan';
            } else {
                var url = erpSystem.baseUrl + 'challan/saveChallan';
            }


            /******************************* this is the last work of jeevan of  ***************************************/

            var postData = $.param({
                params: $scope.challanList,
                total_items: $scope.totalItems,
                packageId: $scope.selectedPackageId,
                challan_id: $scope.challaId,
                payment_id: $scope.payment_id,
                client_id: $scope.searchedClientId

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
                    $location.url('view-challans?insert=true');
                }
            }).error(function (data, status, headers, config) {
            });
        }

        if ($routeParams.challanId) {
            $scope.updateData = true;
            $scope.challan_id = $routeParams.challanId;
            var url = erpSystem.baseUrl + 'challan/getChallan/' + $routeParams.challanId;
            $http.get(url).success(function (data) {
                $scope.challanList = data;

                if (data.hasOwnProperty("0")) {
                    $scope.challaId = data[0].challan_id;
                    $scope.totalCost = data[0].total_amount;
                    $scope.totalItems = data[0].total_items;
                    //$scope.packageName = data[0].package;
                    $scope.selected_package_id = $scope.selectedPackageId = data[0].package_id;
                    $scope.payment_id = data[0].payment_id;
                    $scope.isPackageSelected = true;
                    $scope.total_weight = data[0].total_items;
                    $scope.searchedClientId = data[0].client_id;
                }

                url = erpSystem.baseUrl + 'client/getClient/' + $scope.searchedClientId;
                $scope.dtOptions = DTOptionsBuilder.newOptions().withDisplayLength(5).withOption('bLengthChange', false);
                $scope.clientDetails = {};

                $http.get(url).success(function (data) {
                    $scope.clientDetails = data;
                });
            });
        }

        var counter = 0;
        $scope.challanList = [{
                id: counter,
                item_id: '',
                quntity: '',
                is_iron: ''
            }];

        $scope.addFormField = function ($event) {
            counter++;
            $scope.challanList.push({
                id: counter,
                item_id: '',
                quntity: '',
                is_iron: ''
            });
            $event.preventDefault();
        }

        $scope.packageName = 'Gold';
        $scope.totalItems = '0000';
        $scope.totalCost = '0000';
        $scope.isPackageSelected = false;

        $scope.isSelectClient = function () {
            console.log();
        }

        $scope.assignPackage = function (event, packageId) {
            //$('#package_details').removeClass('btn-success');
            //$('.removeClass').removeClass('btn-success');
            $scope.selectedPackageId = packageId;
            $scope.isPackageSelected = true;
            $scope.calculateCosting();
            $(event.target).addClass('btn-success');
        }

        $scope.calculateCosting = function () {

            var objPackage = $scope.packageList[$scope.selectedPackageId];
            if (!objPackage) {
                return true;
            }

            $scope.packageName = objPackage.name;
            $scope.totalItems = 0;
            $scope.totalCost = 0;

            angular.forEach($scope.challanList, function (data, key) {

                $scope.totalCost = 0;
                var itemObj = $scope.itemNameList[data.item_id];
                var packageId = objPackage.id;

                if (!itemObj)
                    return true;

                var intTotalRoundKg = Math.ceil(parseInt($scope.total_weight) / 6);

                //console.log('total KG :: ' + intTotalRoundKg);

                $scope.totalItems = $scope.total_weight;

                //console.log('package ID : ' + packageId);

                if (1 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.gold_per_kg_price) * parseInt(intTotalRoundKg));
                } else if (2 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.silver_per_kg_price) * parseInt(intTotalRoundKg));
                } else if (3 == packageId) {
                    $scope.totalCost += (parseInt(itemObj.platinum_per_kg_price) * parseInt(intTotalRoundKg));
                } else {
                    $scope.totalCost = '00';
                }

                //console.log('total cost :: '  + $scope.totalCost);

                if (true == isNaN($scope.totalCost)) {
                    $scope.totalCost = '00';
                }

                if (true == isNaN($scope.totalItems)) {
                    $scope.totalItems = '0';
                }

            });
        }

        $scope.showChallanDetails = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanDetails/' + intChallanId;
            $http.get(url).success(function (data) {
                var challan_list;
                $scope.challan_id = intChallanId;
                $scope.challanItemList = data.challan_list;
                $scope.client_name = data.challan_list[0].client_name;
                $scope.weight = data[0].weight;
            });
        }

        $scope.showChallanDetailslog = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanDetailslog/' + intChallanId;
            $http.get(url).success(function (data) {
                $scope.dataNotAvialble = true;
                if (data.length > 0) {
                    $scope.challan_id = intChallanId;
                    $scope.challanStatusLogList = data;
                } else {
                    $scope.dataNotAvialble = false;
                }

                if (data.hasOwnProperty('0')) {
                    $scope.client_name = data[0].client_name;
                } else {
                    $scope.client_name = '';
                }
            });
        }

        $scope.showChallanTimelogs = function (intChallanId) {
            var url = erpSystem.baseUrl + 'challan/getChallanTimelogs/' + intChallanId;
            $http.get(url).success(function (data) {
                $scope.dataNotAvialble = true;
                if (data.length > 0) {
                    $scope.challan_id = intChallanId;
                    $scope.challanTimeLogList = data;
                } else {
                    $scope.dataNotAvialble = false;
                }

                if (data.hasOwnProperty('0')) {
                    $scope.client_name = data[0].client_name;
                } else {
                    $scope.client_name = '';
                }
            });
        }

        $scope.editChallanView = function () {
            $('#closeButton').click();
            $location.url('challan/edit/' + $scope.challan_id);
        }

        $scope.loadClientDetails = function (intClientId) {
            if (!intClientId) {
                $scope.isPackageSelected = false;
            }

            $scope.searchedClientId = intClientId;

            var url = erpSystem.baseUrl + 'client/getClient/' + $scope.searchedClientId;
            $http.get(url).success(function (data) {
                $scope.clientDetails = data;
            });
        }
    }
]);
