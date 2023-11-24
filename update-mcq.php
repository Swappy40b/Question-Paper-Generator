<?php session_start();?>
<?php
$qid =$_GET['qid'];
 include 'conection.php';
 $queryS="SELECT * FROM mcq_quetion WHERE qmid= ".$qid;
 $resultS=mysqli_query($con,$queryS);
$rowS =mysqli_fetch_assoc($resultS);

 
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
include 'conection.php';
?>
<?php
 $qnm=$qsub=$op1=$op2=$op3=$op4=$msg=$msg1="";
  
 if(isset($_POST['mbtn']))
 {
     $qnm=$_POST['qnm'];
	 $op1=$_POST['op1'];
	 $op2=$_POST['op2'];
	 $op3=$_POST['op3'];
	 $op4=$_POST['op4'];
	 $qsub=$_POST['qsub'];
	$qid =$_POST['qid'];
	 
	 
$queryI="UPDATE mcq_quetion SET qmnm='$qnm',op1='$op1',op2='$op2',op3='$op3',op4='$op4', sid=$qsub WHERE qmid = ".$qid;
	 
		 
	 if(mysqli_query($con,$queryI))
	 {
		
	     header('Location:show-mcq.php');
		 
	 }
	 else
	 {
	 	 $msg="Question not Updated";
	 }
	 
	
 }
?>
<div id="Addsubject">
<div id="sub" style="height:540px;margin-top:20px;">
<div id="msg">
<br>
<p style="color:red;"><?php echo $msg;?></p>

</div>
<form action="update-mcq.php" method="post">
<br><h1><b>Update M.C.Q. Question</b></h1>
<input type="text" name="qnm" placeholder="Question Name" required="" value="<?php echo $rowS['qmnm'];?>"><br>

<input type="text" name="op1" placeholder="Option 1" required="" value="<?php echo $rowS['op1'];?>"><br>
<input type="text" name="op2" placeholder="Option 2" required="" value="<?php echo $rowS['op2'];?>"><br>
<input type="text" name="op3" placeholder="Option 3" required="" value="<?php echo $rowS['op3'];?>"><br>
<input type="text" name="op4" placeholder="Option 4" required="" value="<?php echo $rowS['op4'];?>"><br>
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
	<option <?php if($row['sid']==$rowS['sid']) echo 'selected';?> value="<?php echo $row['sid']?>"><?php echo $row['sname']?></option>
<?php 
}
?>

</select><br>
<input type="hidden" name="qid" value="<?php echo $rowS['qmid']?>">
<input style="margin-top:40px;" type="submit" name="mbtn" value="Update">&nbsp;
<a href="show-quetion.php" style="font-size:20px;padding:10px;width:22%;text-decoration:none;font-family:'Open Sans', sans-serif;font-weight:bold;border:none;margin-top:20px;color:white;border-radius:4px;background:gray;">Back</a>
<br><br>
</form>
</div>
</div>
</div>
</body>
</html>