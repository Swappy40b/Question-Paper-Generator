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
		   <h2>Theory Questions</h2>
		   </div>
            <div id="content"><br>
<table border="1" width="100%">
<tr>
<th>Id</th>
<th>Question</th>
<th>Type</th>

</tr>
 <?php
				 include 'conection.php';
				 $queryS ="SELECT qcat.catid,qcat.qcatnm,theory_quetion.qid,theory_quetion.qnm FROM qcat INNER JOIN theory_quetion ON qcat.catid = theory_quetion.catid";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['qid'] ?></td>
				<td><?php echo $rows['qnm'] ?></td>
				<td style="width:20%";><?php echo $rows['qcatnm'] ?></td>
				</tr>
				<?php
				}
				 
				 ?>
				
</table>
				
	               <br>
	
             </div>
</div>
</div>
<hr>
</body>
</html>