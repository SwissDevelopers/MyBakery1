<?php 
include ("./inc/connect.inc.php");
session_start();
if (!isset($_SESSION["user_login"])) {
	
}
else
{
	$username = $_SESSION["user_login"];
}
?>
<!doctype html>
<html>
<head>

