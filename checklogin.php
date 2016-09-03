<?php
 
require_once("Configuration.class.php");
if((isset($_COOKIE['name']))&&$_COOKIE['name']!=$_POST['myusername'])
{
 // cookie validation for keep track of users
 header("location:userlogin.php");
}
else
{
  
   session_start();
   session_destroy();
   session_start();  
   
   $dhost = Configuration::DEFAULT_HOST; 				//Default Host
   $uname = Configuration::MYSQL_DB_DEFAULT_USERNAME; 	//Username of your database
   $pword = Configuration::MYSQL_DB_DEFAULT_PASSWORD;   //password of your MYSQL database
   $db_name=Configuration::DATABASE_NAME; // Database name 
   $tbl_name=Configuration::USER_TABLE_NAME;
   $myusername=$_POST['myusername']; 
   $mypassword=$_POST['mypassword']; 
  // echo $myusername;
  // echo $mypassword;
   $p = $_SESSION['pword'];
   mysql_connect ($dhost,$uname,$pword) or die (mysql_error());
   mysql_select_db($db_name) or die (mysql_error());
   
 
   $myusername = stripslashes($myusername);
   $mypassword = stripslashes($mypassword);
   $myusername = mysql_real_escape_string($myusername);
   $mypassword = mysql_real_escape_string($mypassword);

   //$mypassword=md5($mypassword);
   $sql="SELECT * FROM person WHERE username='$myusername' and password='$mypassword'";
   $result=mysql_query($sql);
   $count=mysql_num_rows($result);
 //  $today = date("Y-m-d");



   // echo $row['User_password'];
 // echo $count;
   if($count==1)
   {
   
	 header("location:account.php");

					
					
}

 ?>