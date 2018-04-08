<?php
/*
		This file checks for login operation
		author:Shaunak datar
		date:8/4/2018
*/
session_start();
include 'Connectdb.php';
/*POST Data from login form*/
$username = $_POST['user_email_id'];
$password = $_POST['user_password'];
$connectdb = new Connectdb();
$dbh = $connectdb->makeconnection();

/*Check login*/
$sql = "select * from users where user_email_id = '".$username."' AND user_password = '".$password."'";//$dbh->query($sql);
$result = $dbh->query($sql);

if($result->fetchColumn()==1){
	foreach ($result as $value) {
		# code...
	$_SESSION['id'] = $result['id'];
	$_SESSION['username'] = $result['username'];
	}
	echo "login success";
}else{
	echo "login fail";
	session_destroy();
}