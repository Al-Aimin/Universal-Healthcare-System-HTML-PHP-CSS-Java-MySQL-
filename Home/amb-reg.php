
	<?php 
	session_start();
	include "dbcon2.php";

	?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AMBULANCE RESERVATION</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
	<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="http://127.0.0.1/Project%20CSE-300/index2.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			<div class="row">
            <div class="col-md-12">
                        <h1 class="page-header">
                           AMBULANCE RESERVATION <small></small>
                        </h1>
                 </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            
							  <div class="form-group">
                                            <label>User Name</label>
                                            <input name="name" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Address</label>
                                            <input name="address" class="form-control" required>
                                           
							   <div class="form-group">
                                            <label>Phone</label>
                                        <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
						
					<div class="col-lg-12  col-lg-push-3">
                        <center><input class="btn btn-default submit " id="sb" type="submit" name="submit1" value="Request For Ambulance"></center>
                    </div>
							   
                    </div>
                        
                    </div>
					</div>
                
					</form>
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
	
	
	<?php
		if(isset($_POST["submit1"]))
		{
			
		  mysqli_query($link,"insert into street values('','$_POST[name]','$_POST[address]','$_POST[phone]','180','not send','due')");
		  
		  ?>
		  <script type="text/javascript">
			alert("request sent successfully. A phone call will come into your phone");
		  </script>
		  <?php
		}
		?>
	
	
</body>
</html>

