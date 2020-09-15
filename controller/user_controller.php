<?php

include('../model/user.php');
if(isset($_GET['id_user'])&&isset($_GET['delete']))
{
	$user = new User();
	$user->user_delete($_GET['id_user']);
	
}

if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//generate random hash key
	$generated_key = bin2hex(random_bytes(16));
	$user = new User();
	$user->user_insert($name, $email, $password, $generated_key);
}
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new User();
	$user->user_login($email, $password);
}
if(isset($_POST['change'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new User();
	$user->user_change_info($email, $password);
}

?>