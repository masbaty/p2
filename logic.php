<?php

	if (isset($_POST["count"])) {
		$count = $_POST["count"];
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
		echo "Count: " . count($words) . "<br />";
		echo $words[1000];

		$selected_words = [];

		for ($i=0; $i<$count; $i++) {
			// Generate random number from 0 to dictionary size
			$max = count($selected_words) - 1;
			$rand = rand(0,$max);

			$word = $words[$rand];
			array_push($selected_words,$word);
		}
	

		if ($uppercase) {
			
		}

		if ($symbol) {
			
		}

		if ($number) {
			
		}

	}

	# Pull data from form


	# Run logic on form input


	# Update variables to send back


	# Cleanup with helper functions