<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
	$mail_password = substr($username, 0, strpos($username, "@"));
	if($password == $mail_password){
		$alert = sprintf("<div class='container my-5'><div class='alert alert-success text-center' role='alert'>Giriş başarılı!<br> Hoşgeldiniz %s!</h1></div>",$mail_password);
		echo $alert;
		echo '<meta http-equiv="refresh" content="4; url=hakkinda.html"';
	}
	else{
		echo "<div class='container my-2'><div class='alert alert-danger text-center' role='alert'><h6>Mailinizi veya şifrenizi yanlış girdiniz!<br>Lütfen tekrar deneyiniz!!</h6></div></div>";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
    

<link rel="stylesheet"  href="giris.css">

	<title>Giriş Yap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container my-5">
		<h2>Giriş Yap</h2>
        <div class="d-flex justify-content-center">
		<form action="login.php" method="POST" >
			<div class="mb-3" >
				<label for="mail" class="form-label"><h4>Öğrenci numarası</h4></label>
				
				<input type="email" class="form-control" id="mail" name="username" aria-describedby="emailHelp" placeholder="Mail" required>
				<span style="font-size: 14px; color: white;">Örn: b221210061@sakarya.edu.tr</span>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label"><h4>Şifre</h4></label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
			</div>
			<button type="submit" class="btn btn-success">Giriş Yap</button>
		</form>
	    </div>
    </div>    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>