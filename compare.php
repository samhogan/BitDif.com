<?php 

	include('header.php'); 



	echo $_GET["crypto2"];
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

	$title = $crypto1 . " vs " . $crypto2;

?>
	<h1><?php echo $title; ?></h1>
	<div class="container">
	
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
