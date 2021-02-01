<!DOCTYPE html>
<html>
<body>

<?php

$quotes = array(

	['quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
	 'source' => 'Nelson Mandela',
	 'citation' => '',
	 'year' => ''],

	['quote' => 'Yes: I am a dreamer. For a dreamer is one who can only find his way by moonlight, and his punishment is that he sees the dawn before the rest of the world.',
	 'source' => 'Oscar Wilde',
	 'citation' => '',
	 'year' => ''],

	['quote' => 'When you arise in the morning think of what a privilege it is to be alive, to think, to enjoy, to love ...',
	 'source' => 'Marcus Aurelius',
	 'citation' => 'Meditations',
	 'year' => '143 AD'],

	['quote' => 'The purpose of our lives is to be happy.',
	 'source' => 'The Dalai Lama',
	 'citation' => '',
	 'year' => ''],

	['quote' => 'See, ya are what ya are in this world. That\'s either one of two things: Either you\'re somebody, or you ain\'t nobody.',
	 'source' => 'Frank Lucas',
	 'citation' => 'The American Gangster',
	 'year' => '2007'],

	['quote' => 'Even the darkest night will end and the sun will rise.',
	 'source' => 'Victor Hugo',
	 'citation' => 'Les Misérables',
	 'year' => '1862'],

	['quote' => 'It is only with the heart that one can see rightly; what is essential is invisible to the eye.',
	 'source' => 'Antoine de Saint-Exupéry',
	 'citation' => 'The Little Prince ',
	 'year' => '1943'],

	['quote' => 'I\'ve never thought of PHP as more than a simple tool to solve problems.',
	 'source' => 'Rasmus Lerdorf',
	 'citation' => '',
	 'year' => ''],

	['quote' => 'Men at some time are masters of their fates: The fault, dear Brutus, is not in our stars, But in ourselves, that we are underlings.',
	 'source' => 'William Shakespeare ',
	 'citation' => 'Julius Caesar',
	 'year' => '1599'],

	['quote' => 'The first draft of anything is shit.',
	 'source' => 'Ernest Hemingway',
	 'citation' => '',
	 'year' => '']
);

function getRandomQuote($quotes) {

	return $quotes[array_rand($quotes)];

}


function printQuote($quotes) {
	!
	$randomQuote = getRandomQuote($quotes);
	$newEmptyString = " ";
	$newEmptyString .= '<p class="quote">' . $randomQuote["quote"] . '</p>';
	$newEmptyString .= '<p class="source">' . $randomQuote["source"] . '</p>';

	if ($randomQuote["citation"] != " ") {
		$newEmptyString .= '<p class="citation">' . $randomQuote["citation"] . '</p>';
	}
	
	if ($randomQuote["year"] != " ") {
		$newEmptyString .= '<p class="year">' . $randomQuote["year"] . '</p>';
	}

	return $newEmptyString;

}

printQuote($quotes);

?>
</body>
</html>

$newEmptyString .= '<p class="quote">' . $randomQuote["quote"] . '</p>';