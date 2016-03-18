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
	*@param string TitleofProject project name
	*@param string PrincipalInvestigator applicant name
	*@param string CoPrincipalInvestigator colleague(s) name
	*@param string PIDepartment applicant's department
	*@param int PIPhoneNo applicant's phone
    *@param string Email applicant's email
	*@param string GrantSource information on external grant if sought
    *@param date GrantDeadline grant deadline
	*@param string Exemption reasons project should be excluded from HSRC
    *@param string NumCharOfSubjects the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.)
	*@param string SpecialClasses special classes for participants
	*@param string HowRecruited how informed the participants are
	*@param string HowResProc string value for informed consent from participants file directory on file server
	*@param string ReseachMethodClass classification  and specification for research methods
	*@param string DataSources description of data sources used in research
	*@param string RiskProcedure potential risks invovled with research
    *@param string Risks if any risks are selected applicant describes how to mitigate them
	*@param string ExtentOfConf answer provisions made for confidentiality
    *@param string PorcForHandlingData answers data storing and privacy measures for research
    *@param string HowDisseminated how research is disseminated
	*@param string HowInformed how subjects are informed of results
	*@param string HowConfProtected how subjects will be protected
	*@param string WillSubjectReward description of how subjects will be rewarded
	*@param string WhatIntrinsicBenefits description of what benefits
	*@param string WhyUnavailable
	*@return boolean returns true if successful or false 
	*/
    
        
	function submitData($status,$date,$projtitle,$princinvest,$coprincinvest,$princinvestdept,$princinvestphone,$mailaddress, $grant, 
     $grantdate,$exemption,$numA,$numB,$numC,$numD,$numF,$numG,$pro,$risks,$conA,$conB,$conC1,$conC2,$conC3,$compensation,$benB,$unavailable, $uid){
    
		  $strQuery="insert into `irb-application` SET Status='$status',  DateSubmitted='$date', TitleOfProject=' $projtitle', PrincipalInvestigator=' $princinvest', CoPrincipalInvestigator=' $coprincinvest', PIDepartment='$princinvestdept', PIPhoneNo='$princinvestphone', Email='$mailaddress', GrantSource='$grant', GrantDeadline='$grantdate', Exemption='$exemption', NumCharOfSubjects='$numA', SpecialClasses='$numB', HowRecruited='$numC', HowResProc='$numD', ReseachMethodClass='$numF', DataSources='$numG', RiskProcedure='$pro', Risks='$risks', ExtentOfConf='$conA', PorcForHandlingData='$conB', HowDisseminated='$conC1', HowInformed='$conC2', HowConfProtected='$conC3', WillSubjectReward='$compensation', WhatIntrinsicBenefits='$benB', WhyUnavailable='$unavailable',  UserID='$uid'"; 
        
       // echo $strQuery;
  
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
    function submitDocs($filedir,$filename,$filesize,$filetype){
         $strQuery="insert into uploadedfiles SET filedir='$filedir', filename='$filename', size='$filesize[0]', type='$filetype'";
        
        
      
        //print_r($filesize);
         //echo $strQuery;
        $result=$this->query($strQuery);
  
        return $result;
    }
    
}

?>