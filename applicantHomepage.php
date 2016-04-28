<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        
        $firstname = $_SESSION['fname'];
        $lastname = $_SESSION['lname'];
        $usercode = $_SESSION['userid'];
        include("session.php");
        if ($_SESSION['type']=="REVIEWER"){
            header("Location: reviewerHomepage.php");
        }
        echo " Welcome $firstname $lastname";
        ?>
        <a href="logOut.php">LogOut</a> 
        <form action="appStatusPage.php">
            <input type="submit" value="CHECK APPLICATION STATUS">
        </form>
        <form action="viewAppPage.php">
            <input type="submit" value="VIEW/EDIT APPLICATION">
        </form>
        <?php
        for ($i = 0; $i < 6; $i++) {
            $a .= mt_rand(0, 9);
        }
        echo $a;
        ?>
        <form action="addNewApp.php">
            <input type="submit" value="START NEW APPLICATION">
        </form>
        <a href="addNewApp.php?appid=<?php echo $a;?>">START NEW APPLICATION</a></td>';
    </body>
</html>
