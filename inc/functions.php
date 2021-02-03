<!DOCTYPE html>
<html>
<body>


<?php

// creating a multidimentional array named $quotes

$quotes = array(

// creating each elements of the $quotes array as associative array

	['quote' => 'Man is sometimes extraordinarily, passionately, in love with suffering...',
	 'source' => 'Fyodor Dostoevsky',
	 'citation' => 'Notes from Underground',
	 'year' => '1864'],

	['quote' => 'Yes: I am a dreamer. For a dreamer is one who can only find his way by moonlight, and his punishment is that he sees the dawn before the rest of the world.',
	 'source' => 'Oscar Wilde',
	 'citation' => 'The Critic as Artist',
	 'year' => '1891'],

	['quote' => 'When you arise in the morning think of what a privilege it is to be alive, to think, to enjoy, to love ...',
	 'source' => 'Marcus Aurelius',
	 'citation' => 'Meditations',
	 'year' => '143 AD'],

	['quote' => 'I have no money, no resources, no hopes. I am the happiest man alive.',
	 'source' => 'Henry Miller',
	 'citation' => 'Tropic of Cancer',
	 'year' => '1934'],

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

	['quote' => 'I had put this earlier as an example over in your functions.php file: (...) But I was expecting you to add on the appropriate HTML'	,
	 'source' => 'Jennifer Nordell',
	 'citation' => 'Slack',
	 'year' => '2021'],

	['quote' => 'Men at some time are masters of their fates: The fault, dear Brutus, is not in our stars, But in ourselves, that we are underlings.',
	 'source' => 'William Shakespeare ',
	 'citation' => 'Julius Caesar',
	 'year' => '1599'],

	['quote' => 'All human wisdom is contained in these two words - Wait and Hope',
	 'source' => 'Alexandre Dumas',
	 'citation' => 'The Count of Monte Cristo',
	 'year' => '1846']
);

// creating a getRandomQuote function that return a random key from our quote array

function getRandomQuote($quotes) {

	return $quotes[array_rand($quotes)];

}

// creating a printQuote function that uses our random key to generate our quote and with its sources, and conditionally add the citation and year

function printQuote($quotes) {
	!
	$randomQuote = getRandomQuote($quotes);
	$newEmptyString = " ";
	$newEmptyString .= '<p class="quote">' . $randomQuote["quote"] . '</p>';
	$newEmptyString .= '<p class="source">' . $randomQuote["source"];

	if ($randomQuote["citation"] != " ") {
		$newEmptyString .= '<span class="citation">' . " " . $randomQuote["citation"] . '</span>';
	}
	
	if ($randomQuote["year"] != " ") {
		$newEmptyString .= '<span class="year">' . " " .  $randomQuote["year"] . '</span>';
	}

	$newEmptyString .= '</p>';

	return $newEmptyString;

}

printQuote($quotes);

?>
</body>
</html>

