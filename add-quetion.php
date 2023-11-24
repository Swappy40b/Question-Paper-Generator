<?php session_start(); 
$type_id = $_GET['type_id'];
$type_name = $_GET['type_name'];

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
if($type_name=="Theroy")
{
?>
<div id="Addsubject">
<div id="sub" style="height:auto;">
<form action="subject.php" method="post">
<br><h1><b>Add Theory Quetion</b></h1>
<input type="text" name="qnm" placeholder="Question" required=""><br>
<label>Select Subject</label><br>
<select style="width:52%;height:30px;">
<?php 
$con=mysqli_connect("localhost","root","","qpg");
$query="SELECT * FROM addsubject";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{var_dump($row);
}
?>
<option>hh</option>
</select><br>
<label>Select Question Category</label><br>
<select style="width:52%;height:30px;">
<option>hh</option>
</select><br>
<input type="submit" name="sbtn" value="Add Question">
<a href="question.php">Back</a>
</form>
<br><br>
</div>
</div>
<?php
}
else
{
?>
<div id="Addsubject">
<div id="sub" style="height:auto;">
<form action="subject.php" method="post">
<br><h1><b>Add M.C.Q. Quetion</b></h1>
<input type="text" name="qnm" placeholder="Quetion Name" required=""><br>
<input type="text" name="qsub" placeholder="Quetion Subject" required=""><br>
<input type="text" name="op1" placeholder="Option 1" required=""><br>
<input type="text" name="op2" placeholder="Option 2" required=""><br>
<input type="text" name="op3" placeholder="Option 3" required=""><br>
<input type="text" name="op4" placeholder="Option 4" required=""><br>
<input type="submit" name="sbtn" value="Add quetion">
<a href="question.php">Back</a>
<br><br>
</form>
</div>
</div>
<?php
	
}
?>
</div>
</body>
</html>