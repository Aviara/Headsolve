var freelancerCtrl = angular.module('freelancerCtrl', []);//'ngRoute'
    


freelancerCtrl.controller('Home', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll) {
   
   
   var reload = $route.current.params.reload;
    if(reload == 'true'){
         $location.hash('hero-area');
        $anchorScroll.yOffset = 20;
        $anchorScroll();
    }

    
    $scope.base_url = erpSystem.baseUrl;  
   
   
   var url = erpSystem.baseUrl + 'user/getSessionData/';
            $http.get(url).success(function (data) {
                $scope.userData = data;
//                alert(JSON.stringify(data));
//                console.log(JSON.stringify($scope.userData));
     });

        $scope.checkLogedInUser = function(user){
            
                
            if($scope.userData == "null"){
               
               if(user == 'client'){
                $location.url('login?user=client');  
            }
            else{
                $location.url('login?user=developer');  
            }
               
            }
            else{
//                alert($scope.userData.user_type);
                if($scope.userData.user_type == 2)
                {
                 $location.url('postaproject');    
                }
                 else{
                  $location.url('bidaproject');    
                 }
                  
            }
        }
        $scope.checkLogedInUserDeveloper = function(){
        var userData = $cookies.getObject('userData', userData);
            if($scope.userData == "null"){
               
                 $location.url('login');  
            }
            else{
                
                 
            }
        }
});
  
         
freelancerCtrl.controller('AfterPosting', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route) {
     var lastInsertedId = $route.current.params.lii;
     var id = 0;
     var url = erpSystem.baseUrl + 'project/getProjectDetailsById/' + lastInsertedId;
            $http.get(url).success(function (data) {
                $scope.projectDetails = data[0];
//                alert(JSON.stringify(data));
//                console.log(JSON.stringify($scope.projectDetails));
     });
});

freelancerCtrl.controller('Postaproject', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route) {//,$routeParams

 
    var url = erpSystem.baseUrl + 'project/getProjectType/';
            $http.get(url).success(function (data) {
                $scope.project_type = data;
                //alert(JSON.stringify(data));
            });
            
    $scope.savePostedForm = function (postingProjectFormFields) {
      //console.log(" " + postingProjectFormFields.skills);
           
        var url = '';
            if (postingProjectFormFields.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'project/editEmployee'
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'project/savePostedForm'
            }


            var postData = $.param({
                params: postingProjectFormFields
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;

            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                if (postingProjectFormFields.hasOwnProperty('id') && true == boolIsInsert) {
                    $location.url('view-employees?update=true&id=' + formFields.id);
                } else {
                    $location.url('afterposting?insert=true&lii='+boolIsInsert.insert_id);
                }
            }).error(function (data, status, headers, config) {
            });
        }

     });   
     
     freelancerCtrl.controller('Login', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$anchorScroll,Upload) {
    
//        var content;
var reload = $route.current.params.reload;
    if(reload == 'true'){
//        alert('true');
         $location.hash('content');
        $anchorScroll.yOffset = 0;
        $anchorScroll();

    }
//    else{
////         alert('false');
//    }
var user = $route.current.params.user;    
    if(user == 'client'){
        $scope.url = '#/signup?user=client';
    }
    else{
        if(user == 'developer'){
            $scope.url = '#/signup?user=developer';
        }
        else{
             $scope.url = '#/signup';
        }
        
    }
    
    $scope.onFileSelect = function(file) {
    if (!file) return;
     alert();
    Upload.upload({
        url: erpSystem.baseUrl +'login/fileUpload',
        data: {file: file, username: $scope.username}
      }).then(function(resp) {
        // file is uploaded successfully
       
        console.log(resp.data);
      });    
  };
  
  $scope.showNextBlock = function(){
      $scope.showNextBlock = true;
  };
        
    
    var user = $route.current.params.user;
$scope.options = [
    
        {
          id:3,
          name: 'Select Your Option',
          value: 0
        },
        {
          id:1,
          name: 'I need programer',
          value: 2
          
        }, 
        {
          id:2,
          name: 'I need to work',
          value: 3
        }
        
    ];
    
if(user == 'client'){
    $scope.selectedOption = $scope.options[1];
}
else{
    if(user == 'developer'){
    $scope.selectedOption = $scope.options[2];
        
    }
    else{
         $scope.selectedOption = $scope.options[0];
    }
}
    


    
         $scope.base_url = erpSystem.baseUrl;  
         $scope.bothAreSame = true;
         var url = erpSystem.baseUrl + 'user/getUsertype/';
            $http.get(url).success(function (data) {
                $scope.typeList = data;
                //alert(JSON.stringify(data));
            });
      
        
          var url = erpSystem.baseUrl + 'user/getCountries/';
            $http.get(url).success(function (data) {
                $scope.countries = data;
                //alert(JSON.stringify(data));
            });
            
        
        
        $scope.getStates = function(){
            var url = erpSystem.baseUrl + 'user/getStates/'+ $scope.register.countrySelected;
            $http.get(url).success(function (data) {
                $scope.states = data;
                //alert(JSON.stringify(data));
            });
        };
        
         $scope.getCities = function(){
            var url = erpSystem.baseUrl + 'user/getCities/'+ $scope.register.stateSelected;
            $http.get(url).success(function (data) {
                $scope.cities = data;
                //alert(JSON.stringify(data));
            });
        };
        
 
         $scope.showHidePassword = function(){
            var type = angular.element( document.querySelector( '.password' ) );

            if(type.attr('type')=='password')
            {
                type.attr('type',"text");
            }
            else
            {
                 type.attr('type',"password");
            }

     };
     
     $scope.cshowHidePassword = function(){
            var type = angular.element( document.querySelector( '.cpassword' ) );

            if(type.attr('type')=='password')
            {
                type.attr('type',"text");
            }
            else
            {
                 type.attr('type',"password");
            }

     };
     
     $scope.checkBothPassForSimilarity = function(){
       
         if($scope.register.password === $scope.register.cpassword){
           
              $scope.bothAreSame = true;
         }
         else{
              $scope.bothAreSame = false;
         }
     };
     
     $scope.setUsertype = function(){
//            alert($scope.register.userType);
         if($scope.register.selectedOption == 3){
             $scope.thisIsDeveloper = true;
         }
         else{
             $scope.thisIsDeveloper = false;
         }
     }
     
     $scope.saveregistrationForm = function(formFields){
         
         
//         alert();
         var url = '';
            if (formFields.hasOwnProperty('id')) {
                url = erpSystem.baseUrl + 'user/saveRegistration';
            } else {
                $scope.message = "Operation Successful !!!";
                url = erpSystem.baseUrl + 'user/saveRegistration';
            }
//to display objet on the console
//for (var key in formFields) {
//    if (Object.prototype.hasOwnProperty.call(formFields, key)) {
//        var val = formFields[key];
//        console.log(key+'='+val);
//      
//    }
//}
            var postData = $.param({
                params: formFields
            });
 
            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            var boolIsInsert = false;
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                if (formFields.hasOwnProperty('id') && true == boolIsInsert) {
                   $location.url('afterRegistration?insert=true&lii='+boolIsInsert.insert_id);
                } else {
                    $location.url('afterRegistration?insert=true&lii='+boolIsInsert.insert_id);
                }
            }).error(function (data, status, headers, config) {
            });
     }
     
     
     $scope.loginUser = function(formFields){
        
        url = erpSystem.baseUrl + 'user/login';
        
             var postData = $.param({
                params: formFields
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
         
            var boolIsInsert = false;
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data;
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                if ('true' === boolIsInsert.success) {
                    
                    
                    var url = erpSystem.baseUrl + 'user/getSessionData/';
                        $http.get(url).success(function (data) {
                            $scope.userData = data;
            //                alert(JSON.stringify(data));
            //                console.log(JSON.stringify($scope.userData));
             
             if($scope.userData.user_type == 2)
            
                        {
                         $location.url('clientprofile');    
                        }
                         else{
                          $location.url('developerprofile');    
                         }
                           });

//                    if($scope.userData == "null"){
//
//                     $location.url('login');  
//                    }
//                    else{
        //                alert($scope.userData.user_type);
                       
//                     } 
                    } 
                else {
                    $scope.wrongusername = true;
                    $location.url('login');
                }
            }).error(function (data, status, headers, config) {
            });
     };
     
     
     $scope.clickurl = function(){
           $location.url('user/uploadUserImage');
     };
     
     $scope.uploadUserImage = function(formFields){
         var lastInsertedId = $route.current.params.lii;
          url = erpSystem.baseUrl + 'user/uploadUserImage'+lastInsertedId;
          
//          for (var key in formFields) {
//    if (Object.prototype.hasOwnProperty.call(formFields, key)) {
//        var val = formFields[key];
//        console.log(key+'='+val);
//    }
//    }
//           alert(file.file);
          
           var postData = $.param({
                params: formFields
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                $location.url('view-employees?update=true&id=' + formFields.id);
            }).error(function (data, status, headers, config) {
            });
     };
});


freelancerCtrl.controller('Clientprofile', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$window,$anchorScroll) {
    
    
//        $location.hash('content');
//        $anchorScroll.yOffset = 20;
//        $anchorScroll();
//    
    
    if( $window.localStorage )
  {
      
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      $window.location.reload();
        
    }  
    else
      localStorage.removeItem('firstLoad');
  }
  
//   if( $window.localStorage )
//  {
//    if( !localStorage.getItem('firstLoad') )
//    {
//      localStorage['firstLoad'] = true;
//     
////      $window.location.reload();
//    }  
//    else
//      localStorage.removeItem('firstLoad');
//  }
//    
       
    
   var updateTrue = $route.current.params.update;
   
   if(updateTrue === "true")
   { 
    $scope.updateMsg = true; 
//           $window.location.reload();
   }
   else{
      $scope.updateMsg = false; 
   }
     
       
    $scope.base_url = erpSystem.baseUrl; 
  
    var url = erpSystem.baseUrl + 'project/getAllPostedProjectById/';
            $http.get(url).success(function (data) {
                $scope.projects = data;
//                alert(JSON.stringify(projects));
//                console.log(JSON.stringify($scope.projects));
     });
     
     var url = erpSystem.baseUrl + 'project/getAllBidedProjectByClientId/';
            $http.get(url).success(function (data) {
                $scope.bidedProjects = data;
//                alert(JSON.stringify(projects));
//                console.log(JSON.stringify($scope.projects));
     });
     
     var url = erpSystem.baseUrl + 'user/getSessionData/';
            $http.get(url).success(function (data) {
                $scope.userData1 = data;
//                alert('session'+JSON.stringify($scope.userData1));
//                console.log(JSON.stringify($scope.userData));
     });
     var url = erpSystem.baseUrl + 'user/getLogedInUserData/';
            $http.get(url).success(function (data) {
                $scope.userData = data[0];
//                alert(JSON.stringify($scope.userData));
//                console.log(JSON.stringify($scope.userData));
     });
     
      var url = erpSystem.baseUrl + 'user/getCountries/';
            $http.get(url).success(function (data) {
                $scope.countries = data;
                //alert(JSON.stringify(data));
            });
        
        $scope.getStates = function(){
            var url = erpSystem.baseUrl + 'user/getStates/'+ $scope.userData.countrySelected;
            $http.get(url).success(function (data) {
                $scope.states = data;
                //alert(JSON.stringify(data));
            });
        };
        
         $scope.getCities = function(){
            var url = erpSystem.baseUrl + 'user/getCities/'+ $scope.userData.stateSelected;
            $http.get(url).success(function (data) {
                $scope.cities = data;
                //alert(JSON.stringify(data));
            });
        };

         $scope.updateUserData = function(formFields){
            var url = erpSystem.baseUrl + 'user/updateUserData';
            
           var postData = $.param({
                params: formFields
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                $location.url('clientprofile?update=true');
            }).error(function (data, status, headers, config) {
            });
        };
        
        $scope.acceptBidedPrice = function(id){
            var url = erpSystem.baseUrl + 'user/acceptBidedPrice/'+ id;
            $http.get(url).success(function (data) {
                $scope.client_replay = data;
//                alert(data);
//                alert(JSON.stringify(data));
                
                
                $location.url('clientprofile?accepted=true');
                
                
            });
        };
        
        var accepted = $route.current.params.accepted;
                
                if(accepted === "true"){
                    $scope.accepted = true;
                }
                else{
                    
                    $scope.accepted = false;
                }

});

//freelancerCtrl.controller('Bidaproject', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route) {
//        
//     var url = erpSystem.baseUrl + 'project/getAllPostedProject/';
//            $http.get(url).success(function (data) {
//                $scope.projectDetails = data;
//                alert(JSON.stringify(data));
//                console.log(JSON.stringify($scope.projectDetails));
//     });
//     
//       $scope.bidCurrentProject = function(id){
//            alert(id);
//        }
//});



freelancerCtrl.controller('Bidaproject', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route) {
     var lastInsertedId = $route.current.params.lii;
   
     var url = erpSystem.baseUrl + 'project/getAllPostedProject/';
            $http.get(url).success(function (data) {
                $scope.projectDetails = data;
//                alert(JSON.stringify(data));
//                console.log(JSON.stringify($scope.projectDetails));
     });
     
     
//     $scope.getProjectDetailsByProjectId = function(){
//         var id = $route.current.params.id;
//          var url = erpSystem.baseUrl + 'project/getProjectDetailsByProjectId/'+id;
//            $http.get(url).success(function (data) {
//                $scope.projectDetailsById = data[0];
////                var sss = angular.toJson(data);
//                   
//                $scope.projectPostedBy = data[0].posted_by;
////                alert(JSON.stringify($scope.projectDetailsById[1]));
////                alert('this is posted by jeevan  '+JSON.stringify($scope.projectPostedBy)+'this is posted by'+$scope.projectPostedBy);
////                console.log(JSON.stringify($scope.projectDetailsById));
//     });
//         
//     }
         var id = $route.current.params.id;
          var url = erpSystem.baseUrl + 'project/getProjectDetailsByProjectId/'+id;
            $http.get(url).success(function (data) {
                $scope.projectDetailsById = data[0];
//                var sss = angular.toJson(data);
                   
                $scope.projectPostedBy = data[0].posted_by;
//                alert(JSON.stringify($scope.projectDetailsById[1]));
//                alert('this is posted by jeevan  '+JSON.stringify($scope.projectPostedBy)+'this is posted by'+$scope.projectPostedBy);
//                console.log(JSON.stringify($scope.projectDetailsById));
     });
     
     $scope.saveBid = function(thisProjectDetails){
         
            url = erpSystem.baseUrl + 'user/saveBid/'+id;
          
//          for (var key in thisProjectDetails) {
//    if (Object.prototype.hasOwnProperty.call(thisProjectDetails, key)) {
//        var val = thisProjectDetails[key];
//        console.log(key+'='+val);
//    }
//    }
//           alert(file.file);
          
           var postData = $.param({
                params:  thisProjectDetails,
                params1: $scope.projectPostedBy
            }
            );

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            
            $http.post(url, postData, config).success(function (data, status, headers, config) {
               boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                $location.url('after_biding_project?update=true&id='+boolIsInsert.insert_id);
            }).error(function (data, status, headers, config) {
            });
         
     };
});



freelancerCtrl.controller('Developerprofile', function($cookies,$scope,$http,erpSystem,$routeParams,$location,$route,$window) {

if( $window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      $window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }


   var updateTrue = $route.current.params.update;
   
   if(updateTrue === "true")
   { 
    $scope.updateMsg = true; 
//           $window.location.reload();
   }
   else{
      $scope.updateMsg = false; 
   }
     
       
    $scope.base_url = erpSystem.baseUrl; 
  
    var url = erpSystem.baseUrl + 'project/getAllBidedProjectByDeveloperId/';
            $http.get(url).success(function (data) {
                $scope.projects = data;
//                if($scope.projects.client_replay)
//                alert(JSON.stringify($scope.projects));
//                console.log(JSON.stringify($scope.projects));
     });
     
     var url = erpSystem.baseUrl + 'user/getSessionData/';
            $http.get(url).success(function (data) {
                $scope.userData = data;
//                alert(JSON.stringify($scope.userData));
//                console.log(JSON.stringify($scope.userData));
     });
     
      var url = erpSystem.baseUrl + 'user/getCountries/';
            $http.get(url).success(function (data) {
                $scope.countries = data;
                //alert(JSON.stringify(data));
            });
        
        $scope.getStates = function(){
            var url = erpSystem.baseUrl + 'user/getStates/'+ $scope.userData.countrySelected;
            $http.get(url).success(function (data) {
                $scope.states = data;
                //alert(JSON.stringify(data));
            });
        };
        
         $scope.getCities = function(){
            var url = erpSystem.baseUrl + 'user/getCities/'+ $scope.userData.stateSelected;
            $http.get(url).success(function (data) {
                $scope.cities = data;
                //alert(JSON.stringify(data));
            });
        };

         $scope.updateUserData = function(formFields){
            var url = erpSystem.baseUrl + 'user/updateUserData';
            
           var postData = $.param({
                params: formFields
            });

            var config = {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            
            $http.post(url, postData, config).success(function (data, status, headers, config) {
                boolIsInsert = data[0];
//alert('Is insert = '+boolIsInsert.is_insert+'last inserted id ='+boolIsInsert.insert_id +'headers = '+headers+'status = '+status+'config = '+config);
//console.log('Is insert = '+boolIsInsert+'headers = '+headers+'status = '+status+'config = '+config)
                $location.url('developerprofile?update=true');
            }).error(function (data, status, headers, config) {
            });
        };
        
        

});