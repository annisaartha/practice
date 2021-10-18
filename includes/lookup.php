<?php
    include_once '../includes/dbh_inc.php';

    $search = isset($_POST['get_user']);
    
	$sql = "SELECT * FROM users WHERE user_uid LIKE $search;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
			echo $row['user_uid'] . "<br>"; 
			echo $row['user_first'] . "<br>"; 
			echo $row['user_last'] . "<br>"; 
            echo $row['user_email'] . "<br>";
        }
    }
?>