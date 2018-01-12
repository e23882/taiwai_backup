<title>刪除產品</title>
<?php
require_once 'ConnectionFactory.php';
	try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('delete from product where p_id='.$_GET[p_id]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS);
		$conn = null;
	}
	catch (PDOException $e) 
	{
		$url = "http://Taiwai.tw/manager.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		
	}
?>

