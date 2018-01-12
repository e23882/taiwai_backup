<title>新增連結(分類)</title>
<?php
require_once 'ConnectionFactory.php';
$dt=date("Y-m-d");
	try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('INSERT INTO news(title, link, date) VALUES ("'.$_POST['title'].'","' . $_POST['link'] . '","'.$dt.'") ');
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

