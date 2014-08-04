<?php 
$pageTitle = "Healthy Selfie | Support";
$section = "support";
$nav = "no-nav";
include("inc/info-header.php");
?> 

    <div class="container" id="contactUs">

        <?php if($_GET["status"] == "thanks") { ?>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="alert alert-success" role="alert">
                                <h1>Awesome, thanks for your feedback we really appreciate it!</h1>

                            </div>
                            <h1>Support</h1>
                          
                                    <p>
                                        If you would like to know something, or report something, e.g. a <i class="fa fa-bug"></i>, please get in contact with us here and we'll get back to you 
                                        as soon as possible. Thank you.
                                    </p>
                               

                            <div class="row">

                                <div class="col-md-12 support-form">
                                    <form method="post" action="assets/support_form.php">
                                        <input type="text" name="email" placeholder="Email..." class="contact-email" >
                                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                                        <textarea name="message" placeholder="Message..."></textarea><br>
                                        <button type="submit">Send</button>
                                    </form>
                                </div>

                            </div>
     
                        </div>
                    </div>
                </div>
            </div>

            

   <?php } else { ?>

        <?php if($_GET["try"] == "again") { ?>

                        <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="alert alert-danger" role="alert">
                                <h1>Ahhh, sorry please make sure your details are entered correctly.</h1>

                            </div>
                                <h1>Support</h1>
                              
                                        <p>
                                            If you would like to know something, or report something, e.g. a <i class="fa fa-bug"></i>, please get in contact with us here and we'll get back to you 
                                            as soon as possible. Thank you.
                                        </p>
                                   

                                <div class="row">

                                    <div class="col-md-12 support-form">
                                        <form method="post" action="assets/support_form.php">
                                            <input type="text" name="email" placeholder="Email..." class="contact-email" >
                                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                                            <textarea name="message" placeholder="Message..."></textarea><br>
                                            <button type="submit">Send</button>
                                        </form>
                                    </div>

                                </div>
         
                            </div>
                        </div>
                    </div>
                </div>

            <?php }else { ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Support</h1>
                          
                                    <p>
                                        If you would like to know something, or report something, e.g. a <i class="fa fa-bug"></i>, please get in contact with us here and we'll get back to you 
                                        as soon as possible. Thank you.
                                    </p>
                               

                            <div class="row">

                                <div class="col-md-8 support-form">
                                    <form method="post" action="assets/support_form.php">
                                        <input type="text" name="email" placeholder="Email..." class="contact-email" >
                                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                                        <textarea name="message" placeholder="Message..."></textarea><br>
                                        <button type="submit">Send</button>
                                    </form>
                                </div>

                            </div>
     
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /#page-content-wrapper -->
        <?php } ?>
     <?php } ?>


<?php include("inc/info-footer.php"); ?>