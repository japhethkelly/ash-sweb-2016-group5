<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("adb.php");

//include("session.php");
/**
 * Description of editAppFunction
 * This class houses all the related functions for getting application details reviewing and passing judgement on applications
 * @author Japheth Kelly
 */
class functions extends adb {

    //put your code here
    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * 
     */
    function functions() {
        
    }

    /**
     * 
     * @param type $appid
     * @param type $usertype
     * @param type $date
     * @param type $projtitle
     * @param type $princinvest
     * @param type $coprincinvest1
     * @param type $princinvestdept
     * @param type $princinvestphone
     * @param type $email
     * @param type $deadline
     * @param type $grant
     * @param type $exemption
     * @param type $numA
     * @param type $numB
     * @param type $numC
     * @param type $numD
     * @param type $numF
     * @param type $numG
     * @param type $risks
     * @param type $conA
     * @param type $conB
     * @param type $conC1
     * @param type $conC2
     * @param type $conC3
     * @param type $desc
     * @param type $benf
     * @param type $reas
     * @param type $ids
     * @param type $submit
     * @return type
     */
    function submitApp($appid, $usertype, $date, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $email, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
    , $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc, $benf, $reas, $ids, $submit) {
        $strQuery = "update `irb-application` set Status='$usertype',DateSubmitted='$date', TitleOfProject='$projtitle',
						PrincipalInvestigator='$princinvest',CoPrincipalInvestigator='$coprincinvest1',
                                                PIDepartment='$princinvestdept',PIPhoneNo='$princinvestphone',Email='$email',
                                                GrantSource='$grant',GrantDeadline='$deadline',Exemption='$exemption',
                                                NumCharOfSubjects='$numA',SpecialClasses='$numB',HowRecruited='$numC',
                                                HowResProc='$numD',ReseachMethodClass='$numF',DataSources='$numG',
                                                ReseachIndepthProcedure='$risks',ExtentOfConf='$conA',PorcForHandlingData='$conB',
                                                HowDisseminated='$conC1',HowInformed='$conC2',HowConfProtected='$conC3',
                                                WillSubjectReward='$desc',WhatIntrinsicBenefits='$benf',FailedAppReason='$reas',CheckBoxArray='$ids',appSubmit='$submit'" . " where ApplicationID=$appid";
        //echo "$strQuery";
        return $this->query($strQuery);
    }

    /**
     * 
     * @param type $appid
     * @param type $userid
     * @return type
     */
    function addStatus($appid, $userid) {
        $strQuery = "insert into appstatus set AppID='$appid',UserID='$userid', AppStatus='PENDING'";
        //echo "$strQuery";
        return $this->query($strQuery);
    }

    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * @param string filename is the name of the uploaded file
     * @param string filesize the size of the file
     * @param string filetype is the type of file (extension)
     * @param string section is the field of the form where the file was uploaded
     * @param string filedir is the current directory of the file on webserver
     * @param int appid is the application id
     * @return boolean
     */
    function uploadFiles($filename, $filesize, $filetype, $section, $filedir, $appid) {
        // echo "<br>File $fileName uploaded<br>";
        $strQuery = "INSERT INTO uploadedfiles set filename='$filename',size='$filesize', type='$filetype',section='$section',
						filedir='$filedir', appid=$appid ON DUPLICATE KEY UPDATE filename='$filename',size='$filesize', "
                . " type='$filetype',section='$section',
						filedir='$filedir', appid=$appid";

        return $this->query($strQuery);
    }

    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * @param $procode is the Id of the application
     * @return boolean 
     */
    function getAppDetails($procode) {
        $strQuery = "select * from `irb-application` where ApplicationID = $procode";

        return $this->query($strQuery);
    }

    /**
     * 
     * @return type
     */
    function getAllApps() {
        $strQuery = "SELECT *
                    FROM `irb-application`
                    INNER JOIN `appstatus` ON `irb-application`.ApplicationID = `appstatus`.AppID 
                    WHERE `irb-application`.appSubmit='SUBMITTED'";
        // echo $this->query($strQuery);
        return $this->query($strQuery);
    }

    /**
     * 
     * @param type $usercode
     * @return type
     */
    function getDetails($usercode) {
        $strQuery = "select * from `irb-application` where UserID = $usercode and appSubmit='NOT SUBMITTED'";

        return $this->query($strQuery);
    }

    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * @param $appid this function takes in the application id
     * @return boolean thefunction returns a query and 
     */
    function getFileDetails($appid) {
        $strQuery = "select filename,section from `uploadedfiles` where appid=$appid";

        return $this->query($strQuery);
    }

    /**
     * 
     * @param type $userid
     * @return type
     */
    function getAppStatus($userid) {
        // echo "<br>File $fileName uploaded<br>";
        $sql = "SELECT * FROM `appstatus` WHERE userid = '$userid'";
        return $this->query($sql);
    }

    /**
     * Deletes specific proposal
     * @param ID of the specific proposal
     * @returns boolean for success or failure
     * */
    function deleteApp($procode) {
        $strQuery = "Delete from `irb-application` where ApplicationID = $procode";
        //echo "$strQuery";
        return $this->query($strQuery);
    }

    /**
     * 
     * @param type $aid
     * @param type $decision
     * @return type
     */
    function updateAppStatus($aid, $decision, $feed = false) {
        $strQuery = "update appstatus set AppStatus='$decision', FEEDBACK='$feed' where AppID = $aid";
        //echo "$strQuery";
        return $this->query($strQuery);
    }

    function getFeedback($aid) {
        $strQuery = "select * from appstatus where AppID = $aid";
        //echo "$strQuery";
        return $this->query($strQuery);
    }

}

?>