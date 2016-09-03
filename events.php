<?php
require_once("includes/userspice/nav/template.html");
?>

<html>
<head>
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
    background-color: #dcdddf;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
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

<div style="height:400px;margin-left:20%;margin-top:3%;width:80%;">

<?php
session_start();

$personid=$_SESSION['person_id'];
$username=$_SESSION["username"];
include("upload/mysqlconnect.php");

$select_query = "SELECT * FROM  activity";
$sql = mysql_query($select_query) or die(mysql_error());  
while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
{
 $activityname= $row['activity_name'];
  $shortdesc= $row['short_description'];
 $_SESSION['activity_name']=$activityname;
 $_SESSION['activity_addr']=$shortdesc;
?>



<div style="width:100%;">
<div class="panel panel-default" style="width:30%;height:auto;float:left;">
<div class="panel-body">
<p  style="float:left;color:black;width:100%;"><center style="font-weight:bolder;"><?php echo $activityname; ?><center></p>
<p  style="float:left;color:black;width:100%;"><center style="font-weight:normal;"><?php echo $shortdesc; ?><center></p>
<p><a href="payment.php" style="float:right;color:red;font-weight:bolder;text-decoration:none;">Book Now</a></p></div>
</div>


<?php

}

?>
</div>
</center>
</body>
</form>
</html>




<!-- Content Ends Here -->
<!-- footers -->


