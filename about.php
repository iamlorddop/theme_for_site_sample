<?php
session_start();

if (isset($_GET["theme"])) {
	$theme = $_GET["theme"];

	if ($theme == "light" || $theme == "dark") {
		$_SESSION["theme"] = $theme;
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Site with dark theme</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>

<body>
	<div class="wrapper">
		<div class="theme-button" id="theme-button">Change theme</div>
		<header class="header">
			<div class="header__content">
				<h1>Site with dark theme</h1>
				<nav class="nav">
					<div class="nav__content">
						<a href="./index.php" class="nav__item">Home</a>
						<a href="./blog.php" class="nav__item">Blog</a>
						<a href="./about.php" class="nav__item nav__item_active">About</a>
						<a href="./contacts.php" class="nav__item">Contacts</a>
					</div>
				</nav>
			</div>
		</header>
		<main class="main">
			<article class="main__content">
				//Тут будет Lorem Ipsum
			</article>
		</main>
	</div>
	<script type="text/javascript" src="./js/themes.js"></script>
</body>

</html>