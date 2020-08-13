<?php
include('../Model/app.php');
if( !isset($_SESSION["name"]) ){
  header("Location: regestration/login.php");	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<a class="btn btn-success" href="new_app.php"type="button">New App</i></a>
<div class="box">
    <div class="container">
    	
     	<div class="row">
         <?php
				$app = new App();
   				$result = $app -> app_show_all();
   				while($row = $result->fetch_assoc()){
                    ?>			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-android fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4><?php echo $row['app_name'] ?></h4>
						</div>
                        <table class="table">
  <thead>
  </thead>
  <tbody>
  <tr>
      
      <td ><span class="mySpan">
                App name
</span></td>
      <td><span class="mySpan">
                State
</span></td>
      <td><span class="mySpan">
                Package name
</span></td>
    </tr>
    <tr>
      
      <td><span class="mySpan">
      <?php echo $row['app_name'] ?>
</span></td>
      <td><span class="mySpan">
      <?php echo $row['state'] ?>
</span></td>
      <td><span class="mySpan">
      <?php echo $row['package_name'] ?>
</span></td>
    </tr>
    
  </tbody>
</table>
<a class="btn btn-success" href="../controller/App_controller.php?id_app=<?= $row['id_app']; ?>&delete="type="button">Delete</i></a>
<a class="btn btn-success" href="edit_app.php?id_app=<?= $row['id_app']; ?>&edit="type="button">Edit</i></a>
<br>
						
                        
					 </div>
				</div>	 
				<?php
                }
                ?>
			
		
		</div>		
    </div>
</div>
<script>
    function testDailog(){
        var id_app = event.srcElement.id;
        if (confirm('Are you sure you want to delete this app?')) {
  // Save it!
  window.location = "http://localhost/first.php?id_app=" + id_app + "&p=" + encodeURIComponent(tableName);
  console.log('Thing was saved to the database.');
} else {
  // Do nothing!
  console.log('Thing was not saved to the database.');
}
    }
    </script>
</body>
</html>