<?php
	session_start();
	

	$DB="uhs";
	$USER="root";
	$PASS="";
	$HOST="localhost";
	$connect=mysqli_connect($HOST,$USER,$PASS,$DB);
	if(!$connect){
		echo"Not connected";
	}
	if(!empty($_POST)){
		$username=$_POST['usname'];
		$name=$_POST['name'];
		$dept=$_POST['dept'];
		$mail=$_POST['email'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$pass=$_POST['pass'];
		$con= "INSERT INTO register(id,usname,name,dept,mail,gender,phone,pass)VALUES('','$username','$name','$dept','$mail','$gender','$phone','$pass')";
		if(mysqli_query($connect,$con)){
			echo"Registration Successfully. You get a token number in youe mobile by message.";
			
		}
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION</title>
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
                            REGISTRATION <small></small>
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
                                            <input name="usname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="name" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Department Type*</label>
                                            <select name="dept" class="form-control" required >
												<option value selected ></option>
                                                <option value="ORTHOPAEDICS">ORTHOPAEDICS</option>
                                                <option value="SKIN">SKIN</option>
                                                <option value="SURGERY">SURGERY</option>
                                                <option value="CARDILOGY">CARDILOGY</option>
												<option value="RADIOLOGY">RADIOLOGY</option>
												<option value="EMERGENCY">EMERGENCY</option>
												<option value="EMERGENCY">DENTAL</option>
												<option value="EMERGENCY">COSMETIC-SURGERY</option>
												<option value="EMERGENCY">DIABETOLOGY</option>
												<option value="EMERGENCY">DIET & NUTRITION</option>
												
                                            </select>
                              </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Gender*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"  value="male" checked="">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"  value="female ">Female
                                            </label>
                         
                                </div>
					
								
								<div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" type ="text" class="form-control" required>
                                            
                    </div>
					<div class="form-group">
                                        <label>Password</label>
                                        <input type ="password" name="pass" class="form-control" required>
                                            
                    </div>
					<div class="col-lg-12  col-lg-push-3">
                        <center><input class="btn btn-default submit " id="sb" type="submit" name="submit1" value="Register"></center>
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
    
 
</body>
</html>


