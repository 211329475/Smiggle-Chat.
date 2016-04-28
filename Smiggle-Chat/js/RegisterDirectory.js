
	var db = angular.module('myApp',[]);
	 db.controller('directoryApp', function($scope,$http)
	 {
		  "use strict";
		 	$scope.insertdata=function()
			{ 
		
				$http.post("processRegisterUser.php",
				{
					'UserTitle' : $scope.UserTitle, 
					'UserName' : $scope.UserName,
					'UserLastname' :$scope.UserLastname,
					'email':$scope.email,
					'UserPassword':$scope.UserPassword
				})
				.success(function(data,status,headers,config)
				{
					alert(data);
					
					if(data !=="Succes")
					{
						$scope.errorMsg = data;
					}
					else
					{
						//alert("got mo : "+data);
						alert($scope.UserTitle + " : "+$scope.UserLastname+ ", Your Account has been created");
						window.location.assign("chat.php");
						$scope.UserTitle = '';
		 				$scope.UserLastname='';
						$scope.email='';
						$scope.UserPassword='';
						console.log("data loaded succesfully");
					}
				});
			};
			
			
	 });
	 
db.controller('loginDirectory', function($scope,$http)
{
	"use strict";
	$scope.loginData=function()
	{ 
		
		$http.post('LoginUser.php',
		{
			'email' : $scope.email,
			'password': $scope.password
				
		})
		.success(function(data,status,headers,config)
		{
			//alert("run success"+data);
			if(data==="Login Succes")
			{
				window.location.assign("chat.php");
				$scope.email="";
				$scope.password="";
				console.log("User loged in succesfully");
					
			}
			else
			{
				$scope.errorMessage = data;
			}
			
		})
		.error(function(data, status, headers, config) 
		{
				$scope.errorMessage = 'Unable to register User';
		});
		
	};
});
	

	 