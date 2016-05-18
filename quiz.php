<?php include "inc/header.php";
	
	if($_SESSION["activequestion"]!=0){
		
		$pdo = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8","root","");
		$question_number = $_SESSION["activequestion"];
		
		$question = $pdo->query("SELECT * FROM questions WHERE id='$question_number'");
		$result = $question->fetch(PDO::FETCH_LAZY);

		$correctAns = $_POST["correctAns"];
			echo $correctAns;
			if ($correctAns == $result->answer) {
				echo "dogru";
				
			}
			else
			{
				echo "yanlissssssss";
			}
			if ($_POST) {
				$_SESSION["true"]++;
				$_SESSION["activequestion"]++;
				$question_number = $_SESSION["activequestion"];
				$question = $pdo->query("SELECT * FROM questions WHERE id='$question_number'");
				$result = $question->fetch(PDO::FETCH_LAZY);

			}

		$answer = $pdo->query("SELECT * FROM options WHERE question_id='$question_number'");
		$answer_last = $answer->fetchALL(PDO::FETCH_CLASS);


			
			
		

	}
		
		
			
		if (isset($_POST["cevap"])) {
			# code...
		
			
		
}
if ($_SESSION["activequestion"] == $_SESSION["count"]+1) {
	header("Location:result.php");
}
		
	



		
		
		

 ?>
		<div class="container">
			<div class="jumbotron">
				<button type="button" class="btn btn-primary btn-lg">Question <span class="badge"><?=$question_number ?></span></button>
				<div class="alert alert-info" style="margin-top: 15px;">
		        <strong><?=$result->question ?></strong>
		    </div>
		    <form action="" method="post">
			<?php  $i = 1;
			foreach ($answer_last as $key) { ?>
			<label class="radio-inline"><input type="radio" name="correctAns" value="<?=$i?>" required><?=$key->option_text?></label><br> <?php 	$i++;
			}
			?>
			<br><button type="submit" class="btn btn-success btn-lg " name="cevap" >Next</button>
			</form>
				
					
			

			 
			 
			</div>
		</div>
<?php include "inc/footer.php"; 
	?>
