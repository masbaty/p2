<?php
	error_reporting(-1); #Report all PHP errors
	ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project 2: Password Generator</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<?php require("logic.php");?>
</head>

<body>
	<h1>xkcd Password Generator</h1>
	<h2>Your Password</h2>
	<p>Your password is: <?php echo ($password) ? $password : ""; ?> </p>

	<form method="POST" action="index.php">

		<label name="count">How many words?</label>
			<input type="text" id="count" name="count" <?php echo ($count) ? "value=$count": ""; ?> /><br />

		<label name="uppercase">Uppercase at beginning of each word?</label>
			<input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"': ""; ?>/><br />

		<label name="symbol">Use any symbols?</label>
			<input type="checkbox" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"': ""; ?>/><br />

		<label name="number">Include a number?</label>
			<input type="checkbox" name="number" value="number" <?php echo ($number) ? 'checked="checked"': ""; ?>/><br />

		<input type="submit" name="submit" value="submit" />
	</form>

</body>
</html>