<?php include "functions.php";?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register User</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
 <link rel="stylesheet" href="css/manager.css" type="text/css"/>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="js/angular.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/manager.js" type="text/javascript"></script>
<script src="js/RegisterDirectory.js"></script>




<style>
input.ng-invalid.ng-dirty{ border: 1px solid rgba(249,28,31,1.00);}
</style>
</head>

<body>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
       Smiggle Chat.</a>
      </div>
           <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">                	
                  	
                
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                   	<li><a href="index.php">Login</a></li>
               	  </ul>	
			</div>
		</div>
        
	</nav>
<div ng-app="myApp">
<div ng-controller="directoryApp">
<div class="container">
  <div class="jumbotron">
  <h2> Register User</h2>
  </div>


<form name="register" ng-submit="insertdata()">
<div class="form-group">
  <p>
    <label>Title:</label>
    <select name="Title" id="Title"  class="form-control"  ng-model="UserTitle" required>
      	<option value="Mr">Mr</option>
  		<option value="Mrs">Mrs</option>
  		<option value="Miss">Miss</option>
    </select>
    <span ng-show="register.Title.$error.required" style="color:red;">*</span>
  </p>
 <p>
    <label for="textfield">Firstname:</label>
  </p>
  <p>
    <input type="text" name="username" id="username" class="form-control" ng-model="UserName" required>
    <span ng-show="register.username.$error.required" style="color:red;">*</span>
  </p>
  <p>
    <label for="textfield">Lastname:</label>
  </p>
  <p>
    <input type="text" name="lastname" id="lastname" class="form-control" ng-model="UserLastname" required>
     <span ng-show="register.lastname.$invalid" style="color:red;">*</span>
  </p>
  <p>
    <label for="textfield">e-mail</label>
  </p>
  <p>
    <input type="email" name="email" id="email" class="form-control" ng-model="email" required/>
    <span ng-show="register.email.$error.required" style="color:red;">*</span>
       <span ng-show="register.email.$error.email" style="color:red;">enter correct email</span>
  </p>
   <p>
    <label for="textfield">Password:</label>
  </p>
  <p>
    <input type="password" name="password" id="password" class="form-control" ng-model="UserPassword" ng-minlength="6" required>
     <span ng-show="register.password.$error.required" style="color:red;">*</span>
     <span ng-show="register.password.$error.minlength" style="color:red;">weak</span>
     <span ng-show="register.password.$valid" style="color:green;">Strong</span>
  </p>
  
 <!-- <p>
    <label for="textfield">Confirm Password:</label>
  </p>
  <p>
    <input type="password" name="ConFpassword" id="ConFpassword" class="form-control" ng-model="ConfUserPassword" required>
  </p>-->
  <br/>
  <p><div class="alert alert-danger" role="alert" ng-show="errorMsg">{{errorMsg}}</div></p>
  <p><button type="submit" class="btn btn-primary btn-sm btn-block"> Register</button></p>
  
  <p><a href="index.php">Sign in </a></p>
  <br/>
  </div>
   </form>
 
</div>
</div>
</div>  
</body>

</html>
<!-- End Special Centered Box -->
<!-- Start Normal Page Content -->
