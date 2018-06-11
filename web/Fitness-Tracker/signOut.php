<?php
session_start();
unset($_SESSION['username']);
header("Location: form.php");
die(); 
?>