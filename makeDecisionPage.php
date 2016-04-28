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

function renderForm($appid) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body><?php
            $firstname = $_SESSION['fname'];
            $lastname = $_SESSION['lname'];
            $usercode = $_SESSION['userid'];
            $_SESSION['ad'] = $appid;
            echo " Welcome $firstname $lastname";
            ?>
            <form method="GET">
                <h1>PASS JUDGMENT ON APPLICATION NUMBER : <?php echo $appid ?></h1>
                <input  name='app' type="submit" value="APPROVE" >
                <input  name='disp' type="submit" value="DISAPPROVE" >
            </form>

        </body>
    </html>
    <?php
}

include_once("functions.php");
$user1 = new functions;

if ($_SESSION['type'] == "APPLICANT") {
    header("Location: applicantHomepage.php");
}

if (isset($_REQUEST['appid'])) {
    $appid = $_REQUEST['appid'];
    renderForm($appid);
} elseif (isset($_REQUEST['app'])) {
    $aid = $_SESSION['ad'];
    $user1->updateAppStatus($aid, "APPROVED");
    header("Location: reviewerHomepage.php");
} elseif (isset($_REQUEST['disp'])) {
    $aid = $_SESSION['ad'];
    $user1->updateAppStatus($aid, "DISAPPROVED");
    header("Location: reviewerHomepage.php");
} else {
    
}
?>