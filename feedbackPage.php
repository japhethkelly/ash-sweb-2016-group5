<?php
/*
  EDIT.PHP
  Allows user to edit specific entry in database
 */

// creates the edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
/**
 * Description of editAppFunction
 * Function renders form after processing php code to load the details into the form
 * This class houses all the related functions for editing an application
 * @author Japheth Kelly
 * 
 */
session_start();
include("session.php");

function renderForm($appid,$feed) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="css/formstyle.css">
            <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
            <script src="js/formvalidation.js"></script> 
        </head>
        <body>
            <div id="content"><?php
            $firstname = $_SESSION['fname'];
            $lastname = $_SESSION['lname'];
            $usercode = $_SESSION['userid'];
            $_SESSION['ad'] = $appid;
            echo " Welcome $firstname $lastname";
            ?>
            <form method="GET">
                <h1>FEEDBACK FOR APPLICATION NUMBER : <?php echo $appid ?></h1>
                <div><h2><label name="feedback" cols="50" rows="4" ><?php echo htmlspecialchars($feed); ?></label><h2></div>  
                <br>
                <br>
                <input  class="button" name='canl' type="submit" value="Back" formnovalidate>
            </form></div>

        </body>
    </html>
    <?php
}

include_once("functions.php");
$user1 = new functions;

if ($_SESSION['type'] == "REVIEWER") {
    header("Location: applicantHomepage.php");
}

if (isset($_REQUEST['appid'])) {
    $appid = $_REQUEST['appid'];
    $user1->getFeedback($appid);
    $row = $user1->fetch();
    renderForm($appid,$row['FEEDBACK']);
}elseif (isset($_REQUEST['canl'])) {
    header("Location: viewAppPage.php");
}