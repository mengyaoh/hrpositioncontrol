<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Position Control Login</title>
      <style>
body{
	margin: 0;
	padding: 0;
	background: #fff;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}
.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	/*width: auto;
	height: auto;*/
	background-image: url(BGimg/LAbgAdj.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}
.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}
.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 330px);
	z-index: 2;
}
.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
	font-weight: bold;
}
.header div span{
	color: #56BDFC !important;
	font-weight: bold;
}
.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	width: 260px;
	z-index: 2;
}
.formDiv {
	padding: 10px;
	width: 100%;
	background-color: black;
    opacity: 0.5;
    filter: Alpha(opacity=50);  /*IE8 and earlier*/ 
    border-radius: 10px;
}
.loginDiv {
	padding: 10px;
}
.inputField {
	margin: 5px auto;
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.login input[type=submit]:hover{
	opacity: 0.8;
}
.login input[type=submit]:active{
	opacity: 0.6;
}
.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
.login input[type=submit]:focus{
	outline: none;
}
::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}
::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
div[class="message"] {
    color: red;
}
</style>

</head>

<body>
	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div>Position<span>Control</span></div>
	</div>
	<br>
	<div class="login">
		<form action="php/LDAP/login.php" method="post" enctype="multipart/form-data">
			<div class="formDiv">
				<input class="inputField" type="text" placeholder="Username" name="username"><br>
				<input class="inputField" type="password" placeholder="Password" name="password"><br>
			</div>
			<div class="loginDiv">
				<input type="submit" value="SignUp" name="login">
			</div>	
		</form>
		<div class="message"><?php //echo "Error: Incorrect Username / Password" ?></div>
	</div>
</body>
</html>
