<title>送出留言</title>
<?php
require_once 'ConnectionFactory.php';
$dt=date("Y-m-d H:i:s");

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
		$stmt = $conn->prepare('select * from product');
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS);
							foreach ($result as $value) 
							{
								echo "<li style='padding-top:10px; text'><input type='button' value='".$value->title."' name='".$value->parent."' style='width:200px;border:0px blue none; text-align:left; background-color:white;'></li>";
							}
							
							$conn = null;
		
	}
    

	catch (PDOException $e) 
	{
		echo "<div style='text-align:center; margin-top:15%;'>訊息已送出</div>";
		echo "<div style='text-align:center; margin-top:20%;'><a href='index.php' Style='text-decoration:none; '>回首頁</a></div>";
		
	}
?>

