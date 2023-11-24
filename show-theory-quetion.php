<?php 
session_start();
$tid = $_SESSION['tid']
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body  style="border:2px solid black;background-image:url(images/b2.jpg); background-size:cover;">
<?php include 'header.php';?>

       <div id='tname'>
           </br>
		       <h3 style="display:inline;
                          text-decoration:none;
	                      font-size:18px; 
                          background-color:pink;
	                      padding:10px;
	                      border:2px solid gray;
	                      border-radius:20px;
                          
	                      color:black;
	                      word-spacing:1px;
	                      font-weight:bold;">Teacher Name = <?php echo $_SESSION['username'];?>
			    (<?php echo $_SESSION['branch'];?>)
		   </div>
             <div id="content"><br>
<table border="1" width="100%">
<tr>
<th>Id</th>
<th>Question</th>
<th>Type</th>
<th>Action</th>
</tr>
 <?php
				 include 'conection.php';
				 $queryS ="SELECT qcat.catid,qcat.qcatnm,theory_quetion.qid,theory_quetion.qnm FROM qcat INNER JOIN theory_quetion ON qcat.catid = theory_quetion.catid WHERE tid=$tid AND qtype='theory'";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['qid'] ?></td>
				<td><?php echo $rows['qnm'] ?></td>
				<td style="width:20%";><?php echo $rows['qcatnm'] ?></td>
				<td><a href="update-theory-quetion.php?qid=<?php echo $rows['qid'] ?>" style="font-size:13px; padding:5px; width:10%;font-family: 'Open Sans', sans-serif;
	                  font-weight:bold; text-decoration:none; color:white; border-radius:2px; background:black;">Update</a></td>
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