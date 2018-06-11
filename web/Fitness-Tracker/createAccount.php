<?php

$username = $_POST['username'];
$password = $_POST['password'];
if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUp.php");
	die(); 
}
// Let's not allow HTML in our usernames. It would be best to also detect this before
// submitting the form and preven the submission.
$username = htmlspecialchars($username);
// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Connect to the database
require("connectToDB.php");
$db = get_db();
$query = 'INSERT INTO workout.user (username, password) VALUES(:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);

$statement->bindValue(':password', $hashedPassword);
$statement->execute();
// finally, redirect them to the sign in page
header("Location: form.php");
die(); 
?>
