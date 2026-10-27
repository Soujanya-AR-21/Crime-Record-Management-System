<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['crmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


$psname=$_POST['policestationname'];
$pscode=$_POST['policestationcode'];

$sql="insert into tblpolicestation(PoliceStationName,PoliceStationCode)values(:psname,:pscode)";
$query=$dbh->prepare($sql);
$query->bindParam(':psname',$psname,PDO::PARAM_STR);
$query->bindParam(':pscode',$pscode,PDO::PARAM_STR);
$query->execute();
 $LastInsertId=$dbh->lastInsertId();
if ($LastInsertId>0) {
echo '<script>alert("Police Station detail has been added.")</script>';
echo "<script>window.location.href ='add-police-station.php'</script>";
 }else{
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
         echo "<script>window.location.href ='add-police-station.php'</script>";
    }
}
?>

<!doctype html>
<html class="fixed">
	<head>
		<title>Crime Record Management System | Add Police Station</title>

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

