<title>新增產品</title>
<?php
require_once 'ConnectionFactory.php';
	if($_FILES['file']['error']>0)
	{
		exit("檔案上傳失敗！");//如果出現錯誤則停止程式
	}
	else
	{
		move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$_FILES['file']['name']);//複製檔案
	}
	
	$tmp=$_FILES['file']['name'];
	try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('INSERT INTO product(parent, title, intro,image) VALUES ("'.$_POST['parent'].'","' . $_POST['title'] . '","'.$_POST['intro'].'","' . $tmp . '") ');
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS);
		$conn = null;
		
		
		// echo '<a href="file/'.$_FILES['file']['name'].'">file/'.$_FILES['file']['name'].'</a>';//顯示檔案路徑
	}
	catch (PDOException $e) 
	{
		$url = "http://Taiwai.tw/manager.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>

