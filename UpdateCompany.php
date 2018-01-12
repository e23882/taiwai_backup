<title>更新公司簡介</title>
<?php
require_once 'ConnectionFactory.php';
	$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
	copy($_FILES['file']['tmp_name'], "images/" . $_FILES['file']['name']); 
	try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('Update company_intro set main=$_POST['main'],set second=$_POST['second'],
		set third=$_POST['third'] where c_id=1 ');
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS);
		$conn = null;
		echo "123";
	}
	catch (PDOException $e) 
	{
		echo "456";
		$url = "http://Taiwai.tw/manager.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>

