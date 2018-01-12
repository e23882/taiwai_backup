<html>
<head>
	<meta http-equiv="Content-Type" content=""text/html; charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="reset.css" rel="stylesheet" type="text/css" media="all" />
	<style>
	
	@media screen and (min-width: 1251px) and (max-width: 2650px) 
	{
		.RWD_logo
		{
			width:300px;
			top:2%;
		}
		.RWD_menu
		{
			padding-left:6%;
		}
		.menu_icon
		{
			display:none;
		}
		.RWD_footer
		{
			font-size:20px;
		}
	}
	
	@media screen and (min-width: 1150px) and (max-width: 1250px) 
	{
		.RWD_logo
		{
			width:250px;
			top:3%;
		}
		.RWD_menu
		{
			padding-left:5%;
		}
		.menu_icon
		{
			display:none;
		}
		.menu_icon
		{
			display:none;
		}
		.RWD_footer
		{
			font-size:20px;
		}
	}
	@media screen and (min-width: 1000px) and (max-width: 1149px) 
	{
		.RWD_logo
		{
			width:230px;
			top:3%;
		}
		.RWD_menu
		{
			padding-left:4%;
		}
		.menu_icon
		{
			display:none;
		}
		.RWD_footer
		{
			font-size:18px;
		}
	}
	@media screen and (min-width: 800px) and (max-width: 999px) 
	{
		.RWD_logo
		{
			width:230px;
			top:3%;
		}
		.RWD_menu
		{
			display:none;
		}
		.RWD_menu1
		{
			display:none;
		}
		.menu_icon
		{
			right:15%; 
			top:6%;
		}
		.btn
		{
			width:30px;
		}
		.RWD_footer
		{
			font-size:16px;
		}
	}
	@media screen and (min-width: 600px) and (max-width: 799px) 
	{
		.RWD_logo
		{
			width:230px;
			top:3%;
		}
		.RWD_menu
		{
			display:none;
		}
		.RWD_menu1
		{
			display:none;
		}
		.menu_icon
		{
			right:15%; 
			top:6%;
		}
		.btn
		{
			width:30px;
		}
		.RWD_footer
		{
			font-size:14px;
		}
		
	}
	
	@media screen and (min-width: 400px) and (max-width: 599px) 
	{
		.RWD_logo
		{
			width:230px;
			top:3%;
		}
		.RWD_menu
		{
			display:none;
		}
		.RWD_menu1
		{
			display:none;
		}
		.menu_icon
		{
			right:15%; 
			top:6%;
		}
		.btn
		{
			width:30px;
		}
		.RWD_footer
		{
			font-size:10px;
		}
	}
	@media screen and (min-width: 100px) and (max-width: 399px) 
	{
		.RWD_logo
		{
			width:150px;
			top:6%;
		}
		.RWD_menu
		{
			display:none;
		}
		.RWD_menu1
		{
			display:none;
		}
		.menu_icon
		{
			right:15%; 
			top:7%;
		}
		.btn
		{
			width:20px;
		}
		.RWD_footer
		{
			font-size:10px;
		}
	}
	
	a
	{
		text-decoration:none;
		font-family:微軟正黑體;
		padding-left:40px;
		font-size:16px;
		
	}
	   a:link
        {
            color: white;
        }
        /* 已連結過 */
        a:visited
        {
            color:white;
        }
        /* 滑鼠移至連結 */
        a:hover
        {
            color:#b1b2b4;
        }
        /* 選擇的連結 */
        a:active
        {
            color: white;
        }
			.dropbtn {
    background-color: #ffffff;
    color: white;
    padding: 9px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

		
		
		

.dropbtn:hover, .dropbtn:focus 
{
    background-color: #f0f0f0;
}

.dropdown 
{
    position: relative;
    display: inline-block;
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a 
{
    color: black;
    padding: 12px 10px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover 
{
	background-color: #f1f1f1
}

.show 
{
	display:block;
}
	</style>
	<script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  </script>
</head>
<body style="background-color:#b1b2b4;">
	
	<center>
	<img class="RWD_logo" src="images/logo_v2.png" style=" height:auto; text-align:left; margin-right:10%;position:absolute;left:11%;"></img>
	<div id="middle" style="width:80%; background-color:white; padding-bottom:200px; ">
		<div id="header">
			<div style="background-color:#601986;">
				
				<div id="topmenu" style="height:120px; line-height:120px; padding-top:1%;">
					<a class="RWD_menu1" href="index.php"style="padding-left:25%; font-size:20px; ">首頁</a>
					<a class="RWD_menu" href="Intro.php"style="font-size:20px; ">公司簡介</a>
					<a class="RWD_menu" href="news.php"style="font-size:20px; ">最新消息</a>
					<a class="RWD_menu" href="product.php?name=1"style="font-size:20px; ">產品介紹</a>
					<a class="RWD_menu" href="contact.html"style="font-size:20px; ">與我聯絡</a>
				</div>
				<div id="menu_icon" class="menu_icon" style="position:absolute;">
					<div class="dropdown" >
						<button onclick="myFunction()" class="dropbtn"><img class="btn" src="images/hamburger.png"></img></button>
							<div id="myDropdown" class="dropdown-content" style=" right:0;">
								<a id="top" href="index.php" >首頁</a>
								<a id="top" href="Intro.php" >公司簡介</a>
								<a id="top" href="news.php"  >最新消息</a>
								<a id="top" href="product.php?name=1" >產品介紹</a>
								<a id="top" href="contact.html" >與我聯絡</a>
							</div>
					</div>
				</div>
				
			</div>
		</div>
		<div id="leftmenu" style="relative; float:left;  padding-top:30px; text-align:left;"></div>
		<div id="main" style=" padding:30; text-align:left; letter-spacing:2px; line-height:23px;">
		<div id="title" style="font-family:微軟正黑體; font-size:26px; color:#000088; padding-bottom:10px;">公司簡介</div><hr>
		<p>
		<!--公司簡介段落一-->
				<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from company_intro ORDER BY c_id DESC LIMIT 1;');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo $value->main;
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
				?>
		</p><br/>
		<table>
			<tr style="vertical-align:top;">
				<td>
					<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT images from company_intro ORDER BY c_id DESC LIMIT 1;');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo "<img src='images/".$value->images."' style='width:250px;'>";
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
				?>
				</td>
				<td style="vertical-align:top; padding:5;">
		<!--公司簡介段落二-->
				<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from company_intro ORDER BY c_id DESC LIMIT 1;');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo $value->second;
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
				?>
				</td>
			</tr>
		</table>
		<br>
		<p>
		<!--公司簡介段落一-->
				<?php
				require_once 'ConnectionFactory.php';
				
				try 
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('SELECT * from company_intro ORDER BY c_id DESC LIMIT 1;');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					foreach ($result as $value) 
					{
						echo $value->third;
					}
					
					$conn = null;
				}
				catch (PDOException $e) 
				{
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
				?>
		</p><br/>
		
		
			<div id="company-picture">
			</div>
			<div id="company-intro"></div>
		</div>
	</div>
	<div id="footer" class="RWD_footer" style=" font-family:微軟正黑體; background-color:black; position:relative; float:bottom; color:white; text-align:left; padding:15;	padding-left:30;" >
		ADD : 台北市大安區和平東路一段182之2號8樓｜Email : taiwailtd@yahoo.com.tw｜Tel : 02-23683089
		<div style="padding-top:3px;">
			Copyright © 2017 Taiwai All Rights Reserved
		</div>
	</div>
	</center>
</body>
</html>