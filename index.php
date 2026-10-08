<?php
// index.php - Front Page
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crime Record Management System</title>
    <style>
        body{
            margin:0;
            font-family: Arial;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation Bar */
        nav{
            background-color:#2c3e50;
            display: flex;
            align-items: center;
            padding: 10px 30px;
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:2px;
            margin-left: 20px;
            font-size:18px;
            font-weight: bold;
            display: inline;
        }

        nav a:hover{
            color:#2c3e50;
        }

        .nav-bar{
            height: 50px;
            width: 400px;
            align-items: center;
            text-align: center;
            display: flex;
            gap: 30px;
            margin-left:450px;
            border: 2px solid #5a7792 ;
            background-color:#5a7792  ;
            border-radius: 30px;
            box-shadow: 0 2px 2px #5a7792 ;
        }

        /* Header */
        .header{
            margin-top:100px;
            text-align:center;
            background-color:#34495e;
            color:white;
            padding:15px;
        }

        /* Content */
        .content{
            padding:20px;
            text-align:center;
        }

        .body-container{
            background-color:#fff;
            border: 2px solid #fff;
            border-radius: 2em;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
            box-shadow: o 20px 30px 40px #fff;
        }

        h2{
            color: #2c3e50; 
        }

        ul{
            list-style-position: inside;
            margin-top:10px;
            padding-left: 300px;
            text-align: start;   
        }

        table {
            width: 80%;
            margin: 10px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
