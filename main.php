<?php 
include "inc/header.php"; ?>
	
	<div class="container">
		<div class="jumbotron">
			<div class="alert alert-success">
			  <strong><?=$_SESSION["name"] ?></strong> Welcome to My quiz
			</div>
			<a href="question.php"><button type="button" class="btn btn-primary btn-block btn-lg">Add Question</button></a><br>
			<a href="ready.php"><button type="button" class="btn btn-success btn-block btn-lg">Start Quiz</button></a>
		</div>
	</div>
<?php include "inc/footer.php";?>
