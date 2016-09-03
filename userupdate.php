
<?php require_once("includes/userspice/us_header.php"); ?>


<?php require_once("includes/userspice/us_navigation.php"); ?>

<?php
    echo "second";
    session_start();
    $userId = $_GET['id25'];
    $_SESSION["userid"] = $userId;
    $db = DB::getInstance();
    $query = $db->query("SELECT User_id,Username,User_password,User_email_id,User_phoneno,Supervisor_email_id,Assessment_Location,Assessment_start_date FROM user_table where User_id='$userId'");
    $results = $query->results();
    //store the resultset
    $_SESSION["results3"]=$results;
     echo $results;

      if(isset($_POST['setid'])) {
        //$_SESSION['userid'] = $_POST['Client_Id'];
        $_SESSION['clients'] = $_POST['Client_Id'];
        
    }
    if(isset($_POST['setid1'])) {
        //$_SESSION['userid'] = $_POST['Client_Id'];
        $_SESSION['projects'] = $_POST['pro_Id'];
        
    }
       $c=$_SESSION['clients'] ;
       $p=$_SESSION['projects'];
    ?>
<style>
#page-wrapper{
background: url("images/bck11.png") no-repeat;
    background-size:100%;
color:black;
}
</style>

<div id="page-wrapper" >

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
    
    
    include("views/userspice/_update_user.php");
    ?>

<!-- End of main content section -->

</div>

<!-- Right Column -->
<div class="class col-sm-1"></div>
</div>
</div>
