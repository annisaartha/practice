<?php
	include_once 'includes/dbh_inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> Enter new data here </h1>
<form action="../includes/signup_inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
	<button type="submit" name="submit">Sign up</button>
</form>

<br>
<br>

<h1>Search User Data</h1>
<form action="" method="POST">
	<input type="text" name="get_user" placeholder="Enter username" required>
	<input type="submit" name="search_user" value="search">
</form>

<?php
	if(isset($_POST['search_user'])){
		$search = $_POST['get_user'];
		$query = "SELECT * FROM users WHERE user_uid='$search' OR user_id='$search' OR user_first='$search' OR user_last='$search';";
		$query_run = mysqli_query($conn, $query);
?>

</body>
</html>