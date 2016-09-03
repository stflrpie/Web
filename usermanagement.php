

<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/script.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
body{
background: url("images/bck11.png") no-repeat;
    background-size:100%;
color:black;
}
.dropdowns{
    margin-top:0%;
    margin-left:0%;
width:100%;
}
.mydropdown{
    margin-top:0%;
    
}
.buttons{
    margin-left:52%;
    margin-top:-9.2%;
    
}
.addpro{
    //float:right;
    margin-left:5%;
    background: url("images/eyimg/submit.png") no-repeat ;
color:white;

background-size: 100% ;
width:8%;
}
.addclient{
    
    margin-left:5%;
    background: url("images/eyimg/submit.png") no-repeat ;
color:white;
background-size: 100%;
width:8%;
}
.export{
    margin-left:-15%;
    background: url("images/eyimg/excel.png") no-repeat ;
color:white;
cursor: pointer;
background-size: 100% ;
background-color: none;
width:22%;
height: 30px;
}
.import{
  cursor: pointer;
    margin-left:5%;
    background: url("images/eyimg/import.png") no-repeat ;
color:white;
background-color: none;
background-size: 100%;
width:22%;
height: 30px;
}
.addusers{
  cursor: pointer;
    //float:right;
    background-color: none;
    margin-left:5%;
    background: url("images/eyimg/assess.png") no-repeat ;
color:white;
background-size: 100%;
width:22%;
height: 30px;
}

.btn1 {

border: none;
background: url("images/eyimg/submit.png") no-repeat ;
color:white;
background-size: 100%;
background-position: 0px 20px;
width:10%;
height:42px;
font-size:15px;
margin-top: 2%;
margin-left: -8%;

}
/*.btn1:hover {
background: black;
color:white;
    font-size:15px;
}*/
* {font-family: Helvetica Neue, Arial, sans-serif; }

body { }

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: 	hsl(330, 20%, 50%); }

tr, td { transition: .4s ease-in; }

tr:first-child {background: hsla(0); }

tr:nth-child(even) { background: hsla(10, 10%, 10%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }




</style>
<style>

</style>
<style>

#page-wrapper {
background: url("images/bck11.png") no-repeat;
background-size:100%;
color:black;
}
</style>


</head>


<h4><u><b>User Management</b></u></h4>
<div style="margin-top:-3.5%;;width:70%;">
<script src="jquery.min.js"></script>

</head>
<body>
<form name='adminUser' action='deactivate.php' method='post'>
<div style="height:120px;margin-left:-25%;">
<?php
 
  
?>

</form>
<form name='adminUser' action='deactivate.php?id=<?=$userId?>' method='post'>

<div class="page-header">


<div class="buttons">
<a href="export.php" class="export" style=" 
color: white;
    padding: 7px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
   "> </a>


<a href='adduser.php' class="addusers" style=" 
color: white;
    padding: 7px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
   "> </a>


<span class="import" style=" 
color: white;
    padding: 7px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  " onclick="show_popup('popup_upload')"></span>



</div>
</div>


<table class='table table-hover table-list-search' style="margin-top:12.5%;width:80%;background:white;margin:auto;font-size:20px;">

<input type="hidden" name="csrf" value="<?=Token::generate();?>" >
<tr style="color:white;background:#96b07e;">
<th >User ID</th><th>Username</th><th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID</th><th Width="80">Phone Number</th><th  >Supervisor Email ID</th><th >Assessment Location</th><th  >Assessment Start Date</th><th>Options</th>
</tr>
<?php
   $db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$database = 'myhotch_db';
$table = 'person'; 
if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT first_name,last_name,email,username,date_of_birth,gender,allow_location,password,latitude,longitude FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);
    
    // echo $userId;
    //Cycle through users
    foreach ($result as $v1) {
    ?>
<tr>

<td style="background:white;"><a href='userupdate.php?id25=<?=$v1->User_id?>'><?=$v1->User_id?></td>
<td style="background:white;"><?=$v1->first_name?></td>
<td style="background:white;"><?=$v1->last_name?></td>
<td style="background:white;"><?=$v1->email?></td>
<td style="background:white;"><?=$v1->username?></td>
<td style="background:white;"><?=$v1->date_of_birth?></td>
<td style="background:white;"><?=$v1->gender?></td>
<td style="background:white;"><?=$v1->gender?></td>
<td align="center"  style="background:white;">
<a href='deactivate.php?id=<?=$v1->User_id?>'><?=$v2?></td>



</tr>
<?php } ?>

</table>

</div>
</div>



</form>
<form action="import.php" method="post" enctype="multipart/form-data">
<div id="popup_upload">

<div class="form_upload" style="height:400px;width:50%" >
<div>





<?php
   //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    //  $query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
        
    
    if (!$link = mysql_connect('localhost', 'antizgts_dilobey', 'dilobey123')) {
    echo 'Could not connect to mysql';
    exit;
    }

if (!mysql_select_db('antizgts_eydilobm', $link)) {
    echo 'Could not select database';
    exit;
}
    
   $result1 = mysql_query("SELECT Client_Id FROM client");
   
   if (!$result1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
     }
  $rowCount = mysql_num_rows($result1);
  
  
  $result2 = mysql_query("SELECT Project_Name FROM project WHERE Client_ID = '$userIdExchanged1");
   
   if (!$result2) {
    echo 'Could not run query: ' . mysql_error();
    exit;
     }
  $rowCount1 = mysql_num_rows($result2);
    
    ?>
<select name="country1" id="country1">
<option value="">Select Client</option>
<?php
    if($rowCount > 0){
           
            while ($row = mysql_fetch_array($result1, MYSQL_NUM)) 
            {
               echo '<option value="'.$row[0].'">'.$row[0].'</option>';
            }
             
  

    }else{
        echo '<option value="">Country not available</option>';

    }
    ?>


<select name="state1" id="state1">
<option value="">Select client first</option>
<?php
    if($rowCount1 > 0){
           
            while ($row = mysql_fetch_array($result2, MYSQL_NUM)) 
            {
               echo '<option value="'.$row[0].'">'.$row[0].'</option>';
            }
             
  

    }else{
        echo '<option value="">Country not available</option>';

    }
    ?>
</select>
<select name="city" id="city" style="visibility:hidden;">
<option value="">Select state first</option>
</select>
<h3 style="margin-top:35%;">Upload CSV file</h3>

<input type="file" name="csv_file" id="csv_file" class="file_input">
<!--<input type="submit" value="Upload file" id="upload_btn">--!>
<input type="submit" name="upload_btn" value="Upload file" class="btn1" id="upload_btn">
</form>
<span class="close" onclick="close_popup('popup_upload')">x</span>
</div>
</div>
</div>



</div>
</div>



<!-- /.table-responsive -->
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
                  $('#dataTables-example').DataTable({
                                                     responsive: true
                                                     });
                  });
</script>
</div>


</body>
</html>






