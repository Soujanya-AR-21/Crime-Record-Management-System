<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['crmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


$pid=$_POST['pid'];
$name=$_POST['name'];
$mobnum=$_POST['mobnum'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=md5($_POST['password']);
$pstation=$_POST['policestation'];
$pdata=explode(",",$pstation);
$psid=$pdata[0];
$psname=$pdata[1];
$ret="select PID from tblpolice where PID=:pid";
 $query= $dbh -> prepare($ret);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query-> execute();
