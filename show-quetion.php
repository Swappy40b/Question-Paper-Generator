<?php session_start();?>
<html>
<head>
<title>Subject</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
.btn
 {
   text-decoration:none;
	padding:23px;
	font-size:20px;
    color:black;
    border:1px;
    transition:.3s ease-in-out;
    cursor:pointer;
	background-color: chartreuse;
	margin:0 15px;
	border-radius:15px;
}
     .btn:hover
{
    background-color:rgb(255, 217, 9);
    
}
</style>
</head>
<body>
<div id="question">
<?php
include 'header.php';
?>
<div id="Addquestion">
<div id="que">

<br><h1><b>Select  Question Category</b></h1><br><br><br>
<a class="btn" href="show-mcq.php?type='mcq'">M.C.Q</a>
<a class="btn" href="show-theory-quetion.php?type='theory'">Theory</a>

</div>
</div>
</div>
</body>
