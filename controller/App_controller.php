<?php

include('../model/app.php');
if(isset($_GET['id_app'])&&isset($_GET['delete']))
{
	$app = new App();
	$app->app_delete($_GET['id_app']);
	
}
if(isset($_GET['id_app'])&&isset($_GET['edit']))
{
    echo $_GET['id_app'] . " : edit";
}

if(isset($_POST['create'])){
	$app_name = $_POST['app_name'];
	$id_banner = $_POST['id_banner'];
	$id_inter = $_POST['id_inter'];
	$id_reward = $_POST['id_reward'];
	$state = $_POST['state'];
	$package_name = $_POST['package_name'];
	$app = new App();
	$app->app_create($app_name, $id_banner, $id_inter, $id_reward, $state, $package_name);
}
if(isset($_POST['edit'])){
	$id_app = $_POST['id_app'];
	$app_name = $_POST['app_name'];
	$id_banner = $_POST['id_banner'];
	$id_inter = $_POST['id_inter'];
	$id_reward = $_POST['id_reward'];
	$state = $_POST['state'];
	$package_name = $_POST['package_name'];
	$app = new App();
	$app->app_update($id_app, $app_name, $id_banner, $id_inter, $id_reward, $state, $package_name);
}
if(isset($_POST['update'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new User();
	$user->user_login($email, $password);
}
if(isset($_POST['delete'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new User();
	$user->user_login($email, $password);
}

?>