<?php
include_once("../submit.php");

class testAdb extends PHPUnit_Framework_TestCase
{
    public function testSubmit()
    {

        $obj=new submit();
		
        $this->assertEquals(true,  
		$obj->submitData(
                 "female",	//status
			"2015-04-04",		//date
			"See YA",			//project title
            "My name",		//researcher
			"Friend",			//co researcher
            "MIS",		//department
			027887432,			//number
            "a@gmail.com",		//email
			"grant",			//Tullow
			"2015-04-07",		//file type
            "no" ,      //exemption
            "tree",			//numa
            "go",		//numb
			"uyount",			//numc
			"wow",		//numd
            "o",//numf
            "tree",			//numg
            "go",		//pro
			"uyount",			//risks
			"wow",		//cona
             "tree",			//conb
            "go",		//conc1
			"uyount",			//conc2
			"wow",		//conc3
            "no",//compensation
            "uyount",			//benb
			"wow",		//unavailable
             "tree"			//uid
			));

     
		$this->assertEquals(true,$obj->query("select * from `irb-application` where email='a@gmail.com'"));
		//count the number of fields
		$this->assertCount(30,$obj->fetch());

    }
}


?>