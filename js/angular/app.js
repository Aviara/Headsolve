'use strict';

/* App Module */

var resortApp = angular.module('resortApp', [
    'ngRoute',
//'datatables',
    //'laundryAnimation',
    'resortCtrl',
//    'ngAutocomplete',
    'ngMaterial',
    'ngMessages',
    'material.svgAssetsCache'
//    'ngMaterial'
//    'ngMessages'
//    'material.svgAssetsCache'
//    'ngCookies',
//    'angularFileUpload'
//    'ngCookies'
//    'paymentAccount'
//  'laundryFilters',
//  'laundryServices'
]);


resortApp.factory('erpSystem', function () {
    return {
        
        base_url: 'http://localhost/ayurveda/',
        baseUrl: 'http://localhost/ayurveda/'
        
//        base_url: 'http://onerupeest.com/pickortow/',
//        baseUrl:  'http://onerupeest.com/pickortow/',

    };
});


resortApp.config(['$routeProvider',
    function ($routeProvider) {
        
        var baseUrlLink = 'http://localhost/ayurveda/';

        $routeProvider.
                //hfjtgfjghf
                when('/', {
                    templateUrl: baseUrlLink + 'partials/homepage.html',
                    controller: 'Home',
                    controllerAs: 'ctrl'
                }).
                when('/homepage', {
                    templateUrl: baseUrlLink + 'partials/homepage.html',
                    controller: 'Home',
                    controllerAs: 'ctrl'
                }).      
                 when('/hotel-list', {
                    templateUrl: baseUrlLink + 'partials/hotel-list.html',
                    controller: 'HotelList'
                }).        
                when('/property-details/searchSite/:siteId', {
                    templateUrl: baseUrlLink + 'partials/property-details.html',
                    controller: 'PropertyDetails'
                }).
                     
                 when('/property-details/searchProp/:propId/:siteId1', {
                    templateUrl: baseUrlLink + 'partials/property-details.html',
                    controller: 'PropertyDetails'
                }).
                  when('/property-details/searchSubSite/:subSiteId/:siteId', {
                    templateUrl: baseUrlLink + 'partials/property-details.html',
                    controller: 'PropertyDetails'
                }).  
                when('/property-details/searchPropOfSubSite/:propId/:subSiteId1/:siteId', {
                    templateUrl: baseUrlLink + 'partials/property-details.html',
                    controller: 'PropertyDetails'
                }).        
                when('/about-us', {
                    templateUrl: baseUrlLink + 'partials/about-us.html',
                    controller: 'about-us'
                }).        
                when('/contact', {
                    templateUrl: baseUrlLink + 'partials/contact.html',
                    controller: 'contact'
                }).
                when('/services', {
                    templateUrl: baseUrlLink + 'partials/services.html',
                    controller: 'services'
                }). 
                when('/gallery', {
                    templateUrl: baseUrlLink + 'partials/gallery.html',
                    controller: 'gallery'
                }).  
                   
                        
                
                otherwise({
                    
                    redirectTo: '/'

                });
    }]);

