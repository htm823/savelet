<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<form class="save__form" action="" method="POST">
				<div class="save__field mb-3">
					<label for="name" class="save__label form-label">Name</label>
					<input id="name" class="save__input form-control" name="name" type="text">
				</div>
				<div class="save__field mb-3">
					<label for="url" class="save__label form-label">URL</label>
					<input id="url" class="save__input form-control" name="url" type="url">
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