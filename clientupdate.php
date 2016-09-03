<?php
    /*
     UserSpice 4
     by Dan Hoover at http://UserSpice.com
     */
    ?>
<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>

<?php
    //echo "second";
    $ClientId = $_GET['id'];
    $db = DB::getInstance();
$query = $db->query("SELECT Client_Id,Company_Name,Industry,Employee_Strength,Client_Representative_Name,Client_Representative_EmailID FROM client where Client_Id='$ClientId'");
    $results = $query->results();
     $_SESSION["res1"]=$results;
     //echo $results;
    ?>
<style>
#page-wrapper{
background: url("images/bck11.png") no-repeat;
background-size:100%;
color:black;
}
</style>

<div id="page-wrapper"  >

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-sm-12">

<!-- Left Column -->
<div class="class col-sm-3"></div>

<!-- Main Center Column -->
<div class="class col-sm-6">
<!-- Content Goes Here. Class width can be adjusted -->

<?php
    
    
    include("views/userspice/_update_client.php");
    ?>

<!-- End of main content section -->

</div>

<!-- Right Column -->
<div class="class col-sm-1"></div>
</div>
</div>

<!-- /.row -->
<!-- footers -->
