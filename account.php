<?php
require_once("includes/userspice/nav/template.html");
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>

 <title>Hotch App</title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
img {
    /* vertical-align: middle; */
    margin-left: -90%;
margin-top:4%;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
.panel-default {
    border-color: #black;
    margin-bottom: -97px;
}
.panel {
    margin-bottom: 21px;
    background-color: #ccc;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
color:black;
}
  </style>
</head>
<form name="book" method="post" action="payment.php">
<body style="background:#333;">
<div id="page-wrapper" style="margin-top:-6%;width:100%;height:300px;">
<div style="margin-left:25%;width:100%;">
<img src="images/cover_img.png" style="width: 85%;float: left;margin-left: -6%;margin-top:2.5%;" />
<center><img src="images/1.jpg" style="border-radius:60px;width:5%;margin-right:25%;margin-top:19%;"/></center>
</div>
<div style="overflow:scroll;height:400px;margin-left:20%;margin-top:3%;">
<?php
session_start();
$username=$_SESSION['username'];
include("upload/mysqlconnect.php");
$select_query = "SELECT * FROM  person where email='$username'";
$sql = mysql_query($select_query) or die(mysql_error());   

while($row=mysql_fetch_array($sql, MYSQL_ASSOC))
{
  $person_id = $row['person_id'];
$_SESSION['person']=$person_id;
  $usernames = $row['username'];
  $gender= $row['gender'];
  $location= $row['location'];
  $dob= $row['date_of_birth'];
  $_SESSION['person_id']= $person_id;
?>
<div style="width:80%;">
<div class="panel panel-default" style="width:70%;height:auto;float:left;margin-left:20%;">
<div class="panel-body">
<table style="width:100%;">
 <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Gender</th>
   <th>Location</th>
  </tr>
 <tr>
    <td><?php echo $usernames; ?></td>
    <td><?php echo $username; ?></td>
    <td><?php echo $dob; ?></td>
   <td><?php echo  $gender; ?></td>
    <td><?php echo $location; ?></td>
  </tr>
</table>

</div>
<?php
}
?>
</div>
</center>
</body>
<?php
$_SESSION['username']=$username;
?>
</form>
</html>



