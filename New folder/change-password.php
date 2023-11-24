<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
		<title>Synergy | Profile </title>
	<link rel="icon" href="images/logo.jpg" type="image/jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="solar water pump,Solar company" /><script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
<?php include 'header.php';?>
	<!-- banner -->
	<div class="">

	</div>
	<!--//banner -->
	<!--/w3_short-->
	
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="banner-bottom" style="padding-top:0em">
		<div class="container" style="margin-top:-10px">
		
			<div class="inner_sec_grids_info_w3ls">
				
				
				<div class="w3layouts_mail_grid">
					
	<?php include 'conn.php';
$oldpwd = $newpwd = $msg= "";
$oldpwdErr = $newpwdErr = "";
	if(!empty($_POST))
	{
		/* old validation */
	 if (empty($_POST["opwd"]))
  {
    $oldpwdErr = "Please input old password";
	 
  } 
  else
  {
	  $oldpwd = $_POST["opwd"];
	
  }
  /* New Password validation */
  	
	 if (empty($_POST["npwd"]))
  {
    $newpwdErr = "Please input New password";
	 
  } 
  else
  {
		$newpwd = $_POST["npwd"];
  }
	
	/* Select Query To fetch Old Password Record */
	include 'conn.php';
  $queryS ="SELECT * FROM user WHERE u_id =".$_SESSION['uid']." AND u_pwd ='$oldpwd'";
  
  $result =mysqli_query($con,$queryS);
  $row=mysqli_fetch_assoc($result);
 $num = mysqli_affected_rows($con);
 if($num ==1)
 {
	 $queryU ="UPDATE user SET u_pwd= '$newpwd' WHERE u_id=".$_SESSION['uid'];
	 
	if(mysqli_query($con,$queryU))
	{
		$msg ="Password Updated Successfully";
	}
	else
	{
		$msg ="Password Updation Failed";
	}
		
 }
 else
 {
	 $msg ="You Insert Wrong Password";
 }
}

?>				
<p class="text-right"> <span style="color:red;">Your Customer Id </span> - <?php echo $_SESSION['uid'];?></p>
					<br>
			<div class="text-center">
			<a class="btn btn-primary" href="profile.php">
			Your Profile
			</a>

			<a class="btn btn-primary" href="your-complaint.php">
			Your Complaint
			</a>
			<a class="btn btn-primary" href="service-status.php">
			Service Status
			</a>
			<a class="btn btn-primary" href="your-order.php">
			Your Order
			</a>

			

			
			</div>
			<br>
		<p style="color:green;" class="text-center"><?php echo $msg;?></p>
					<form action="change-password.php" method="post">
						<div class="col-md-12 wthree_contact_left_grid">
						<div class="col-md-6">
						

					

<div class="form-group">
	<label for="opwd">Old password:</label>
<span style="color:red;">* <?php echo $oldpwdErr?></span>
	<input type="password" class="form-control" id="opwd" name="opwd">
</div>


</div>
<div class="col-md-6">
<div class="form-group">
	<label for="npwd">New Password:</label>
<span style="color:red;">* <?php echo $newpwdErr;?></span>
	<input type="password" class="form-control" id="npwd" name="npwd">
</div>

							
							</div>
						</div>
						<br>
					<div class="text-center">
					<br><br>
					<input class="btn btn-primary" type="submit" value="Update">
					</div>
						<div class="clearfix"> </div>

					</form>
				</div>
			<div class="clearfix"> </div>
			<br><br>

				<div class="col-md-8 ">
<!-- /map -->
	<!--<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
		    style="border:0"></iframe>

	</div>-->
				</div>
			</div>

		</div>
	</div>
	<hr>
	<!-- //banner-bottom -->
	
	
	
	<!-- footer -->
	<?php include 'footer.php';?>
	
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>