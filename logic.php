<?php

	if (isset($_POST["count"])) {
		$count = $_POST["count"];

		if (!is_numeric($count)) {
		echo "nooooooooo";		// Error message
		}
	}
	else {
		$count = 1;
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
		//echo "Count: " . count($words) . "<br />";
		//echo $words[1000] . "<br /><br />";

		$selected_words = [];
		$symbols = ["!","@","#","$","%","&","*"];
		$numbers = [0,1,2,3,4,5,6,7,8,9];

		for ($i = 0; $i < $count; $i++) {
			//echo $selected_words[$i-1];		// Remove in final version
			// Generate random number from 0 to dictionary size
			$max = count($words) - 1;
			$rand = rand(0,$max);

			$word = $words[$rand];

			//echo $word . "<br />";

			array_push($selected_words,$word);	// Adds item to array
		}
	

		if ($uppercase) {
			// Loop through words and change first letter to uppercase
			foreach ($selected_words as $index => $word) {
				$selected_words[$index] = ucfirst($word);
				echo $selected_words[$index];
			}
		}

		if ($symbol) {
			// Add random symbol to end of array
			$rand = rand(0,count($symbols)-1);
			$symbol = $symbols[$rand];
			array_push($selected_words,$symbol);
		}

		if ($number) {
			// Add random number to end of array
			$rand = rand(0,count($numbers)-1);
			$number = $numbers[$rand];
			array_push($selected_words,$number);
		}


		$password = implode("-",$selected_words);

	}

	# Pull data from form


	# Run logic on form input


	# Update variables to send back


	# Cleanup with helper functions