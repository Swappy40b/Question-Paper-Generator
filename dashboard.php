<?php 
session_start();
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
	                      font-size:18px; 
                          background-color:pink;
	                      padding:10px;
	                      border:2px solid gray;
	                      border-radius:20px;
                          
	                      color:black;
	                      word-spacing:1px;
	                      font-weight:bold;">
                   Teacher Name : <?php echo $_SESSION['username'];?>
			       (<?php echo $_SESSION['branch'];?>)
    </h3>
		   </div>
             <div id="content"><br><br>
	             <div class="cols">
	              <br><br>
	              <h1 style="font-size:40px;"><a href="show-subject.php">Show Subject</a></h1>
	             </div>
	              <div class="cols">
	                <br><br>
	                <h1 style="font-size:40px;"><a href="show-quetion.php">Show Question</a></h1>
	              </div>
	               <br>
	
             </div>
</div>
</div>
<hr>
</body>
</html>