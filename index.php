<?php 

	include('header.php'); 

?>

	<!-- content -->
 	<div class="container">
 		<div class="col-md-12 outline mb-4">
 			<h3 class="text-center">Compare Cryptocurrencies</h3>
 		</div>
		<form action="compare.php" method="get"> <!-- class="form-inline"> -->
			<div class="form-group row justify-content-md-center no-gutters">
				<div class="col-md-3 outline">
		      		<label class="sr-only" for="crypto1">Example select</label>
	      			<select class="form-control" id="crypto1" name="crypto1">
	        			<option value="bitcoin">Bitcoin</option>
	        			<option>Litecoin</option>
				        <option>Ripple</option>
				        <option>Dash</option>
				        <option>Zcash</option>
				    </select>
				</div>
				<div class="col-md-1 outline">
					<p class="vs mb-0">vs</p>
				</div>
				<div class="col-md-3 outline">
			    	<label class="sr-only" for="crypto2">Example select</label>
			      	<select class="form-control " id="crypto2" name="crypto2">
				        <option value="bitcoin">Bitcoin</option>
	        			<option>Litecoin</option>
				        <option>Ripple</option>
				        <option>Dash</option>
				        <option>Zcash</option>
			      	</select>
	    		</div>
	  		</div>
	  		<div class="form-group row justify-content-md-center">
				<div class="col-md-12 outline offset-sm-2 text-center">
	  				<button type="submit" class="btn btn-primary btn-lg">Compare</button>
	  			</div>
	  		</div>
		</form>

  	</div>

<?php include("footer.php"); ?>

