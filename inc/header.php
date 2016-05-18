<?php	
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz System</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>
<body>
	<nav class="navbar  navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="main.php">My Quiz</a>
	    </div>
	 		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
       				 <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><?=$_SESSION["name"] ?><span class="caret"></span></a>
			           	<ul class="dropdown-menu">
				            <li><a href="#">My Profil</a></li>
				            <li><a href="#">Settings</a></li>
				            <li><a href="#">Help</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="destroy.php">Log Out</a></li>
			          </ul>
			        </li>
     			</ul>
     		</div>
    	</div>
	</nav>

