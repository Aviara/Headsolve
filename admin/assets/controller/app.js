    'use strict';

/* App Module */

var laundryApp = angular.module('laundryErp', [
    'ngRoute',
    'datatables',
    //'laundryAnimation',
    'laundryCtrl',
    'challanCtrl',
    'menuCtrl',
    'clientCtrl',
    'paymentAccount',
    'angularFileUpload'
//  'laundryFilters',
//  'laundryServices'
]);

laundryApp.factory('erpSystem', function () {
    return {
        //base_url: 'http://laundryerp.lcl/',
        //baseUrl: 'http://laundryerp.lcl/',ad
        
        base_url: 'http://localhost/ayurveda/admin/index.php/',
        baseUrl: 'http://localhost/ayurveda/admin/index.php/'
        
//        base_url: 'http://thelaundrybag.co.in/laundry-erp/index.php/',
//        baseUrl: 'http://thelaundrybag.co.in/laundry-erp/index.php/',

//        base_url: 'http://ommsoftware.com/laundry-erp/',
//        baseUrl: 'http://ommsoftware.com/laundry-erp/',
        
//        base_url: 'http://onerupeest.com/laundry-erp/index.php/',
//        baseUrl: 'http://onerupeest.com/laundry-erp/index.php/',
    }
});

laundryApp.config(['$routeProvider',
    function ($routeProvider) { 
        //var baseUrlLink = 'http://laundryerp.lcl/';
        
        var baseUrlLink = 'http://localhost/ayurveda/admin/';

//        var baseUrlLink = 'http://thelaundrybag.co.in/laundry-erp/';

//		var baseUrlLink = 'http://onerupeest.com/laundry-erp/';


        $routeProvider.
                when('/dashbord', {
                    templateUrl: baseUrlLink + 'partials/dashbord.html',
                    controller: 'DashbordCtrl'
                }).
                when('/pickup-reports', {
                    templateUrl: baseUrlLink + 'partials/dashbord/pickup-reports.html',
                    controller: 'DashbordReports'
                }).
                when('/delivery-reports', {
                    templateUrl: baseUrlLink + 'partials/dashbord/delivery-reports.html',
                    controller: 'DashbordReports'
                }).
               when('/job-work', {
                    templateUrl: baseUrlLink + 'partials/dashbord/job-work.html',
                    controller: 'DashbordReports'
                }).
                  when('/accounts', {
                    templateUrl: baseUrlLink + 'partials/dashbord/accounts.html',
                    controller: 'EmployeePaymentForToday'
                }).
                when('/menu-builder', {
                    templateUrl: baseUrlLink + 'partials/menu/menu-builder.html',
                    controller: 'MenuBuilder'
                }).
                when('/menu-builder/edit/:menuId', {
                    templateUrl: baseUrlLink + 'partials/menu/menu-builder.html',
                    controller: 'MenuBuilder'
                }).
                when('/menu-builder/delete/:menuId', {
                    templateUrl: baseUrlLink + 'partials/menu/menu-builder.html',
                    controller: 'MenuBuilder'
                }).
                when('/menu-listing', {
                    templateUrl: baseUrlLink + 'partials/menu/menu-listing.html',
                    controller: 'MenuListing'
                }).
                when('/new-branch', {
                    templateUrl: baseUrlLink + 'partials/branches/add-branch.html',
                    controller: 'Branches'
                }).
                when('/new-branch/edit/:branchId', {
                    templateUrl: baseUrlLink + 'partials/branches/add-branch.html',
                    controller: 'Branches'
                }).
                when('/view-branches', {
                    templateUrl: baseUrlLink + 'partials/branches/view-branches.html',
                    controller: 'Branches'
                }).
                when('/add-employee', {
                    templateUrl: baseUrlLink + 'partials/employees/add-employee.html',
                    controller: 'Employees'
                }).
                when('/add-employee/edit/:employeeId', {
                    templateUrl: baseUrlLink + 'partials/employees/add-employee.html',
                    controller: 'Employees'
                }).
                when('/view-employees', {
                    templateUrl: baseUrlLink + 'partials/employees/view-employees.html',
                    controller: 'Employees'
                }).
                when('/add-employee-type', {
                    templateUrl: baseUrlLink + 'partials/employees/add-employee-type.html',
                    controller: 'EmployeeTypes'
                }).
                when('/add-employee-type/edit/:employeeTypeId', {
                    templateUrl: baseUrlLink + 'partials/employees/add-employee-type.html',
                    controller: 'EmployeeTypes'
                }).
                when('/view-employee-types', {
                    templateUrl: baseUrlLink + 'partials/employees/view-employee-types.html',
                    controller: 'EmployeeTypes'
                }).

                when('/new-client', {
                    templateUrl: baseUrlLink + 'partials/clients/add-client.html',
                    controller: 'Clients'
                }).
                when('/new-client/edit/:clientId', {
                    templateUrl: baseUrlLink + 'partials/clients/add-client.html',
                    controller: 'Clients'
                }).
                when('/view-clients', {
                    templateUrl: baseUrlLink + 'partials/clients/view-clients.html',
                    controller: 'Clients'
                }).
                when('/new-package', {
                    templateUrl: baseUrlLink + 'partials/packages/add-package.html',
                    controller: 'Packages'
                }).
                when('/new-package/edit/:packageId', {
                    templateUrl: baseUrlLink + 'partials/packages/add-package.html',
                    controller: 'Packages'
                }).
                when('/view-packages', {
                    templateUrl: baseUrlLink + 'partials/packages/view-packages.html',
                    controller: 'Packages'
                }).
                when('/new-washing-powder', {
                    templateUrl: baseUrlLink + 'partials/washing/add-washing-powder.html',
                    controller: 'WashingPowders'
                }).
                when('/new-washing-powder/edit/:washingPowderId', {
                    templateUrl: baseUrlLink + 'partials/washing/add-washing-powder.html',
                    controller: 'WashingPowders'
                }).
                when('/view-washing-powders', {
                    templateUrl: baseUrlLink + 'partials/washing/view-washing-powders.html',
                    controller: 'WashingPowders'
                }).
                when('/new-cloth-info', {
                    templateUrl: baseUrlLink + 'partials/clothes/add-cloth-info.html',
                    controller: 'Clothes'
                }).
                when('/new-cloth-info/edit/:clothInfoId', {
                    templateUrl: baseUrlLink + 'partials/clothes/add-cloth-info.html',
                    controller: 'Clothes'
                }).
                when('/view-cloth-infos', {
                    templateUrl: baseUrlLink + 'partials/clothes/view-cloth-info.html',
                    controller: 'Clothes'
                }).
                when('/new-cloth-type', {
                    templateUrl: baseUrlLink + 'partials/clothes/add-cloth-type.html',
                    controller: 'ClothTypes'
                }).
                when('/new-cloth-type/edit/:clothTypeId', {
                    templateUrl: baseUrlLink + 'partials/clothes/add-cloth-type.html',
                    controller: 'ClothTypes'
                }).
                when('/view-cloth-types', {
                    templateUrl: baseUrlLink + 'partials/clothes/view-cloth-types.html',
                    controller: 'ClothTypes'
                }).
                when('/phones/:phoneId', {
                    templateUrl: baseUrlLink + 'partials/phone-detail.html',
                    controller: 'PhoneDetailCtrl'
                }).
                when('/challan', {
                    templateUrl: baseUrlLink + 'partials/challan/add-challan.html',
                    controller: 'Challans'
                }).
                when('/challan/edit/:challanId', {
                    templateUrl: baseUrlLink + 'partials/challan/add-challan.html',
                    controller: 'Challans'
                }).
                when('/view-challans', {
                    templateUrl: baseUrlLink + 'partials/challan/view-challans.html',
                    controller: 'Challans'
                }).
                when('/challan-delivery', {
                    templateUrl: baseUrlLink + 'partials/challan/delivery.html',
                    controller: 'ChallanDelivery'
                }).
                when('/challan-delivery/edit/:challanId', {
                    templateUrl: baseUrlLink + 'partials/challan/delivery.html',
                    controller: 'ChallanDelivery'
                }).
                // User model with all the functionality.
                when('/user/profile', {
                    templateUrl: baseUrlLink + 'partials/users/profile.html',
                    controller: 'UsersProfile'
                }).
                when('/search-client', {
                    templateUrl: baseUrlLink + 'partials/challan/search-client.html',
                    controller: 'UsersProfile'
                }).
                when('/view-payments', {
                    templateUrl: baseUrlLink + 'partials/payments/view-payments.html',
                    controller: 'Payments'
                }).
                when('/autoexample', {
                    templateUrl: baseUrlLink + 'partials/requirement/autoexample.html',
                    controller: 'AutoCompleteController'
                }).
                when('/challan-status', {
                    templateUrl: baseUrlLink + 'partials/challan-status/challan-status.html',
                    controller: 'ChallanSearchController'
                }).
                when('/challan-status/edit/:challanId', {
                    templateUrl: baseUrlLink + 'partials/challan-status/challan-status.html',
                    controller: 'ChallanSearchController'
                }).
                when('/report-payments', {
                    templateUrl: baseUrlLink + 'partials/reports/payment-report.html',
                    controller: 'reports'
                }).
                when('/report-challanes', {
                    templateUrl: baseUrlLink + 'partials/reports/challan-report.html',
                    controller: 'reports'
                }).
                when('/payment-report-emp', {
                    templateUrl: baseUrlLink + 'partials/reports/payment-report-emp.html',
                    controller: 'reports'
                }).
                when('/payment-employee', {
                    templateUrl: baseUrlLink + 'partials/payments/payment-employee.html',
                    controller: 'EmployeePaymentForToday'
                }).
                when('/view-cycle-details', {
                    templateUrl: baseUrlLink + 'partials/challan/view-cycle-details.html',
                    controller: 'Challans'
                }).
                 when('/challan-pune', {
                    templateUrl: baseUrlLink + 'partials/challan/challan-pune.html',
                    controller: 'ChallansPune'
                }).
                 when('/challan-pune/edit/:challanId', {
                    templateUrl: baseUrlLink + 'partials/challan/challan-pune.html',
                    controller: 'Challans'
                }).
                 when('/add-outsource/add/:challanId',{
                    templateUrl: baseUrlLink + 'partials/outsourced/add-outsource.html',
                    controller: 'Challans'
                }).
                  when('/view-outsourced',{
                    templateUrl: baseUrlLink + 'partials/outsourced/view-outsourced.html',
                    controller: 'Challans'
                }).
                  when('/add-outsource/edit/:challanIdToEdit',{
                    templateUrl: baseUrlLink + 'partials/outsourced/add-outsource.html',
                    controller: 'Challans'
                }).
                 when('/add-room',{
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/add_room.html',
                    controller: 'Rooms'
                }).
                  when('/view-room',{
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/view-room.html',
                    controller: 'Rooms'
                }).
                  when('/add-room/edit/:id',{
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/add_room.html',
                    controller: 'Rooms'
               }).
//                  when('/new-employee-type', {
//                    templateUrl: baseUrlLink + 'partials/employees/add-employee-type.html',
//                    controller: 'RoomType'
//                }).
//                  when('/new-room-type/edit/:roomTypeId', {
//                    templateUrl: baseUrlLink + 'partials/employees/add-employee-type.html',
//                    controller: 'RoomType'
//                }).
//                  when('/view-employee-types', {
//                    templateUrl: baseUrlLink + 'partials/employees/view-employee-types.html',
//                    controller: 'RoomType'
//                }).     
//                when('/http://localhost/laundry-erp/partials/challan-status/print-label-window.html',{
//                    templateUrl: 'http://localhost/laundry-erp/partials/challan-status/print-label-window.html',
//                    controller: 'ChallanSearchController'
//                }).       
                    when('/add-resorts', {
                    templateUrl: baseUrlLink + 'partials/resorts/add-resorts.html',
                    controller: 'Resorts'
                }).
                    when('/view-resorts', {
                    templateUrl: baseUrlLink + 'partials/resorts/view-resorts.html',
                    controller: 'Resorts'
                }).
                     when('/add-resorts/edit/:resortId', {
                    templateUrl: baseUrlLink + 'partials/resorts/add-resorts.html',
                    controller: 'Resorts'
                }).
                     when('/insert-resort-images/', {
                    templateUrl: baseUrlLink + 'partials/resorts/insert-resort-images.html',
                    controller: 'Images'
                }).
                    when('/view-resort-images', {
                    templateUrl: baseUrlLink + 'partials/resorts/view-resort-images.html',
                    controller: 'Images'
                }).
                     when('/add-room-offer', {
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/add-room-offer.html',
                    controller: 'OffersBenefit'
                }).
                     when('/add-room-offer/edit/:RoomOfferId', {
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/add-room-offer.html',
                    controller: 'OffersBenefit'
                }).
                     when('/view-room-offer',{
                    templateUrl: baseUrlLink + 'partials/hotel_rooms/view-room-offer.html',
                    controller: 'OffersBenefit'
                }).
                     when('/add-policies',{
                    templateUrl: baseUrlLink + 'partials/policies/add-policies.html',
                    controller: 'ResortPolicies'
                }).     
                      when('/view-policies',{
                    templateUrl: baseUrlLink + 'partials/policies/view-policies.html',
                    controller: 'ResortPolicies'
                }). 
                     when('/add-policies/edit/:ResortPoliciesId',{
                    templateUrl: baseUrlLink + 'partials/policies/add-policies.html',
                    controller: 'ResortPolicies'
                }).

		 when('/add-resort-useful-info', {
                    templateUrl: baseUrlLink + 'partials/resorts/add-resort-useful-info.html',
                    controller: 'ResortUsefulInfo'
                }).
                   when('/view-resort-useful-info', {
                    templateUrl: baseUrlLink + 'partials/resorts/view-resort-useful-info.html',
                    controller: 'ResortUsefulInfo'
                }).
                   when('/add-resort-useful-info/edit/:employeeId', {
                    templateUrl: baseUrlLink + 'partials/resorts/add-resort-useful-info.html',
                    controller: 'ResortUsefulInfo'
                }).

		 when('/add-room-type', {
                    templateUrl: baseUrlLink + 'partials/room/add-room-type.html',
                    controller: 'RoomTypes'
                }).
                   when('/view-room-type', {
                    templateUrl: baseUrlLink + 'partials/room/view-room-type.html',
                    controller: 'RoomTypes'
                }).
                   when('/add-room-type/edit/:employeeId', {
                    templateUrl: baseUrlLink + 'partials/room/add-room-type.html',
                    controller: 'RoomTypes'
                  }).       
                otherwise({
                    redirectTo: '/dashbord'

                });
    }]);
