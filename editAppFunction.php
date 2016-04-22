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
 * This class houses all the related functions for editing an application
 * @author Japheth Kelly
 */
class editAppFunction extends adb {

    //put your code here
    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * 
     */
    function editAppFunction() {
        
    }

    /**
     * Description of editAppFunction
     * This class houses all the related functions for editing an application
     * @author Japheth Kelly
     * @param string projtitle project name
     * @param string princinvest applicant name
     * @param string coprincinvest colleague(s) name
     * @param string princinvestdept applicant's department
     * @param int princinvestphone applicant's phone
     * @param string email applicant's email
     * @param string grant  information on external grant if sought
     * @param string exemption reasons project should be excluded from HSRC
     * @param string numA the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.)
     * @param string numB special classes for participants
     * @param string numC how informed the participants are
     * @param string numE string value for  informed consent from participants file directory on file server
     * @param string numD classification  and specification for research methods
     * @param string numG description of data sources used in research
     * @param array risks risks invovled with research
     * @param string RiskYes if any risks are selected applicant describes how to mitigate them
     * @param string conA answer provisions made for confidentiality
     * @param string conB answers data storing and privacy measures for research
     * @param string conC how research is disseminated
     * @param string conC2 how subjects are informed of results
     * @param string conC3 how subjects will be protected
     * @param string BenefitsA description of how subjects will be rewarded
     * @param string BenefitsB description of what benefits 
     * @param string researchProposal the string value of the directory where research proposal or research narrative is stored
     * @param string instruments the string value of the director where research instruments are uploaded
     * @param string flyers the string value for the directory where flyers are uploaded
     * @param string exclusion explaination for why an element should be excluded form the HSRC
     * @param string extension why an extension should be granted to the project
     * @return boolean returns true if successful or false 
     * 
     */
    function editApp($appid, $usertype, $date, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $email, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
    , $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc, $benf, $reas, $ids) {
        $strQuery = "update `irb-application` set Status='$usertype',DateSubmitted='$date', TitleOfProject='$projtitle',
						PrincipalInvestigator='$princinvest',CoPrincipalInvestigator='$coprincinvest1',
                                                PIDepartment='$princinvestdept',PIPhoneNo='$princinvestphone',Email='$email',
                                                GrantSource='$grant',GrantDeadline='$deadline',Exemption='$exemption',
                                                NumCharOfSubjects='$numA',SpecialClasses='$numB',HowRecruited='$numC',
                                                HowResProc='$numD',ReseachMethodClass='$numF',DataSources='$numG',
                                                ReseachIndepthProcedure='$risks',ExtentOfConf='$conA',PorcForHandlingData='$conB',
                                                HowDisseminated='$conC1',HowInformed='$conC2',HowConfProtected='$conC3',
                                                WillSubjectReward='$desc',WhatIntrinsicBenefits='$benf',FailedAppReason='$reas',CheckBoxArray='$ids'" . " where ApplicationID=$appid";
        echo "$strQuery";
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

}
