
<!DOCTYPE html>

<html>

<head>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 <?php require_once("includes/userspice/nav/index.html"); ?>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paypal Integration Test</title>

</head>


<body>

 

<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">

        <input type="hidden" name="cmd" value="_xclick" />

        <input type="hidden" name="no_note" value="1" />

        <input type="hidden" name="lc" value="UK" />

        <input type="hidden" name="currency_code" value="GBP" />

        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

        <input type="hidden" name="first_name" value="Customer's First Name" />

        <input type="hidden" name="last_name" value="Customer's Last Name" />

        <input type="hidden" name="payer_email" value="customer@example.com" />

        <input type="hidden" name="item_number" value="123456" / >

        <input type="submit" name="submit" class="btn btn-info" value="Proceed Payment" style="margin-top:10%;margin-left:-45%;"/>

    </form>



</body>

</html>


