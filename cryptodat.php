<?php
	
	$cryptos = array(

		"bitcoin" => array(
			"name" => "Bitcoin",
			"desc" => "The first and largest peer-to-peer cryptocurrency",
			"price" => "\$something",
			"circ" => 16700000,
			"max" => 20999999.9769,
			"marketcap" => "like, a lot",
			"ticker" => "BTC or XBT",
			"prooftype" => "Proof of Work",
			"hash" => "SHA-256",
			"img" => "Bitcoin.svg",


		),

		"litecoin" => array(
			"name" => "Litecoin",
			"desc" => "One of the first altcoins that aimed to improve upon the technology of Bitcoin",
			"price" => "\$something",
			"circ" => 53000000,
			"max" => 84000000,
			"marketcap" => "less, but still a lot",
			"ticker" => "LTC",
			"prooftype" => "Proof of Work",
			"hash" => "Scrypt",
			"img" => "Litecoin.svg",



		),









	);

	$fields = array(
			array(
				"id" => "desc",
				"name" => "Description"
			),
			array(
				"id" => "price",
				"name" => "Price"
			),
			array(
				"id" => "circ",
				"name" => "Current Supply",
			),
			array(
				"id" => "max",
				"name" => "Maximum Supply",
			),
			array(
				"id" => "marketcap",
				"name" => "Market Cap",
			),
			array(
				"id" => "ticker",
				"name" => "Ticker Symbol",
			),




	)

?>