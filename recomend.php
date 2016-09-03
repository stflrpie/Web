
Editing:  
/home/devbiz1/public_html/hotch/users/eventsnew.php
 Encoding:    Re-open Use Code Editor     Close  Save Changes

<html>
<head>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;

  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  //margin: 5px;
  font-size:20px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>

<form name="book" method="post" action="">

<body>
<?php require_once("includes/userspice/nav/index.html"); ?>
<br clear="all"/>
<div id="page-wrapper" style="height:100%; overflow: scroll;">

<?php
include("upload/mysqlconnect.php");
session_start();
 $personid=$_SESSION['personid'];
$select_query = "SELECT images_path FROM  photos where p_id='$personid'";

$sql = mysql_query($select_query) or die(mysql_error());   

while($row = mysql_fetch_array($sql,MYSQL_BOTH)){

?>

<div style="width:100%;margin-top:9%;height:auto;">
<div class="img" style="height:200px;">
<a href="#"><img src="<?php echo $row["images_path"]; ?>" alt="" style="height:120px;"/></a>
 <button class="button">
<span>Peep On it</span>
</button>
</div>
<div>
<?php

}

?>


</body>
</form>
</html>





<!-- Content Ends Here -->
<!-- footers -->


