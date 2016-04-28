// JavaScript Document
var login = angular.module('LOGmyApp',[]);
login.controller('loginDirectory', function($scope,$http)
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
			alert("ka afthla mo ");
			if(data==="Login Succes")
			{
				window.location.assign("home.php");
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
				$scope.errorMessage = 'Unable to submit form';
		});
		
	};
});