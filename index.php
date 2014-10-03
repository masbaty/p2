<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project 2: Password Generator</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
	<?php require("logic.php");?>
</head>

<body>
	<div class="container">
		<h1>xkcd Password Generator</h1>
		<h2>Your Password</h2>
		<p id="password">Your password is: <span><?php echo ($password) ? $password : ""; ?> </span></p>

		<form method="POST" action="index.php">

			<label for="count">How many words? (maximum 9)</label>
				<input type="text" id="count" name="count" <?php echo ($count) ? "value=$count": ""; ?> /><br />

			<label for="uppercase">Uppercase at beginning of each word?</label>
				<input type="checkbox" id="uppercase" name="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"': ""; ?>/><br />

			<label for="symbol">Use any symbols?</label>
				<input type="checkbox" id="symbol" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"': ""; ?>/><br />

			<label for="number">Include a number?</label>
				<input type="checkbox" id="number" name="number" value="number" <?php echo ($number) ? 'checked="checked"': ""; ?>/><br />

			<input type="submit" name="submit" value="submit" />
		</form>

		<br />
		
		<div id="xkcd">
			<a href="http://xkcd.com/936"><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd Password Strength Comic" /></a>

			<p>
				This password generator is based on an idea proposed by Randall Munroe in his popular webcomic "xkcd". Randall makes a point that we typically use passwords that are difficult to remember, but easy for a computer to crack due to the low number of guesses it takes to figure it out. Instead, we should strive for passwords made up of normal words. In this way, the password is much longer and more difficult to guess, but at the same time easier for humans to remember since it's not just a random mess of letters, numbers, and symbols.
			</p>
		</div>
	</div>

</body>
</html>