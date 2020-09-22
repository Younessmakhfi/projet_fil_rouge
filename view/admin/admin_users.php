<?php
include('../../Model/user.php');
if( !isset($_SESSION["name"]) ){
  header("Location: ../regestration/login.php");	
}
if($_SESSION["email"] != "admin@gmail.com"){
    header("Location: ../user/index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admob Manager - Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webikt-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
    </style>
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar" class="active">
				<div class="custom-menu" style="backgeound-color : black;">
					<button type="button" id="sidebarCollapse" class="btn btn-primary fixed-top">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.php" class="logo">Admob Manager</a></h1>
	        <ul class="list-unstyled components mb-5">
            <li class="active">
	            <a href="admin_users.php"><span class="fa fa-home mr-3"></span>Users List</a>
	          </li>
	          <li >
	              <a href="admin_apps.php"><span class="fa fa-user mr-3"></span>Users Apps</a>
	          </li>
              <li>
              <a href="../regestration/login.php?logout"><span class="fa fa-sticky-note mr-3"></span> Log out</a>
	          </li>
	        </ul>

	  
    	</nav>

        <!-- Page Content  -->
        
      <div class="container">
		<!--new code beging-->
		<hr>
<div class="container bootstrap snippets bootdey">

    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>User ID</span></th>
                                <th><span>User name</span></th>
                                <th><span>Hash-key</span></th>
                                <th><span>Email</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <?php
				$users = new User();
                   $result = $users -> show_all_users();
   				while($row = $result->fetch_assoc()){
                    ?>
                        
                            <tbody>
                                <tr>
                                <td><?php echo $row['id_user'] ?></td>
                                    <td>
                                        <img src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" alt="">
                                        <a href="#" class="user-link"><?php echo $row['name'] ?></a>
                                        <span class="user-subhead">Member</span>
                                    </td>
                                    <td>
                                    <?php echo $row['user_api_key'] ?>
                                    </td>
                                    <td>
                                        <a href="#"><?php echo $row['email'] ?></a>
                                    </td>
                                    
                                    <td style="width: 20%;">
                                        <a href="../../controller/User_controller.php?id_user=<?= $row['id_user']; ?>&delete=" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                            <?php
                }
                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
		<!--new code end-->
      </div>
		</div>

    <script src="../menu/js/jquery.min.js"></script>
    <script src="../menu/js/popper.js"></script>
    <script src="../menu/js/bootstrap.min.js"></script>
    <script src="../menu/js/main.js"></script>
    </body>
</html>