var resortCtrl = angular.module('resortCtrl', []);//'ngRoute'

resortCtrl.controller('Home', function($timeout, $q, $log, $scope,$http,erpSystem, $timeout, $q, $log) {//$cookies,$window,,$routeParams,$location,$route,$anchorScroll
   

    $('html').animate({ scrollTop: 0 }, 'slow'); 
//.controller('DemoCtrl', DemoCtrl);
//
//  function DemoCtrl ($timeout, $q, $log) {
//    var $scope = this;

    $scope.simulateQuery = false;
    $scope.isDisabled    = false;

    $scope.repos         = loadAll();
    $scope.querySearch   = querySearch;
    $scope.selectedItemChange = selectedItemChange;
    $scope.searchTextChange   = searchTextChange;
    // ******************************
    // Internal methods
    // ******************************

    /**
     * Search for repos... use $timeout to simulate
     * remote dataservice call.
     */
    function querySearch (query) {
      var results = query ? $scope.repos.filter( createFilterFor(query) ) : $scope.repos,
          deferred;
      if ($scope.simulateQuery) {
        deferred = $q.defer();
        $timeout(function () { deferred.resolve( results ); }, Math.random() * 1000, false);
        return deferred.promise;
      } else {
        return results;
      }
    }

    function searchTextChange(text) {
      $log.info('Text changed to ' + text);
    }

    function selectedItemChange(item) {
      $log.info('Item changed to ' + JSON.stringify(item));
    }

    /**
     * Build `components` list of key/value pairs
     */
    function loadAll() {
      var repos = [
        {
          'name'      : 'Angular 1',
          'url'       : 'https://github.com/angular/angular.js',
          'watchers'  : '3,623',
          'forks'     : '16,175',
        },
        {
          'name'      : 'Angular 2',
          'url'       : 'https://github.com/angular/angular',
          'watchers'  : '469',
          'forks'     : '760',
        },
        {
          'name'      : 'Angular Material',
          'url'       : 'https://github.com/angular/material',
          'watchers'  : '727',
          'forks'     : '1,241',
        },
        {
          'name'      : 'Bower Material',
          'url'       : 'https://github.com/angular/bower-material',
          'watchers'  : '42',
          'forks'     : '84',
        },
        {
          'name'      : 'Material Start',
          'url'       : 'https://github.com/angular/material-start',
          'watchers'  : '81',
          'forks'     : '303',
        }
      ];
      return repos.map( function (repo) {
        repo.value = repo.name.toLowerCase();
        return repo;
      });
    }

    /**
     * Create filter function for a query string
     */
    function createFilterFor(query) {
      var lowercaseQuery = angular.lowercase(query);

      return function filterFn(item) {
        return (item.value.indexOf(lowercaseQuery) === 0);
      };

    }
//  }

    
    $scope.base_url = erpSystem.baseUrl;  
      var url = erpSystem.baseUrl + 'admin/index.php/CountryStateCity/getAllCitiesOfKerala/';
                    $http.post(url)
                                  .success(function(data){
                                    $scope.countryNames = data;
                                  });

           var url = erpSystem.baseUrl + 'site/getAllSites/'+ erpSystem.baseUrl;
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                                  });
                                  
            var url = erpSystem.baseUrl + 'subsite/getAllSubSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSubSites = data;
                                  });
//    if(allSites.){
//        
//    }
    });
resortCtrl.directive('imageonload', function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            element.bind('load', function() {
                alert('image is loaded');
            });
        }
    };
});
//$scope.src ='https://www.google.com.ua/images/srpr/logo4w.png/cb='+ Math.random();
//resortCtrl.controller('c', function($scope) {
//    $scope.src ="https://www.google.com.ua/images/srpr/logo4w.png";
//});


resortCtrl.controller('HotelList', function($cookies,$window,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
   
       $('html').animate({ scrollTop: 0 }, 'slow'); 

    $scope.base_url = erpSystem.baseUrl;  
//   $scope.src ="https://www.google.com.ua/images/srpr/logo4w.png";   
    var url = erpSystem.baseUrl + 'location/getAllLocations/';
                     $http.get(url)
                                   .success(function(data){
                                     $scope.allLocations = data;
                                   });
                                   
    var url = erpSystem.baseUrl + 'site/getAllSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                            $scope.allSitesMap = data[0];
                            
                                  });  
    var url = erpSystem.baseUrl + 'subsite/getAllSubSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSubSites = data;
                                  });                               
  
        
    if ($routeParams.siteId) {
        $scope.IsVisibleProp = false;
         $scope.showSubSiteByPropId = false;
        $scope.showSubSiteBySubSiteId = false;
        $scope.IsVisible = true;
//        alert('in site');
          $scope.siteId = $routeParams.siteId;
          $scope.DataBySite = 'bySite';
          
          var url = erpSystem.baseUrl + 'property/getPropertyBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyDataBySiteId = data;
                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
        $scope.showBigImage = false;
          var url = erpSystem.baseUrl + 'site/getAllImagesBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.allImagesBySiteId = data;
                          $scope.currentBigImage1 = data[0];
                          $scope.currentBigImage22 = $scope.currentBigImage1.name;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage22)); 
            });  
             
//            $scope.path = 'admin/assets/uploaded_project_document/';

               $scope.setImage = function(imageId){
               $scope.showBigImage = true;
                   var url = erpSystem.baseUrl + 'site/getAllImageByImageId/' + imageId;
                        $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.currentBigImage = data;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage)); 
            }); 
//               $scope.bigImage = 'admin/assets/uploaded_project_document/'+ $scope.image.name; 
            };
            
        var url = erpSystem.baseUrl + 'site/getAllAmenitiesBySiteId/' + $scope.siteId;
                $http.get(url)
                              .success(function (data) {
                              $scope.allAmenitiesBySiteId = data;
    //                          $scope.propertyData = data[0];
    //                         alert(JSON.stringify($scope.propertyData)); 
                });
                
        var url = erpSystem.baseUrl + 'site/getSiteById/'+ $scope.siteId;
                    $http.get(url)
                                  .success(function(data){
                                    $scope.map = data;
                                   
     });
     
     var cities = [
        {
        city : 'Toronto',
        desc : 'This is the best city in the world!',
        lat : 18.5204,
        long : 73.8567
       }
      ];
    var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(18.5204, 73.8567),
        mapTypeId: google.maps.MapTypeId.TERRAIN
    }

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.markers = [];
    
    var infoWindow = new google.maps.InfoWindow();
    
    var createMarker = function (info){
        
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.lat, info.long),
            title: info.city
        });
        marker.content = '<div class="infoWindowContent">' + info.desc + '</div>';
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
            infoWindow.open($scope.map, marker);
        });
        
        $scope.markers.push(marker);
        
    }  
    
    for (i = 0; i < cities.length; i++){
        createMarker(cities[i]);
    }

    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }
 }
      if($routeParams.siteId1)  { 
        $scope.IsVisible = false; 
        $scope.showSubSiteByPropId = false;
        $scope.showSubSiteBySubSiteId = false;
        $scope.IsVisibleProp = true;
            $scope.siteId = $routeParams.siteId1;
            $scope.propertyId = $routeParams.propId;
            $scope.DataBySite = 0;
            
            var url = erpSystem.baseUrl + 'property/getPropertyBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyDataBySiteId = data;
                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
            
             var url = erpSystem.baseUrl + 'property/getPropertyByPropId/' + $scope.propertyId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyDataByPropId = data;
//                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
             $scope.showBigImage = false;
             var url = erpSystem.baseUrl + 'site/getAllImagesBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.allImagesBySiteId = data;
                          $scope.currentBigImage1 = data[0];
                          $scope.currentBigImage22 = $scope.currentBigImage1.name;
//                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.currentBigImage22)); 
            });  
            
             $scope.setImage = function(imageId){
               $scope.showBigImage = true;
                   var url = erpSystem.baseUrl + 'site/getAllImageByImageId/' + imageId;
                        $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.currentBigImage = data;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage)); 
            }); 
//               $scope.bigImage = 'admin/assets/uploaded_project_document/'+ $scope.image.name; 
            };
            
        var url = erpSystem.baseUrl + 'site/getAllAmenitiesBySiteId/' + $scope.siteId;
                $http.get(url)
                              .success(function (data) {
                              $scope.allAmenitiesBySiteId = data;
    //                          $scope.propertyData = data[0];
    //                         alert(JSON.stringify($scope.propertyData)); 
                });
                
         var url = erpSystem.baseUrl + 'site/getSiteById/'+ $scope.siteId;
                    $http.get(url)
                                  .success(function(data){
                                    $scope.map = data[0];
                                   
     });        
    
        var cities = [
    {
        city : 'Toronto',
        desc : 'This is the best city in the world!',
        lat : 18.5204,
        long : 73.8567
    }
];
    var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(18.5204, 73.8567),
        mapTypeId: google.maps.MapTypeId.TERRAIN
    }

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.markers = [];
    
    var infoWindow = new google.maps.InfoWindow();
    
    var createMarker = function (info){
        
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.lat, info.long),
            title: info.city
        });
        marker.content = '<div class="infoWindowContent">' + info.desc + '</div>';
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
            infoWindow.open($scope.map, marker);
        });
        
        $scope.markers.push(marker);
        
    }  
    
    for (i = 0; i < cities.length; i++){
        createMarker(cities[i]);
    }

    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }
    
     }
     
     if ($routeParams.subSiteId) {
        $scope.IsVisibleProp = false;
        $scope.IsVisible = false; 
        $scope.showSubSiteByPropId = false;
        $scope.showSubSiteBySubSiteId = true;
//        alert('in site');
          $scope.subSiteId = $routeParams.subSiteId;
          $scope.siteId = $routeParams.siteId;
          $scope.DataBySite = 'bySite';
          
          /********************* Done *************************/
          var url = erpSystem.baseUrl + 'property/getPropertyBySubSiteId/' + $scope.subSiteId+'/'+$scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyDataBySiteId = data;
                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
            
        $scope.showBigImage = false;
          var url = erpSystem.baseUrl + 'site/getAllImagesBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.allImagesBySiteId = data;
                          $scope.currentBigImage1 = data[0];
                          $scope.currentBigImage22 = $scope.currentBigImage1.name;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage22)); 
            });  
             
//            $scope.path = 'admin/assets/uploaded_project_document/';

               $scope.setImage = function(imageId){
               $scope.showBigImage = true;
                   var url = erpSystem.baseUrl + 'site/getAllImageByImageId/' + imageId;
                        $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.currentBigImage = data;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage)); 
            }); 
//               $scope.bigImage = 'admin/assets/uploaded_project_document/'+ $scope.image.name; 
            };
            
        var url = erpSystem.baseUrl + 'site/getAllAmenitiesBySiteId/' + $scope.siteId;
                $http.get(url)
                              .success(function (data) {
                              $scope.allAmenitiesBySiteId = data;
    //                          $scope.propertyData = data[0];
    //                         alert(JSON.stringify($scope.propertyData)); 
                });
                
        var url = erpSystem.baseUrl + 'site/getSiteById/'+ $scope.siteId;
                    $http.get(url)
                                  .success(function(data){
                                    $scope.map = data;
                                   
     });
     
     var cities = [
        {
        city : 'Toronto',
        desc : 'This is the best city in the world!',
        lat : 18.5204,
        long : 73.8567
       }
      ];
    var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(18.5204, 73.8567),
        mapTypeId: google.maps.MapTypeId.TERRAIN
    }

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.markers = [];
    
    var infoWindow = new google.maps.InfoWindow();
    
    var createMarker = function (info){
        
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.lat, info.long),
            title: info.city
        });
        marker.content = '<div class="infoWindowContent">' + info.desc + '</div>';
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
            infoWindow.open($scope.map, marker);
        });
        
        $scope.markers.push(marker);
        
    }  
    
    for (i = 0; i < cities.length; i++){
        createMarker(cities[i]);
    }

    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }
 }
 
  if($routeParams.subSiteId1)  { 
      ;
        $scope.IsVisibleProp = false;
        $scope.IsVisible = false; 
        $scope.showSubSiteBySubSiteId = false;
        $scope.showSubSiteByPropId = true;
        
        $scope.siteId = $routeParams.siteId;
        $scope.propertyId = $routeParams.propId;
        $scope.subSiteId = $routeParams.subSiteId1;
        $scope.DataBySite = 0;
/********************* Done *************************/
          var url = erpSystem.baseUrl + 'property/getPropertyBySubSiteId/' + $scope.subSiteId+'/'+$scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyDataBySiteId = data;
                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
            
            //:propId/:subSiteId1
             var url = erpSystem.baseUrl + 'property/getPropertyByPropIdAndSubsite/' + $scope.propertyId + '/' + $scope.subSiteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.propertyByPropIdAndSubSiteId = data;
//                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.propertyData)); 
            });
             $scope.showBigImage = false;
             var url = erpSystem.baseUrl + 'site/getAllImagesBySiteId/' + $scope.siteId;
            $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.allImagesBySiteId = data;
                          $scope.currentBigImage1 = data[0];
                          $scope.currentBigImage22 = $scope.currentBigImage1.name;
//                          $scope.propertyData = data[0];
//                         alert(JSON.stringify($scope.currentBigImage22)); 
            });  
            
             $scope.setImage = function(imageId){
               $scope.showBigImage = true;
                   var url = erpSystem.baseUrl + 'site/getAllImageByImageId/' + imageId;
                        $http.get(url)
                          .success(function (data) {
                          $scope.update = true;
                          $scope.currentBigImage = data;
//                          $scope.bigImage = data[0];
//                         alert(JSON.stringify($scope.currentBigImage)); 
            }); 
//               $scope.bigImage = 'admin/assets/uploaded_project_document/'+ $scope.image.name; 
            };
            
        var url = erpSystem.baseUrl + 'site/getAllAmenitiesBySiteId/' + $scope.siteId;
                $http.get(url)
                              .success(function (data) {
                              $scope.allAmenitiesBySiteId = data;
    //                          $scope.propertyData = data[0];
    //                         alert(JSON.stringify($scope.propertyData)); 
                });
                
         var url = erpSystem.baseUrl + 'site/getSiteById/'+ $scope.siteId;
                    $http.get(url)
                                  .success(function(data){
                                    $scope.map = data[0];
                                   
     });        
    
        var cities = [
    {
        city : 'Toronto',
        desc : 'This is the best city in the world!',
        lat : 18.5204,
        long : 73.8567
    }
];
    var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(18.5204, 73.8567),
        mapTypeId: google.maps.MapTypeId.TERRAIN
    }

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.markers = [];
    
    var infoWindow = new google.maps.InfoWindow();
    
    var createMarker = function (info){
        
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.lat, info.long),
            title: info.city
        });
        marker.content = '<div class="infoWindowContent">' + info.desc + '</div>';
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
            infoWindow.open($scope.map, marker);
        });
        
        $scope.markers.push(marker);
        
    }  
    
    for (i = 0; i < cities.length; i++){
        createMarker(cities[i]);
    }

    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }
    
     }
          
});    


       

  
 resortCtrl.controller('about-us', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
    $('html').animate({ scrollTop: 0 }, 'slow'); 

    $scope.base_url = erpSystem.baseUrl;  
      var url = erpSystem.baseUrl + 'location/getAllLocations/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allLocations = data;
                                  });
      var url = erpSystem.baseUrl + 'site/getAllSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                                  }); 
                                  
     var url = erpSystem.baseUrl + 'subsite/getAllSubSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSubSites = data;
                                  });                             
   

});

 resortCtrl.controller('contact', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
       $('html').animate({ scrollTop: 0 }, 'slow');

    $scope.base_url = erpSystem.baseUrl;  
      var url = erpSystem.baseUrl + 'location/getAllLocations/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allLocations = data;
                                  });
      var url = erpSystem.baseUrl + 'site/getAllSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                                  });                                  
     $scope.sendMessage = function(contact){
    
        
                url = erpSystem.baseUrl + 'site/sendEmail';
          
            var postData = $.param({
                params: contact
            });
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;
            $http.post(url, postData, config)
                    .success(function (data, status, headers, config) {
                            boolIsInsert = data.success;

                            if ('true' === boolIsInsert) {
                                $location.url('view-properties?update=true&id=' + siteData.id);
                            } 
                        })
                    .error(function (data, status, headers, config) {
            });
        };    
   
     
     

});
 
 resortCtrl.controller('gallery', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
       $('html').animate({ scrollTop: 0 }, 'slow'); 
    $scope.base_url = erpSystem.baseUrl;  
      var url = erpSystem.baseUrl + 'location/getAllLocations/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allLocations = data;
                                  });
      var url = erpSystem.baseUrl + 'site/getAllSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                                  });                                  
   
       var url = erpSystem.baseUrl + 'subsite/getAllSubSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSubSites = data;
                                  });
                                  
});

resortCtrl.controller('contact', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
       $('html').animate({ scrollTop: 0 }, 'slow'); 

    $scope.base_url = erpSystem.baseUrl;  
      var url = erpSystem.baseUrl + 'location/getAllLocations/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allLocations = data;
                                  });
      var url = erpSystem.baseUrl + 'site/getAllSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSites = data;
                                  });                                  
   
       var url = erpSystem.baseUrl + 'subsite/getAllSubSites/';
                    $http.get(url)
                                  .success(function(data){
                                    $scope.allSubSites = data;
                                  });
                                  
});

