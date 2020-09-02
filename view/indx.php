<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();
include('../Model/app.php');
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "your name is  :" . $_SESSION["name"] . ".<br>";
echo "your email is :" . $_SESSION["email"] . ".<br>";
echo "your key is   :" . $_SESSION["user_api_key"] . ".<br>";
echo "your id is    :" . $_SESSION["id_user"] . ".<br>";
?>
<a href="new_app.php">new app</a>
<?php
				$app = new App();
   				$result = $app -> app_show_all();
   				while($row = $result->fetch_assoc()){
                    ?>
                    <div> App ID : <?php echo $row['id_app'] ?> </div>
                    <div> App name : <?php echo $row['app_name'] ?> </div>
                    <div> id_banner : <?php echo $row['id_banner'] ?> </div>
                    <div> id_inter : <?php echo $row['id_inter'] ?> </div>
                    <div> id_reward : <?php echo $row['id_reward'] ?> </div>
                    <div> state : <?php echo $row['state'] ?> </div>
                    <div> package_name : <?php echo $row['package_name'] ?> </div>
                    

                    <?php
                }
                ?>
				
                
</body>
</html>