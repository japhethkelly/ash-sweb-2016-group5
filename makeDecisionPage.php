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
 * @author Japheth Kelly
 * 
 */
session_start();
include("session.php");

function renderForm($appid, $feed) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="css/formstyle.css">
            <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
            <script src="formvalidation.js"></script> 
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
                    <h1>PASS JUDGMENT ON APPLICATION NUMBER : <?php echo $appid ?></h1>
                    <div> <p>Please Give Feedback : </p><textarea name="feedback" cols="50" rows="4" required><?php echo htmlspecialchars($feed); ?></textarea></div>  
                    <br>
                    <br>
                    <input class="button"  name='app' type="submit" value="APPROVE" >
                    <input  class="button" name='disp' type="submit" value="DISAPPROVE" >
                    <input  class="button" name='pend' type="submit" value="PENDING" formnovalidate >
                    <input  class="button" name='canl' type="submit" value="CANCEL" formnovalidate>
                </form></div>

        </body>
    </html>
    <?php
}

include_once("functions.php");
$user1 = new functions;

//prevent applicants from viewing reviewer page
if ($_SESSION['type'] == "APPLICANT") {
    header("Location: applicantHomepage.php");
}

//check and retireve pervious feedback
if (isset($_REQUEST['appid'])) {
    $appid = $_REQUEST['appid'];
    $user1->getFeedback($appid);
    $row = $user1->fetch();
    renderForm($appid, $row['FEEDBACK']);
} elseif (isset($_REQUEST['app'])) {
    $aid = $_SESSION['ad'];
    $feed = $_REQUEST['feedback'];
    $user1->updateAppStatus($aid, "APPROVED", $feed);//send updates to database
    header("Location: reviewerHomepage.php");
} elseif (isset($_REQUEST['disp'])) {
    $aid = $_SESSION['ad'];
    $feed = $_REQUEST['feedback'];
    $user1->updateAppStatus($aid, "DISAPPROVED", $feed);
    header("Location: reviewerHomepage.php");
} elseif (isset($_REQUEST['pend'])) {
    $aid = $_SESSION['ad'];
    $user1->updateAppStatus($aid, "PENDING");
    header("Location: reviewerHomepage.php");
} elseif (isset($_REQUEST['canl'])) {
    header("Location: reviewerHomepage.php");
} else {
    
}
?>