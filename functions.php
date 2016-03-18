<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("adb.php");

/**
 * Description of editAppFunction
 * This class houses all the related functions for editing an application
 * @author Japheth Kelly
 */
class functions extends adb {

    //put your code here
    function functions() {
        
    }

    function editApp($usercode, $usertype, $date, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $email, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numE, $numF, $numG
    , $risks, $conA, $conB, $conC, $conC1, $conC2, $conC3) {
        $strQuery = "update `irb-application` set Status='$usertype',DateSubmitted='$date', TitleOfProject='$projtitle',
						PrincipalInvestigator='$princinvest',CoPrincipalInvestigator='$coprincinvest1',
                                                PIDepartment='$princinvestdept',PIPhoneNo='$princinvestphone',Email='$email',
                                                GrantSource='$grant',GrantDeadline='$deadline',Exemption='$exemption',
                                                NumCharOfSubjects='$numA',SpecialClasses='$numB',HowRecruited='$numC',
                                                HowResProc='$numD',ReseachMethodClass='$numE',DataSources='$numF',
                                                ReseachIndepthProcedure='$numG',ExtentOfConf='$risks',PorcForHandlingData='$conA',
                                                HowDisseminated='$conB',HowInformed='$conC',HowConfProtected='$conC1',
                                                WillSubjectReward='$conC2',WhatIntrinsicBenefits='$conC3'" . "where UserID=70172017";
       // echo "$strQuery";
        return $this->query($strQuery);
    }

    function uploadFiles($filename,$filesize,$filetype,$section,$filedir,$appid) {
            // echo "<br>File $fileName uploaded<br>";
            $strQuery = "INSERT INTO Users SET `uploadedfiles` set filename='$filename',size='$filesize', type='$filetype',section='$section',
						filedir='$filedir', appid=$appid ON DUPLICATE KEY UPDATE filename='$filename',size='$filesize', type='$filetype',section='$section',
						filedir='$filedir', appid=$appid";
            //INSERT INTO Users SET id=1, weight=160, desiredWeight=145 ON DUPLICATE KEY UPDATE weight=160, desiredWeight=145
            echo "$strQuery";
            return $this->query($strQuery);
        
    }

    function getDetails($userID) {
        $strQuery = "select * from `irb-application` where UserID=$userID";
        echo "$strQuery";
        return $this->query($strQuery);
    }

}
?>