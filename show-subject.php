﻿<?php 
session_start();
$tid = $_SESSION['tid']

?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div id="main">
<?php include 'header.php';?>

       <div id='tname'>
           </br>
		       <h3 style="display:inline;
                          text-decoration:none;
	                      font-size:20px; 
                          background-color:pink;
	                      padding:10px;
	                      border:2px solid gray;
	                      border-radius:20px;
                          
	                      color:black;
	                      word-spacing:1px;
	                      font-weight:bold;">Teacher Name : <?php echo $_SESSION['username'];?>
			    (<?php echo $_SESSION['branch'];?>)
           </h3>
		   </div>
             <div id="content" ><br><br>
			 <div style="width:60%;margin:0 auto;">
<table border="1" width="100%">
<tr>
<th>Subject Id</th>
<th>Subject Name</th>
<th>Subject Ready For Print</th>
<th>Action</th>
</tr>
 <?php
				 include 'conection.php';
$queryS ="SELECT * FROM addsubject WHERE tid=$tid";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['sid'] ?></td>
				<td><?php echo $rows['sname'] ?></td>
				<td><?php echo $rows['qstatus'] ?></td>
				<td><a href='update-subject.php?sid=<?php echo $rows['sid'] ?>'>Update</a></td>
				</tr>
				<?php
				}
				 
				 ?>
				
</table>
				
	               <br>
	</div>
             </div>
</div>
</div>
<hr>
</body>
</html>