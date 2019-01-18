<!DOCTYPE html>
<html>
<head>
	<title>ClickPic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
   

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 10px;
    background-color: #f2f2f2;
    box-shadow: 10px 10px 5px 5px;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: black;
    margin-top: 5px;
    text-align: center;
    letter-spacing: 4px;
    background-color: black;
    color: white;
    border-radius: 10px;
}
</style>

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
		<div class="col-md-10 bg1" id="mq">
			<h1 class="text-center">Register Now</h1>
			<div class="form-r">
			

<form action="reg1.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="form-group">
    <label for="exampleFormControlFile1">Upload Profile Pic</label>
    <input type="file" name="pic" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" name="sub" value="Upload" class="btn btn-primary">Submit</button>
</form>
</div>


            </div>
	</div>

</div>
</body>
</html>












