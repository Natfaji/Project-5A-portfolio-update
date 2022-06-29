<?php
if (!isset($_SESSION)) {
	session_start();
}

$page = 'Contact'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined">

	<link rel="stylesheet" href="/Project-5A-portfolio-update/css/output.css">
	<script src="/Project-5A-portfolio-update/js/expand_menu.js" defer></script>
	<script src="/Project-5A-portfolio-update/js/RNG.js" defer></script>
	<link rel="stylesheet" href="/Project-5A-portfolio-update/css/test.css">
</head>

<body class="text-cyan">
	<header>
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/Project-5A-portfolio-update/php/inc/header.inc.php' ?>
	</header>

	<main>
		<div class="night">
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
			<div class="shooting_star RNG"></div>
		</div>
		<div class="blurred-box">
			<div class="user-login-box">
				<div>
					<H1 class="text-5xl py-10">Contact Me</H1>
					<span class="user-icon material-icons-outlined text-[20em]">mail</span>
				</div>
				<div class="p-12 child:float-left">
					<label for="name" class="block mt-5 mb-1">Name</label>
					<input type="text" class="w-full" name="name" id="name">

					<label for="Email" class="block mt-5 mb-1">Email</label>
					<input type="text" class="w-full" name="Email" id="Email">

					<label for="subject" class="block mt-5 mb-1">subject</label>
					<input type="text" class="w-full" name="subject" id="subject">

					<label for="message" class="block mt-5 mb-1">message</label>
					<textarea class="w-full" name="message" rows="6"></textarea>
				</div>
			</div>
		</div>
	</main>
</body>

</html>