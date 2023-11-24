<?php 
session_start();
$sid =$_GET['sid'];
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body><hr>
<?php include 'header.php'; ?>
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
</br>
             <div id="content">
	<h3 style="Background-color:white">Click On the Marks to Create Paper</h3>
               </br>
					
				<div class="subcols">
	 
				<h1>
				<a href="create-paper10.php?sid=<?php echo $sid;?>">
				10 Marks
				</a>
				</h1>
	  <br> <br>
	            </div>
				
				<div class="subcols">
	 
				<h1>
				<a href="create-paper20.php?sid=<?php echo $sid;?>">
				20 Marks
				</a>
				</h1>
	  <br> <br>
	            </div>
           	
				 <div class="subcols">
	 
				<h1>
				<a href="create-paper40.php?sid=<?php echo $sid;?>">
				40 Marks
				</a>
				</h1>
	  <br> <br>
	            </div>
				
				<div class="subcols">
	 
				<h1>
				<a href="create-paper50.php?sid=<?php echo $sid;?>">
				50 Marks
				</a>
				</h1>
	  <br> <br>
	            </div>
				
				<div class="subcols">
	 
				
				
				<form action="only-mcq.php" method="get">
				<br>
                    <b>
                    <a href="" style="font-size:23px">
				 M.C.Q. Marks
                     </a>
                    </b>
				<span style="width:150px;">
				<select style="max-width:100%;" name="marks">
				<option  value="10">10 Marks</option>
				<option value="20">20 Marks</option>
				</select>
				</span>
				
				<input type="hidden" name="sid" value="<?php echo $sid;?>">
				<input type="submit" name="b1" value="Generate Paper" style="text-decoration:none;
	padding:5px;
	font-size:15px;
    color:white;
    border:1px;
    transition:.3s ease-in-out;
    cursor:pointer;
	background-color:black;
	border-radius:15px;">
				</form>
				
				</h1>
	  <br> <br>
	            </div>
				
				
	              
	              
	              
	
             </div>
</div>
<hr>
</body>
</html>