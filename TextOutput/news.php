<?
$link = mysqli_connect('localhost', 'root', '', 'test');
$result = mysqli_query($link, "SELECT * FROM `news`");
$myrow = mysqli_fetch_assoc($result);

do {
	printf('<span>%s</span><p>%s</p><br>',
	$myrow['text'], $myrow['user']);
} while ($myrow = mysqli_fetch_assoc($result));
?>