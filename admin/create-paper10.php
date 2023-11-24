<?php 
session_start();
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body><hr>
   <?php
    include 'header1.php';
	?>
	<div id="output" style="background-color:white;width:80%;margin:0 auto;height:auto;padding:10px;border:1px solid grey;">
	       <div id="head" align="center">
 <?php
				 include 'conection.php';
		$queryS ="SELECT * FROM addsubject WHERE sid=".$_GET['sid'];
		$resultS=mysqli_query($con,$queryS);
		$rows=mysqli_fetch_assoc($resultS)
				
	?>
<br><br>

<h2></h2>
<h3><?php echo $rows['sname'];?></h3>
<h4>Sub.Code:&nbsp;&nbsp;&nbsp;
<?php echo $rows['sid'];?>
&nbsp;&nbsp;&nbsp;&nbsp;Total Marks: 10</h4>
</div>
<div id="day_date" style="text-align:left;">
<h3>&nbsp;Time:30 Minutes</h3>
<h3>&nbsp;Instructions:&nbsp;1) All questions are compulsory.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;2) Figures to the right indicate full marks.</h3>
</div>
<br>

<div id="mcq">
<br><h3>
A) Select correct alternative and rewrite the sentence:
<span>[4]</span>
</h3>
<?php 
$querymcq ="SELECT * FROM mcq_quetion WHERE sid=".$_GET['sid']." ORDER BY RAND() LIMIT 4";
		$resultmcq=mysqli_query($con,$querymcq);
		$i =1;
		while($rowmcq=mysqli_fetch_assoc($resultmcq))
		{
?>
<p style="margin-left:25px;font-size:18px;">
<?php echo $i;?>)
<?php echo $rowmcq['qmnm'];?>
<br><br>
i)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowmcq['op1'];?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ii)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowmcq['op2'];?><br>
iii)&nbsp;&nbsp;<?php echo $rowmcq['op3'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
iv)&nbsp;&nbsp;&nbsp;<?php echo $rowmcq['op4'];?><br>

</p>
	<?php 
	$i++;
	}
	?>
</div>

<div id="any_two">
<br><h3>B) Attempt any two of the following.[6]</h3>
<?php 
$querytwo ="SELECT * FROM theory_quetion WHERE sid=".$_GET['sid']." AND catid=4 ORDER BY RAND() LIMIT 3";
		$resulttwo=mysqli_query($con,$querytwo);
		$i =1;
		while($rowtwo=mysqli_fetch_assoc($resulttwo))
		{
?>


<p style="margin-left:25px;font-size:18px;">
<?php echo $i;?>)
<?php echo $rowtwo['qnm'];?>
	<?php 
	$i++;
	}
	?>
<p>
</div>


</div><br><br>
<div align="center">
 <input type="button" value="Click" onclick="printDiv()" style="padding:5px; font-size:18px; font-weight:bold;">  
</div>
 <script> 
        function printDiv() { 
            var divContents = document.getElementById("output").innerHTML; 
            var a = window.open(); 
            a.document.write(divContents); 
               a.document.close(); 
            a.print(); 
        } 
    </script> 
</body>
</html>