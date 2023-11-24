<?php 
session_start();
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
a{
	text-decoration:none;
}
</style>
</head>
<body><hr>
<?php include 'header.php'; ?>
	       <div id='tname'>
			   <h1 style="display:box">REPORTS</h1>
		   </div><br>
             <div id="content"><br><br>
	             <div class="cols">
	              <br><br>
	              <a href="see-teacher.php"><h1>All Teachers</h1></a>
	             </div>
				 <div class="cols">
	                <br><br>
	              <a href="subject.php"><h1>All Subject</h1></a>
	              </div>
	              <div class="cols">
	                <br><br>
				<a href="m.c.q.php"> <h1>M.C.Q. Question</h1></a>
	              </div>
	             <div class="cols">
	                <br><br>
	              <a href="theory.php"><h1>Theory Question</h1></a>
	              </div>
	               <br>
	
             </div>
</div>
<hr>
</body>
</html>