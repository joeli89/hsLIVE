<?php 
$pageTitle = "Healthy Selfie | Health &amp; Fitness App";
$section = "contact";
include('inc/header.php'); ?> 
		
        <?php if($_GET["status"] == "thanks") { ?>

             <div class="row">
                <div class="col-sm-12 contact">
                    
                    <h3>Thanks</h3>
                    <p>
                        We'll be in touch soon.
                    </p>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-6 col-md-offset-3 contact-form">
                        
                        <h4>Send us another message</h4>
                        <form method="post" action="assets/contact.php">
                            <input type="text" name="email" placeholder="Email..." class="contact-email">
                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                            <textarea name="message" placeholder="Message..."></textarea>
                            <button type="submit">Send</button>
                        </form>
                        
                    </div>


                </div>

        <?php } else{ ?>
            <!-- How to contact us -->
            <div class="container" id="contactUs">
                <div class="row">
                    <div class="col-sm-12 contact">

                        <h3>How to contact us</h3>
                        <p>
                        	Let's us know what you think? Interested in getting involved? Get in touch!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 contact-form">
                    	
                        <h4>Send us a message</h4>
                        <form method="post" action="assets/contact.php">
                            <input type="text" name="email" placeholder="Email..." class="contact-email">
                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                            <textarea name="message" placeholder="Message..."></textarea>
                            <button type="submit">Send</button>
                        </form>
                        
                    </div>


                </div>
            </div>
        <?php } ?>

        
<?php 
include('inc/footer.php'); ?>