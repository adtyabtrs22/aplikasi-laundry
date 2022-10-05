<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/rb.css">
	<link rel="shortcut icon" type="image/x-icon" href="assetss/img/logok.png">
    <title>Laundryman</title>
</head>
<body>
<div class="container" id="container">
	<!-- <div class="form-container sign-up-container">
		<form method="POST" action="cekregist.php">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="Username" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
            <input type="number" name="nohp" placeholder="Nomor HP" />
			<button>Sign Up</button>
		</form>
	</div> -->
	<!-- <?php if (isset($_POST['msg'])): ?>
						<small class="text-danger"><?= $_POST['msg'];  ?></small>
					<?php endif ?>
	<div class="form-container sign-in-container"> -->
    <form method="POST" action="ceklogin.php">
	<img src="assetss/img/logo/LEDER.png" alt="" width="130px" height="130px">
	<br>
			<h1>Sign in</h1>
			<span>or use your account</span>
			<br>
			<input type="text" name="username" placeholder="Username anda" />
			<input type="password" name="password" placeholder="Password" />
			<!-- <a href="#">Forgot your password?</a> -->
			<br>
			<button>Sign In</button>
			<br>
			<button><a class="mamah" href="index.php">Cancel</a></button>
		</form>
	</div>
    <?php if (isset($_GET['msg'])): ?>
						<small class="text-danger"><?= $_GET['msg'];  ?></small>
					<?php endif ?>
	<!-- <div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang kembali!</h1>
				<p>Untuk tetap terhubung dengan kami, silakan masuk dengan info pribadi Anda</p>
				<button class="ghost" id="signIn">Masuk</button>
			</div> -->
			<!-- <div class="overlay-panel overlay-right">
				<h1>Halo, Teman!</h1>
				<p>Masukkan detail pribadi Anda dan mulailah perjalanan bersama kami</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div> -->
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">XII RPL 2</a>
		- Visit to website
		<a target="_blank" href="https://www.smkn1tgt.sch.id/">SMKN 1 TGT</a>.
	</p>
</footer>
<script src="js.js"></script>
</body>
</html>