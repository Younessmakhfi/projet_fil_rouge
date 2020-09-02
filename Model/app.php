<?php
session_start();

 class App{

		function __construct() {
			$this->conn = new mysqli("localhost","root","123","admobmanagement");
		}
		function app_create($app_name, $id_banner, $id_inter, $id_reward, $state, $package_name) {	
			$id_user = $_SESSION["id_user"];
			$stmt =$this->conn->prepare("INSERT Into apps (id_user, app_name, id_banner, id_inter, id_reward, state, package_name) values(?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssss",$id_user, $app_name, $id_banner, $id_inter, $id_reward, $state, $package_name);
			$stmt->execute();
			// if ($stmt) {
			// 	//die('Requête invalide : ' . mysql_error());
			// 	echo 'done';
			// }
				header("Location: ../view/index.php");
			
		}
		function app_update($id_app,$app_name, $id_banner, $id_inter, $id_reward, $state, $package_name , $short_description, $long_description) {
			$id_user = 	$_SESSION["id_user"];
			// mysqli_query($this->conn, "UPDATE `apps` SET `id_user` = ". $_SESSION["id_user"] .", `app_name` = '$app_name', `id_banner` = '$id_banner', `id_inter` = '$id_inter' , `id_reward` = '$id_reward', , `state` = '$state', , `package_name` = '$package_name' WHERE `id_app` = '$id_app'") or die(mysqli_error());
			//$query = "UPDATE `apps` SET app_name = '$app_name', id_banne = '$id_banner', id_inter = '$id_inter' , id_reward = '$id_reward',  state = '$state',  package_name = '$package_name' WHERE id_app = '$id_app'";
			$query = "UPDATE `apps` SET `app_name` = '$app_name', `id_banner` = '$id_banner', `id_inter` = '$id_inter', `id_reward` = '$id_reward', `state` = '$state', `package_name` = '$package_name', `short_description` = '$short_description', `long_description` = '$long_description' WHERE `apps`.`id_app` = $id_app;";
			// $query = "SELECT * from apps WHERE id_user=". $_SESSION["id_user"] ."";
			$stmt = $this->conn->prepare($query);
			if(!$stmt){
				echo "Prepare failed: (". $this->conn->errno.") ".$this->conn->error."<br>";
			 }
			$stmt->execute();
			header("Location: ../view/index.php");	
		}
		function app_delete($id_app) {	
			$query = "DELETE FROM apps WHERE id_app=". $id_app ."";
			// $query = "SELECT * from apps WHERE id_user=". $_SESSION["id_user"] ."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			header("Location: ../view/index.php");
		}
		function app_show_all() {	
			$query = "SELECT * from apps WHERE id_user=". $_SESSION["id_user"] ."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$result = $stmt->get_result();
			return  $result;
		}
		function show_one_app($id_app) {	
			$query = "SELECT * from apps WHERE id_app=". $id_app ."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			if(!$stmt){
				echo "Prepare failed: (". $this->conn->errno.") ".$this->conn->error."<br>";
			 }
			$result = $stmt->get_result();
			return  $result;
		}

}

?>