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
    include 'header.php';
	?>
	       <div id='tname'>
		   <h2>MCQ Questions</h2>
		   </div>
           <div id="content"><br>
<table border="1" width="100%">
<tr>
<th>Tid</th>
<th>Id</th>
<th>Question</th>
<th>Option1</th>
<th>Option2</th>
<th>Option3</th>
<th>Option4</th>

</tr>
 <?php
				 include 'conection.php';
				 $queryS ="SELECT * FROM mcq_quetion";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['tid'] ?></td>
				<td><?php echo $rows['qmid'] ?></td>
				<td><?php echo $rows['qmnm'] ?></td>
				<td><?php echo $rows['op1'] ?></td>
				<td><?php echo $rows['op2'] ?></td>
				<td><?php echo $rows['op3'] ?></td>
				<td><?php echo $rows['op4'] ?></td>
				
				</tr>
				<?php
				}
				 
				 ?>
				
</table>
				
	               <br>
	
             </div>
</div>
<hr>
</body>
</html>