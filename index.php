<?php 
	include "inc/header.php";
 ?>	
	<h1>Quiz sistemine hoşgeldiniz</h1>
	<p>Kendi quizini oluştur veya quizler ile kendini dene :)</p><br><br>
 	<center><button type="button" class="btn btn-primary  btn-lg" data-toggle="modal" data-target="#myModal_giris">Giriş Yap</button>
 	<button type="button" class="btn btn-success  btn-lg" data-toggle="modal" data-target="#myModal_kayit">Kayıt Ol</button><br>
	<br><a href="https://www.facebook.com/profile.php?id=704994483"><i class="fa fa-facebook fa-3x"></i></a>&nbsp&nbsp&nbsp&nbsp
 	<a href="https://twitter.com/eersinyildiz"><i class="fa fa-twitter fa-3x"></i></a>&nbsp&nbsp&nbsp&nbsp
 	<a href="https://github.com/eersinyildizz/"><i class="fa fa-github fa-3x"></i></a>&nbsp&nbsp&nbsp&nbsp
 	<a href="https://www.linkedin.com/in/ersin-y%C4%B1ld%C4%B1z-697ab5b0?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin fa-3x"></i></a>
 	</center>
 	

		

		<!-- Modal -->
		<div id="myModal_giris" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Giriş Yap</h4>
		      </div>
		  	<form action="" method="post">
			<div class="modal-body">
		        		<div class="form-group">
						  <label for="email">Email Adresiniz:</label>
						  <input type="email" class="form-control" id="usr" name="email" required>
						  <label for="password">Parolanız:</label>
						  <input type="password" class="form-control" id="usr" name="password" required>
						</div>
		        	
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary" name="giris">Giriş Yap</button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
		      </div>
		</form>
		      
		    </div>

		  </div>
		</div>

		

		<!-- Modal -->
		<div id="myModal_kayit" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Kayıt Ol</h4>
		      </div>
		     			   <form action="" method="post"> 
		      <div class="modal-body">
		
		        	<div class="form-group">
					  <label for="usr">Adınız:</label>
					  <input type="text" class="form-control" id="usr" name="name_kayit" required>
					  <label for="usr">E-mail Adresiniz:</label>
					  <input type="email" class="form-control" id="usr" name="email_kayit" required>
					  <label for="usr">Parolanız:</label>
					  <input type="password" class="form-control" id="usr" name="password_kayit" required>
					  <label for="usr">Sınıfınız:</label>
					  	<div >
					  		<label class="radio-inline" ><input type="radio" name="class_kayit" value="hazırlık" required>Hazırlık</label>
							<label class="radio-inline"><input type="radio" name="class_kayit" value="1" required>1. Sınıf</label>
							<label class="radio-inline"><input type="radio" name="class_kayit" value="2" required>2. Sınıf</label>
							<label class="radio-inline"><input type="radio" name="class_kayit" value="3" required>3. Sınıf</label>
							<label class="radio-inline"><input type="radio" name="class_kayit" value="4" required>4. Sınıf</label><br><hr>
							<label class="radio-inline" style="color:blue;"><input type="radio" name="class_kayit" value="hoca" required>Hoca</label>

					  	</div>
					</div>
				
		      </div>
		      <div class="modal-footer">
		     	<button type="submit" name="kayit" class="btn btn-primary">Kayıt Ol</button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
		      </div>
		</form>
		    </div>

		  </div>
		</div>

  </a>
 <?php include "inc/footer.php"; ?>""