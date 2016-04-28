<?php
require("functions.php");
$data = json_decode(file_get_contents("php://input"));// convert jason code

//if(isset($_POST['login']))// check if login button is clicked
//{
	$email =mysql_real_escape_string($data->email);// get email post variable
	$password =mysql_real_escape_string($data->password);// get password post variable
		// check if user name and pasword is entered 
	if($email&&$password)
	{
		// check database if there is such a user
		
		$login = mysql_query("SELECT * FROM `User_tbl` WHERE `email` ='".$email ."'") or die("SQL query statement is incorrect ");
		$rows = mysql_num_rows($login);// count rows from database
		//echo $rows;
		if($rows !=0) // if row is more than one, then there exsist  
		{
			while($fileds = mysql_fetch_array($login))// loop databse 
			{
				$db_password = $fileds["UserPassword"];// 
				if(md5($password)== $db_password)// check if password match
				{
					
					$_SESSION['username']=$email;// set user session if password is correct
					die("Login Succes");
					//$loginOK = TRUE;
				}
				else
				{	
					die("Incorect username and Password Combination");// return message if password is incorrect
				}
			}
		}
		else
		{
			die('You dont have and account with us,  Register ?');// return message if user enters inccorect email
		}
	}
	else
	{
		die('Enter Username and password');// retrn message if user did note enter username and passowrd
	}
/*}
else
{
	header('location:home.php');// redirect to home page if login button is not clicked 
	die();// kill the script
}*/
?>