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
 $qnm=$qsub=$op1=$op2=$op3=$op4=$msg=$msg1="";
  $qtype="mcq";
  $tid =$_SESSION['tid'];
 if(isset($_POST['mbtn']))
 {
     $qnm=$_POST['qnm'];
	 $op1=$_POST['op1'];
	 $op2=$_POST['op2'];
	 $op3=$_POST['op3'];
	 $op4=$_POST['op4'];
	 $qsub=$_POST['qsub'];
	
	 include 'conection.php';
	 $queryS="SELECT * FROM mcq_quetion WHERE qmnm= '$qnm' AND tid =".$tid;
	 $resultS=mysqli_query($con,$queryS);
	 $num =mysqli_num_rows($resultS);
	 if($num == 0)
	 {
	 $queryI="INSERT INTO mcq_quetion(qmnm,op1,op2,op3,op4,sid,tid,qtype) VALUES('$qnm','$op1','$op2','$op3','$op4',$qsub,$tid,'$qtype')";
	 
		 
	 if(mysqli_query($con,$queryI))
	 {
	     $msg="Question added succesfully";
		 $qnm=$qsub=$op1=$op2=$op3=$op4="";
	 }
	 else
	 {
	 	 $msg="Question not added";
	 }
	 }
	else
	{
		$msg1 ="Question already added";
			 $qnm=$qsub=$op1=$op2=$op3=$op4="";
	}
 }
?>
<div id="Addsubject">
<div id="sub" style="height:540px;margin-top:20px;">
<div id="msg">
<br>
<p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>
</div>
<form action="add-mcq.php" method="post">
<br><h1><b>Add M.C.Q. Question</b></h1>
<input type="text" name="qnm" placeholder="Question Name" required="" value="<?php echo $qnm?>"><br>

<input type="text" name="op1" placeholder="Option 1" required="" value="<?php echo $op1;?>"><br>
<input type="text" name="op2" placeholder="Option 2" required="" value="<?php echo $op2;?>"><br>
<input type="text" name="op3" placeholder="Option 3" required="" value="<?php echo $op3;?>"><br>
<input type="text" name="op4" placeholder="Option 4" required="" value="<?php echo $op4;?>"><br>
<label style="font-weight:bold;">Select Subject</label><br>
<select style="width:52%;height:30px;margin-top:2px;" name="qsub" required="">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
	$query="SELECT * FROM addsubject WHERE tid=".$_SESSION['tid'];
	$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	var_dump($row);
	?>
	<option <?php if($row['sid']==$qsub) echo 'selected';?> value="<?php echo $row['sid']?>"><?php echo $row['sname']?></option>
<?php 
}
?>

</select><br>
<input style="margin-top:40px;" type="submit" name="mbtn" value="Add Question">&nbsp;
<a href="question.php" style="font-size:20px;padding:10px;width:22%;text-decoration:none;font-family:'Open Sans', sans-serif;font-weight:bold;border:none;margin-top:20px;color:white;border-radius:4px;background:gray;">Back</a>
<br><br>
</form>
</div>
</div>
</div>
</body>
</html>