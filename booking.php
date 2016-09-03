


<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
@charset "utf-8";
/* CSS Document */

*
{
 margin:0;
 padding:0;
}
#login-form
{
 margin-top:70px;
}
table
{
  width:70%;
 border:solid #dcdcdc 1px;
 padding:25px;
 box-shadow: 0px 0px 1px rgba(0,0,0,0.2);
margin-top:15%;
}
table tr,td
{
 padding:15px;
 //border:solid #e1e1e1 1px;
}
table tr td input
{
 width:97%;
 height:45px;
 border:solid #e1e1e1 1px;
 border-radius:3px;
 padding-left:10px;
 font-family:Verdana, Geneva, sans-serif;
 font-size:16px;
 background:#f9f9f9;
 transition-duration:0.5s;
 box-shadow: inset 0px 0px 1px rgba(0,0,0,0.4);
}

table tr td button
{
 width:100%;
 height:45px;
 border:0px;
 background:rgba(12,45,78,11);
 background:-moz-linear-gradient(top, #595959 , #515151);
 border-radius:3px;
 box-shadow: 1px 1px 1px rgba(1,0,0,0.2);
 color:#f9f9f9;
 font-family:Verdana, Geneva, sans-serif;
 font-size:18px;
 font-weight:bolder;
 text-transform:uppercase;
}
table tr td button:active
{
 position:relative;
 top:1px;
}
table tr td a
{
 text-decoration:none;
 color:#00a2d1;
 font-family:Verdana, Geneva, sans-serif;
 font-size:18px;
}

/* css for home page  */

*
{
 margin:0;
 padding:0;
}
#header
{
 width:100%;
 height:60px;
 background:rgba(00,11,22,33);
 color:#9fa8b0;
 font-family:Verdana, Geneva, sans-serif;
}
#header #left
{
 float:left;
 position:relative;
}
#header #left label
{
 position:relative;
 top:5px;
 left:100px;
 font-size:35px;
}
#header #right
{
 float:right;
 position:relative;
}
#header #right #content
{
 position:relative;
 top:20px;
 right:100px;
 color:#fff;
}
#header #right #content a
{
 color:#00a2d1;
}

/* css for home page */
</style>
  <script language="javascript" src="protoplasm.js"></script>
        <script language="javascript">
            Protoplasm.use('timepicker').transform('input.timepicker');
        </script>
</head>
<body>

 
<center>
  <form action="paypal.php" method="post" name="myForm">
  	
<div id="login-form" style="width:80%;">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="bookingstartdate" placeholder="Booking Date" onfocus="(this.type='date')"  required /></td>
</tr>
<tr>
<td><input type="text" name="bookingstarttime" placeholder="Booking Time"  onfocus="(this.type='time')" required /></td>
</tr>
<tr>
<td><input type="number" name="amountpayable" placeholder="Amount Payable" required /></td>
</tr>
<tr>
<td><input type="number" name="amountpaid" placeholder="Amount Paid" required /></td>
</tr>
<td><input type="submit" name="submit" value="Book now" /></td>
</table>
</form>
</div>
</center>

</body>
</html>
