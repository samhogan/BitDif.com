<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<!-- navbar -->
    <nav class='navbar navbar-expand-lg navbar-light bg-light mb-4'>
    	<div class="container">
    		<a class="navbar-brand" href="#">BitDif</a>

    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
	          	<span class="navbar-toggler-icon"></span>
	        </button>

    		<div class="collapse navbar-collapse" id="nav-content">
    			<ul class="navbar-nav mr-auto">	
    				<li class="navbar-nav">
    					<a class="nav-link" href="#">Compare<!-- <span class="sr-only">(current)</span> --></a>
    				</li>

    			</ul>

    		</div>
    	</div>

    </nav>



	<!-- content -->
 	<div class="container">
 		<div class="col-md-12 outline mb-4">
 			<h3 class="text-center">Compare Cryptocurrencies</h3>
 		</div>
		<form> <!-- class="form-inline"> -->
			<div class="form-group row justify-content-md-center no-gutters">
				<div class="col-md-3 outline">
		      		<label class="sr-only" for="crypto1">Example select</label>
	      			<select class="form-control" id="crypto1">
	        			<option>Bitcoin</option>
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
			      	<select class="form-control " id="crypto2">
				        <option>Bitcoin</option>
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

	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
</body>
</html>

