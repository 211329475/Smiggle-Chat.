<?php
include "functions.php";

$data = json_decode(file_get_contents("php://input"));
$UserTitle = mysql_real_escape_string($data->UserTitle);
$UserName = mysql_real_escape_string($data->UserName);
$UserLastname= mysql_real_escape_string($data->UserLastname);
$email =mysql_real_escape_string($data->email);
$UserPassword= MD5(mysql_real_escape_string($data->UserPassword));


$sql =mysql_query("SELECT * FROM `User_tbl` WHERE `email` = '".$email."'");
$emailMatch = mysql_num_rows($sql);
if($emailMatch>0)
{
		echo "This email address is already in use";
		exit();		
} 
else
{
/*thegree3
$UserTitle ="Mrs";
$UserName="Casta";
$UserLastname="Mashigo";
$UserPassword =MD5(1234);
*/
// Insert data into database 
//INSERT INTO `User_tbl` (`UserID`, `UserTitle`, `UserName`, `UserLastname`, `email`, `UserPassword`) VALUES (NULL, 'Miss', 'Lebo', 'Lesile', 'lebo@gmail.com', '1234');
mysql_query("INSERT INTO `User_tbl` (`UserID`, `UserTitle`, `UserName`, `UserLastname`,`email`, `UserPassword`) VALUES (NULL, '".$UserTitle."', '".$UserName."', '".$UserLastname."', '".$email."', '".$UserPassword."')")or die(mysql_error().' : kak query statemen');

$_SESSION['username']=$email;
die("Succes");
}

?>





