<?php session_start();?>
<html>
<head>
<title>Subject</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div id="changepwd">
<?php
include 'header.php';
?>

<?php 
$oldpwd = $newpwd = $msg= "";
$oldpwdErr = $newpwdErr = "";
	if(isset($_POST['btn']))
	{
		/* old validation */
	 if (empty($_POST["opwd"]))
  {
    $oldpwdErr = "Please Input Old Password";
	 
  } 
  else
  {
	  $oldpwd = $_POST["opwd"];
	
  }
  /* New Password validation */
  	
	 if (empty($_POST["npwd"]))
  { 
    $newpwdErr = "Please Input New Password";
	 
  } 
  else
  {
		$newpwd = $_POST["npwd"];
  }
	
	/* Select Query To fetch Old Password Record */
	include 'conection.php';
  $queryS ="SELECT * FROM tregister WHERE tid =".$_SESSION['tid']." AND password ='$oldpwd'";
  
  $result =mysqli_query($con,$queryS);
  $row=mysqli_fetch_assoc($result);
 $num = mysqli_affected_rows($con);
 if($num ==1)
 {
	 $queryU ="UPDATE tregister SET password= '$newpwd' WHERE tid=".$_SESSION['tid'];
	 
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
<div id="old">
<div id="new">
<form action="changepwd.php" method="post">

<br><h1><b>Change Password</b></h1>
	<p style="color:green;" class="text-center"><?php echo $msg;?></p><br>

<input type="password"  placeholder="Old Password" name="opwd"><span style="color:red;">* <?php echo $oldpwdErr?></span><br><br>

<input type="password"  placeholder="New Password" name="npwd"><span style="color:red;">* <?php echo $newpwdErr;?></span><br><br>
<input type="submit" name="btn" value="Change">
</form>
</div>
</div>
</div>
</body>
