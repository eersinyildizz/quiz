<?php 	include "inc/header.php";
		$pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
		$result = $pdo->query("SELECT * FROM questions");
		$count = $result->rowCount();
		$_SESSION["count"] = $count;
		$_SESSION["activequestion"]=1;
		$_SESSION["true"]=0;


 ?>

	<div class="container">
		<div class="jumbotron">
			<h1>You have <span style="color:blue"><?=$count?></span> question :)</h1>
			<h2>Are you ready??</h2>
			<a href="quiz.php"><button type="button" class="btn btn-primary btn-block btn-lg">Start</button></a>

		</div> 
	</div>
<?php 	include "inc/footer.php"; ?>