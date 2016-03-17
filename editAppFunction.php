<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of editAppFunction
 * This class houses all the related functions for editing an application
 * @author Christabelle Baako
 */
class editAppFunction extends adb {

    //put your code here
    function editAppFunction() {
        
    }

    function editApp($usercode, $usertype, $date, $projtitle, $princinvest, $coprincinvest1,
            $princinvestdept,$princinvestphone,$deadline,$grant,$exemption,$numA,$numB,$numC,$numD,$numE,$numF,$numG
            ,$risks,$conA,$conB,$conC,$conC1,$conC2,$conC3) {
        $strQuery = "update irb-application set Status='$usertype',DateSubmitted='$date', TitleOfProject='$projtitle',
						PrincipalInvestigator='$princinvest',CoPrincipalInvestigator='$coprincinvest1',
                                                PIDepartment='$princinvestdept',PIPhoneNo='$princinvestphone',Email='$deadline',
                                                GrantSource='$grant',GrantDeadline='$exemption',
                                                NumCharOfSubjects='$numA',
                                                SpecialClasses='$numB',
                                                HowRecruited='$numC',
                                                HowResProc='$numD',
                                                ReseachMethodClass='$numE',
                                                DataSources='$numF',
                                                ReseachIndepthProcedure='$numG',
                                                ExtentOfConf='$risks',
                                                PorcForHandlingData='$conA',
                                                HowDisseminated='$conB',
                                                HowInformed='$conC',
                                                HowConfProtected='$conC1',
                                                WillSubjectReward='$conC2',
                                                WhatIntrinsicBenefits='$conC3'," . "where UserID=$usercode";
        echo "$strQuery";
        return $this->query($strQuery);
    }

}
