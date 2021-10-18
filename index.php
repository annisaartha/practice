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
<form action="index.php" method="POST">
	<input type="text" name="search_user" placeholder="Enter username" required>
	<input type="submit" value="search">
</form>

<br>
<table border="1">
	<tr>
		<td>User ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Username</td>
	</tr>
</table>

<?php
	$sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['user_uid'] . "<br>";
        }
    }
?>

</body>
</html>