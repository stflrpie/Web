<?php require_once("includes/userspice/us_header.php"); ?>
<?php require_once("includes/userspice/us_navigation.php"); ?>


<?php
    session_start();
    $results=$_SESSION["results"];
    //echo "start"+ $_SESSION["myclient"];
    //echo  $_SESSION["myclient"];
    $clients = $_GET['id26'];
    $_SESSION["myclient"] =$clients;
    echo $clients;
   
echo "second";
$db = DB::getInstance();
$query = $db->query("SELECT Client_ID,Project_Name,Purpose,Level,Assessment_Tools,Assessment_Tools_Description,Post_Assessment,Client_Representative_Name,Client_Representative_EmailID FROM project  where Client_ID='$clients'");
$results = $query->results();
 $_SESSION["res"]=$results;
?>



<!DOCTYPE html>
<html lang="en">

<head>
<style>
body{
background: url("images/bck11.png") no-repeat;
background-size:100%;
   
}
h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: 	hsl(330, 20%, 50%); }

tr, td { transition: .4s ease-in; }

tr:first-child {background: hsla(0); }

tr:nth-child(even) { background: hsla(10, 10%, 10%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }


.dropdowns{
    margin-top:5%;
    margin-left:10%;
    
}
.mydropdown{
    margin-top:0%;
    
}
.buttons{
    margin-left:52%;
    margin-top:-1.5%;
    
}
.addpro{
    //float:right;
    margin-left:5%;
}
.addclient{
    
    margin-left:5%;
}
.export{
    margin-left:-15%;
}
.import{
    margin-left:5%;
}
.addusers{
    //float:right;
    width: 25%;
height:30px;
margin-top: -2%;
    margin-left:5%;
   
     background: url("images/eyimg/project.png") no-repeat ;
}
.btn1 {
background: black;
color:white;
    font-size:13px;
}
.btn1:hover {
background: white;
color:black;
    font-size:13px;
}
</style>
</head>
 <body>
     <center><h4 style="margin-top:70px;color:black;font-weight:bolder;height:48px;"><u><b>Project Management</b></u></h4> </center>
<form name='Client' action='' method='post' style="margin-top:-10%;">

<div class="page-header"  style="width:90%;">
<br/><br/>
<div class="dropdowns">
<select class="mydropdown" onchange="myFunction()"  name="clients" id="clients" value='<?=$v2->Client_Id?>'>
<option>Select a Client</option>
<?php
    //echo $v1;
    //echo "second";
    $db = DB::getInstance();
    $query1 = $db->query("SELECT Client_Id FROM client");
    $results1 = $query1->results();
    
    //echo id1;
    
    foreach ($results1 as $v2) {
        
        
        ?>

<option name="clients" style="color:black;" id="clients" value='<?=$v2->Client_Id?>'>
<?=$v2->Client_Id?></option>

<?php
    }
    
    
    ?>

</select>

<script>
function myFunction() {
    
    var x = document.getElementById("clients").value;
    //document.getElementById("demo").innerHTML = "You selected: " + x;
    //window.location="add2.php?Clientid=x";
    // window.location.replace("usermanagement.php?id="+x,"true");
    self.location='Projectmanagement.php?id26=' +x ;
}


</script>

</div>
<div class="buttons">

<a href='join3.php' class="addusers" style=" 
color: white;
padding: 7px 7px;
text-align: center;
text-decoration: none;
display: inline-block;float:right;"> </a>



</div>
<br/>
<table class='table table-hover table-list-search' style="margin-top:1%;background:white;margin-left:5%;">

<input type="hidden" name="csrf" value="<?=Token::generate();?>" >
<tr style="color:white;font-size:16px;background:#96b07e;">

<th align="center">&nbsp;&nbsp;&nbsp;&nbsp;Client &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purpose</th><th align="center">&nbsp;&nbsp;&nbsp;Level</th><th align="center">Assessment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tools</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assessment Tools &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post Assessment</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Client Representative Name</th><th>Client Representative Email ID</th><th>Options</th>
</tr>
<?php
     $ClientId = $_GET['id'];
    $v2="Deactivate";
    
    echo $userId;
//Cycle through users
foreach ($results as $v1) {
?>
<tr>

<td style="background:white;"><a href='projectupdate.php?id=<?=$v1->Client_ID?>'><?=$v1->Client_ID?></td>
<td style="background:white;"><?=$v1->Project_Name?></td>
<td style="background:white;"><?=$v1->Purpose?></td>
<td style="background:white;"><?=$v1->Level?></td>
<td style="background:white;"><?=$v1->Assessment_Tools?></td>
<td style="background:white;"><?=$v1->Assessment_Tools_Description?></td>
<td style="background:white;"><?=$v1->Post_Assessment?></td>
<td style="background:white;"><?=$v1->Client_Representative_Name?></td>
<td align="left" style="background:white;"><?=$v1->Client_Representative_EmailID?></td>
<td align="left" style="background:white;">
<a href='projectdelete.php?id=<?=$v1->Client_ID?>'><?=$v2?></td>


</tr>
<?php } ?>

</table>

</div>
         </div>
</div>

<!--<a href='join1.php'> Add Assessee</a>--!>

</form>
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



