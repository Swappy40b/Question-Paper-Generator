<?php 
session_start();
$tid = $_SESSION['tid']

?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body style="border:2px solid black; background-image:url(images/b2.jpg); background-size:cover;">
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
<th>Option1</th>
<th>Option2</th>
<th>Option3</th>
<th>Option4</th>
<th>Action</th>
</tr>
 <?php
				 include 'conection.php';
				 $queryS ="SELECT * FROM mcq_quetion WHERE tid=$tid AND qtype='mcq'";
				$resultS=mysqli_query($con,$queryS);
				while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<tr>
				<td><?php echo $rows['qmid'] ?></td>
				<td><?php echo $rows['qmnm'] ?></td>
				<td><?php echo $rows['op1'] ?></td>
				<td><?php echo $rows['op2'] ?></td>
				<td><?php echo $rows['op3'] ?></td>
				<td><?php echo $rows['op4'] ?></td>
				<td><a href='update-mcq.php?qid=<?php echo $rows['qmid'] ?>' style=" font-size:15px; padding:5px;width:20%;font-family: 'Open Sans', sans-serif;
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