<?php session_start(); 
$tid = $_SESSION['tid'];
?>
<html>
<head>
<title>Subject</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div id="subject">
<?php
include 'header.php';
?>
<?php
 $sid=$sname=$smark="";
  $msg=$msg1="";
 if(isset($_POST['sbtn']))
 {
     $sid=$_POST['sid'];
	 $sname=$_POST['snm'];
	 
	 include 'conection.php';
	 $queryS="SELECT * FROM addsubject WHERE sid= $sid AND sname ='$sname'";
	 $resultS=mysqli_query($con,$queryS);
	 $num =mysqli_num_rows($resultS);
	 if($num == 0)
	 {
	 $queryI="INSERT INTO addsubject(sid,sname,tid,qstatus) VALUES($sid,'$sname',$tid,'No')";
		 
	 if(mysqli_query($con,$queryI))
	 {
	     $msg="subject added succesfully";
	 }
	 else
	 {
	 	 $msg="subject not added";
	 }
	 }
	else
	{
		$msg1 ="Subject ".$sname. "(Code - ".$sid." ) already added";
	}
 }
?>
<div id="Addsubject">
<div id="sub">
<form action="subject.php" method="post">
<br><h1><b>Add Subject</b></h1>
<div id="msg">
<p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>
</div>
<input type="text" name="sid" placeholder="Subject Id" required=""><br><br>
<input type="text" name="snm" placeholder="Subject Name" required=""><br><br>
<input type="submit" name="sbtn" value="Add Subject">
</form>
</div>
</div>
</div>
</body>
</html>