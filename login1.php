<?php require_once("includes/userspice/us_header.php"); ?>
<?php require_once("includes/userspice/us_navigation.php"); ?>
<?php 
session_start();
$pwd= $_POST['mypassword'];
$_SESSION['pword']=$pwd;
?>
<html>
<head>
<br/>
<style>
.btn-primary{
    width:25%;
    background: url("images/eyimg/login.png") no-repeat ;
    border:none;
    height:32px;
    background-size: 100%;

}




#page-wrapper {
background: url("images/eyimg/bg.png") repeat-x;
width:100%;
height:700px;
color:black;
margin-left:0%;
 background-size: 100%;
}
.container-fluid{
  margin-top: 10%;
  background: url("images/eyimg/loginbox.png") no-repeat ;
  border:none;
    background-position: 318px 0px; 
  background-size: 50%;
}
.form-group {
    margin-bottom: 15px;
    width: 60%;
}
.btn-primary{
width:12%;
}
</style>
</head>
<body>

<div id="page-wrapper" >
  <div class="container-fluid" >

<div align="center">

  <form action="http://antizgts.com/dilo/users/checklogin.php" method="post" >
    <div class="bg-danger"><?=$error_message;?></div>
    <h4><b>EY DILO LOGIN</b></h4>
  	<div class="form-group">
  		<label for="username" class="form_control" style="margin-right:29%;width:30%;">Username:</label>
  		<input type="text" name="myusername" id="myusername" placeholder="Enter your username" class="form-control" style="width:40%;background:#d9f1c3;color:black;">
  	</div>
  	<div class="form-group">
  		<label for="password" class="form_control" style="margin-right:29%;">Password:</label>
  		<input type="password" name="mypassword" id="mypassword" placeholder="Enter your password" class="form-control" autocomplete="off" style="background:#d9f1c3;width:40%;color:black;">
  	</div>
    <?php
    if($settings->recaptcha == 1){
    	?>
    <p><label>Please enter the words as they appear:</label>
    <div class="g-recaptcha" data-sitekey="<?php echo $publickey; ?>"></div>
    </p>
    <?php } ?>
    <label for="remember">
    <input type="checkbox" name="remember" id="remember"> Remember Me</label>
  	<p>Forget your password? <a href="forgot_password.php">Click here</a> to retrieve it.</p>
  	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  	<input type="submit" value="" id="create" name="create" class="btn btn-primary">
  </form>
</div>
</div>
</div>
</div>
</body>
</html>