<?php
	
	require_once("lib/nusoap.php");
	$server = new soap_server();
	$server->configureWSDL ("HelloWord");
	$varname = array(

		'strName'=>"xsd:string",
		'strEmail'=>"xsd:string"
		);
	$server->register('HelloWorld',$varname,array('return'=>'xsd:string'));
	$server -> register("add",
					array('a'=>'xsd:int','b'=>'xsd:int'),
					array('return'=>'xsd:int'),
					"http://topzclassic.com",
					false,
					'rpc',
					'encoded',
					'A simple add web method');

	function add($a,$b){
		return $a + $b;
	}

	function HelloWorld($strName,$strEmail){

		return "Hello,World! Name: $strName, Email: $strEmail";
	}

	$POST_DATA = isset ($GLOBALS['HTTP_RAW_POST_DATA'])?
	$GLOBALS['HTTP_RAW_POST_DATA']:'';
	$server->service($POST_DATA);

	exit ();
?>