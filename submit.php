<?php
/**
*/
include_once("adb.php");
/**
*Submit  class
*/
class submit extends adb{
	function submit(){
	}
    
	/**
	*Adds a new submission
	*@param int status user status
	*@param date datesubmitted date of submission
	*@param string TitleofProject
	*@param string PrincipalInvestigator
	*@param string CoPrincipalInvestigator
	*@param string PIDepartment
	*@param int PIPhoneNo
    *@param string Email
	*@param int GrantSource
    *@param date GrantDeadline
	*@param string Exemption
    *@param int NumCharOfSubjects
	*@param string SpecialClasses
	*@param string HowRecruited
	*@param string HowResProc
	*@param string ReseachMethodClass
	*@param string DataSources
	*@param int Procedure
    *@param string Risks
	*@param int ExtentOfConf
    *@param int PorcForHandlingData
    *@param int HowDisseminated
	*@param string HowInformed
	*@param string HowConfProtected
	*@param string WillSubjectReward
	*@param string WhatIntrinsicBenefits
	*@param string WhyUnavailable
	*@return boolean returns true if successful or false 
	*/
	function submitData($status,$date,$projtitle,$princinvest,$coprincinvest,$princinvestdept,$princinvestphone,$mailaddress, $grant, 
     $grantdate,$exemption,$numA,$numB,$numC,$numD,$numF,$numG,$pro,$risks,$conA,$conB,$conC1,$conC2,$conC3,$compensation,$benB,$unavailable, $uid){
    
		  $strQuery="insert into `irb-application` SET Status='$status',  DateSubmitted='$date', TitleOfProject=' $projtitle', PrincipalInvestigator=' $princinvest', CoPrincipalInvestigator=' $coprincinvest', PIDepartment='$princinvestdept', PIPhoneNo='$princinvestphone', Email='$mailaddress', GrantSource='$grant', GrantDeadline='$grantdate', Exemption='$exemption', NumCharOfSubjects='$numA', SpecialClasses='$numB', HowRecruited='$numC', HowResProc='$numD', ReseachMethodClass='$numF', DataSources='$numG', RiskProcedure='$pro', Risks='$risks', ExtentOfConf='$conA', PorcForHandlingData='$conB', HowDisseminated='$conC1', HowInformed='$conC2', HowConfProtected='$conC3', WillSubjectReward='$compensation', WhatIntrinsicBenefits='$benB', WhyUnavailable='$unavailable',  UserID='$uid''"; 
        
        echo $strQuery;
  
        $result = $this->query($strQuery);			
	}
    
    
    /**
	*Adds a new user
	*@param string filedir file directory name
	*@param string filename file name
	*@param int size file size
	*@param int appid application id
	*@param string type file type
    *@return boolean returns true if successful or false 
	*/
    function submitDocs($filedir,$filename,$filesize,$filetype, $appid){
         $strQuery="insert into uploadedfiles SET filedir='$filedir', filename='$filename', size='$filesize', type='$filetype', appid='$appid'";
        
        
      
        
         echo $strQuery;
        $result1=$this->query($strQuery);
  
    }
    
}

?>