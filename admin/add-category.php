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
