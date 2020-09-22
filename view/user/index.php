<?php
include('../../Model/app.php');
if( !isset($_SESSION["name"]) ){
  header("Location: ../regestration/login.php");	
}
if($_SESSION["email"] == "admin@gmail.com"){
    header("Location: ../admin/admin_users.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admob Manager - User</title>
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
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary fixed-top">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.php" class="logo">Admob Manager</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
	          </li>
	          <li>
              <a href="new_app.php"><span class="fa fa-briefcase mr-3"></span> New app</a>
	          </li>
	          <li>
              <a href="../regestration/login.php?logout"><span class="fa fa-sticky-note mr-3"></span> Log out</a>
	          </li>
	        
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
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
                                <th><span>App ID</span></th>
                                <th><span>App name</span></th>
                                <th><span>Package name</span></th>
                                <th><span>State</span></th>
                                
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <?php
				$users = new App();
                   $result = $users -> app_show_all();
   				while($row = $result->fetch_assoc()){
                    ?>
                        
                            <tbody>
                                <tr>
                                <td><?php echo $row['id_app'] ?></td>
                                    <td>
                                        <img src="https://res.cloudinary.com/hy4kyit2a/f_auto,fl_lossy,q_70/learn/modules/wave_apps_sales_wave/ef3f2e04df27b4279cba2a3f13bcc64b_badge.png" alt="">
                                        <a href="#" class="user-link"><?php echo $row['app_name'] ?></a>
                                        
                                    </td>
                                    <td>
                                    <?php echo $row['package_name'] ?>
                                    </td>
                                    <td>
                                        <a href="#"><?php echo $row['state'] ?></a>
                                    </td>
                          
                                    
                                    
                                    <td style="width: 20%;">
                                        <a href="../controller/App_controller.php?id_app=<?= $row['id_app']; ?>&admin_delete=" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="edit_app.php?id_app=<?= $row['id_app']; ?>&edit=" class="table-link Success">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
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