<?php
require("functions.php");
if(loggedin()==false)
{
	header("Location:index.php");
}
$userEmail = $_SESSION['username'];
$query = mysql_query("SELECT * FROM `User_tbl` WHERE `email` !='$userEmail'")or die(mysql_error());
$messageCount = mysql_num_rows($query);
$startChat = "";
$buttonType =""

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<title>Chat</title>
</head>

<body>
<?php include_once("tolinkHeader.php");?>
	<div class="container">
		 <div class="jumbotron">
  		<h2> Chat</h2>
  	</div>
<div class="col-lg-12">
 	<table class="table">
	<thead>
      <tr>
        <th>Chat List</th>      
      </tr>
    </thead>
    <tbody>
     <tr>
	<?php
	if($messageCount!=0)
	{	
		while($row = mysql_fetch_array($query ))
		{
			$email = $row["email"];
			$startChatQuery=mysql_query('SELECT * FROM `message` WHERE (`messageUser`="'.$_SESSION['username'].'" OR `messageUser`="'.$email.'")
 				AND(`messageRecipt`="'.$_SESSION['username'].'" OR `messageRecipt`="'.$email.' ")')or die(mysql_error());
			$startChatCount = mysql_num_rows($startChatQuery);
			if($startChatCount !=0)
			{
				$startChat  = "Continue Chatting";
				$buttonType='btn btn-success';
				
			}
			else
			{
				$startChat  = "Start Chat ";
				$buttonType='btn btn-info';
				
			}
			
			
			echo "<tr><td><p>".$email.'</td><td>|<a href="messages.php?emailId='.$email.'"><button type="button" class="'.$buttonType.'">'.$startChat .'</button></a></td></tr>';	
		}
	}
	else
	{
		echo '<div class="alert alert-warning">no chats</div>';
	}
	?>
	</tbody>
	</table>
</div>
</div>
</body>
</html>