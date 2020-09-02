<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="f1" action="../controller/user_controller.php" method="POST" onsubmit="return matchpass()">       
                        <div>
                            <input  type="text" placeholder="Your email" name="email" required>
                        </div>
                        <div>
                        <input placeholder="password" type="password" name="password" /><br/>
						</div>
                        <div>
                            <button   name="login" type="submit">login</button>
                        </div>
                    </form>
</body>
</html>
