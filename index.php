<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playwrite+AT:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
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
			<div class="save__description">
				<p class="save__text">Save and organize your favorite websites in one place.</p>
			</div>
			<form id="save-form" class="save__form" action="save.php" method="POST">
				<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
				<div class="save__field">
					<label for="name" class="save__label form-label">Name</label>
					<input id="name" class="save__input" name="name" type="text" maxlength="40" placeholder="My Favorite Website">
				</div>
				<div class="save__field">
					<label for="url" class="save__label form-label">URL</label>
					<input id="url" class="save__input" name="url" type="url" maxlength="2048" placeholder="https://my-favorite-website.com">
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
	<script src="main.js"></script>
</body>

</html>