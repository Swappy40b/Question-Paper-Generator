<?php session_start(); 
error_reporting(0);
$tid =$_SESSION['tid'];
$tbranch = $_SESSION['tbranch'];
$tyear = $_SESSION['tyear'];
$adate =$_POST['attdate'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="width:90%;margin:0 auto;background-color:F1F1F2;">
	
	
	<br><br>
	<div class="myheader heading">
	
	<br>
	<h2 align="center">
	Welcome <?php echo $_SESSION['tname'];?>
	
	</h2>
	<p align="center">
	Class Teacher-  <?php echo $tbranch." (".$tyear."year)";?>
	&nbsp;&nbsp;<a href="logout.php">Logout</a>
	</p>
	<br>
	
	
	
	</div>
	
	
	<br><br>
	<div class="row">
	
		<div class="working-area">
		
		<?php	
$con =mysqli_connect("localhost","root","","sam");

   if (isset($_POST['b1']))
   {	
 
$con =mysqli_connect("localhost","root","","sam");
		$date =date('Y-m-d');
		
		$thid=$_POST['tid'];
		$atdate =$_POST['atdate'];
		
		$queryS="SELECT * FROM attendance WHERE adate = '$atdate' AND tid= ".$thid;
		
		$result=mysqli_query($con,$queryS);
		 foreach($_POST['att'] AS $regid=>$presenty)
		   {
		 
$queryU ="Update attendance SET present='$presenty' WHERE regid= ".$regid . " AND tid = ".$thid;

	mysqli_query($con,$queryU);
	if(mysqli_affected_rows($con) >0 )
	{
		$flag = 1;
	}
	
}
		if($flag == 1)
		{
		$adate =$atdate; 
		echo 'Record Updated';
		}
		



   }
?>
<form action="update-attendance.php" method="post">
<table border="1" width="100%">

	
	<tr>
	<th>Reg.Id</th>
	<th>Roll</th>
	<th>Name</th>
	<th>Gender</th>
	<th>Action</th>
	</tr>
	<?php


	$querySu ="SELECT student.regid,student.sid,student.sname,student.gender,attendance.adate,attendance.day,attendance.present FROM student INNER JOIN attendance ON student.regid = attendance.regid WHERE attendance.adate= '$adate'";

$result =mysqli_query($con,$querySu);
while($row= mysqli_fetch_assoc($result))
{
	?>
	
	
	<tr>
	<td>
	<input type="text" value="<?php echo $row['regid']?>">
	</td>
	<td>
	<input type="text" value="<?php echo $row['sid']?>">
	</td>
	<td>
	<input type="text" value="<?php echo $row['sname']?>">
	</td>
	
	<td>
	<input type="text" value="<?php echo $row['gender']?>">
	</td>
	<td>
	<input type="hidden" name="sid" value="<?php echo $row['regid']?>">
	<input type="hidden" name="atdate" value="<?php echo $adate;?>">
	<input type="hidden" name="tid" value="<?php echo $tid;?>">
	<input required type="radio" name="att[<?php  echo $row['regid'];?>]" <?php if ($row['present']=='P') echo "checked";?> value="P">P
	<input required type="radio" name="att[<?php  echo $row['regid'];?>]" <?php if ($row['present']=='A') echo "checked";?> value="A">A
	
	
	</td>
	</tr>
	<?php
}
	?>
	
	</table>
	<br><br>
<input type="submit" name="b1" value="Save">	
&nbsp;&nbsp;<a class="" href="select-date.php"> Back</a>
	</form>
	
	
		</div>
	
	
	</div>
	
	
	

</body>
</html>