<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['crmsaid']==0)) {
  header('location:logout.php');
  } else{

  // Code for adding category 	
 if(isset($_POST['submit']))
 {
$catname=$_POST['catname'];
$catdes=$_POST['catdes'];
$sql="insert into tblcategory(CategoryName,CatDes)values(:catname,:catdes)";
$query=$dbh->prepare($sql);
$query->bindParam(':catname',$catname,PDO::PARAM_STR);
$query->bindParam(':catdes',$catdes,PDO::PARAM_STR);
$query->execute();
$LastInsertId=$dbh->lastInsertId();
if ($LastInsertId>0) {
echo '<script>alert("Category has been added.")</script>';
echo "<script>window.location.href ='add-category.php'</script>";
 }else{
echo '<script>alert("Something Went Wrong. Please try again")</script>';
 }
}
?>

<!doctype html>
<html class="fixed">
	<head>
		<title>Crime Record Management System | Add Category</title>
		
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">
		<script src="../assets/vendor/modernizr/modernizr.js"></script>
	</head>
