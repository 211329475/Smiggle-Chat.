<?php include "functions.php";
//redirect Page to login if user is not logged in
if(loggedin()==false)
{
	header("Location:index.php");
}
?>
<?php 
// Post messages from form.
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$messageText =$_POST['messageText'];
	$date = date('l jS \of F Y h:i:s A');
	$emailTo = $_POST['getInput'];
	
	if($messageText !="")
	{
		mysql_query("INSERT INTO `message` VALUES (NULL, '".$_SESSION['username']."', '".$emailTo."', '".$messageText ."', '".$date."')");
		header("Location:messages.php?emailId=$emailTo");
	}
}
?>
<?php
// display conversation between user and sender
$myText ="";
$startChat = "";
$email="";
if(isset($_GET['emailId']))
{
	$email = $_GET['emailId'];
	$sql = mysql_query('SELECT * FROM `message` WHERE (`messageUser`="'.$_SESSION['username'].'" OR `messageUser`="'.$email.'")
 				AND(`messageRecipt`="'.$_SESSION['username'].'" OR `messageRecipt`="'.$email.' ")');	
						 
	$messageCount = mysql_num_rows($sql);
	if($messageCount>0)
	{
		$startChat="";
		while($row = mysql_fetch_array($sql ))
		{
			$sender = $row["messageUser"];
			if($sender == $_SESSION['username'])
			{
				$sendeName ='<div class="alert alert-success"><strong>Me</strong><br/>';
			}
			else
			{
				$sendeName ='<div class="alert alert-warning"><strong>'.$email."</strong><br/>" ;
			}
			
			$myText .= $sendeName .$row['messageText']."</div>";
			
		}
	}
	else
	{
		$startChat ='<div class="alert alert-info">Start Chat</div>';
	}
}
else
{
	//echo "Data to render this page is missing";
	//exit;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<script src="js/bootstrap.min.js"></script>
<title>Message Chat <?php  ?></title>
</head>

<body>
	<?php
		/// include navigation bar 
		include_once("tolinkHeader.php");
	?>
<div class="container">
  <?php
  // display previous chat messages
  	echo "<h1>".$startChat."</h1>";
  	echo "<p>". $myText."</p>";
  ?>
	<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
		<textarea name="messageText" class="form-control"></textarea>
		<br/>
        <input type="hidden" name="getInput" value="<?php echo $_GET['emailId']?>">
		<input type="submit" class="btn btn-primary"/>
	</form>
    <br/>
	<?php include_once("page_footer.php");?>
</div>
</div>
</body>
</html>