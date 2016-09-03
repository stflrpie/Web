<?php 
// including the config file
include('config.php');
$pdo = connect();

$csv_file =  $_FILES['csv_file']['tmp_name'];
if (is_file($csv_file)) {
	$input = fopen($csv_file, 'a+');
	// if the csv file contain the table header leave this line
	$row = fgetcsv($input, 1024, ','); // here you got the header
	while ($row = fgetcsv($input, 1024, ',')) {
		// insert into the database
		$sql = 'INSERT INTO user_table(User_id,Username,User_email_id,User_phoneno,Supervisor_email_id,Assessment_Location,Assessment_start_date) VALUES(:User_id, :Username, :User_email_id, :User_phoneno, :Supervisor_email_id, :Assessment_Location, :Assessment_start_date)';
		$query = $pdo->prepare($sql);
		$query->bindParam(':User_id', $row[1], PDO::PARAM_STR);
		$query->bindParam(':Username', $row[2], PDO::PARAM_STR);
		$query->bindParam(':User_email_id', $row[3], PDO::PARAM_STR);
		$query->bindParam(':User_phoneno', $row[4], PDO::PARAM_INT);
        $query->bindParam(':Supervisor_email_id', $row[5], PDO::PARAM_INT);
        $query->bindParam(':Assessment_Location', $row[6], PDO::PARAM_INT);
        $query->bindParam(':Assessment_start_date', $row[7], PDO::PARAM_INT);
		$query->execute();
	}
}

// redirect to the index page
header('location: index.php');
?>


