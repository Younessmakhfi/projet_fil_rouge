
<?php
include('../../Model/user.php');
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
  	<title>Admob Manager - edit your profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../menu/css/style.css">
  </head>
  <body>
  <?php
				$user = new User();
                   $result = $user -> user_show_info();
   				$row = $result->fetch_assoc();
                    ?>
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
          <li >
	            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li class="active">
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

	      

	      </div>
    	</nav>

		<!-- Page Content  -->
		
      <div class="container">
		<!--new code beging-->
		<div class="container"> <div class=" text-center mt-5 ">
    
            <h1>Edit your profile</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" name="f1" action="../../controller/user_controller.php" method="POST">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                              <label for="form_name">Your ID *</label> 
                                              <input value="<?php echo $row['id_user'] ?>" id="form_name" type="text" placeholder="id_app" name="userid" class="form-control" required="required" data-error="Firstname is required." readonly /> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">User name *</label> 
                                            <input value="<?php echo $row['name'] ?>" id="form_lastname" type="text" placeholder="app_name" name="app_name" class="form-control"  required="required" data-error="Lastname is required." readonly> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                              <label for="form_name">Email *</label> 
                                              <input value="<?php echo $row['email'] ?>" id="form_name" type="text"  class="form-control"  required="required" data-error="Firstname is required." placeholder="id_banner" name="email" > </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                              <label for="form_lastname">Password *</label> 
                                              <input value="<?php echo $row['password'] ?>" id="form_lastname" type="text"  class="form-control"  required="required" data-error="Lastname is required." placeholder="id_inter" name="password" > </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label for="form_message">Your API hashkey</label> 
                                                <textarea id="form_message"  class="form-control" placeholder="Long Description about your app"  rows="4" required="required" data-error="Please, descripe your app." name="long_description" readonly><?php echo $row['user_api_key'] ?></textarea> </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " name="change" type="submit" value="Save modification"> </div>
                                    </div>
                                    <div class="row" style="margin-top : 10px">
                                        
                                        <div class="col-md-12"><a class="btn btn-danger btn-send pt-2 btn-block " href="index.php">Cancel</a> </div>
                                        
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
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