<?php
session_start();
unset($_SESSION['username_session']);
header("Location: form.php");
die(); 
?>