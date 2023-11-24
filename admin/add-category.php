<html>
<head>
<title>register</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<?php
include 'header.php';
?>
<div style="text-align:center;">
<?php
 $catnm=$catmarks="";
  $msg=$msg1="";
 if(isset($_POST['cbtn']))
 {
     $catnm=$_POST['catnm'];
	 $catmarks=$_POST['catmarks'];
	 
	 include 'conection.php';
	 $queryS="SELECT * FROM qcat WHERE qcatnm= '$catnm' AND catmarks =$catmarks";
	 $resultS=mysqli_query($con,$queryS);
	 $num =mysqli_num_rows($resultS);
	 if($num == 0)
	 {
	 $queryI="INSERT INTO qcat(qcatnm,catmarks) VALUES('$catnm',$catmarks)";
		 
	 if(mysqli_query($con,$queryI))
	 {
	     $msg="Question Category added succesfully";
	 }
	 else
	 {
	 	 $msg="Category not added";
	 }
	 }
	else
	{
		$msg1 ="Category already added";
	}
 }
?>

  
  <div id="reg" style="width:40%;margin: 30px 0px 0px 45px;float:left;height:480px;">
  <p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>

    <div class="reg" style="margin-top:40px;">
     
      <form action="add-category.php" method="post">
	  <h2>Add Question Category</h2><br><br>
	   <input type="text" name="catnm" placeholder="Question Category" required="" value="<?php echo $catnm;?>">
	     <span style="color:red;">* </span>
	   <br>
	   <input type="text" name="catmarks" placeholder="Category Marks" required="" value="<?php echo $catmarks;?>">
	   <span style="color:red;">* </span>
	   <br><br>
        <div class="sbmt" style="margin-top:40px;">
           <input type="submit" name="cbtn" value="Add Category">&nbsp;
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
</div>
</body>
</html>