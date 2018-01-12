<title>新增連結(分類)</title>
<?php
require_once 'ConnectionFactory.php';
	try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('INSERT INTO link(link, parent, title) VALUES ("'.$_POST['link'].'","' . $_POST['parent'] . '","'.$_POST['title'].'") ');
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

