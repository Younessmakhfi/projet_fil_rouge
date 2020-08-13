<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="../public/script.js"></script>
</head>
<body>
<form name="f1" action="../controller/user_controller.php" method="POST" onsubmit="return matchpass()">
                        <div >
                            <input  type="text" placeholder="Your name" name="name" required>
                        </div>
                        
                        <div >
                            <input  type="text" placeholder="Your email" name="email" required>
                        </div>
                        <div >
                        Password:<input type="password" name="password" /><br/>
                        Re-enter Password:<input type="password" name="password2"/><br/>
						</div>
                        <div >
                            <button   name="signup" type="submit">Signup</button>
                        </div>
                    </form>
</body>
</html>