<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<meta charset="utf-8">
	<meta name="viewport"contents="width=device=width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap');
		body{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
		}
		nav{
		width: 100%;
		height:75px;
		background-color: #505d61;
		line-height: 75px;
		padding : 0px 100px;
		position: fixed;
		z-index: 1;
		}
		
		nav .logo{
			font-size:30px;
			font-weight: bold;
			letter-spacing: 1.5px;
			
		}
		
		nav .logo p{
		float: left;
		color: #fff;
		text-transform: uppercase;
		margin-top: 10px;
		}
		nav ul{
			float: center ;
		}
		
		nav ul li{
			display: inline-block;
			list-style: none;
		}
		
		nav ul li a{
			color:#fff;
			text-decoration: none;
			font-size:18px;
			text-transform: uppercase;
			padding:0px 32px;
		}
		nav ul li a:hover{
			color: #c0d96f;
		}
		img{
			width: 100%;
			height: 0px auto;
		}
	</style>
		
</head>
<body>
	<nav>
		<div class="logo">
			<p>Home</p>
		</div>
		<ul>
			<li><a href="reg.php">Schools</a></li>
			<li><a href="clg_ad.php">Engineering Colleges</a></li>
		</ul>
	</nav>
	<div class="image">
		<img src="./images/2.jpg" alt="" >
	</div>