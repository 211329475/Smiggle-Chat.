
<div id="registerOverlay"></div>
<div id="registerSpecialBox">


<div ng-controller="directoryApp">
<form name="register" ng-submit="insertdata()">
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
  <p><div class="alert alert-danger" role="alert" ng-show="errorMsg">{{errorMsg}}</div></p>
  
 <!-- <p>
    <label for="textfield">Confirm Password:</label>
  </p>
  <p>
    <input type="password" name="ConFpassword" id="ConFpassword" class="form-control" ng-model="ConfUserPassword" required>
  </p>-->
  <br/>
  <p><button type="submit" class="btn btn-primary btn-sm btn-block"> Register</button></p>
  
  <p><a href="UserLogin.php">Sign in </a></p>
  <br/>
  </form>
</div>
</div>
</div>
<!-- End Special Centered Box -->
<!-- Start Normal Page Content -->
