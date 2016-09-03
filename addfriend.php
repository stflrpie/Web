<?php

$friendid=$_GET['id'];

include("upload/mysqlconnect.php");
session_start();
$_SESSION['friends']= $friendid;
$personid=$_SESSION['person_id'];

$status="pending";
 $sql = "insert into friend_list(person_id,friend_id,friend_status)values('$personid','$friendid','$status')" ;

$resultset = mysql_query($sql) or die(mysql_error());   
  echo "friendID".$friendid;


?>
<html>
<head></head>
<form>
<body>

</body>
</form>
</html>
<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>