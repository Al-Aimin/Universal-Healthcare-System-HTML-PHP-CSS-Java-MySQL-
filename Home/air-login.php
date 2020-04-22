<?php
	session_start();
	include('dbcon2.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>UNIVERSAL HEALTHCARE Loin</title>
  
      <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="submit"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
	

	 
  
 
</body>
</html>

	<?php 
if(isset($_POST["submit"]))
{
	$count=0;
	$res=mysqli_query($link,"select * from register where usname='$_POST[user]' && pass='$_POST[pass]'");
	$count=mysqli_num_rows($res);
	
	if($count==0)
	{
		?>
		<div class="alert alert-danger col-lg-6 col-lg-push-3">
			<top><strong style="color:white">Invalid Username or Password</strong></top>
		</div>
		
		<?php
		
	}
	else
	{
		$_SESSION["user"]=$_POST["user"];
		$_session['message'] = "You are now logged in";
		?>
		<script type="text/javascript">
		window.location="amb-reg2.php">";
		</script>
		<?php
	}
}
?>
     





