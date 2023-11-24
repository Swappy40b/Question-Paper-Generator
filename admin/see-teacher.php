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
		   <h1>Teacher Information</h1>
		   </div>
             <div id="content"><br>
	             <table border="1" width="100%">
				 <tr>
				 <th>ID</th>
				 <th>Name</th>
				 <th>Branch</th>
				 <th>Mobile</th>
				 <th>Email</th>
				 </tr>
				 <?php
				 include 'conection.php';
				 $queryS ="SELECT * FROM tregister";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['tid'] ?></td>
				<td><?php echo $rows['tname'] ?></td>
				<td><?php echo $rows['branch'] ?></td>
				<td><?php echo $rows['contact'] ?></td>
				<td><?php echo $rows['email'] ?></td>
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