<?php     //start php tag
//include connect.php page for database connection
require_once("../core/init.php");
//if submit is not blanked i.e. it is clicked.
    
        if(isset($_POST['submit1'])){//to run PHP script on submit
            if(!empty($_POST['purpose'])){
                // Loop to store and display values of individual checked checkbox.
                foreach($_POST['purpose'] as $selected){
                    echo $selected."</br>";
                }
            }


?>


