<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Japheth Kelly
 */

// PHP Class for Edit Application
session_start();
include("session.php");
if ($_SESSION['type'] == "REVIEWER") {
    header("Location: reviewerHomepage.php");
}
// connect to the database
include_once("editAppFunction.php");
$user1 = new editAppFunction;

// check if the form has been submitted. If it has, process the form and save it to the database
$usercode = $_SESSION['userid'];
$appid = $_SESSION['appid'];
//echo "APPID: $appid";
// confirm that the 'id' value is a valid integer before getting the form data
// get form data, making sure it is vali
/* @var $_REQUEST type */
$usertype = $_REQUEST['usertype'];
$date = $_REQUEST['date'];
$projtitle = $_REQUEST['projtitle'];
$princinvest = $_REQUEST['princinvest'];
$coprincinvest1 = $_REQUEST['coprincinvest1'];
$princinvestdept = $_REQUEST['princinvestdept'];
$princinvestphone = $_REQUEST['princinvestphone'];
$email = $_REQUEST['mailaddress'];
$deadline = $_REQUEST['deadline'];
$grant = $_REQUEST['grant'];
$exemption = $_REQUEST['exemption'];
$numA = $_REQUEST['numA'];
$numB = $_REQUEST['numB'];
$numC = $_REQUEST['numC'];
$numD = $_REQUEST['numD'];
$numF = $_REQUEST['numF'];
$numG = $_REQUEST['numG'];
$risks = $_REQUEST['risks'];
$conA = $_REQUEST['conA'];
$conB = $_REQUEST['conB'];
$conC1 = $_REQUEST['conC1'];
$conC2 = $_REQUEST['conC2'];
$conC3 = $_REQUEST['conC3'];
$desc = $_REQUEST['desc'];
$benf = $_REQUEST['benf'];
$reas = $_REQUEST['reas'];
$ids = implode(",", $_REQUEST["procedure"]);
$result = $user1->editApp($appid, $usertype, $date, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $email, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
        , $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc, $benf, $reas, $ids, "NOT SUBMITTED");


for ($x = 1; $x <= 6; $x++) {
    $fileid = "upload" . $x;
    // echo "$fileid";
    if (isset($_FILES[$fileid])) {

        $name_array = $_FILES[$fileid]['name'];
        $tmp_name_array = $_FILES[$fileid]['tmp_name'];
        $type_array = $_FILES[$fileid]['type'];
        $size_array = $_FILES[$fileid]['size'];
        $error_array = $_FILES[$fileid]['error'];

        if (move_uploaded_file($tmp_name_array, "folder/" . $name_array)) {
            // echo $name_array[$i] . " upload is complete<br>";
            $user1->uploadFiles($name_array, $size_array, $type_array, $fileid, "folder/" . $name_array, $appid);
        } else {
            // echo "move_uploaded_file function failed for " . $name_array . "<br>";
        }
    }
}
if ($result == false) {
    echo "SQL ERROR";
} else {
    echo "Progress Saved";
}
