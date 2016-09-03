
<?php

    session_start();
    
    $cl = $_SESSION["dropclient"];
    //$pl = $_SESSION["dropproject"];
    echo $cl;
   
// including the config file
include('config.php');
$pdo = connect();

$csv_file =  $_FILES['csv_file']['tmp_name'];
if (is_file($csv_file)) {
	$input = fopen($csv_file, 'a+');
	// if the csv file contain the table header leave this line
	$row = fgetcsv($input, 1024, ','); // here you got the header
	while ($row = fgetcsv($input, 1024, ',')) {
        echo "entering";
		
    $sql = 'INSERT INTO user_table (Username,User_email_id,User_phoneno,Client_ID) VALUES (:Username, :User_email_id, :User_phoneno, :cl)';
		$query = $pdo->prepare($sql);
		 echo "query correct";
		$query->bindParam(':Username', $row[1], PDO::PARAM_STR);
         echo "query correct1";
		$query->bindParam(':User_email_id', $row[2], PDO::PARAM_STR);
         echo "query correct2";
		$query->bindParam(':User_phoneno', $row[3], PDO::PARAM_INT);
         echo "query correct3";
        $query->bindParam(':cl', $cl, PDO::PARAM_STR);
         echo "query correct4";
        $query->execute();
         echo "right";
    
	}
}


header('location: usermanagement.php');
?>


