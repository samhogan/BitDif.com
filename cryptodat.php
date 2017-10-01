<?php
	
	$cryptos = array(

		"bitcoin" => array(
			"name" => "Bitcoin",
			"desc" => "The first and largest decentralized cryptocurrency",
			"price" => "\$something",
			"circ" => 16700000,
			"max" => "~21,000,000",//"20,999,999.9769",
			"marketcap" => "like, a lot",
			"ticker" => "BTC or XBT",
			"prooftype" => "Proof-of-Work",
			"hash" => "SHA-256",
			"img" => "Bitcoin.svg",
			"ccsymb" => "BTC",

			"block-time" => "10 minutes",
			"block-size" => "1MB",
			"block-reward" => "12.5 BTC",

			"hardware" => "ASIC",//primary mining hardware

			"genesis" => "2009-01-03",


		),

		"litecoin" => array(
			"name" => "Litecoin",
			"desc" => "One of the first altcoins; aimed to improve upon the technology of Bitcoin",
			"price" => "\$something",
			"circ" => 53000000,
			"max" => "~84,000,000",
			"marketcap" => "less, but still a lot",
			"ticker" => "LTC",
			"prooftype" => "Proof-of-Work",
			"hash" => "Scrypt",
			"img" => "Litecoin.svg",
			"ccsymb" => "LTC",

			"block-time" => "2.5 minutes",
			"block-size" => "1MB",
			"block-reward" => "25 LTC",

			"hardware" => "ASIC",

			"genesis" => "2011-10-07",


		),









	);

	$fields = array(
			array(
				"id" => "desc",
				"name" => "Description",
				"longText" => true,
			),
			array(
				"id" => "price",
				"name" => "Price (USD)",
				"ccf" => "price_usd",
				"prefix" => "\$",
				"decimals" => 2,
			),
			array(
				"id" => "marketcap",
				"name" => "Market Cap",
				"ccf" => "market_cap",
				"prefix" => "\$",
				"decimals" => 2,
			),
			array(
				"name" => "24hr Volume",
				"ccf" => "volume",
				"prefix" => "\$",
				"decimals" => 2,
			),
			array(
				"id" => "circ",
				"name" => "Current Supply",
				"ccf" => "supply",
				"decimals" => 0,
			),
			array(
				"id" => "max",
				"name" => "Maximum Supply",
			),
			array(
				"id" => "ticker",
				"name" => "Ticker Symbol",
			),
			array(
				"id" => "prooftype",
				"name" => "Proof Type",
			),
			array(
				"id" => "hash",
				"name" => "Hash Function",
			),
			array(
				"id" => "block-time",
				"name" => "Block Time",
			),
			array(
				"id" => "block-size",
				"name" => "Max Block Size",
			),
			array(
				"id" => "block-reward",
				"name" => "Current Block Reward",
			),
			array(
				"id" => "hardware",
				"name" => "Primary Mining Hardware",
			),
			array(
				"id" => "genesis",
				"name" => "Genesis Block",
			),
			
			




	)

?>