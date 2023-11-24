<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<?php include 'header.php';?>
<div id='tname'>
		       <h2>Subject Information</h2>
		   </div>
<div id="content" ><br><br>
			 <div style="width:60%;margin:0 auto;">
<table border="1" width="100%">
<tr>
<th>Tid</th>
<th>Subject Id</th>
<th>Subject Name</th>
</tr>
 <?php
				 include 'conection.php';
           $queryS ="SELECT * FROM addsubject";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['tid'] ?></td>
				<td><?php echo $rows['sid'] ?></td>
				<td><?php echo $rows['sname'] ?></td>
				</tr>
				<?php
				}
				 
				 ?>
				
</table>
				
	               <br>
	</div>
             </div>
</body>
</html>