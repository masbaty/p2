<?php

	if (isset($_POST["count"])) {
		$count = $_POST["count"];
	}
	else {
		$count = 4;
	}

	if (isset($_POST["uppercase"])) {
		$uppercase = true;
	}
	else {
		$uppercase = false;
	}

	if (isset($_POST["symbol"])) {
		$symbol = true;
	}
	else {
		$symbol = false;
	}

	if (isset($_POST["number"])) {
		$number = true;
	}
	else {
		$number = false;
	}

	

	if ($words = file("words.txt")) {

		$selected_words = [];
		$symbols = ["!","@","#","$","%","&","*"];
		$numbers = [0,1,2,3,4,5,6,7,8,9];

		for ($i = 0; $i < $count; $i++) {
			// Generate random number from 0 to dictionary size
			$max = count($words) - 1;
			$rand = rand(0,$max);

			$word = trim ($words[$rand]);	// trim() removes whitespace that is automatically added


			array_push($selected_words,$word);	// Adds item to array
		}
	

		if ($uppercase) {
			// Loop through words and change first letter to uppercase
			foreach ($selected_words as $index => $word) {
				$selected_words[$index] = ucfirst($word);
				//echo $selected_words[$index];
			}
		}

		$endofarray = count($selected_words) - 1;

		if ($symbol) {
			// Add random symbol to end of array
			$rand = rand(0,count($symbols)-1);
			$symbol = $symbols[$rand];
			$selected_words[$endofarray] = $selected_words[$endofarray] . $symbol;
		}

		if ($number) {
			// Add random number to end of array
			$rand = rand(0,count($numbers)-1);
			$number = $numbers[$rand];
			$selected_words[$endofarray] = $selected_words[$endofarray] . $number;
		}


		$password = implode("-",$selected_words);

		if ($count > 9) {
			$password = "ERROR: Can a human even remember a password like that?";
		}
		if (!is_numeric($count)) {
			$password = "ERROR: Your count needs to be numeric.";		// Error message
		}

	}

	# Pull data from form


	# Run logic on form input


	# Update variables to send back


	# Cleanup with helper functions