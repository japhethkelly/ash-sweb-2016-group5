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
        if ($_SESSION['type'] == "REVIEWER") {
            header("Location: reviewerHomepage.php");
        }
        $user1 = new functions;
        $usercode = $_SESSION['userid'];
        $result = $user1->getDetails($usercode);

        //3) show the result
        echo "<table>";
        echo "<th id=\"nav\">APPLICATION ID </th><th id=\"nav\">VIEW/EDIT</th><th id=\"nav\">DELETE</th>";
        // output data of each row
        while ($row = $user1->fetch()) {
            $appid = $row['ApplicationID'];
            echo "<tr><td >{$appid}</td>";
            echo '<td><a href="form.php?appid=' . $appid . '">Edit</a></td>';
            echo '<td><a href="viewAppPage.php?appid=' . $appid . '">Delete</a></td></tr>';
        }
        echo "</table>";

//check for user code
        if (isset($_REQUEST['appid'])) {
            $appid = $_REQUEST['appid'];
            // echo "$action";
            $check = $user1->deleteApp($appid);
            header("Location: viewAppPage.php");
            exit;
        }
        ?>
    </body>
</html>
