<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dedicated Servers | Kiev, Ukraine | Leapswitch Networks</title>
    <?php include("../../base-url.php");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include("../../header.php"); ?>
    <!--page_container-->
    <div class="page_container">
      <!-- Banner -->
      <div class="wrap block" style="padding:0; border:0;">
                <div class="banner-container banner-img banner-dedicated">
                  <div class="inner-container">
                    <div class="container">
                      <div class="span7">
                        <div class="banner-text">
                          <h1><span class="h5">Kiev, Ukraine</span></h1>
                          <?php include("../../banner-content/dedicated-banner.php"); ?>
                          <a href="kiev-ukraine/dedicated-servers/index.php#plan" type="button" class="btn btn-primary btn-lg">View Plans</a>
                        </div>
                      </div>
                      <div class="span5"></div>
                    </div>
                  </div>
                </div>
      </div>
      <div class="wrap">
        <!-- Choose Location -->
        <form action="" id="countrybox">
            <label for="">Select Your Location</label>
            <select onchange="location = this.options[this.selectedIndex].value;">
               <option value="" disabled selected="">Please select your location</option>
                <optgroup label="USA">
                  <option value="asheville-usa/dedicated-servers/index.php">Asheville, NC</option>
                  <option value="los-angeles-usa/dedicated-servers/index.php">Los Angeles, CA</option>
                </optgroup>
                <optgroup label="Europe">
                  <option value="lisbon-portugal/dedicated-servers/index.php">Lisbon, Portugal</option>
                  <option value="kiev-ukraine/dedicated-servers/index.php" selected>Kiev, Ukraine</option>
                  <option value="frankfurt-germany/dedicated-servers/index.php">Frankfurt, Germany</option>
                </optgroup>
                <optgroup label="India">
                  <option value="pune-india/dedicated-servers/index.php">Pune, MH</option>
                  <option value="mumbai-india/dedicated-servers/index.php">Mumbai, MH</option>
                  <option value="delhi-india/dedicated-servers/index.php">Delhi, NCR</option>
                </optgroup>
            </select>​
        </form>
        <!--  Product Plan -->
        <section class="service_area bg-gray" id="plan">
            <div class="container">
                <div class="container-fluid">
                  <?php include("../../service-info/dedicated-servers.php"); ?>
                    <div class="section-title textcenter">
                        <h2>Dedicated Server Hosting</h2>
                    </div>
                    <div class='product-wrapper row-fluid'>
                      <div class='product-line row-fluid mobile-form-horizontal'>
                        <div class='package span3'>
                          <div class='name'>Quad Core</div>
                          <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                          { ?>
                          <strong>₹8000 </strong>
                          <?php }else{ ?>
                          <strong>$135</strong>
                          <?php }?></div>
                          <div class='trial'><?php
                          if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                          {
                          echo '
                          <a href="https://service.leapswitch.com/cart.php?a=add&pid=503&currency=2"class="orderbutton">CONFIGURE NOW</a>
                          ';
                          }
                          else
                          {
                          echo '
                          <a href="https://service.leapswitch.com/cart.php?a=add&pid=503&currency=1" class="orderbutton">CONFIGURE NOW</a>
                          ';
                          }
                          ?>
                          </div>
                          <hr>
                          <ul>
                          <li>
                          <strong>E3-1230v3</strong> Dedicated Server
                          </li>
                          <li>
                          <strong>16 GB</strong> RAM (upto 32 GB RAM)
                          </li>
                          <!--<li>
                          <strong>32 GB</strong> RAM Capacity
                          </li> -->
                          <li>
                          <strong>Single</strong> Processor
                          </li>
                          <li>
                          <strong>4</strong> cores (8 vCPU)<!-- Physical Cores -->
                          </li>
                          <!--<li>
                          <strong>8</strong> vCPU (Logical Cores)
                          </li> -->
                          <li>
                          <strong>1TB</strong> HDD (upto 4)
                          </li>
                          <li>
                          <strong>100 mbps</strong> Port speed
                          </li>
                          <li>
                          <strong>2000GB</strong> Data Transfer
                          </li>
                          </ul>
                        </div>
                       <div class="span9">
                          <?php
                          // define variables and set to empty values
                          $msg = "";
                          $nameErr = $emailErr = $messageErr = "";
                          $name = $email = $message = "";
                          if ($_POST["contact-hide"] == "check") {
                              //if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              if (empty($_POST["name"])) {
                              $err = $nameErr = "Name is required";
                              } else {
                              $name = test_input($_POST["name"]);
                              // check if name only contains letters and whitespace
                              if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                              $err = $nameErr = "Only letters and white space allowed";
                              }
                              }
                              if (empty($_POST["email"])) {
                              $err = $emailErr = "Email is required";
                              } else {
                              $email = test_input($_POST["email"]);
                              // check if e-mail address is well-formed
                              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $err = $emailErr = "Invalid email format";
                              }
                              }
                              if (empty($_POST["message"])) {
                              $err = $messageErr = "Message is required";
                              } else {
                              $message = test_input($_POST["message"]);
                              }
                              if(empty($err)){
                                  //echo '<script>window.location.href("contactmail.php") ;</script>';
                                  /*******************/
                                  $to = "pradnya.burgute@leapswitch.com";
                                  $from = $_REQUEST['email'];
                                  $subject = 'New Customize Plan Request : ' . $name;
                                  $name = $_REQUEST['name'];
                                  $email = $_POST['email'];
                                  $description = $_POST['message'];
                                  $message = "
                                  <html>
                                    <head>
                                      <title>New Customization Request For Dedicated Servers</title>
                                    </head>
                                    <body>
                                      <p>You have received a new Customization Request from Kiev, on your website www.leapswitch.com dedicated form.</p>
                                      <table>
                                        <caption style='text-align:left'>
                                        <strong>Here are the details -</strong>
                                        </caption>
                                        <tr>
                                          <td><strong>Name</strong></td>
                                          <td><strong> : </strong>$name</td>
                                        </tr>
                                        <tr>
                                          <td><strong>Email Address</strong></td>
                                          <td><strong> : </strong>$email</td>
                                        </tr>
                                        <tr>
                                          <td><strong>Message</strong></td>
                                          <td><strong> : </strong>$description</td>
                                        </tr>
                                      </table>
                                    </body>
                                  </html>
                                  ";
                                  // Always set content-type when sending HTML email
                                  $headers = "MIME-Version: 1.0" . "\r\n";
                                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                  // More headers
                                  $headers .= 'From:' . $from . "\r\n";
                                  $headers .= 'Cc:' . $to . "\r\n";
                                  $send = mail($to,$subject,$message,$headers);
                                  if($send)
                                  {
                                  //header( "Location: http://www.YourDomain.com/thankyou.html" );
                                  $msg = "<p style='text-align:center; padding:60px; background-color:#ffffff;font-size: 2em; font-weight: 600; border: 3px solid #e8e8e8; border-radius: 7px;'>Thank You!</p>";
                                  }
                                  else
                                  {
                                  $msg = "<p style='text-align:center; padding:60px; background-color:#ffffff; border: 3px solid #e8e8e8; border-radius: 7px;'>We encountered an error sending your mail, please notify sales@leapswitch.com</p>";
                                  }
                                  /******************/
                                }
                          }
                              function test_input($data) {
                              $data = trim($data);
                              $data = stripslashes($data);
                              $data = htmlspecialchars($data);
                              return $data;
                              }
                          if(empty($msg)){
                          ?>
                          <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                              <legend>Customize Your Plan With Us</legend>
                              <input type="hidden" name="contact-hide" value="check"> <!-- Hidden field to trigger If condition in this Form-->
                              <div class="control-group-box">
                                  <div class="control-group">
                                    <label class="control-label" for="inputName">Name*</label>
                                    <div class="controls">
                                      <input type="text" id="inputName" placeholder="Name" name="name">
                                    <span class="error"><?php echo $nameErr;?></span>
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email*</label>
                                    <div class="controls">
                                      <input type="text" id="inputEmail" placeholder="Email" name="email">
                                    <span class="error"><?php echo $emailErr;?></span>
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" for="inputMessage">Your Requirement*</label>
                                    <div class="controls">
                                      <textarea type="text" name="message" cols="10" id="inputMessage" placeholder="Share your requirement here..."></textarea>
                                    <span class="error"><?php echo $messageErr;?></span>
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <div class="controls">
                                      <button type="submit" class="btn-submit">Send Your Requirement</button>
                                    </div>
                                  </div>
                              </div>
                          </form>
                          <?php
                          }
                          else{
                            echo $msg;
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                    <script>
                      function myFunction() {
                        var dots = document.getElementById("dots");
                        var moreText = document.getElementById("more");
                        var btnText = document.getElementById("myBtn");

                        if (dots.style.display === "none") {
                          dots.style.display = "block";
                          btnText.innerHTML = '<span class="see-plans">See more plans</span>';
                          moreText.style.display = "none";
                        } else {
                          dots.style.display = "none";
                          btnText.innerHTML = '<span class="see-plans">See Less</span>';
                          moreText.style.display = "flex";
                        }
                      }
                    </script>
                </div>
            </div>
        </section>
        <!--  Features -->
        <section class="bg-white">
          <div class="container">
              <div class="container-fluid"><!-- span12 -->
                <div class="features">
                <div class="row-fluid">
                <div class="section-title"><h2>Advanced Features</h2></div>
                <div class="row-fluid gray-border-bottom">
                  <div class="span4">
                  <div class="featureicon">
                  <img src="img/features/grow.svg" alt="Grow fast with Performance" style="height: 70px;">
                  </div>
                  <div class="featuretext"><strong>Grow fast with Performance</strong></div>
                  </div>
                  <div class="span4 gray-border-left">
                  <div class="featureicon"><img src="img/features/24-hours.svg" alt="24/7 Support & Monitoring*" style="height: 70px;"></div>
                  <div class="featuretext"><strong>24/7 Support &amp; Monitoring*</strong></div>
                  </div>
                  <div class="span4 gray-border-left">
                  <div class="featureicon"><img src="img/features/deploy.svg" alt="Quick deployment" style="height: 70px;"></div>
                  <div class="featuretext"><strong>Quick deployment</strong></div>
                  </div>
                </div>
                <div class="row-fluid">
                  <div class="span4">
                  <div class="featureicon">
                  <img src="img/features/customization.svg" alt="Hardware Customization" style="height: 70px;">
                  </div>
                  <div class="featuretext"><strong>Hardware customization</strong></div>
                  </div>
                  <div class="span4 gray-border-left">
                  <div class="featureicon"><img src="img/features/setup.svg" alt="Initial setup waived off" style="height: 70px;"></div>
                  <div class="featuretext"><strong>Initial setup waived off</strong></div>
                  </div>
                  <div class="span4 gray-border-left ">
                  <div class="featureicon"><img src="img/features/server-manage.svg" alt="Server management*" style="height: 70px;"></div>
                  <div class="featuretext"><strong>Server management*</strong></div>
                  </div>
                </div>
                </div>
                </div>
              </div>
          </div>
        </section>
        <!-- All plans include -->
        <section class="bg-gray plans-include">
          <div class="container">
            <div class="container-fluid">
              <div class="row-fluid"><!-- span12 -->
                <div class="section-title textcenter"><h2>All plans include</h2></div>
              </div>
              <div class="row-fluid benefits">
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">Free setup</div></div></div>
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">Full Root / Administrator Access</div></div></div>
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">Hardware level access via IPMI</div></div></div>
              </div>
              <div class="row-fluid benefits">
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">HDD/SSD drives</div></div></div>
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">99.9% Uptime Guarantee</div></div></div>
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">100/1000 Mbps Port Speed</div></div>
                </div>
              </div>
              <div class="row-fluid benefits">
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">Raid Controler</div></div></div>
                <div class="span4"><div class="all-plans-item"><div class="iconcheck"></div><div class="commanpoint">24/7 Support via Live Chat, Phone and helpdesk*</div></div></div>
              </div>
            </div>

          </div>
        </section>
        <!--  Other Plans -->
        <section class="bg-white quick-links">
          <div class="container boxlink">
            <div class="container-fluid">
              <div class="row-fluid">
              <div class="span6 link-box nomargin">
              <span class="box-heading">Move to lightning fast<br>SSD based Servers<br><a href="kiev-ukraine/managed-vps-hosting/linux.php" class="btn btn-primary btn-lg">Managed Linux Cloud Servers</a></span> </div>
              <div class="span6 link-box nomargin gray-border-left">
                <span class="box-heading">Hosting PHP websites<br>for your customers?<br><a href="kiev-ukraine/reseller-web-hosting/linux.php" class="btn btn-primary btn-lg">Reseller Linux Web Hosting</a></span>
              </div>
              </div>
            </div>
          </div>
        </section>
        <!--  Chat With Us -->
        <?php include("../../chating.php"); ?>
        <!--  FAQ -->
        <?php include("../../faq/dedicated-server-faq.php"); ?>
      </div>
      <!--//page_container-->
      <?php include("../../footer.php"); ?>
