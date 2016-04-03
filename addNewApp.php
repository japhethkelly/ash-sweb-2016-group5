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
function renderForm($usercode, $usertype, $date, $email, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
, $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc,$benf,$reas, $file1, $file2, $file3, $file4, $file5, $file6,$ids_array) {
    ?>
    <html>
        <head>
            <title>Submit Proposal</title>
            <link rel="stylesheet" href="css/style.css">
            <script>
                    <!--add validation js script here
            </script>
        </head>
        <body>
            <table>
                <tr>
                    <td colspan="2" id="pageheader">
                        Request for Human Subjects Approval
                    </td>
                </tr>
                <tr>
                    <td id="mainnav">
                        <div class="menuitem"><a href="#personalinfo">Delete application</a></div>
                        <div class="menuitem"><a href="#researchinfo">View application</a></div>
                        <div class="menuitem"><a href="#uploaddoc">Upload document</a></div>
                    </td>
                    <td id="content">


                        <div><p>Use this form for general research only. It is not for health or medical research.Use this form for initial approvals and protocol modifications. To renew an approval after one year, please use the Continuation form.Submit this completed form and our proposal with all required documents.</p></div> 
                        <div id="divContent">


                            <form action="" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend><b>General Research Application Form:</b></legend>
                                    <div>User type: <input type="radio" name="usertype" value="Faculty/Staff" <?php
                                        if ($usertype == 'Faculty/Staff') {
                                            echo "checked";
                                        }
                                        ?>> Faculty/Staff
                                        <input type="radio" name="usertype" value="Student" <?php
                                        if ($usertype == 'Student') {
                                            echo "checked";
                                        }
                                        ?>> Student
                                    </div>			
                                    <div>Date submitted: <input type="date" name="date" value="<?php echo $date ?>"/></div>
                                    <div>Title of project: <input type="text" name="projtitle" value="<?php echo $projtitle ?>"></div>
                                    <div>Principal investigator: <input type="text" name="princinvest" value="<?php echo $princinvest ?>"></div>
                                    <div>Co-Principal investigator: <input type="text" name="coprincinvest1" value="<?php echo $coprincinvest1 ?>">
                                        <div>Principal investigator Department: <input type="text" name="princinvestdept" value="<?php echo $princinvestdept ?>"></div>
                                        <div>Principal investigator Phone: <input type="tel" name="princinvestphone" value="<?php echo $princinvestphone ?>"></div>
                                        <div>Email Address: <input type="email" name="mailaddress" value="<?php echo $email ?>"/></div>
                                        <br/>
                                        <div>If an external grant is being sought, or already approved for this project, state the funding source and submission deadline or date or project initiation.</div>
                                        <div>Grant source: <input type="text" name="grant" value="<?php echo $grant ?>"></div>
                                        <div>Grant Deadline: <input type="date" name="deadline" value="<?php echo $deadline ?>"/></div>

                                </fieldset>



                                <fieldset>
                                    <legend><b>Section I: General instructions:</b></legend>
                                    <div>This application form must be submitted with the research proposal, consent forms to be used with subjects in the research, questionnaires and vernacular translations if appropriate, and any additional documents that will assist reviewers to fully understand the purposes, methods, and field procedures that will beused. Please complete every section of this application form. If any section is not relevant to your research indicate with N/A.</div>
                                    <div>If you are requesting an exemption from Human Rights Committee (HSRC) review, explain the basis for the requested exemption.</div>
                                    <div><textarea name="exemption" cols="50" rows="2" value="<?php echo $exemption ?>"><?php echo htmlspecialchars($exemption); ?></textarea></div>   
                                </fieldset>




                                <fieldset>
                                    <legend><b>Section II: Numbers, Types and Recruitment of Subjects:</b></legend>
                                    <div>A. Identify the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.):</div>
                                    <div><input type="text" name="numA" value="<?php echo $numA ?>"/></div>  
                                    <div>B. Special Classes. If applicable, explain the rationale for the use of special classes or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particularly vulnerable:</div>
                                    <div><textarea name="numB" cols="50" rows="4" value="<?php echo $numB ?>"><?php echo htmlspecialchars($numB); ?></textarea></div>  
                                    <div>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withdraw at any time without negative consequences?:</div>
                                    <div><textarea name="numC" cols="50" rows="4" value="<?php echo $numC ?>"><?php echo htmlspecialchars($numC); ?></textarea></div>  
                                    <div>D. To what extent and how are the subjects to be informed of research procedures before their participation?:</div>
                                    <div><textarea name="numD" cols="50" rows="2" value="<?php echo $numD ?>"><?php echo htmlspecialchars(numD); ?></textarea></div>   
                                    <div>E. Upload a copy of the written "Informed Consent” form or a written statement of the oral consent. If this is produced in vernacular languages please provide a copy in each language being used in field work. The consent form should include the purpose of the research, that the engagement is voluntary, duration of engagement with the subject, risk and benefit, contact information:</div>
                                    <div><b>Upload document: </b><input type="file" name="upload1" ><b>Uploaded Document:<?php echo $file1 ?></b></div>
                                    <div>F. How will you classify your research method ? (experiment, observation, modeling, etc.) Specify all methods you anticipate to use:</div>
                                    <div><textarea name="numF" cols="50" rows="2" value="<?php echo $numF ?>"><?php echo htmlspecialchars($numF); ?></textarea></div>  
                                    <div>G. Specify the data sources you will use for your research (e.g. questionnaire, audio recording of interview, human resource files, experiment data, etc.):</div>
                                    <div><input type="text" name="numG" value="<?php echo $numG ?>"/></div> 
                                </fieldset>




                                <fieldset>
                                    <legend><b>Section III: Risks involved in research:</b></legend>
                                    <div>Identify potential risks for subjects to be involved in this project/research. What procedures will be in place to minimize any risks to subjects?</div>
                                    <br/>
                                    <div>Does the research involve any of the following procedures? :</div><div><input type="checkbox" value="1" name="procedure[]" <?php echo (in_array("1", $ids_array) ? 'checked' : '');?>>Deception of the participant? </div>
                                    <div> <input type="checkbox" value="2" name="procedure[]" <?php echo (in_array("2", $ids_array) ? 'checked' : '');?>> Punishment of the participant?</div>
                                   <div><input type="checkbox" value="3" name="procedure[]" <?php echo (in_array("3", $ids_array) ? 'checked' : '');?>> Materials commonly regarded as socially unacceptable such as pornography, inflammatory text, ethnic portrayals?</div>	
                                    <div> <input type="checkbox" value="4" name="procedure[]" <?php echo (in_array("4", $ids_array) ? 'checked' : '');?>> Any other procedure that might be considered to be an invasion of privacy?</div>
                                    <div> <input type="checkbox" value="5" name="procedure[]" <?php echo (in_array("5", $ids_array) ? 'checked' : '');?>> Disclosure of the name of individual participants?</div>
                                    <div> <input type="checkbox" value="6" name="procedure[]" <?php echo (in_array("6", $ids_array) ? 'checked' : '');?>> Any other physically invasive procedure?</div>
                                    <br/>
                                    <div>If the answer to any of the above is "Yes", please explain this procedure in detail and describe procedures for protecting against or minimizing any potential risk.</div>
                                    <div><textarea name="risks" cols="50" rows="4" value="<?php echo $risks ?>"><?php echo htmlspecialchars($risks); ?></textarea></div>  
                                </fieldset>




                                <fieldset>
                                    <legend><b>Section IV: Confidentiality:</b></legend>
                                    <div>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified:</div>
                                    <div>If you are requesting an exemption from Human Rights Committee (HSRC) review, explain the basis for the requested exemption.</div>
                                    <div><textarea name="conA" cols="50" rows="4" value="<?php echo $conA ?>"><?php echo htmlspecialchars($conA); ?></textarea></div>    
                                    <div>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include the use of photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information)?:</div>
                                    <div><textarea name="conB" cols="50" rows="4" value="<?php echo $conB ?>"><?php echo htmlspecialchars($conB); ?></textarea></div>  
                                    <div>How will the results of the research be disseminated?:</div>
                                    <div><textarea name="conC1" cols="50" rows="4" value="<?php echo $conC1 ?>"><?php echo htmlspecialchars($conC1); ?></textarea></div>  
                                    <div>How will the subjects be informed of the results?:</div>
                                    <div><textarea name="conC2" cols="50" rows="4" value="<?php echo $conC2 ?>"><?php echo htmlspecialchars($conC2); ?></textarea></div>    
                                    <div>How will the confidentiality of subjects or organizations be protected in the dessimination?:</div>
                                    <div><textarea name="conC3" cols="50" rows="4" value="<?php echo $conC3 ?>"><?php echo htmlspecialchars($conC3); ?></textarea></div>   

                                </fieldset>




                                <fieldset>
                                    <legend><b>Section V: Benefits:</b></legend>
                                    <div>Describe any anticipated benefits to subjects from participation in this research.:</div>   
                                    <div>A. Will participants/subjects/respondents be compensated or rewarded in any way?</div>
                                    <div><textarea name="desc" cols="50" rows="2" value="<?php echo $desc ?>"><?php echo htmlspecialchars($conC3); ?></textarea></div>                
                                    <div>B. What intrinsic benefits will participants/subjects/respondents receive?:</div>
                                    <div><input type="text" name="benf" value="<?php echo $benf ?>"/></div>  
                                </fieldset>




                                <fieldset>
                                    <legend><b>Section VI: Checklist:</b></legend>
                                    <div>A. Attach a full copy of your research proposal (grant, thesis, dissertation proposal, etc.):</div>
                                    <br/>
                                    <div><b>Upload document: </b><input type="file" name="upload2"><b>Uploaded Document:<?php echo $file2 ?></b></div>
                                    <div>If full proposal is not available, explain why this document is not available.</div>
                                    <div><textarea name="reas" cols="50" rows="4" value="<?php echo $reas ?>"><?php echo htmlspecialchars($numA); ?></textarea></div>
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
                                    <div><b>Upload document: </b><input type="file" name="upload3" ><b>Uploaded Document:<?php echo $file3 ?></b></div> 
                                    <div>C. Consent Agreement(s) including description of how informed consent will be obtained.[NOTE: Please add the following statement to the final copy of your Informed Consent Agreement: “This research protocol has been reviewed and approved by the Ashesi University Human Subjects Review Committee. If you have questions about the approval process, please contact Chair, Ashesi University HSCR, (chair’s Ashesi e-mail address).]</div>
                                    <div><b>Upload document: </b><input type="file" name="upload4" ><b>Uploaded Document:<?php echo $file4 ?></b></div>
                                    <div>D. Copies of all instruments, questionnaires, or tests to be used (if instruments are not fully developed yet, attach drafts, and so indicate).</div>
                                    <div><b>Upload document: </b><input type="file" name="upload5" ><b>Uploaded Document:<?php echo $file5 ?></b></div>
                                    <div>E. Flyers to be posted on or off campus for participant enlistment. [NOTE: These must be stamped with Committee Approval prior to posting]</div>
                                    <div><b>Upload document: </b><input type="file" name="upload6" ><b>Uploaded Document:<?php echo $file6 ?></b></div>
                                </fieldset>
                                <input type="submit" value="Save progress" name='save'>

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
        $usercode = $_SESSION['userid'];
        $appID = $_SESSION['appid'];
// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_REQUEST['save'])) {
    echo 'Save Button Working';
    // confirm that the 'id' value is a valid integer before getting the form data
    // get form data, making sure it is valid
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
    $ids = implode(",",$_REQUEST["procedure"]);
    $result = $user1->addApp($usercode, $usertype, $date, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $email, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
    , $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc,$benf,$reas,$ids,$appID,"NOT SUBMITTED");
    
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
                $user1->uploadFiles($name_array, $size_array, $type_array, $fileid, "folder/" . $name_array, $appID);
            } else {
               // echo "move_uploaded_file function failed for " . $name_array . "<br>";
            }
        }
    }
    if ($result == false) {
        echo "SQL ERROR";
    } else {
        // once saved, redirect back to the view page
        header("Location: applicantHomepage.php");
    }
} else {

// if the form hasn't been submitted, get the data from the db and display the form
    // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
    if (isset($_REQUEST['appid'])) {
        $appId=$_REQUEST['appid'];
        echo "$appId";
        $_SESSION['appid'] = $appId;
        // query db
        //$id = $_REQUEST['usercode'];
        $result = $user1->getAppDetails($appId);
        $row = $user1->fetch();
        // check that the 'id' matches up with a row in the databse
        // show form
        renderForm($usercode, $date, $email, $projtitle, $princinvest, $coprincinvest1, $princinvestdept, $princinvestphone, $deadline, $grant, $exemption, $numA, $numB, $numC, $numD, $numF, $numG
, $risks, $conA, $conB, $conC1, $conC2, $conC3, $desc,$benf,$reas, $file1, $file2, $file3, $file4, $file5, $file6,$ids_array);
    } else {
        // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
        echo 'Error URL isnt valid!';
    }
}
?>
