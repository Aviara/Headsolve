'use strict';

/* Services */

var laundryServices = angular.module('laundryServices', ['ngResource']);

laundryServices.factory('Phone', ['$resource',
  function($resource){
    return $resource('phones/:phoneId.json', {}, {
      query: {method:'GET', params:{phoneId:'phones'}, isArray:true}
    });
  }]);
