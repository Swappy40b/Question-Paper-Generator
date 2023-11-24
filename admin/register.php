<html>
<head>
<title>register</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<?php
include 'header.php';
?>
<?php
 $name=$user=$pass=$branch=$mob=$email="";
 $nameErr=$userErr=$passErr=$branchErr=$mobErr=$emailErr="";
 $msg= $msg1="";
 
 if(isset($_POST['rbtn']))
 {	
	/* name validation */
	 if (empty($_POST["tname"]))
  {
    $nameErr = "Name is required";
  } 

  else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["tname"])) 
  {
      $nameErr = "Only letters allowed"; 
  }
 
  else
  {
	$name =$_POST['tname'];	
  }

	 /*  Username validation*/
  
	if (empty($_POST["tuser"]))
  {
    $tuserErr = "Username is required";
  }
  else
  {
	$user =$_POST['tuser'];	
  }
	 /*  Password validation*/
  
	if (empty($_POST["tpassword"]))
  {
    $passErr = "Password is required";
  }
  else
  {
	$pass =$_POST['tpassword'];	
  }
   /*  branch validation*/
  
	if (empty($_POST["tbranch"]))
  {
    $branchErr = "Branch is required";
  }
  else
  {
	$branch =$_POST['tbranch'];	
  }
	
	/* mobile validation */
	if (empty($_POST["tcontact"]))
  {
    $mobErr = "Mobile no is required";
	
  } 
  else if(!preg_match("/^[789]\d{9}$/",$_POST["tcontact"])) 
  {
	  $mobErr = "invalid mobile no";
	 
  }
  else
  {
	$mob =$_POST['tcontact'];	
  }
	 /*  Email validation*/
  
	if (empty($_POST["temail"]))
  {
    $emailErr = "Email is required";
  }
   else if (!filter_var($_POST["temail"],FILTER_VALIDATE_EMAIL)) 
  {
      $emailErr = "Invalid Email"; 
  }
 
  else
  {
	$email =$_POST['temail'];	
  }
	 
	 $con=mysqli_connect("localhost","root","","qpg");
	 $queryS="SELECT * FROM tregister WHERE username = '$user'";
	 $resultS= mysqli_query($con,$queryS);
	 $num = mysqli_num_rows($resultS);
	 if($num == 0)
	 {
	 if($name !="" && $branch !="" && $mob !="" && $user != "" && $pass != "" && $email != "")
  {
	 $query="INSERT INTO tregister(tname,username,password,branch,contact,email) VALUES('$name','$user','$pass','$branch','$mob','$email')";
	if(mysqli_query($con,$query))
	{
	  $msg = "Record inserted ";
	}
	else
	{
	  $msg = "Record not inserted";
	}
  }
	}
	else{
		$msg1 ="Username already Exist";
	}
 }
?>
<div id="register">
  <h1><b><i>Teacher Registration Details</i></b></h1>
  <div id="reg" style="width:40%;margin: 25px 0px 0px 45px;float:left;">
    <div class="reg">
       <div id="top">
       </div>
      <form action="register.php" method="post">
	  <p style="color:red;"><?php echo $msg;?></p>
	   <p style="color:red;"><?php echo $msg1;?></p>
	   <input type="text" name="tname" placeholder="Teacher Name" required="" value="<?php echo $name;?>">
	     <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"><?php echo $nameErr?></span><br>
       <input type="text" name="tuser" placeholder="Username" required="" value="<?php echo $user;?>">
	   <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"> <?php echo $userErr?></span>
	   <br>
       <input type="password" name="tpassword" placeholder="Password" required="" value="<?php echo $pass;?>">
	   <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"> <?php echo $passErr?></span>
	   <br>
       <input type="text" name="tbranch" placeholder="Branch" required="" value="<?php echo $branch;?>">
	   <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"> <?php echo $branchErr?></span>
	   <br>
       <input type="text" name="tcontact" placeholder="Contact No" maxlength="10" required="" value="<?php echo $mob;?>">
	   <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"> <?php echo $mobErr?></span>
	   <br>
	   <input type="text" name="temail" placeholder="E-mail" required="" value="<?php echo $email;?>">
	   <span style="color:red;">* </span>
	   <br>
	   <span style="color:red;"> <?php echo $emailErr?></span>
	   <br><br>
        <div class="sbmt">
           <input type="submit" name="rbtn" value="REGISTER">&nbsp;
		   <a href="adashboard.php">BACK</a>
         </div>
      </form>
    </div>
	
  </div>
  <div id="right" style="width:50%;margin:13px 30px 45px 30px;float:left;">
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
</div>
</body>
</html>