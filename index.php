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

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #374553;
            color: white;
            text-align: center;
        }

        td {
            background-color: #f9fbfd;
        }

        .Station {
            background: #e9edf3;
            margin: 5px 0;
            padding: 8px;
            border-radius: 4px;
        }

        .range {
            font-weight: bold;
            color: #2c3e50;
        }

        /* Footer */
        .footer{
            background-color:#2c3e50;
            color:white;
            text-align:center;
            align-items: center;
            padding:20px;
            width: 100%;
            margin-top:40px;
        }
    </head>
    </style>

     <nav>	
        <img src="images/images.png" alt="Logo" style="width: 90px; height: 90px; flex-shrink: 0; border: 1px solid white; border-radius:50%; "> 
        <div>
            <div class="nav-bar">
                <a href="index.php">Home</a>
                <a href="user\signin.php">User</a>
                <a href="police\signin.php">Police</a>
                <a href="admin\signin.php">Admin</a>
            </div>
        </div>
    </nav>

