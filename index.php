<?php include('inc/password_protect.php'); ?>
<?php include('inc/thanks-message.php'); ?>
<?php 
$pageTitle = "Healthy Selfie | Health &amp; Fitness App";
$section = "index";
include('inc/header.php'); ?> 
		
       <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    	
                        <div class="col-sm-7 text" itemscope itemtype="http://schema.org/MobileApplication">
                        	<div class="logo">
                        		<h1 itemprop="name" class="animated bounceIn delay-1"><a href="index.html">Healthy Selfie</a></h1>
                        	</div>
                            <h2>Healthy Selfie.<br> <span>Picture a new you.</span></h2>
                            <div class="description">
                            	<p>Healthy Selfie is a social networking app that allows you to track your body’s physical evolution.</p>
                            </div>
                            
                            <div class="top-button">
                            	<a class="button-1" href="#subscribe" title="Subscribe for updates!"><i class="fa fa-apple"></i> Coming Aug '14</a>
                            </div>

                            <a href="#features">
                            	<div class="top-arrow">
                            		<i class="fa fa-chevron-down"></i>
                            	</div>
                            </a>
                        </div>
                        <div class="col-sm-5 phone" itemscope itemtype="http://schema.org/MobileApplication">
                        	<img class="animated slideInRight" itemprop="screenshot" src="assets/img/selfies/healthy_selfie.png" title="Track &amp; Monitor Your Body Using our App." alt="Healthy Selfie is a mobile app that allows you to monitor and track your body’s progression whilst gaining inspiration from others." />
                        	<span style="display:none;" itemprop="carrierRequirements" >Currently only Available on Apple iOS.</span>
                        	<span style="display:none;"  itemprop="applicationCategory">Health, Fitness, app, mobile app, selfie, photography, Healthy Selfie, iOS App, iOS Application.</span>
                        	<span style="display:none;"  itemprop="device">apple iphone, iphone 5, iPhone 5S, iphone 4, IPhone 4s, iOS 7, iOS 6</span>
                        	<span style="display:none;"  itemprop="operatingSystem">apple iOS, iOS 7, iOS 6, iOS</span>
                        	<!-- <img src="assets/img/iphone-1.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <!-- Features -->
        <div class="features-container" id="features">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features">
	                    <h3>Main features</h3>
	                    
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-xs-4 col-md-2">
	                	<a href="features.php#selfies">
	                		<div class="feature-icn">
	                			<img src="assets/img/icons/me.png" alt="Healthy Selfie App, track and monitor your bodys progression through taking selfies, with our new iOS mobile application." />
	                		</div>
	                	</a>
	                    <h4>Selfies &amp; Stats</h4>
	                    <p>
	                    	Date stamped photos to track your progress and motivate.
	                    </p>
	                </div>

	                <div class="col-xs-4 col-md-2">
	                	<a href="features.php#compares">
		                	<div class="feature-icn">
		                		<img src="assets/img/icons/compare.png" alt="Healthy Selfie App, track and monitor your bodys progression through taking selfies, with our new iOS mobile application."  />
		                	</div>
	                	</a>
	                    <h4>Compares</h4>
	                    <p>
	                    	Compare selfies and see your body's evolution.
	                    </p>
	                </div>

	                <div class="col-xs-4 col-md-2">
	                	<a href="features.php#foodDiary">
		                	<div class="feature-icn">
		                		<img src="assets/img/icons/foodDiary.png" alt="Healthy Selfie App, track and monitor your bodys progression through taking selfies, with our new iOS mobile application."  />
		                	</div>
		                </a>
	                    <h4>Food Diary</h4>
	                    <p>
	                    	Take photos of your food and monitor what you're eating.
	                    </p>
	                </div>
	                <div class="col-xs-4 col-md-2">
	                	<a href="features.php#scrapbooks">
		                	<div class="feature-icn">
		                		<img src="assets/img/icons/scrapbooks.png" alt="Healthy Selfie App, track and monitor your bodys progression trhough taking selfies, with our new iOS mobile application." />
		                	</div>
		                </a>
	                    <h4>Scrapbooks</h4>
	                    <p>
	                    	Tack "Fit-spiration" to your own personlised Scrapbooks.
	                    </p>
	                </div>
	                 <div class="col-xs-4 col-md-2">
	                	<a href="features.php#discover">
		                	<div class="feature-icn">
		                		<img src="assets/img/icons/explore.png" alt="Healthy Selfie App, track and monitor your bodys progression trhough taking selfies, with our new iOS mobile application." />
		                	</div>
		                </a>
	                    <h4>Discover</h4>
	                    <p>
	                    	See what does and doesn't work.
	                    </p>
	                </div>
	                 <div class="col-xs-4 col-md-2">
	                	<a href="features.php#fitFeed">
		                	<div class="feature-icn">
		                		<img src="assets/img/icons/fitFeed-white.png" alt="Healthy Selfie App, track and monitor your bodys progression trhough taking selfies, with our new iOS mobile application." />
		                	</div>
		                </a>
	                    <h4>Fit Feed</h4>
	                    <p>
	                    	See what others are up to.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Subscription form -->
        <div class="subscribe-container" id="subscribe">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 subscribe">
	                    <h3>Show your interest</h3>
	                    <p>When Healthy Selfie is available for download we'll let you know:</p>
	                    <form class="form-inline" action="assets/subscribe.php" method="post">
	                        <input type="text" name="email" placeholder="Enter your email...">
	                        <button type="submit" class="btn">Submit</button>
	                    </form>
	                   
	                    <div class="success-message"></div>
	                    <div class="error-message"></div>
	                </div>
	            </div>
	        </div>
        </div>

               <!-- Single feature -->
        <div class="single-feature-container single-feature-bg" name="" id="news">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature-text">
	                    <h3>Latest News</h3>
	                    

						<div class="media">
						  <a class="pull-left" href="#">
						    <img class="media-object" src="assets/img/logos/hs-news.png" alt="...">
						  </a>
						  <div class="media-body">
						    <h4 class="media-heading">We're nearly there!!</h4>
						    <p>We've got some good news - we're days away from launch now. We'll keep you posted on Facebook & Twitter.</p>
						  </div>
						</div>

						<div class="media">
						  <a class="pull-left" href="http://summitdublin.com/">
						    <img class="media-object" src="assets/img/summit.png" alt="...">
						  </a>
						  <div class="media-body">
						    <h4 class="media-heading">The Summit Dublin</h4>
						    <p>We're proud to announce that we've been invited to exhibit Summit Dublin, between the <b>4-6th of November 2014</b>.</p>
						    <a href="http://summitdublin.com/">Visit <i class="fa fa-chevron-right"></i></a>
						  </div>
						</div>

	                    
	                </div>
	            </div>
	           
	        </div>
        </div>
        
         

        </div>

        
<?php 
include('inc/footer.php'); ?>