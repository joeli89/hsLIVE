<?php 
$pageTitle = "Terms of Use";
$section = "jobs";
include("inc/info-header.php");
?>



    <?php 
        if($_GET["status"] == "thanks") { ?>

                 <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="alert alert-success" role="alert">
                            <h1>Sweet, we got it! <i class="fa fa-thumbs-o-up"></i></h1>
                            <h4>Good Luck and we'll be in touch soon. Thanks.</h4>
                          </div>
                            <!-- <h1>Jobs</h1> -->
                            <div class="privacy-body">
                                <p>If you're unusual and interested in both Tech and Health & Fitness, we want you! If any of the positions below are you, and you're interested
                                 in working with the best health and fitness start up in the world please apply and let us know what you do and why you'd be perfect for the role.
                                </p>
                                <div class="bs-example">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Job</th>
                                          <th class="startDate">Start</th>
                                          <th>Description</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <div id="job-application">
                                            <div class="row">

                                                    <div class="col-md-12" id="support-form">
                                                        <h1>Apply</h1>
                                                        <form method="post" action="assets/jobApplication.php">
                                                            <input type="text" name="email" placeholder="Email" class="contact-email" >
                                                            <input type="text" name="subject" placeholder="Position" class="contact-subject">
                                                            <textarea name="message" placeholder="Message"></textarea><br>
                                                            <button type="submit">Send</button>
                                                        </form>
                                                    </div>

                                            </div>
                                        </div>
                                        <tr>
                                          <td><b>iOS Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in working with XCode, Objective-C, PHP, 
                                            Laravel Framework, Flurry Analytics, CDNs and willing to learn Swift.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                        <tr>
                                          <td><b>Android Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in JAVA, PHP,
                                            Laravel Framework, Flurry Analytics and CDNs.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                        <tr>
                                          <td><b>Marketing &amp; Events Intern</b></td>
                                          <td class="startDate">08/09/2014</td>
                                          <td>No prerequisites required. A long as you're young, fun, innovative and willing to get your hands dirty then apply here. </td>
                                          <td ><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
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
                        <div class="col-lg-12">
                          <div class="alert alert-danger" role="alert">
                            <h1>Houston we have a problem. <i class="fa fa-thumbs-o-down"></i></h1>
                            <h4>Please try again, and make sure all your details are entered correctly. Thanks.</h4>
                          </div>
                            <!-- <h1>Jobs</h1> -->
                            <div class="privacy-body">
                                <p>If you're unusual and interested in both Tech and Health & Fitness, we want you! If any of the positions below are you, and you're interested
                                 in working with the best health and fitness start up in the world please apply and let us know what you do and why you'd be perfect for the role.
                                </p>
                                <div class="bs-example">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Job</th>
                                          <th class="startDate">Start</th>
                                          <th>Description</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <div id="job-application">
                                            <div class="row">

                                                    <div class="col-md-12" id="support-form">
                                                        <h1>Apply</h1>
                                                        <form method="post" action="assets/jobApplication.php">
                                                            <input type="text" name="email" placeholder="Email" class="contact-email" >
                                                            <input type="text" name="subject" placeholder="Position" class="contact-subject">
                                                            <textarea name="message" placeholder="Message"></textarea><br>
                                                            <button type="submit">Send</button>
                                                        </form>
                                                    </div>

                                            </div>
                                        </div>
                                        <tr>
                                          <td><b>iOS Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in working with XCode, Objective-C, PHP, 
                                            Laravel Framework, Flurry Analytics, CDNs and willing to learn Swift.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                        <tr>
                                          <td><b>Android Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in JAVA, PHP,
                                            Laravel Framework, Flurry Analytics and CDNs.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                        <tr>
                                          <td><b>Marketing &amp; Events Intern</b></td>
                                          <td class="startDate">08/09/2014</td>
                                          <td>No prerequisites required. A long as you're young, fun, innovative and willing to get your hands dirty then apply here. </td>
                                          <td ><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                
                            </div>
                    </div>
                </div>
            </div>


      <?php }else{ ?>

                <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Jobs</h1>
                            <div class="privacy-body">
                                <p>If you're unusual and interested in both Tech and Health & Fitness, we want you! If any of the positions below are you, and you're interested
                                 in working with the best health and fitness start up in the world please apply and let us know what you do and why you'd be perfect for the role.
                                </p>
                                <div class="bs-example">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Job</th>
                                          <th class="startDate">Start</th>
                                          <th>Description</th>
                                          <th></th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                        <div id="job-application">
                                          <div class="row">

                                                  <div class="col-md-12" id="support-form">
                                                      <h1>Apply</h1>
                                                      <form method="post" action="assets/jobApplication.php">
                                                          <input type="text" name="email" placeholder="Email" class="contact-email" >
                                                          <input type="text" name="subject" placeholder="Position" class="contact-subject">
                                                          <textarea name="message" placeholder="Message"></textarea><br>
                                                          <button type="submit">Send</button>
                                                      </form>
                                                  </div>

                                          </div>
                                      </div>
                                        <tr>
                                          <td><b>iOS Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in working with XCode, Objective-C, PHP, 
                                            Laravel Framework, Flurry Analytics, CDNs and willing to learn Swift.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>

                                        </tr>
                                        <tr>
                                          <td><b>Android Engineer</b></td>
                                          <td class="startDate">01/09/2014</td>
                                          <td>Must be a legend, with the ability to work in a close team. Previous experience in JAVA, PHP,
                                            Laravel Framework, Flurry Analytics and CDNs.</td>
                                          <td><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                        <tr>
                                          <td><b>Marketing &amp; Events Intern</b></td>
                                          <td class="startDate">08/09/2014</td>
                                          <td>No prerequisites required. A long as you're young, fun, innovative and willing to get your hands dirty then apply here. </td>
                                          <td ><a href="#job-application" class="apply-link">Apply</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>


                
                            </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    <?php } ?>


        <!-- /#page-content-wrapper -->

<?php include("inc/info-footer.php"); ?>
