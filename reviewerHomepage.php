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
        include("session.php");
        include_once("functions.php");
        $user1 = new functions;
        $usercode = $_SESSION['userid'];
        $firstname = $_SESSION['fname'];
        $lastname = $_SESSION['lname'];
        
        if ($_SESSION['type']=="APPLICANT"){
            header("Location: applicantHomepage.php");
        }
        $result = $user1->getAllApps();
        echo " Welcome $firstname $lastname";
        echo "<a href='logOut.php'>LogOut</a> ";
        
        echo "<table>";
        echo "<th id=\"nav\">APPLICATION ID </th><th id=\"nav\">APPLICANT NAME </th><th id=\"nav\">VIEW</th><th id=\"nav\">MAKE DECISION</th>";
        // output data of each row
        while ($row = $user1->fetch()) {
            $appid = $row['ApplicationID'];
            $uid = $row['UserID'];
            $ast = $row['AppStatus'];
            echo "<tr><td >{$appid}</td>";
            echo "<td >{$uid}</td>";
            echo '<td><a href="viewCompleteApp.php?appid=' . $appid . '">View</a></td>';
            echo '<td><a href="makeDecisionPage.php?appid=' . $appid . '">'.$ast.'</a></td></tr>';
        }
        echo "</table>";
       ?>
    </body>
</html>
