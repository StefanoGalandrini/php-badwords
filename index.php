<?php
$text = $_GET['text'];
$word = $_GET['word'];
$censoredtext = str_replace($word, '***', $text, $count);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Badwords Show</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="original">
		<h2>Il testo inserito è:</h2>
		<p><?= $text ?></p>
		<h2>Lunghezza:</h2>
		<span class="chars"><?= strlen(trim($text)) ?></span>
		<span> caratteri.</span>
	</div>
	<div class="censored">
		<h2>Il testo censurato (*** al posto di '<?=$word?>') è:</h2>
		<p><?= $censoredtext ?></p>
		<h2>Lunghezza:</h2>
		<span class="chars"><?= strlen(trim($censoredtext)) ?></span>
		<h2>Sostituzioni effettuate:</h2>
		<span class="chars"><?= $count ?></span>
		<span> sostizioni.</span>
	</div>
	<p></p>
</body>
</html>
