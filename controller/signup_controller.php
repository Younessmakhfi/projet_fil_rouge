<?php

include('../model/user.php');


if(isset($_POST['signup'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$generated_key = bin2hex(random_bytes(16));
	$user = new User();
	$user->user_insert($name, $email, $password, $generated_key);
}








?>