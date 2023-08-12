<?php
	date_default_timezone_set("asia/kolkata");
	define("SITEPATH","/flosun/");
	define("FILENAME",$_SERVER["DOCUMENT_ROOT"] . SITEPATH . "inc/error.log");
	define("ISDEBUG",true);
	define("SERVER","localhost");
	define("USERNAME","root");
	define("PASSWORD","");
	define("DATABASE","homades");
	define("SUCCESS","1");
	define("FAIL","-1");
	define("LIVE",1);
	define("DELETED",1);
	define("NOTDELETED",0);
	$db = null;
	$sql = null;
	try{	
		$db = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME,PASSWORD);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
		//if there is any sql error in php code then it will generate exception and terminate php script immediately and throws control into catch block.
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		//echo "Database Connection Established";
	}
	catch(PDOException $error) {
		LogError($error);
	}
	function LogError(PDOException $e) //used to write error related information to file as well as it can print error in screen if appllication is in development mode 
	{
		//var_dump($e);
		$ErrorDateTime = date("D d-m-Y h:i:s A");
		$ErrorMessage = "\n $ErrorDateTime , Error Code =" . $e->getCode() . " Error Detail =<b>"  . 
			$e->getMessage() . 
			" </b> in file <b>" . basename($e->getFile()) . " at line no " . $e->getLine() . "</b> in query " . $GLOBALS['sql'];
		file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND | LOCK_EX); //it is used to write data into file.
		if(ISDEBUG) //project is in development phase
			echo $ErrorMessage;
		else 
			echo "oops, something went wrong, we are trying to findout the problem. please come after sometime";
		if(isset($GLOBALS['isExit'])==true && $GLOBALS['isExit']==true)
			exit();
	}
?>