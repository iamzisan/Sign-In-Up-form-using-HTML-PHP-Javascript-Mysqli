<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
</head>
<body>
	<div class="menu">
		<div class="logo">
			<img src="../Model/Logo.png" alt="" width="200px">
		</div>
		<div class="mid">
			<ul>
				<li><a href="Homepage.php">Home</a></li>
				<li><a href="AboutUs.php">About</a></li>
				<li><a href="ContactUs.php">Contact</a></li>
				<li><a href="Prereg.php">sign In/Up</a></li>
				
			</ul>
		</div>
	</div>

	<style>
		
.mid {
	height: 200px;
	position: relative;
	width: 35%;
	margin:  auto;
}

.menu {
	background-color: #820049;
	position: relative;
}

.menue ul{
	margin-left: auto;
	margin-right: auto;
}

.menu ul li {

	list-style:none;
	display: inline-block;
	position: relative;
}

.menu ul li a{
	text-align: center;
	text-decoration: none;
	color: #FFF;
	padding: 20px 28px;
	display: block;
	border-bottom: 3px solid black;
}

.menu ul li a:hover {
	background-color: #640031;
	border-bottom: 3px solid black;
}

.menu ul li  ul li {
	display: block;
	background-color: #47003c;
	margin-top: 3px;
	transition: .4s;
}

.menu ul li  ul  {
	position: absolute;
	top: 100%;
	left: 0px;
	width: 200px;
	display: none;
}

.menu ul li:hover ul {
	display: block;
}

.menu ul li  ul li:hover {
	transform: scale(1.5);
	z-index: 999;
}

.logo{

	margin-top: 40px;
	margin-left: 30px;
	width: 15%;
	float: left;
	
}	
	</style>

</body>
</html>