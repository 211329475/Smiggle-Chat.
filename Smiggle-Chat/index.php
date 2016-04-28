<?php
require("functions.php");
if(loggedin()==true)
{
	header("Location:chat.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home - Smiggle Chat.</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="css/manager.css" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="js/angular.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/manager.js" type="text/javascript"></script>
<script src="js/RegisterDirectory.js"></script>

</head>

<body>
<div ng-app="myApp">

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
    Smiggle Chat.</a>
      </div>
           <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">                	
                  	<li><a href="index.php">Home</a></li>
            
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="registerUser.php">Register</a></li>
                  
                </ul>	
			</div>
		</div>
        
	</nav>

<div class="container">
  <div class="jumbotron">
  <h2> Login</h2>
  </div>

	<div ng-controller="loginDirectory">
     	<form name="loginFrm" ng-submit="loginData()">
 		 <p>
   			 <label for="textfield">E-mail:</label>
  		</p>
 	 	<p>
    	<input type="email" name="email" id="email" class="form-control" ng-model="email" required>
   	 	<span ng-show="loginFrm.email.$error.required" style="color:red;" >*</span>
    	
  		</p>
  		 <p>
  			 <label for="textfield">Password:</label>
  		</p>
  		<p>
  	  		<input type="password" name="password" id="password" class="form-control" ng-model="password" required>
  	  		<span ng-show="loginFrm.password.$error.required" style="color:red;">*</span>
  		</p>
  		<p><div class="alert alert-danger" role="alert" ng-show="errorMessage">{{errorMessage}}</div></p>
  		<br/>
  		<p><input type="submit" value="Login"  class="btn btn-primary btn-sm btn-block"></p>  
		<p><a href="registerUser.php">Register</a></p>
  		<br/>
		</form>
</div>
</div>
</body>
</html>
<!-- End Special Centered Box -->
<!-- Start Normal Page Content -->
