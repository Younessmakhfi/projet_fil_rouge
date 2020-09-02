<?php
include('../Model/app.php');
if( !isset($_SESSION["name"]) ){
  header("Location: regestration/login.php");	
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="menu/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary fixed-top">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Flash</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa fa-user mr-3"></span> Profile</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-briefcase mr-3"></span> Portfolio</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contact</a>
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
		<div class="row">
            <!-- Team member -->
           
            <?php
				$app = new App();
                   $result = $app -> app_show_all();
   				while($row = $result->fetch_assoc()){
                    ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://cdn0.iconfinder.com/data/icons/creative-business-and-development/512/website_webpage_web_site_landing_page_seo_computer_browser_layout_development_create_build_flat_design_icon-512.png" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $row['app_name'] ?></h4>
                                    <p class="card-text"><?php echo $row['short_description'] ?></p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?php echo $row['app_name'] ?></h4>
                                    <p class="card-text"><?php echo $row['long_description'] ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" href="edit_app.php?id_app=<?= $row['id_app']; ?>&edit=">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" href="../controller/App_controller.php?id_app=<?= $row['id_app']; ?>&delete=">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
            

        </div>
   

		<!--new code end-->
      </div>
		</div>

    <script src="menu/js/jquery.min.js"></script>
    <script src="menu/js/popper.js"></script>
    <script src="menu/js/bootstrap.min.js"></script>
    <script src="menu/js/main.js"></script>
  </body>
</html>