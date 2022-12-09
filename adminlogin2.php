<?php
 session_start();

    if ((strcmp("iamadmin",$_POST["password"])==0 and strcmp("admin@123",$_POST["username"])==0 )){
		$_SESSION["login"]="false";
        header("location: admin.php");
        //echo $_POST["username"];
		//echo $_POST["password"];
		exit();
	}
	else{
		$error='eeeee';
		$_SESSION["error"] = $error;
		header("location: adminlogin.php");
		
	}
$conn->close();

?>