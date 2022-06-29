<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<nav id="headerNavigation" class="headerNavigation">
	<ul id='expand-menu' onclick="togglemenu()">
		<!-- <span class="material-icons md-36">menu</span> -->
		<div class="center">
  			<div></div>
		</div>
	</ul>
	<ul id='btnContainer'>
		<li class='min-h-[70px] flex items-center md:grow justify-center md:justify-start'>
			<a  href='/Project-5A-portfolio-update'> <!-- class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]" -->
				<img src='/Project-5A-portfolio-update/Assets/Logo/LOGO.png' alt='logo' id="logo" class='max-w-[50px] max-h-[50px]'>
			</a>
		</li>
		<li><a class='nav-item btn <?php if($page=='Home'){echo 'active';}?>' href='/Project-5A-portfolio-update'>Home</a></li>
		<li><a class='nav-item btn <?php if($page=='Contact'){echo 'active';}?>' href='/Project-5A-portfolio-update/pages/contact'>Contact</a></li>
		<!-- <li><a class='nav-item btn <?php if($page=='Medicijnen'){echo 'active';}?>' href='/Project-5A-portfolio-update/medicijnen'>Medicijnen</a></li> -->
		<!-- <li><a class='nav-item btn <?php if($page=='Contact'){echo 'active';}?>' href='/Project-5A-portfolio-update/contact'>Contact</a></li> -->
	</ul>
</nav>