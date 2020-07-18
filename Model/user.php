<?php
session_start();


 class User{

		function __construct() {
			$this->conn = new mysqli("localhost","root","","admobmanagement");
		}
		function user_insert($name, $email,$password,$user_api_key) {	
				
$stmt =$this->conn->prepare("INSERT Into users (name, email, password, user_api_key) values(?,?,?,?)");
$stmt->bind_param("ssss", $name, $email, $password, $user_api_key);
$stmt->execute();
echo "<script>
alert('There are no fields to generate a report');
window.location.href='../view/signup.php';
</script>";
		}
}

?>