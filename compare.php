<?php 

	include('header.php'); 

	include("cryptodat.php");

	//echo $_GET["crypto2"];
	$cryptoID1 = $cryptoID2 = "";

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	  $cryptoID1 = test_input($_GET["crypto1"]);
	  $cryptoID2 = test_input($_GET["crypto2"]);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = strtolower($data);
	  return $data;
	}

	$crypto1 = $cryptos[$cryptoID1];
	$crypto2 = $cryptos[$cryptoID2];


	$title = $crypto1["name"] . " vs " . $crypto2["name"];

	$marketData1 = json_decode(file_get_contents("http://coincap.io/page/" . $crypto1["ccsymb"]), true);
	$marketData2 = json_decode(file_get_contents("http://coincap.io/page/" . $crypto2["ccsymb"]), true);

?>

	<h1 id="title"><?php echo $title; ?>: What's the Difference?</h1>
	<div class="container">
	
		<div class="row justify-content-md-center grid-row no-gutters">
			<div class="col-md-3 outline p-2">
				
			</div>
			<div class="col-md-3 col-6 outline p-2 text-center">
				<img src=<?php echo "images/" . $crypto1["img"] ?> class="icon">
				<h3 class="pt-3"><?php echo $crypto1["name"] ?></h3>
			</div>
			<div class="col-md-3 col-6 outline p-2 text-center">
				<img src=<?php echo "images/" . $crypto2["img"] ?> class="icon">
				<h3 class="pt-3"><?php echo $crypto2["name"] ?></h3>
			</div>

		</div>

		<?php
			$light = true;
			foreach ($fields as $field) 
			{
				$id = $field["id"];
			    $name = $field["name"];
			    $val1 = $val2 = "";
			    if(array_key_exists("ccf", $field))
			    {
			    	$val1 = $marketData1[$field["ccf"]];
			    	$val2 = $marketData2[$field["ccf"]];

			    	$dec = $field["decimals"];
			    	$val1 = round($val1, $dec);
			    	$val2 = round($val2, $dec);

			    	//format with commas in thousands
			    	if($val1>10000 || $val2>10000)
			    	{
			    		$val1 = number_format($val1, $dec, '.', ',');
			    		$val2 = number_format($val2, $dec, '.', ',');
			    	}
			    	else
			    	{
			    		$val1 = number_format($val1, $dec, '.', '');
			    		$val2 = number_format($val2, $dec, '.', '');
			    	}

			    	if(array_key_exists("prefix", $field))
			    	{

			    		$val1 = $field["prefix"] . $val1;
			    		$val2 = $field["prefix"] . $val2;
			    		
			    	}

			    }
			    else
			    {
				    $val1 = $crypto1[$id];
				    $val2 = $crypto2[$id];	
				}
				$boxColor = $light ? "grid-box-light" : "grid-box-dark";
				$classes1 = "grid-box px-0 py-1 vcenter hcenter $boxColor";
				$classes2 = "grid-box px-0 py-3 vcenter hcenter $boxColor";
				$classes3 = "grid-box px-0 py-1 vcenter hcenter $boxColor";

				if(array_key_exists("longText", $field))
				{
					$classes2 = "grid-box px-2 py-2 vcenter hcenter $boxColor";
					$classes3 = "grid-box px-2 py-2 vcenter hcenter $boxColor";
				}

		?>
			
		<div class="row justify-content-md-center grid-row no-gutters">
			<div class="col-md-3 outline p-2">
				<?php echo "<div class='$classes1'>" ?>
					<p class="field"><?php echo $name ?></p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<?php echo "<div class='$classes2'>" ?>
					<p><?php echo $val1 ?></p>
				</div>
			</div>
			<div class="col-md-3 col-6 outline p-2">
				<?php echo "<div class='$classes3'>" ?>
					<p><?php echo $val2 ?></p>
				</div>
			</div>

		</div>

		<?php
			$light = !$light;	
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
