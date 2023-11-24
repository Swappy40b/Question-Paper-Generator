<?php
session_start();
error_reporting(0);
$catid =$_GET['catid'];
$con=mysqli_connect("localhost","root","","qpg");
$queryS="SELECT * FROM qcat WHERE catid= ".$catid;

$resultS=mysqli_query($con,$queryS);
$rowS =mysqli_fetch_assoc($resultS);

?>
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
	 $catid =$_POST['catid'];
     $catnm=$_POST['catnm'];
	 $catmarks=$_POST['catmarks'];
	 
	 
	 $queryU="UPDATE qcat SET qcatnm='$catnm',catmarks=$catmarks WHERE catid=".$catid;
		 
	 if(mysqli_query($con,$queryU))
	 {
		
	     echo "<script>alert('Question Category Updated')</script>";
		 echo "<script>window.location.href='update-category.php'</script>";
		 
	 }
	 else
	 {
	 	 $msg="Category not Updated";
	 }
	 
 }
?>

  
  <div id="reg"  style="height:400px; margin-top:100px;">
  <p style="color:red;"><?php echo $msg;?></p>
<p style="color:red;"><?php echo $msg1;?></p>

    <div class="reg" style="margin-top:70px;">
       <br>
      <form action="update-cat-sigle.php" method="post">
	  
	   <input type="text" name="catnm" placeholder="Question Category" required="" value="<?php echo $rowS['qcatnm'];?>">
	     <span style="color:red;">* </span>
	   <br>
	  
	   <input type="text" name="catmarks" placeholder="Category Marks" required="" value="<?php echo $rowS['catmarks'];?>">
	   <span style="color:red;">* </span>
	   <br><br>
        <div class="sbmt" style="margin-top:40px;">
		   <input type="hidden" name="catid"  value="<?php echo $catid;?>">
           <input type="submit" name="cbtn" value="Update Category">&nbsp;
		   <a href="add-category.php">BACK</a>
         </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>