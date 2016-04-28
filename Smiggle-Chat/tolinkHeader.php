<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
 <link rel="stylesheet" href="css/manager.css" type="text/css"/>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="js/angular.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/manager.js" type="text/javascript"></script>
<script src="js/RegisterDirectory.js"></script>

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
                    <li><a href="chat.php">Chat</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <?php
						if(loggedin()==true)
						{
                  
							echo '<li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
						}
					?>
                </ul>	
			</div>
		</div>
        
	</nav>
