<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> Enter your data here </h1>
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
<form action="../includes/lookup.php" method="POST">
	<input type="text" name="search_user" placeholder="Enter username">
	<button type="submit" name="search">Search</button>
</form>
<br>
<table border="2">
	<tr>
		<td>User ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Username</td>
	</tr>
	<tr>
		<?php
			include_once "../includes/lookup.php";
		?>
	</tr>
</table>

</body>
</html>