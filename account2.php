<?php
session_start();
   $db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$database = 'myhotch_db';
$username=$_SESSION['username'];
if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

$username=$_POST['username'];
$select_query = "SELECT * FROM  person where username='$username'";

$sql = mysql_query($select_query) or die(mysql_error());   

while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
$_SESSION['personid']=$row['person_id'];
?>
<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>
<?php //include("includes/us_left_nav.php");?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();}
 if ($settings->site_offline==1){die("The site is currently offline.");}?>
<?php
$grav = get_gravatar(strtolower(trim($user->data()->email)));
$get_info_id = $user->data()->id;
// $groupname = ucfirst($loggedInUser->title);
$raw = date_parse($user->data()->join_date);
$signupdate = $raw['month']."/".$raw['day']."/".$raw['year'];
$userdetails = fetchUserDetails(NULL, NULL, $get_info_id); //Fetch user details
 ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to UserSpice
                            <small>An Open Source PHP User Management Framework</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<!-- Content goes here -->
<div align="center">
  This is your main profile page for your users. It can be whatever you want it to be,<br> but this code serves as a guide on how to use some of the built-in UserSpice functionality.<br>
</div>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-primary">
<header class="panel-heading"><h4 class="panel-title">Profile</h4></header>
  <div class="panel-body">
    <!-- <div class="row"> -->

        <img src="<?=$grav; ?>" alt=""class="left-block img-thumbnail" alt="Generic placeholder thumbnail">
      <div class="col-md-8">
        <h1><?php $liu = ucfirst($user->data()->username); echo $liu; $_SESSION['username']= $liu;?></h1>
        <p><?=ucfirst($user->data()->fname)." ".ucfirst($user->data()->lname)?></p>
        <p>Member Since:<?=$signupdate?></p>
        <p>Number of Logins: <?=$user->data()->logins?></p>
        <a href="edit_profile.php">Edit Your Public Profile</a><br>
        <a href="view_all_users.php">View All Users</a><br><br>
      <a href="user_settings.php" class="btn btn-primary left-block img-thumbnail">Edit Account Info</a>
      </div>
    </div>
  </div>
</div>
<?php

?>






<!-- Content Ends Here -->
<!-- footers -->
<?php require_once("includes/userspice/us_page_footer.php"); // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once("includes/userspice/us_html_footer.php"); // currently just the closing /body and /html ?>
