<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                        <form name="f1" action="../controller/App_controller.php" method="POST">       
                            <input type="text" placeholder="app_name" name="app_name" /> <br>
                            <input type="text" placeholder="id_banner" name="id_banner" /> <br>
                            <input type="text" placeholder="id_inter" name="id_inter" /> <br>
                            <input type="text" placeholder="id_reward" name="id_reward" /> <br>
                            <select name="state">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                    
                            </select>
  <br>
                            <!-- <input type="text" placeholder="state" name="state" /> <br> -->
                            <input type="text" placeholder="package_name" name="package_name" /> <br>
                            <button   name="create" type="submit">Create App</button>
                        
                    </form>
</body>
</html>