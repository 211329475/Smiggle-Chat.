<?php
session_start();
//session start


//require("classes/My_db.class.php");

//connect to database

mysql_connect("localhost","root","")or die("Database connection failed");
mysql_select_db("Smiggle-Chat")or die("Incorrect database selected");

function loggedin()
{
	$loggedin = false;
	if(isset($_SESSION['username']))
	{
		$loggedin = true;
	}
	return $loggedin ;
}


//$db = new My_db("localhost","Project","0000","e-commerce");

?>