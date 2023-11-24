<?php 
session_start();
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
   <?php
    include 'header.php';
	?>
	       <div id='tname'>
		       <h3>Hi <?php echo $_SESSION['arole'];?>
		   </div>
             <div id="content"><br>
	             <table border="1" width="100%">
				 <tr>
				 <th>ID</th>
				 <th>Type</th>
				 <th>Marks</th>
				  <th>Action</th>
				 
				 </tr>
				 <?php
				 include 'conection.php';
				 $queryS ="SELECT * FROM qcat";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['catid'] ?></td>
				<td><?php echo $rows['qcatnm'] ?></td>
				<td><?php echo $rows['catmarks'] ?></td>
				<td>
				<a href="update-cat-sigle.php?catid=<?php echo $rows['catid'] ?>">
				Update
				
				</td>
				</a>
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