<?php
session_start(); // Session starts here.
if(isset($_POST['next1'])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Users has been succesfully updated')
              window.location.href='page2_form.php';
              </SCRIPT>");
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['user_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$message=$_POST['message'];
$_SESSION['first_name']=$fname;
$_SESSION['last_name']=$lname;
$_SESSION['email']=$email;
$_SESSION['user_name']=$username;
$_SESSION['gender']=$gender;
$_SESSION['dob']=$dob;
$_SESSION['password']=$password;
$_SESSION['message']=$message;
}

?>
<?php require_once("includes/userspice/nav/index.html"); ?>

<!DOCTYPE HTML>
<html>
 <head>
 <title>Hotch Register</title>
 <link rel="stylesheet" href="css/style1.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 </head>
 <body>
 <script src="jquery.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
   


$("#act").change(function() {

 
 
   var selectedValue =$('#act').find('option:selected').val();
     
  alert(selectedValue);
 
   $.ajax({
       url: 'page2_form.php',
       type: 'POST',
       data: {option : selectedValue,option :selectedValue,setid: true }
       
   });
});
$("#concerns").change(function() {

 
 
   var selectedValue2 =$('#concerns').find('option:selected').val();
   
  alert(selectedValue2);
  
   $.ajax({
       url: 'page2_form.php',
       type: 'POST',
       data: {option2 :selectedValue2,setid2: true }
       
   });
});
$("#language").change(function() {

 
 
   var selectedValue3 =$('#language').find('option:selected').val();
   
  alert(selectedValue3);
  
   $.ajax({
       url: 'page2_form.php',
       type: 'POST',
       data: {option3 :selectedValue3,setid3: true }
       
   });
});
});
</script>



 <div class="container">
 <div class="main" style="margin-left:7%;width:80%;color:black;">
 <h2>TELL US ABOUT YOURSELF</h2><hr/>
<p>Disclaimer: We donot share your information with Third Party</p>
 <span id="error">
<?php


?>
 </span>
 <form action="page3_form.php" method="post">


<label>What do you like to do when you travel? :<span>*</span></label>
 <select name="activities" id="act" >
 <option value="">----Activities----</options>
<?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM activity_category");

while ($row = mysql_fetch_array($sql)){
echo "<option value=". $row['category_id'] .">" . $row['name'] . "</option>";
}
?>
 </select>


 <label>What are your interests? :<span>*</span></label>
 <select name="sporting">
 <option value="">----Sporting----</options>
 <?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM interests_sub where main_int_id='1'");
while ($row = mysql_fetch_array($sql)){
echo "<option value=". $row['main_int_id'] .">" . $row['sub_interest'] . "</option>";
}
?>
</select>
 <select name="gym">
 <option value="">----Gym Activities----</options>
 <?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM interests_sub where main_int_id='2'");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"gym\">" . $row['sub_interest'] . "</option>";
}
?>
 </select>

 <select name="arts">
 <option value="">----Arts and Culture----</options>
 <?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM interests_sub where main_int_id='3'");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"arts\">" . $row['sub_interest'] . "</option>";
}
?>
 </select>

 <select name="relaxation">
 <option value="">----Relaxation----</options>
 <?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM interests_sub where main_int_id='4'");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"relaxation\">" . $row['sub_interest'] . "</option>";
}
?>
 </select>

  <select name="children">
 <option value="">----Children Activities----</options>
 <?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM interests_sub where main_int_id='5'");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"relaxation\">" . $row['sub_interest'] . "</option>";
}
?>
 </select>



 <label>What are your concerns when you travel? :<span>*</span></label>
 <select name="concerns" id="concerns">
 <option value="">----Select----</options>
<?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM concerns");
while ($row = mysql_fetch_array($sql)){
echo "<option value=". $row['c_id'] .">" . $row['name'] . "</option>";
}
?>
 </select>


 <label>What languages do you Speak/Understand? :<span>*</span></label>
 <select name="language" id="language">
 <option value="">----Select----</options>
<?php 
include('upload/mysqlconnect.php');
$sql = mysql_query("SELECT * FROM language");
while ($row = mysql_fetch_array($sql)){
echo  "<option value=". $row['language_id'] .">"  . $row['language_name'] . "</option>";
}
?>
 </select>
<p>my Category id is:<?php echo $_SESSION['act'];?></p>
<p>my Category id is:<?php echo $_SESSION['concerns'];?></p>
<p>my Category id is:<?php echo $_SESSION['language'];?></p>
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" name="submit1" />
 </form>
 </div>
 </div>
 </body>
</html>