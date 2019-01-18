<!DOCTYPE html>
<html>
<head>
	<title>ClickPic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid bg">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ClickPick</a>
    </div>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav" id="lg">
      <li class="active" ><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-8 bg1" id="mq">
	
<div class="container" id="bdy">
	<form method="post">
		<h1 id="hd">Login Now</h1>
		<label>Email :</label>
		<input type="email" name="mail" id="inp"><br><br>
		<label>Password</label>
		<input type="password" name="password" id="input"><br><br>
		<input type="submit" name="login" value="Login" id="subm">
	</form>
	</div>
		</div>
		<div class="col-md-4 bg1" id="mq">
			<div class="text-center">
				Winners
		<marquee direction="up"><ul>
			<li>Himansu</li>
			<li>Himansu</li>
			<li>Himansu</li>
			<li>Himansu</li>
			<li>Himansu</li>
			<li>Himansu</li>
		</ul></marquee>
			</div>
		
		</div>
	</div>

</div>
</body>
</html>

<?php
extract($_POST);
if(isset($login))
{
require_once "dbcon.php";
$sql_qry = "SELECT * FROM cp WHERE email='$mail' and password='$password'";
$result = mysql_query($sql_qry);
$total = mysql_num_rows($result);
session_start();
$row = mysql_fetch_assoc($result);
$_SESSION['name']=$row['name'];
$_SESSION['pic']=$row['p_name'];
if($total>0)
{
header('location:profile.php');
}
}
?>
