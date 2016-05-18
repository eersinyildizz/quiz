<?php /*
	/* Here , there is a sSign up cotrol system*/
	if (isset($_POST["add"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = md5($_POST["password"]);
		if (isset($name) && isset($email) && isset($password)) {
			try{
				$pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
				$add = $pdo->exec("INSERT INTO user(name,email,password) VALUES ('$name','$email','$password')");
				if (empty($add)) {
					echo "<script>alert('There is user that have same email address. Please try to join another email address.');</script>";
				}
			}catch(PDOException $e){
				die("Uppps. There is a connection problems. : ".$e->getMessage());
			}
		}
	}
	/* here , there is log in control system*/
	if (isset($_POST["control"])) {
		$c_email = $_POST["c_email"];
		$c_password = md5($_POST["c_password"]);
		if (isset($c_email) && isset($c_password)) {
			try{
				$c_pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
				$controll = $c_pdo->query("SELECT * FROM user WHERE email='$c_email' AND password='$c_password'");
				$result = $controll->fetch(PDO::FETCH_LAZY);
				if ($result) {
					session_start();
					$_SESSION["id"] = $result->id;
					$_SESSION["name"] = $result->name;
					$_SESSION["email"] = $result->email;
					$_SESSION["password"] = $result->password;
					
					header("Location:main.php");
					
				}else{
					echo "<script>alert('There is not a account. Please create a account.');</script>";
				}

			}catch(PDOException $e){
				die("Uppps. There is a connection problems. : ".$e->getMessage());
			}
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- This our navbar topic-->
	<nav class="navbar  navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">My Quiz</a>
	    </div>
	 	<form class="navbar-form navbar-right" method="post" action="">
	 		<input type="email" placeholder="Email" class="form-control" name="c_email" required>
	 		<input type="password" placeholder="Password" class="form-control" name="c_password" required>
	 		<input type="submit" value="Sign In" name="control" class="btn btn-success">
	 	</form>
	  </div>
	</nav>
	<!-- welcome screen when person enter the site tha see it -->
	<div class="container">
		<div class="jumbotron">
			<h1 style="text-align: center;">Welcome to My Quiz </h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="jumbotron">
				<form action="" method="post">
					<div class="form-group">
					    <label>Name :</label>
					    <input type="text" class="form-control" name="name" required>
					 </div>
					 <div class="form-group">
					    <label>Email address:</label>
					    <input type="email" class="form-control" name="email" required>
					 </div>
					 <div class="form-group">
					    <label>Password:</label>
					    <input type="password" class="form-control" name="password" required>
					  </div>
					 <input type="submit" value="Sign Up" name="add" class="btn btn-primary btn-block"></input>
				</form>
				</div>
			</div>
			<div class="col-md-7">
				<div class="jumbotron"><h3>
					<ul class="list-unstyled">
						<li><span class="fa fa-check text-success"></span>  Simple User Interface</li>
						<li><span class="fa fa-check text-success"></span>  Test Yourself</li>
						<li><span class="fa fa-check text-success"></span>  Test Other People</li>
					</ul></h3>
				</div>
			</div>
		</div>
	</div>




	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

