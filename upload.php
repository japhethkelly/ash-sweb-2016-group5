<?php
    include_once("submit.php");
    $obj=new submit();
    

if (!isset ($_REQUEST['usertype'])){
		exit();		//if no data, exit
	}
     $status=$_REQUEST['usertype'];
     $date=$_REQUEST['date'];
     $projtitle=$_REQUEST['projtitle'];
     $princinvest=$_REQUEST['princinvest'];
     $coprincinvest=$_REQUEST['coprincinvest'];
     $princinvestdept=$_REQUEST['princinvestdept'];
     $princinvestphone=$_REQUEST['princinvestphone'];
     $mailaddress=$_REQUEST['mailaddress'];
     $grant=$_REQUEST['grant'];
     $grantdate=$_REQUEST['grantdate'];
     $exemption=$_REQUEST['exemption'];
     $numA=$_REQUEST['numA'];
     $numB=$_REQUEST['numB'];
     $numC=$_REQUEST['numC'];
     $numD=$_REQUEST['numD'];
     $numF=$_REQUEST['numF'];
     $numG=$_REQUEST['numG'];
     $proc=$_REQUEST['procedure'];
     $pro=implode(',',$proc);
     $risks=$_REQUEST['risks'];
     $conA=$_REQUEST['conA'];
     $conB=$_REQUEST['conB'];
     $conC1=$_REQUEST['conC1'];
     $conC2=$_REQUEST['conC2'];
     $conC3=$_REQUEST['conC3'];
     $compensation=$_REQUEST['compensation'];
     $benB=$_REQUEST['benB'];
     $unavailable=$_REQUEST['unavailable'];
     $uid=1;
    


 if (isset ($_FILES['upload'])){
         $name_array=$_FILES['upload']['name'];	
         $tmp_name_array=$_FILES['upload']['tmp_name'];	
         $type_array=$_FILES['upload']['type'];	
         $size_array=$_FILES['upload']['size'];	
         $error_array=$_FILES['upload']['error'];
         $appid=1;
         for($i=0; $i<count($tmp_name_array);$i++){
             if (move_uploaded_file($tmp_name_array[$i], "uploaded_docs/".$name_array[$i])){
                 echo $name_array[$i]." file upload complete<br>";
                 $t=$obj->submitDocs("uploaded_docs/".$name_array[$i],	$name_array[$i],  $size_array[$i],  $type_array=[$i], $appid);
        }else{
            echo "File upload failed for ".$name_array[$i]."<br>";
        }
    }
 }

    
    $r=$obj->submitData( $status,$date,$projtitle,$princinvest,$coprincinvest,$princinvestdept,$princinvestphone,$mailaddress,$grant, $grantdate,$exemption,$numA,$numB,$numC,$numD,$numF,$numG,$pro,$risks,$conA,$conB,$conC1,$conC2,$conC3,$compensation,$benB,$unavailable, $uid);
        
	
    // Check if it was successfull
    if($r==true) {
        echo 'Database updated!';
    }else {
        echo 'Error! Failed to update database';
    }
  
   
?>