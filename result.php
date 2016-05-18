<?php include "inc/header.php"; ?>
	<div class="container">
		<div class="jumbotron">
			<div class="alert alert-success">
			  <strong>Congratulations </strong> The quiz is finish.
			</div>
			<div class="well well-lg">Total Question Number : 5</div>
			<div class="alert alert-info">
				  <strong>True Question Number : 5 </strong> 
				</div>
			
				  <div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					    40%
					  </div>
				</div>
			
				<div class="alert alert-danger">
				  <strong>False Question Number : 5 </strong> 
				</div>
				 <div class="progress">
				  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
				  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				    70% 
				  </div>
				</div>

				<a href="ready.php"><button type="button" class="btn btn-primary navbar-right">Restart Quiz</button></a>
				<a href="main.php"><button type="button" class="btn btn-success">Finish</button></a>
		</div>
	</div>
<?php include "inc/footer.php"; ?>