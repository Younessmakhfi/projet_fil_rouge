<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "admobmanagement";
// api simple http://localhost/AdmobManager/controller/apiVerify.php?email=&user_api_key=&package_name=
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$check_user = "SELECT name,id_user FROM users WHERE email='" . $_GET['email'] . "' AND user_api_key='" . $_GET['user_api_key'] . "'";
$result_users = $conn->query($check_user);

if ($result_users->num_rows > 0) {
  // output data of each row
  $user_row = $result_users->fetch_assoc();
    $check_app = "SELECT id_app, app_name, id_banner, id_inter, id_reward, state  FROM apps WHERE id_user='" . $user_row["id_user"] . "' AND package_name='" . $_GET['package_name'] . "'";
    $result_app = $conn->query($check_app);
    $app_row = $result_app->fetch_assoc();
    //echo "id: ". $user_row["id_user"]. " name: ". $user_row["name"]. " <br>";
    echo "id_app: ". $app_row["id_app"]. " app_name: ". $app_row["app_name"]. "id_banner: ". $app_row["id_banner"]. "id_inter: ". $app_row["id_inter"]. "id_reward: ". $app_row["id_reward"]. "state: ". $app_row["state"]. " <br>";
} else {
  echo "0 results";
}

$conn->close();
?>