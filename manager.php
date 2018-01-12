<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div id="head">
        <a href="index.php" style="padding-left:50px;">回首頁</a>
        <a href="https://my.ehost.com/" style="padding-left:50px;">VPS</a>
        <a href="message.php" style="padding-left:50px;">管理留言</a>
    </div>
    <hr>
    <div id="news" style="padding:20px;">
        <div>公司介紹目前設定 : </div><br>
        <div>
            <!--db抓公司 主要段落 第二 第三 圖片名稱-->
			<form  method="post" enctype="multipart/form-data" action ="update_company.php" >
			<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * FROM `company_intro` ORDER BY c_id DESC LIMIT 1; ');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "主要段落 : 
						<br>
						<textarea id='Text1'  type='text' name='main' cols='40' rows='6' style='width:900px;' >".$value->main."</textarea>"."
						<br><br>
						次要段落 :<br>
						<textarea id='Text2' type='text' cols='40' rows='6' name='second' style='width:900px;'>".$value->second."</textarea>
						<br><br>
						最後段落 : <br>
						<textarea id='Text' type='text' cols='40' rows='6' name='third' style='width:900px;'>".$value->third."</textarea><br><br>
						<br>
						<input id='file' name='file' type='file' value='上傳圖片'/>
						<br>
						<input id='Submit1' type='submit' value='更新公司簡介' />
						<!--呼叫UpdateCompany.php-->";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
			?>
			</form>
        </div>
    </div>
	<br>
	<hr>
	
	<br>
    <div id="news" style="padding:20px;">
        
        <div>目前所有連結 : </div>
        <div>
            <!--db抓所有新聞 連結呼叫delnew.php-->
			<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
			<th width="650px;">標題</th><th width="100px;">連結</th><th width="100px;">管理</th>
			<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from news');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "<tr><td height='40px;'>".$value->title."</td><td>".$value->link."</td>
						<td style='text-align:center;'><a href='delnews.php?n_id=".$value->n_id ."'>刪除</a></a><hr></td></tr>";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
			?>
			</table>
			<br><br>
        </div>
        <form  method="post" action ="Addnews.php" >
            <input id="Text" type="text" name="title" placeholder="標題" /><!--title-->
            <input id="Text" type="text" name="link" placeholder="連結" /><!--link-->
            <br>
            <input id="Submit" type="submit" value="新增連結" /><!--呼叫ADDnew.php-->
        </form>
    </div>
	<br>

    <hr>
    <div id="link" style="padding:20px;">
        <div>目前所有分類 : </div>
        <div>
            <!--db抓所有分類 連結呼叫dellink.php-->
			<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
			<th width="100px;">分類代號</th><th width="250px;">標題</th><th width="100px;">連結</th><th width="100px;">管理</th>
			<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from link order by parent');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "<tr><td>".$value->parent."</td><td>".$value->title."</td><td>".$value->link."</td>
						<td style='text-align:center;'><a href='dellink.php?l_id=".$value->l_id ."'>刪除</a></a><hr></td><tr>";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
			?>
			</table>
        </div>
		<br>
		<form  method="post" action ="Addlink.php" >
			<input id="Text1" type="text" name="parent" placeholder="分類編號(不可重複)" />
            <input id="Text" type="text" name="title" placeholder="標題" /><!--title-->
            <input id="Text" type="text" name="link" placeholder="連結" /><!--link-->
            <br>
            <input id="Submit" type="submit" value="新增產品分類" /><!--呼叫ADDlink.php-->
        </form>
    </div>
	<hr>
	<!--設定跑馬燈-->
	<br>
	<div style="padding:20px;">
		<div>目前跑馬燈內容 : </div>
		<br>
		
		<form  method="post" action ="addMarquee.php" >
		<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * FROM marquee ORDER BY m_id DESC LIMIT 1; ');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "
						<textarea id='Text1'  type='text' name='content' cols='20' rows='1' style='width:600px;' >"
						.$value->content.
						"</textarea>"
						."<br><input id='Submit1' type='submit' value='更新跑馬燈' />";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
			?>
        </form>
		
	</div>
	<br>
	<br>
    <hr>
    <div id="product" style="padding:20px;">
        <form  method="post" enctype="multipart/form-data" action ="Addproduct.php" >
			<input id="Text1" type="text" name="parent" placeholder="關聯分類代號(1為預設)" /><!--parents-->
            <input id="Text1" type="text" name="title"placeholder="標題" /><!--title-->
            <input id="Text1" type="text" name="intro" placeholder="介紹" /><!--intro-->
            <br>
            <input id="file" type="file" name="file" value="上傳圖片" /><!--image chooser-->
            <br>
            <input id="Submit1" type="submit" value="新增商品" /><!--呼叫ADDproduct.php-->
        </form>
        <div style="padding-top:30px;">目前所有產品 : </div>
        <div>
            <!--db抓所有分類 連結呼叫delproduct.php-->
			<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
			<th width="10px;">父節點</th><th width="250px;">圖片</th><th width="200px;">標題</th><th width="100px;">介紹</th><th width="100px;">管理</th>
			<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from product');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "<tr><td width='50px;' style='text-align:center;'>".$value->parent."</td><td style='text-align:center;'><img src='images/".$value->image."' style='width:120px;'/></td><td>".$value->title."</td><td width='500px;' style='padding-left:100px;'>".$value->intro."</td>
						<td style='text-align:center;'><a href='delproduct.php?p_id=".$value->p_id ."'>刪除</a></a><hr></td></tr>";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br>";
					die();
				}
			?>
			</table>
			<br><br>
        </div>
		
    </div>
</body>
</html>