<?php
if (!isset($_SESSION)) {
	session_start();
}

$page = 'Home'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons"> -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"> -->

	<link rel="stylesheet" href="/Project-5A-portfolio-update/css/output.css">
	<script src="/Project-5A-portfolio-update/js/expand_menu.js" defer></script>
	<script src="/Project-5A-portfolio-update/js/animationplay.js" defer></script>
</head>

<body>
	<header>
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/Project-5A-portfolio-update/php/inc/header.inc.php' ?>
	</header>
	<main>
		<section id="section_1" class="flex bg-radial-gradient-to-b from-[#1b2735] to-[#090a0f]">
			<div class="flex-center fade-in_up [animation-delay:0.25s] flex-col">
				<H1 class="text-7xl mb-3">Ahmad Natfaji</H1>
				<h3 class="text-4xl">Software developer</h3>
			</div>
			<div class="flex-center fade-in_up [animation-delay:0.75s] p-14">
				<img class="max-w-full max-h-full rounded-[15%]" src="/Project-5A-portfolio-update/assets/images/pfp.jpg" alt="">
			</div>
		</section>

		<section class="h-96">
			<div class="h-96">
				<img src="/Project-5A-portfolio-update/assets/images/pfp.jpg" class="animated h-full" alt="">
			</div>
		</section>
	</main>
</body>

</html>