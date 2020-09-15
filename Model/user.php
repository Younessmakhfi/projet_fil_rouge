<?php
session_start();


 class User{

		function __construct() {
			$this->conn = new mysqli("localhost","root","123","admobmanagement");
		}
		function user_insert($name, $email,$password,$user_api_key) {	
			$query = "SELECT * FROM users WHERE email='". $email ."'";
			$result = $this->conn->query($query);
			if ($result->num_rows == 1) {		
				echo "<script>
						alert('sorry this email aleardy exist');
						window.location.href='../view/regestration.php';
						</script>";			
			} 
			else 
			{				
// if succeced				
			$stmt =$this->conn->prepare("INSERT Into users (name, email, password, user_api_key) values(?,?,?,?)");
			$stmt->bind_param("ssss", $name, $email, $password, $user_api_key);
			$stmt->execute();
				//echo "signup done";
				header("Location: ../view/login.php");
			}
		}
		function user_change_info($email, $password) {	
			$query = "SELECT * FROM users WHERE email='". $email ."' AND id_user != '". $_SESSION["id_user"] ."'";
			$result = $this->conn->query($query);
			if ($result->num_rows == 1) {		
				echo "<script>
						alert('sorry this email aleardy exist');
						window.location.href='../view/profile.php';
						</script>";			
			} 
			else 
			{				
// if succeced				
			//$stmt =$this->conn->prepare("INSERT Into users (email, password) values(?,?)");
			//$stmt->bind_param("ss", $email, $password);
			$query = "UPDATE `users` SET `email` = '$email', `password` = '$password' WHERE `users`.`id_user` = ". $_SESSION["id_user"] .";";
			// $query = "SELECT * from apps WHERE id_user=". $_SESSION["id_user"] ."";
			$stmt = $this->conn->prepare($query);
			if(!$stmt){
				echo "Prepare failed: (". $this->conn->errno.") ".$this->conn->error."<br>";
			 }
			$stmt->execute();
				echo "signup done";
				echo "<script>
						alert('Your data has been saved');
						window.location.href='../view/profile.php';
						</script>";
			}
		}
		function user_login($email, $password) {	
			$query = "SELECT id_user, email, user_api_key, name FROM users WHERE email='". $email ."' AND password='". $password ."'";
			$result = $this->conn->query($query);
			if ($result->num_rows == 1) {
				$user_row = $result->fetch_assoc();
				$_SESSION["id_user"] 		= $user_row["id_user"];
				$_SESSION["email"] 			= $user_row["email"];
				$_SESSION["user_api_key"] 	= $user_row["user_api_key"];
				$_SESSION["name"] 			= $user_row["name"];
				header("Location: ../view/show_apps.php");
			} 
			else 
			{		
				echo 'login failed';			
			}
		}
		function user_show_info() {	
			$query = "SELECT * from users WHERE id_user=". $_SESSION["id_user"] ."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$result = $stmt->get_result();
			return  $result;
		}
		function show_all_users() {	
			$query = "SELECT * from users";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$result = $stmt->get_result();
			return  $result;
		}
		function user_delete($id_user) {	
			$query = "DELETE FROM users WHERE id_user=". $id_user ."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			header("Location: ../view/admin_users.php");
		}

}

?>