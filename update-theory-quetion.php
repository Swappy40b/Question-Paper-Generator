<?php session_start();

$qid =$_GET['qid'];
 include 'conection.php';
 $queryS="SELECT * FROM theory_quetion WHERE qid= ".$qid;
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
?>
<?php
 $qnm=$qcat=$qsub=$msg="";
  
 if(isset($_POST['add']))
 {
     $qnm=$_POST['qnm'];
	 $qcat=$_POST['qcat'];
	 $qsub=$_POST['qsub'];
	 $qid = $_POST['qid'];
	 
$queryI="UPDATE theory_quetion SET qnm='$qnm',catid=$qcat,sid=$qsub WHERE qid = ".$qid;
	 
		 
	 if(mysqli_query($con,$queryI))
	 {
		
	     header('Location:show-theory-quetion.php');
		 
	 }
	 else
	 {
	 	 $msg="Question not Updated";
	 }
 }
?>


<div id="Addsubject">
<div id="sub" style="height:auto;">
<div id="msg">
<br>
<p style="color:red;"><?php echo $msg;?></p>

</div>
<form action="update-theory-quetion.php" method="post">
<br><h1><b>Update Theory Question</b></h1>
<input type="text" name="qnm" placeholder="Question Name" required="" value="<?php echo $rowS['qnm'];?>"><br>
<br>
<label>Select  Subject</label><br>
<select name="qsub"style="width:52%;height:30px;" required="">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
	$query="SELECT * FROM addsubject WHERE tid=".$_SESSION['tid'];
	$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	
	?>
<option <?php if($row['sid']==$rowS['sid']) echo 'selected';?> value="<?php echo $row['sid']?>"><?php echo $row['sname']?></option>
<?php 
}
?>

</select>
<br>
<label>Select Question Category</label><br>
<select style="width:52%;height:30px;" name="qcat" required="">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
	$queryC="SELECT * FROM qcat";
	$resultC=mysqli_query($con,$queryC);
while($rowC=mysqli_fetch_assoc($resultC))
{
	
	?>
	<option <?php if($rowC['catid']==$rowS['catid']) echo 'selected';?> value="<?php echo $rowC['catid']?>"> <?php echo $rowC['qcatnm']?></option>
<?php 
}
?>

</select>
<br><br>
<input type="hidden" name="qid" value="<?php echo $rowS['qid']?>">
<input type="submit" name="add" value="Update">&nbsp;
<a href="show-theory-quetion.php" style="font-size:20px;padding:10px;width:22%;text-decoration:none;font-family:'Open Sans', sans-serif;font-weight:bold;border:none;margin-top:20px;color:white;border-radius:4px;background:gray;">Back</a>
<br><br>
</form>
</div>
</div>

</div>
</body>
</html>