<?php     //start php tag
  //include connect.php page for database connection
     session_start();
  

echo "welcome";
 $clients = $_GET['id'];
    $_SESSION["myclient"] =$clients;
   echo $clients;
    // header("Location: management.php");
?>


