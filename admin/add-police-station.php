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

