        <div class="subscribe-container" id="subscribe">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 subscribe">
	                    <h2>Show your interest</h2>
	                    
		                    <?php if($_GET["subscribe"] == "success") { ?>
		                    	<h1>Wow, we're flattered, we'll keep you updated!</h1>
		                    	<img class="animated flip delay-2" src="assets/img/icons/flattered.png">
		                    	<h1 class="animated fadeInUp delay-3">Thanks!</h1>
		                    <?php } else{?>
		                    <p>When Healthy Selfie is available for download we'll let you know:</p>
		                    	<form class="form-inline" action="assets/subscribe.php" method="post">
			                        <input type="text" name="email" placeholder="Enter your email...">
			                        <button type="submit" class="btn">Submit</button>
		                    	</form>
		                    <?php } ?>
	                </div>
	            </div>
	        </div>
        </div>