<?php session_start(); 
$tid = $_SESSION['tid'];
error_reporting(0);
$sid=$_GET['sid'];
$con =mysqli_connect("localhost","root","","qpg");
$query ="SELECT  * FROM addsubject WHERE sid=".$sid." AND tid=".$tid;
$result =mysqli_query($con,$query);
$row= mysqli_fetch_assoc($result);
var_dump($row);
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
	$qstatus =$_POST['qstatus'];	 
	 include 'conection.php';
	
 $queryU="UPDATE addsubject SET qstatus = '$qstatus' WHERE sid =".$sid;
		 
	 if(mysqli_query($con,$queryU))
	 {
	echo '<script type="text/javascript">'; 
echo 'alert("Update Successfully");'; 
echo 'window.location.href = "show-subject.php"';
echo '</script>';
	 }
	 else
	 {
	 	 $msg="subject not added";
	 }
	
 }
?>
<div id="Addsubject">
<div id="sub" align="center">
<form action="update-subject.php" method="post">
<br><h1><b>Ready For Print</b></h1>
<div id="msg">
<p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>
</div>

<select name="qstatus" required="" style=" display: block;width:50%;height:30px;">
<option <?php if($row['qstatus']=="No") echo 'selected';?> value="No">No</option>
<option  <?php if($row['qstatus']=="Yes") echo 'selected';?> value="Yes">Yes</option>
		
	</select>

<input type="hidden" name="sid" value="<?php echo $row['sid']?>"><br><br>
<input type="submit" name="sbtn" value="Change">
</form>
</div>
</div>
</div>
</body>
</html>