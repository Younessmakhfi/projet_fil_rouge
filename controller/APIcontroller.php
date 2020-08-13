<?php
	$pass = $_GET['pass'];
	if($pass == 'youness'){
//these are the server details
//the username is root by default in case of xampp
//password is nothing by default
//and lastly we have the database named android. if your database name is different you have to change it 
$servername = "localhost";
$username = "root";
$password = "";
$database = "admobmanagement";
 
 
//creating a new connection object using mysqli 
$conn = new mysqli($servername, $username, $password, $database);
 
//if there is some error connecting to the database
//with die we will stop the further execution by displaying a message causing the error 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
//if everything is fine
 
//creating an array for storing the data 
$heroes = array(); 
 
//this is our sql query 
$sql = "SELECT id_user, name FROM users;";
 
//creating an statment with the query
$stmt = $conn->prepare($sql);
 
//executing that statment
$stmt->execute();
 
//binding results for that statment 
$stmt->bind_result($id, $name);
 
//looping through all the records
while($stmt->fetch()){
	
	//pushing fetched data in an array 
	$temp = [
		'id'=>$id,
		'name'=>$name
	];
	
	//pushing the array inside the hero array 
	array_push($heroes, $temp);

}
 
//displaying the data in json format 
// $test = [
// 	'id'=>00,
// 	'name'=>'API KEY ERROR'
// ];
// echo json_encode($test);
echo json_encode($heroes);
	}
	else 
{
$test = [
	'id'=>00,
	'name'=>'API KEY ERROR',
];

echo json_encode($test);
}


