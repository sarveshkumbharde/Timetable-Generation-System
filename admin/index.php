<?php 
session_start(); 
require('../config.php');
?>
<?php
extract($_POST);
if(isset($save))
{
	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fields first</font>";
	}
	else
	{
	//check login crenditial
	$que=mysqli_query($con,"select * from admin where user_name='".$e."' and password='".$p."'");
	$r=mysqli_num_rows($que);
    echo $r;
		if($r)
		{
			$_SESSION['admin']=$e;
			header('location:admindashboard.php');
		}
		else
		{
			$err="<font color='red'>Invalid login details</font>";
			
			}
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time Table Generator</title>
    
    <style>
	a{margin-left:15px;text-decoration:none; font-size:20px}
	a:hover{background:#FF0000;color:#FFFFFF;}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > 
	img { margin:auto;}
</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">
    <script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
    <link href="../css/owl.transitions.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    
    <![endif] -->

</head>
<style>
.container {
  height: 200px;
  position: relative;
  border: 3px solid green;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

<div class="container">
  <div class="center">
    <button onclick="location.href='/timetable/admin/admindashboard.php'">Click me to open dashboard</button>
  </div>
</div>
</html>