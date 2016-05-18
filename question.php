<?php include "inc/header.php";
$pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
if(isset($_POST["number_add"])){
	$option_number = $_POST["option_number"];
}

if (isset($_POST["add"])) {
	$question = $_POST["question"];
	$answer = $_POST["answer"];
	$correctAns = $_POST["correctAns"];
	$user_id =  $_SESSION["id"];
		try{
	$pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
	 $pdo->exec("INSERT INTO questions(question,answer,user_id) VALUES ('$question','$correctAns','$user_id')");
	 $lastId = $pdo->lastInsertId();

	 foreach ($answer as $key) {
	 	$pdo->exec("INSERT INTO options(question_id,option_text) VALUES ('$lastId','$key') ");
	 }
	
	
}catch(PDOException $e){
	die("Uppps. There is a connection problems. : ".$e->getMessage());
}
	
}


?>
	
	<div class="container">
		<div class="jumbotron">
			<button type="button" class="btn btn-primary">Question <?=@$lastId+1; ?></button>
			<form action="" method="post">
					<div class="form-inline">	
					  <label for="usr">How many option do you want:</label>
					  <input type="number" class="form-control" name="option_number">
					  <input type="submit" value="Add" name="number_add" class="btn btn-info" id="usr">
					</div>
				</form>
		<form action="" method="post">
			<div class="form-group"> 
			
				<br><label for="comment">Enter the question:</label>
			  <textarea class="form-control" rows="5" id="comment" name="question"></textarea>
			</div>
				
				<?php 
				for ($i=1; $i <= @$option_number ; $i++) { ?>
					<label class="radio-inline"><input type="radio" name="correctAns" value="<?=$i?>"> <input type="text" class="form-control" name="answer['<?=$i?>']"></label><br>
			<?php 	}

			 ?>
			
			<br><input type="submit" class="btn btn-block btn-success" name="add" value="ADD">
		</form>
		</div>
	</div>

<?php include "inc/footer.php" ?>