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

function renderForm($usercode, $usertype, $date, $email, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
, $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc, $benf, $reas, $file1, $file2, $file3, $file4, $file5, $file6, $ids_array) {
    ?>
    <html>
        <head>
            <title>Submit Proposal</title>
            <link rel="stylesheet" href="css/formstyle.css">
            <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
            <script src="formvalidation.js"></script> 

        </head>
        <body>
            <div id="header">
                <div id="logo">
                    <img src=css/Capture.JPG style="width:85%;height:100%;">
                </div>
                <div id="menu" id="top">
                    <ul>
                        <li id="active"><a href="applicantHomepage.php">Dashboard</a></li>
                        <li><a href="logOut.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div id="sidebar" >
                <ul>
                    <li><a href="#top">Top</a></li>
                    <li><a href="#gen">General</a></li>
                    <li><a href="#sec1">Section I</a></li>
                    <li><a href="#sec2">Section II</a></li>
                    <li><a href="#sec3">Section III</a></li>
                    <li><a href="#sec4">Section IV</a></li>
                    <li><a href="#sec5">Section V</a></li>
                    <li><a href="#sec6">Section VI</a></li>
                    <li><a href="#sos">Bottom</a></li>
                </ul>      
            </div>

            <div id="content">


                <div><p>Use this form for general research only. It is not for health or medical research.Use this form for initial approvals and protocol modifications. To renew an approval after one year, please use the Continuation form.Submit this completed form and our proposal with all required documents.</p></div> 




                <form name="irbForm" method="POST" onsubmit="return formValidation()" enctype="multipart/form-data" >
                    <fieldset class="row1">
                        <legend class="legend" id="gen"><b>General Research Application Form:</b></legend>
                        <div>User type: <input type="radio" name="usertype" value="Faculty/Staff" <?php
    if ($usertype == 'Faculty/Staff') {
        echo "checked";
    }
    ?> disabled> Faculty/Staff
                            <input type="radio" name="usertype" value="Student" <?php
                        if ($usertype == 'Student') {
                            echo "checked";
                        }
    ?> disabled> Student
                        </div>			
                        <div>Date submitted: <input type="date" name="date" value="<?php
                        date_default_timezone_set('Africa/Ghana');
                        $date = date('Y/m/d h:i:s a', time());
                        echo "$date";
    ?>" disabled ></div>
                        <div>Title of project: <input type="text" name="projtitle" value="<?php echo $projtitle ?>" disabled></div>
                        <div>Principal investigator: <input type="text" name="princinvest" value="<?php echo $princinvest ?>" disabled></div>
                        <div>Co-Principal investigator: <input type="text" name="coprincinvest1" value="<?php echo $coprincinvest1 ?>" disabled>
                            <div>Principal investigator Department: <input type="text" name="princinvestdept" value="<?php echo $princinvestdept ?>" disabled></div>
                            <div>Principal investigator Phone: <input type="tel" name="princinvestphone" value="<?php echo $princinvestphone ?>" disabled></div>
                            <div>Email Address: <input type="email" name="mailaddress" value="<?php echo $email ?>" disabled></div>
                            <br/>
                            <div>If an external grant is being sought, or already approved for this project, state the funding source and submission deadline or date or project initiation.</div>
                            <div>Grant source: <input type="text" name="grant" value="<?php echo $grant ?>" disabled></div>
                            <div>Grant Deadline: <input type="date" id="deadl"  name="deadline" value="<?php echo $deadline ?>" disabled></div>

                    </fieldset>



                    <fieldset class="row1">
                        <legend class="legend" id="sec1"><b>Section I: General instructions:</b></legend>
                        <div>This application form must be submitted with the research proposal, consent forms to be used with subjects in the research, questionnaires and vernacular translations if appropriate, and any additional documents that will assist reviewers to fully understand the purposes, methods, and field procedures that will beused. Please complete every section of this application form. If any section is not relevant to your research indicate with N/A.</div>
                        <div>If you are requesting an exemption from Human Rights Committee (HSRC) review, explain the basis for the requested exemption.</div>
                        <div><textarea name="exemption" cols="50" rows="2" value="<?php echo $exemption ?>" disabled><?php echo htmlspecialchars($exemption); ?></textarea></div>   
                    </fieldset>




                    <fieldset class="row1">
                        <legend class="legend" id="sec2"><b>Section II: Numbers, Types and Recruitment of Subjects:</b></legend>
                        <div>A. Identify the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.):</div>
                        <div><input type="text" name="numA" value="<?php echo $numA ?>" disabled></div>  
                        <div>B. Special Classes. If applicable, explain the rationale for the use of special classes or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particularly vulnerable:</div>
                        <div><textarea name="numB" cols="50" rows="4" value="<?php echo $numB ?>" disabled><?php echo htmlspecialchars($numB); ?></textarea></div>  
                        <div>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withdraw at any time without negative consequences?:</div>
                        <div><textarea name="numC" cols="50" rows="4" value="<?php echo $numC ?>" disabled><?php echo htmlspecialchars($numC); ?></textarea></div>  
                        <div>D. To what extent and how are the subjects to be informed of research procedures before their participation?:</div>
                        <div><textarea name="numD" cols="50" rows="2" value="<?php echo $numD ?>" disabled><?php echo htmlspecialchars(numD); ?></textarea></div>   
                        <div>E. Upload a copy of the written "Informed Consent” form or a written statement of the oral consent. If this is produced in vernacular languages please provide a copy in each language being used in field work. The consent form should include the purpose of the research, that the engagement is voluntary, duration of engagement with the subject, risk and benefit, contact information:</div>
                        <div><b>Upload document: </b><input type="file" name="upload1" <?php
                                                if ($file1 == '') {
                                                    echo "required";
                                                }
    ?>><b>Uploaded Document:<?php echo $file1 ?></b><a href="<?php echo "folder/" . $file1 ?>" download>Download Test</a></div>
                        <div>F. How will you classify your research method ? (experiment, observation, modeling, etc.) Specify all methods you anticipate to use:</div>
                        <div><textarea name="numF" cols="50" rows="2" value="<?php echo $numF ?>" disabled><?php echo htmlspecialchars($numF); ?></textarea></div>  
                        <div>G. Specify the data sources you will use for your research (e.g. questionnaire, audio recording of interview, human resource files, experiment data, etc.):</div>
                        <div><input type="text" name="numG" value="<?php echo $numG ?>" disabled></div> 
                    </fieldset>




                    <fieldset class="row1">
                        <legend class="legend" id="sec3"><b>Section III: Risks involved in research:</b></legend>
                        <div>Identify potential risks for subjects to be involved in this project/research. What procedures will be in place to minimize any risks to subjects?</div>
                        <br/>
                        <div>Does the research involve any of the following procedures? :</div><div><input type="checkbox" value="1" name="procedure[]" disabled <?php echo (in_array("1", $ids_array) ? 'checked' : ''); ?>>Deception of the participant? </div>
                        <div> <input type="checkbox" value="2" name="procedure[]" <?php echo (in_array("2", $ids_array) ? 'checked' : ''); ?> disabled> Punishment of the participant?</div>
                        <div><input type="checkbox" value="3" name="procedure[]" <?php echo (in_array("3", $ids_array) ? 'checked' : ''); ?> disabled> Materials commonly regarded as socially unacceptable such as pornography, inflammatory text, ethnic portrayals?</div>	
                        <div> <input type="checkbox" value="4" name="procedure[]" <?php echo (in_array("4", $ids_array) ? 'checked' : ''); ?> disabled> Any other procedure that might be considered to be an invasion of privacy?</div>
                        <div> <input type="checkbox" value="5" name="procedure[]" <?php echo (in_array("5", $ids_array) ? 'checked' : ''); ?> disabled> Disclosure of the name of individual participants?</div>
                        <div> <input type="checkbox" value="6" name="procedure[]" <?php echo (in_array("6", $ids_array) ? 'checked' : ''); ?>disabled> Any other physically invasive procedure?</div>
                        <br/>
                        <div>If the answer to any of the above is "Yes", please explain this procedure in detail and describe procedures for protecting against or minimizing any potential risk.</div>
                        <div><textarea name="risks" cols="50" rows="4" <?php
                        if (in_array("1", $ids_array) || in_array("2", $ids_array) || in_array("3", $ids_array) || in_array("4", $ids_array) || in_array("5", $ids_array) || in_array("6", $ids_array)) {
                            echo "required";
                        }
    ?> disabled><?php echo htmlspecialchars($risks); ?></textarea></div>  
                    </fieldset>




                    <fieldset class="row1">
                        <legend class="legend" id="sec4"><b>Section IV: Confidentiality:</b></legend>
                        <div>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified:</div>
                        <div>If you are requesting an exemption from Human Rights Committee (HSRC) review, explain the basis for the requested exemption.</div>
                        <div><textarea name="conA" cols="50" rows="4" value="<?php echo $conA ?>" disabled><?php echo htmlspecialchars($conA); ?></textarea></div>    
                        <div>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include the use of photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information)?:</div>
                        <div><textarea name="conB" cols="50" rows="4" value="<?php echo $conB ?>" disabled><?php echo htmlspecialchars($conB); ?></textarea></div>  
                        <div>How will the results of the research be disseminated?:</div>
                        <div><textarea name="conC1" cols="50" rows="4" value="<?php echo $conC1 ?>" disabled><?php echo htmlspecialchars($conC1); ?></textarea></div>  
                        <div>How will the subjects be informed of the results?:</div>
                        <div><textarea name="conC2" cols="50" rows="4" value="<?php echo $conC2 ?>" disabled><?php echo htmlspecialchars($conC2); ?></textarea></div>    
                        <div>How will the confidentiality of subjects or organizations be protected in the dessimination?:</div>
                        <div><textarea name="conC3" cols="50" rows="4" value="<?php echo $conC3 ?>" disabled><?php echo htmlspecialchars($conC3); ?></textarea></div>   

                    </fieldset>




                    <fieldset class="row1">
                        <legend class="legend" id="sec5"><b>Section V: Benefits:</b></legend>
                        <div>Describe any anticipated benefits to subjects from participation in this research.:</div>   
                        <div>A. Will participants/subjects/respondents be compensated or rewarded in any way?</div>
                        <div><textarea name="desc" cols="50" rows="2" value="<?php echo $desc ?>" disabled><?php echo htmlspecialchars($conC3); ?></textarea></div>                
                        <div>B. What intrinsic benefits will participants/subjects/respondents receive?:</div>
                        <div><textarea name="benf" cols="50" rows="2" value="<?php echo $benf ?>" disabled><?php echo htmlspecialchars($benf); ?></textarea></div>  
                    </fieldset>




                    <fieldset class="row1">
                        <legend class="legend" id="sec6"><b>Section VI: Checklist:</b></legend>
                        <div>A. Attach a full copy of your research proposal (grant, thesis, dissertation proposal, etc.):</div>
                        <br/>
                        <div><b>Upload document: </b><input type="file" name="upload2" <?php
                        if ($file2 == '') {
                            echo "required";
                        }
    ?>><b>Uploaded Document:<?php echo $file2 ?></b><a href="<?php echo "folder/" . $file2 ?>" download>Download Test</a></div>
                        <div>If full proposal is not available, explain why this document is not available.</div>
                        <div><textarea name="reas" cols="50" rows="4" value="<?php echo $reas ?>" disabled><?php echo htmlspecialchars($numA); ?></textarea></div>
                        <div>B. Regardless of whether or not a full research proposal is available, upload a concise, two-page summary below that includes:
                            <ul>
                                <li>A brief summary of the background literature stimulating this research</li>
                                <li>The rationale for the proposed study, including specific aims and hypotheses</li>
                                <li>A description of the participants and how they will be recruited</li>
                                <li>A detailed description of study methodology</li>
                                <li>Budget and Schedule (time line) details of your research proposal</li>
                            </ul>
                        </div>
                        <div>NOTE: You may “cut-and-paste” as needed from your full proposal, if available, and the committee may refer to the full proposal for clarification.</div>
                        <div><b>Upload document: </b><input type="file" name="upload3" <?php
                        if ($file3 == '') {
                            echo "required";
                        }
    ?>><b>Uploaded Document:<?php echo $file3 ?></b><a href="<?php echo "folder/" . $file3 ?>" download>Download Test</a></div> 
                        <div>C. Consent Agreement(s) including description of how informed consent will be obtained.[NOTE: Please add the following statement to the final copy of your Informed Consent Agreement: “This research protocol has been reviewed and approved by the Ashesi University Human Subjects Review Committee. If you have questions about the approval process, please contact Chair, Ashesi University HSCR, (chair’s Ashesi e-mail address).]</div>
                        <div><b>Upload document: </b><input type="file" name="upload4" <?php
                        if ($file4 == '') {
                            echo "required";
                        }
    ?>><b>Uploaded Document:<?php echo $file4 ?></b><a href="<?php echo "folder/" . $file4 ?>" download>Download Test</a></div>
                        <div>D. Copies of all instruments, questionnaires, or tests to be used (if instruments are not fully developed yet, attach drafts, and so indicate).</div>
                        <div><b>Upload document: </b><input type="file" name="upload5" <?php
                        if ($file5 == '') {
                            echo "required";
                        }
    ?>><b>Uploaded Document:<?php echo $file5 ?></b><a href="<?php echo "folder/" . $file5 ?>" download>Download Test</a></div>
                        <div>E. Flyers to be posted on or off campus for participant enlistment. [NOTE: These must be stamped with Committee Approval prior to posting]</div>
                        <div id="sos"><b>Upload document: </b><input type="file" name="upload6" <?php
                        if ($file6 == '') {
                            echo "required";
                        }
    ?>><b>Uploaded Document:<?php echo $file6 ?></b><a href="<?php echo "folder/" . $file6 ?>" download>Download Test</a></div>
                    </fieldset>

                </form>


                <br/>

            </div>
        </td>
    </tr>
    </table>
    </body>
    </html>	
    <?php
}

// connect to the database
include_once("functions.php");
$user1 = new functions;

// check if the form has been submitted. If it has, process the form and save it to the database
// if the form hasn't been submitted, get the data from the db and display the form
// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
if (isset($_REQUEST['appid'])) {
    $_SESSION['appid'] = $_REQUEST['appid'];
    $uc = $_SESSION['appid'];
    $result = $user1->getAppDetails($uc);
    $row = $user1->fetch();
   
    if ($row) {
        // get data from db
        $usertype = $row['Status'];
        $date = $row['DateSubmitted'];
        $projtitle = $row['TitleOfProject'];
        $princinvest = $row['PrincipalInvestigator'];
        $coprincinvest1 = $row['CoPrincipalInvestigator'];
        $princinvestdept = $row['PIDepartment'];
        $princinvestphone = $row['PIPhoneNo'];
        $email = $row['Email'];
        $exemption = $row['Exemption'];
        $grant = $row['GrantSource'];
        $deadline = $row['GrantDeadline'];
        $numA = $row['NumCharOfSubjects'];
        $numB = $row['SpecialClasses'];
        $numC = $row['HowRecruited'];
        $numD = $row['HowResProc'];
        $numF = $row['ReseachMethodClass'];
        $numG = $row['DataSources'];
        $risks = $row['ReseachIndepthProcedure'];
        $conA = $row['ExtentOfConf'];
        $conB = $row['PorcForHandlingData'];
        $conC1 = $row['HowDisseminated'];
        $conC2 = $row['HowInformed'];
        $conC3 = $row['HowConfProtected'];
        $desc = $row['WillSubjectReward'];
        $benf = $row['WhatIntrinsicBenefits'];
        $reas = $row['FailedAppReason'];
        $ids_array = explode(",", $row['CheckBoxArray']);
    } else {
        // if no match, display result
        echo "No results!";
    }
    $result2 = $user1->getFileDetails($uc);
    while ($row2 = $user1->fetch()) {
        if ($row2['section'] == "upload1") {
            $file1 = $row2['filename'];
        }
        if ($row2['section'] == "upload2") {
            $file2 = $row2['filename'];
        }
        if ($row2['section'] == "upload3") {
            $file3 = $row2['filename'];
        }
        if ($row2['section'] == "upload4") {
            $file4 = $row2['filename'];
        }
        if ($row2['section'] == "upload5") {
            $file5 = $row2['filename'];
        }
        if ($row2['section'] == "upload6") {
            $file6 = $row2['filename'];
        }
    }
    // show form
    renderForm($usercode, $usertype, $date, $email, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
            , $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc, $benf, $reas, $file1, $file2, $file3, $file4, $file5, $file6, $ids_array);
} else {
    // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
    echo 'Error URL isnt valid!';
}
?>
