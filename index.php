<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playwrite+AT:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Savelet</title>
</head>

<body>
	<header class="header">
		<div class="header__inner container">
			<h1 class="header__title">Savelet</h1>
		</div>
	</header>
	<main>
		<div class="save container">
			<form class="save__form" action="save.php" method="POST">
				<div class="save__field">
					<label for="name" class="save__label form-label">Name</label>
					<input id="name" class="save__input" name="name" type="text" placeholder="My Favorite">
				</div>
				<div class="save__field">
					<label for="url" class="save__label form-label">URL</label>
					<input id="url" class="save__input" name="url" type="url" placeholder="https://my-favorite.com">
				</div>
				<button id="save-btn" class="save__btn btn" type="submit">Save</button>
			</form>
		</div>
	</main>
	<footer class="footer">
		<div class="footer__inner container">
			<small class="footer__copyright">&copy; 2026 Savelet</small>
		</div>
	</footer>
</body>

</html>