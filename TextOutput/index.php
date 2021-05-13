<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="page">
		<div class="section">
		<section>
			<div class="block1">
				<p class="news">Новости</p>
			<? include 'news.php';?>
			</div>
		</section>
		<section>
			<div class="block1">
			<p class="news">В разработке</p>
			<? include 'develop.php';?>
			</div>
		</section>
		<section>
			<div class="block1">
			<p class="news">Реализовано</p>
			<? include 'news.php';?>
			</div>
		</section>
	</div>
	</div>
</body>
</html>