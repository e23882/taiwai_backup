<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div id="head">
        <a href="index.php" style="padding-left:50px;">回首頁</a>
        <a href="#" style="padding-left:50px;">VPS</a>
        <a href="manager.php" style="padding-left:50px;">管理</a>
    </div>
    <hr>

        <div style="padding-top:30px;">目前所有留言 : </div>
        <div>
			<?php
				require_once 'ConnectionFactory.php';
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from message');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "日期 : ".$value->date."<br>";
						echo "標題 : ".$value->title."<br>";
						echo "姓名 : ".$value->name."<br>";
						echo "留言 : ".$value->message."<br>";
						echo "_ip　: ".$value->ip."<br>";
						echo "電話 : ".$value->mail."<br>";
						echo "<a href='delmessage.php?id=".$value->id ."'>刪除</a><br><hr>";
						
					}
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br>";
					die();
				}
			?>
			<br><br>
        </div>
		
    </div>
</body>
</html>