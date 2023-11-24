<?php session_start(); ?>
<?php
$user=$pass= $msg ="";
if(isset($_POST['lbtn']))
{
	$user=$_POST['unm'];
	$pass=$_POST['pwd'];
	require('conection.php');
	$query="SELECT * FROM admindetails WHERE ausername='$user' AND apassword='$pass'";
	$result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
	  if($num==1)
	{
	 while($row=mysqli_fetch_assoc($result))
	 {
		//var_dump($row);
		//session_start();
		$_SESSION['aid']=$row['aid'];
		$_SESSION['ausername']=$row['ausername'];
		$_SESSION['apassword']=$row['apassword'];
		$_SESSION['arole']=$row['arole'];
		header('location:adashboard.php');
	 }
	}
	 else
	 {
		$msg= "Invalid Credential"; 
	 }
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div id="login">
    <h1 style="color:white; background-color:black;opacity:0.7"> QUESTION PAPER GENERATOR</h1>
    <div id="loginsection">
				<h2>Admin Login </h2>
				<p style="color:red;"><?php echo $msg;?></p>
				<form action="index.php" method="post">
					<div class="form">
						<input placeholder="Username" name="unm"  type="text" required="">
					</div>
					<div class="form">
						<input placeholder="Password" name="pwd"  type="password" required="">
					</div>
					<div class="btn">
						<input type="submit" name="lbtn" value="Login"><br><br><br>
					</div>
				</form>
				<a href="../home.php" style="font-size:25px; font-weight:bold;">Back</a>
	</div>
</div>
</body>
</html>