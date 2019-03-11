<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Onkunde</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<header>
				<img src="img/logo.png" alt="logo">
		</header>
		<div class="main">
		<nav>
			<a href="index.html">Er heerst paniek...</a>
			<a href="onkunde.html">Onkunde</a>
		</nav>
		<div class="text2">
			<h2>Onkunde</h2>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["vraag1"] ?>. Neem nou <?php echo $_POST["vraag2"]?>. Zelfs met de hulp <br>
				van een <?php echo $_POST["vraag4"]?> of zelfs <?php echo $_POST["vraag3"]?> kan <?php echo $_POST["vraag2"]?> niet <?php echo $_POST["vraag1"] ?>. Dat heeft niet te maken met <br>
				een gebrek aan <?php echo $_POST["vraag5"]?>, maar met een te veel aan <?php echo $_POST["vraag6"]?>. Te veel <?php echo $_POST["vraag6"]?> <br>
				leidt tot <?php echo $_POST["vraag7"]?> en dat is niet goed als je wilt <?php echo $_POST["vraag1"]?>. Helaas voor <?php echo $_POST["vraag2"]?>.</p>
		</div>
	</div>
	<footer>2019 - Deze website is gemaakt door © <?php echo $_POST["vraag2"]?>.</footer>
</div>
</body>
</html>
