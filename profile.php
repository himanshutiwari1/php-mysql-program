<?php
session_start();
$name=$_SESSION['name'];
$pic=$_SESSION['pic'];

?>
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
		<div class="col-md-12 bg1" id="mq">
		<h1 class="text-center">My Profile</h1>
		<div class="row">
			<img src="uploads/<?php echo $pic;?>" height=200 width=200  style="border:2px solid green;border-radius: 100px; float:left";">
			<div class="">
				<b style="float:left; margin-left:40px; margin-top: 40px; color: blue; font-size: 40px;"><?php echo $name; ?></b>
			</div>
			<form method="post" action="upload.php" enctype="multipart/form-data">
			<div class="form-group" style="margin-left: 700px;">
    <label for="exampleFormControlFile1">Upload Pic</label>
    <input type="file" name="pic" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
    <select name="cat" style="width: 292px;height: 30px;border-radius: 6px;">
    	<option>--Select Category--</option>
    	<option value="fav">My favourite</option>
    	<option value="liked">Liked</option>
    	<option value="nat">Nature</option>
    	<option value="tech">Technology</option>
    </select><br>
    <button type="submit" name="sub" value="Upload" class="btn btn-primary">Upload</button>
  </div>
</form>
		</div>
		
		<div class="row">
			<h2 class="text-center" style="border:1px solid cyan; width:500px;height: 40px;background-color: cyan;border-radius: 7px">Images Category:</h2>
			<ul >
      <li class="active btn btn-danger btn-lg" id="bg2" ><a href="fav.php">Favourites</a></li>
      <li class="active btn btn-danger btn-lg" id="bg2"><a href="liked.php">Most Liked</a></li>
      <li class="active btn btn-danger btn-lg" id="bg2"><a href="nature.php">Nature</a></li>
      <li class="active btn btn-danger btn-lg" id="bg2"><a href="tech.php">Technology</a></li>
      
    </ul>


		</div>

		<div class="row">

			

		</div>
		</div>

</div>
</body>
</html>