<?php session_start();
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
 $qnm=$qcat=$qsub=$msg=$msg1="";
  $qtype="theory";
  $tid =$_SESSION['tid'];
 if(isset($_POST['add']))
 {
     $qnm=$_POST['qnm'];
	 $qcat=$_POST['qcat'];
	 $qsub=$_POST['qsub'];
	
	 include 'conection.php';
	 $queryS="SELECT * FROM theory_quetion WHERE qnm= '$qnm' AND tid =".$tid;
	 $resultS=mysqli_query($con,$queryS);
	 $num =mysqli_num_rows($resultS);
	 if($num == 0)
	 {
	 $queryI="INSERT INTO theory_quetion(qnm,catid,sid,tid,qtype) VALUES('$qnm',$qcat,$qsub,$tid,'$qtype')";
		 
	 if(mysqli_query($con,$queryI))
	 {
	     $msg="Question added succesfully";
		 $qnm=$qcat=$qsub="";
	 }
	 else
	 {
	 	 $msg="Question not added";
	 }
	 }
	else
	{
		$msg1 ="Question already added";
		$qnm=$qcat=$qsub="";
	}
 }
?>


<div id="Addsubject">
<div id="sub" style="height:430px;">
<div id="msg">
<br>
<p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>
</div>
<form action="add-theory-quetion.php" method="post">
<br><h1><b>Add Theory Question</b></h1>
<input type="text" name="qnm" placeholder="Question Name" required="" value="<?php echo $qnm?>"><br>
<br>
<label style="font-size:20px;">Select  Subject</label><br>
<select name="qsub"style="width:52%;height:32px;" required="">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
	$query="SELECT * FROM addsubject WHERE tid=".$_SESSION['tid'];
	$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	
	?>
	<option <?php if($row['sid']==$qsub) echo 'selected';?> value="<?php echo $row['sid']?>"><?php echo $row['sname']?></option>
<?php 
}
?>

</select>
<br><br>
<label style="font-size:20px;">Select Question Category</label><br>
<select style="width:52%;height:32px;" name="qcat" required="">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
	$queryC="SELECT * FROM qcat";
	$resultC=mysqli_query($con,$queryC);
while($rowC=mysqli_fetch_assoc($resultC))
{
	
	?>
	<option <?php if($rowC['catid']==$qcat) echo 'selected';?> value="<?php echo $rowC['catid']?>"> <?php echo $rowC['qcatnm']?></option>
<?php 
}
?>

</select>
<br><br>
<input type="submit" name="add" value="Add Question">&nbsp;
<a href="question.php" style="font-size:20px; padding:10px;width:22%;font-family: 'Open Sans', sans-serif;font-weight:bold;border:none;margin-top:20px;color:white;
	 border-radius:4px;background:gray; text-decoration:none;">Back</a>
<br><br>
</form>
</div>
</div>

</div>
</body>
</html>