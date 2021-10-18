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
		$query = "SELECT * FROM users WHERE user_uid='$search';";
		$query_run = mysqli_query($conn, $query);
?>

<br>
<table border="1">
	<tr>
		<td>Username</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
	</tr>
	<?php
		if(mysqli_num_rows($query_run) > 0){
			while($row = mysqli_fetch_array($query_run)){
	?>
	<tr>
		<td><?php echo $row['user_uid']; ?></td>
		<td><?php echo $row['user_first']; ?></td>
		<td><?php echo $row['user_last']; ?></td>
		<td><?php echo $row['user_email']; ?></td>
	</tr>
	<?php
		}
	}else {
		echo "No Data Found";
	}
	?>
</table>
<?php
	}
	?>

</body>
</html>