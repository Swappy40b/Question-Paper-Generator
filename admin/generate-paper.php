<?php 
session_start();
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body><hr>
<?php include 'header.php';?>
	       <div id='tname'>
               </br>
		       <h3 style="display:inline;
                          text-decoration:none;
	                      font-size:18px; 
                          background-color:lightgray;
	                      padding:10px;
	                      border:2px solid gray;
	                      border-radius:20px;
                          
	                      color:black;
	                      word-spacing:1px;
	                      font-weight:bold;">Hi <?php echo $_SESSION['arole'];?>
               </h3>
		   </div>
             <div id="content">
                 </br>
	<h3 style="background-color:white">Click On  the Subject to Create Paper</h3>
</br>
      <?php
	             include 'conection.php';
				 $queryS ="SELECT * FROM addsubject WHERE qstatus='Yes'";
				$resultS=mysqli_query($con,$queryS);
			    while($rows=mysqli_fetch_assoc($resultS))
				{
				?>
				<div class="subcols">
	 
				<h1>
				<a href="marks -generate-paper.php?sid=<?php echo $rows['sid'];?>">
				<?php echo $rows['sname']; ?>
				</a>
				</h1>
	  <br> <br>
	            </div>
           	<?php
				}
				?>
				 
	              
	              
	              
	
             </div>
</div>
<hr>
</body>
</html>