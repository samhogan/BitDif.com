<?php 

	include('header.php'); 

	include("cryptodat.php");

	//echo $_GET["crypto2"];
	$crypto1 = $crypto2 = "";

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	  $crypto1 = test_input($_GET["crypto1"]);
	  $crypto2 = test_input($_GET["crypto2"]);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = strtolower($data);
	  return $data;
	}

	$title = $cryptos[$crypto1]["name"] . " vs " . $cryptos[$crypto2]["name"];

?>
	<h1 id="title"><?php echo $title; ?>: What's the Difference?</h1>
	<div class="container">
	
		<div class="row justify-content-md-center grid-row no-gutters">
			<div class="col-md-3 outline p-2">
				
			</div>
			<div class="col-md-3 col-6 outline p-2 text-center">
				<img src=<?php echo "images/" . $cryptos[$crypto1]["img"] ?> class="icon">
				<h3 class="pt-3"><?php echo $cryptos[$crypto1]["name"] ?></h3>
			</div>
			<div class="col-md-3 col-6 outline p-2 text-center">
				<img src=<?php echo "images/" . $cryptos[$crypto2]["img"] ?> class="icon">
				<h3 class="pt-3"><?php echo $cryptos[$crypto2]["name"] ?></h3>
			</div>

		</div>

		<?php
			foreach ($fields as $field) 
			{
				$id = $field["id"];
			    $name = $field["name"];
			    $val1 = $cryptos[$crypto1][$id];
			    $val2 = $cryptos[$crypto2][$id];

		?>
			
		<div class="row justify-content-md-center grid-row no-gutters">
			<div class="col-md-3 outline p-2">
				<div class="grid-box px-3 py-1 vcenter">
					<p class="field"><?php echo $name ?></p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<div class="grid-box px-3 py-3 vcenter">
					<p><?php echo $val1 ?></p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<div class="grid-box px-3 py-1 vcenter">
					<p><?php echo $val2 ?></p>
				</div>
			</div>

		</div>

		<?php

		}
		
		?>

		<div class="row justify-content-md-center grid-row no-gutters">
			<div class="col-md-3 outline p-2">
				<div class="grid-box px-3 py-1">
					<p>test</p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<div class="grid-box px-3 py-3 vcenter">
					<p>test</p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<div class="grid-box px-3 py-1">
					<p>test</p>
				</div>
			</div>

		</div>
	</div>

<?php include("footer.php"); ?>
