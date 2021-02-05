<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
	<?php
		$str = 'The Team is always stronger than an Individual.';
		$word = 'individual';
		if (stripos($str,$word) > 0 ){
			echo "$word is present in [$str]";
		}
	?>
<hr/>
<h2>Calculate the Length of the String</h2>
	<?php
		echo "length of string [$str] is ".strlen($str);

	?>
<hr/>
<h2>Remove White Spaces from left in the String</h2>
	<?php
		$spaces = "        ";
		$name = $spaces."partha";
		echo ltrim($name);
	?>
<hr/>
<h2>Reverse the String</h2>
	<?php
		echo "Reverse the string [$str] is ".strrev($str);

	?>

<hr/><hr/>
<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
	<?php
		$block = "A stock market, equity market, or share market is the aggregation of buyers and sellers of stocks (also called shares), which represent ownership claims on businesses; these may include securities listed on a public stock exchange, as well as stock that is only traded privately, such as shares of private companies which are sold to investors through equity crowdfunding platforms. Investment in the stock market is most often done via stockbrokerages and electronic trading platforms. Investment is usually made with an investment strategy in mind.

			Stocks can be categorized by the country where the company is domiciled. For example, Nestlé and Novartis are domiciled in Switzerland and traded on the SIX Swiss Exchange, so they may be considered as part of the Swiss stock market, although the stocks may also be traded on exchanges in other countries, for example, as American depositary receipts (ADRs) on U.S. stock markets.";

	echo wordwrap($block,100).PHP_EOL;


	?>
<hr/>
<h2>Find and Replace the word in upper case</h2>
	<?php
		$uword = strtoupper($word);
		echo "Replace string: ".str_replace('individual',$uword,$str).PHP_EOL;

	?>
<hr/>
<h2>Count number of words</h2>
	<?php
		echo "Word count in this string '$str' : ".str_word_count($str);

	?>

<hr/>
<h2>Shuffle the Strings</h2>
	<?php
		echo "Shuffle this string $str : ".str_shuffle($str);

	?>
</body>
</html>