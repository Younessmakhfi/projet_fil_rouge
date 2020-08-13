<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include('../model/app.php');
if(isset($_GET['id_app'])&&isset($_GET['edit']))
{
	$app = new App();
   	$result = $app -> show_one_app($_GET['id_app']);
   	while($row = $result->fetch_assoc()){
                    ?>
    
                    <form name="f1" action="../controller/App_controller.php" method="POST">    
                            <input type="text" placeholder="id_app" name="id_app" value="<?php echo $row['id_app'] ?>" /> <br>   
                            <input type="text" placeholder="app_name" name="app_name" value="<?php echo $row['app_name'] ?>" /> <br>
                            <input type="text" placeholder="id_banner" name="id_banner" value="<?php echo $row['id_banner'] ?>" /> <br>
                            <input type="text" placeholder="id_inter" name="id_inter" value="<?php echo $row['id_inter'] ?>" /> <br>
                            <input type="text" placeholder="id_reward" name="id_reward" value="<?php echo $row['id_reward'] ?>" /> <br>
                            <select name="state" value="<?php echo $row['state'] ?>">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                    
                            </select>
                            <br>
                            <input type="text" placeholder="package_name" name="package_name" value="<?php echo $row['package_name'] ?>" /> <br>
                            <button   name="edit" type="submit">Update App</button>
                        
                         </form>
                    <?php
                }
}
?>
                        
</body>
</html>