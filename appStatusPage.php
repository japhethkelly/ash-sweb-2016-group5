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
        include_once("functions.php");
        include("session.php");
        $user1 = new functions;
        $usercode = $_SESSION['userid'];
        $result = $user1->getAppStatus($usercode);

        //3) show the result
        echo "<table>";
        echo "<th id=\"nav\">APPLICATION ID </th><th id=\"nav\">STATUS</th>";
        // output data of each row
        while ($row = $user1->fetch()) {
            echo "<tr><td >{$row['AppID']}</td>"
            . "<td >{$row['AppStatus']}</td>";
            }
        echo "</table>";
        ?>
    </body>
</html>
