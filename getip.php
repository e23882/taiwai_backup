<?php

require_once 'ConnectionFactory.php';
function GetIP()
{
	if(!empty($_SERVER["HTTP_CLIENT_IP"]))
	{
	  $cip = $_SERVER["HTTP_CLIENT_IP"];
	}
	elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
	{
	  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	elseif(!empty($_SERVER["REMOTE_ADDR"]))
	{
	  $cip = $_SERVER["REMOTE_ADDR"];
	}
	else
	{
	  $cip = "無法取得IP位址！";
	}
	 
	 
try
{
	
    $conn = ConnectionFactory::getFactory()->getConnection();
	$stmt = $conn->prepare('insert into ip (ip,date) values ("' . $cip . '",CURTIME())');
	$stmt->execute();
	echo("catchip success");
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
    
	 return $cip;
	
}

GetIP();

?>