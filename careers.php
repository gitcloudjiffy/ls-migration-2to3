<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Careers - Leapswitch Networks Pvt. Ltd.</title>
        <?php include("base-url.php");?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <?php include("header.php"); ?>
        <!--page_container-->
        <div class="page_container join-us">
        <div class="wrap block" style="padding:0; border:0;" id="career-top">
            <div class="banner-container banner-img banner-domain">
                <div class="inner-container">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text text-center">
                                <h1>Career</h1>
                                <p class="sub-title">Join us in providing best quality <br> End to End web hosting solution across the globe</p>
                            </div>
                            <div class="row">
                                <div class="span10 offset1">
                                <?php// define variables and set to empty values
                                        $msg = "";
                                        $emailErr = "";
                                        $email = "";
                                        if ($_POST["contact-hide"] == "check") {
                                            //if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            if (empty($_POST["email"])) {
                                            $err = $emailErr = "Email is required";
                                            } else {
                                            $email = test_input($_POST["email"]);
                                            // check if e-mail address is well-formed
                                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            $err = $emailErr = "Invalid email format";
                                            }
                                            }
                                            if(empty($err)){
                                                //echo '<script>window.location.href("contactmail.php") ;</script>';
                                                /*******************/
                                                $to = "pradnya.burgute@leapswitch.com";
                                                $from = $_REQUEST['email'];
                                                $subject = 'New Request Generated For Employment';
                                                $message = "
                                                <html>
                                                  <head>
                                                    <title>New Request For Employment</title>
                                                  </head>
                                                  <body>
                                                    <p>You have received a new Employment Request from your website www.leapswitch.com/careers.php form.</p>
                                                    <table>
                                                      <caption style='text-align:left'>
                                                      <strong>Here are the details -</strong>
                                                      </caption>
                                                      <tr>
                                                        <td><strong>Email Address</strong></td>
                                                        <td><strong> : </strong>$email</td>
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
                                                $msg = "<p style='text-align:center; padding:20px; background-color:#ffffff;font-size: 1.5em; font-weight: 600; border: 3px solid #e8e8e8; border-radius: 7px;'>Thank You!</p>";
                                                }
                                                else
                                                {
                                                $msg = "<p style='text-align:center; padding:60px; background-color:#ffffff; border: 3px solid #e8e8e8; border-radius: 7px;'>We encountered an error sending your mail, please notify info@cloudjiffy.com</p>";
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
                                            <form class="frm-career" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                                <input type="hidden" name="contact-hide" value="check"> <!-- Hidden field to trigger If condition in this Form-->
                                                <div class="control-group-box">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="share_email" id="inputEmail" placeholder="Add your e-mail id here" name="email">
                                                            <span class="error"><?php echo $emailErr;?></span>
                                                            <button type="submit" class=" joinus">Join Us</button>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <!--  Tab  -->
            <section class="service_area bg-tab">
                <!-- Tab Start -->
                <div class="container-fluid">
                    <div class="row-fluid">
                        <!-- Nav tabs -->
                        <div class="tab-card">
                            <script>
                                $x(window).scroll(function() {
                                var distanceFromTop = $x(document).scrollTop();
                                if (distanceFromTop >= $x('#career-top').height())
                                {
                                $x('#sticky').addClass('fixed');
                                }
                                else
                                {
                                $x('#sticky').removeClass('fixed');
                                }
                                });
                            </script>
                            <div class="container" id="sticky">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active span3">
                                        <a href="career.php#aboutus" aria-controls="AboutUS" role="tab" data-toggle="tab">
                                            <h4><span class="">About Leapswitch</span></h4>
                                        </a>
                                    </li>
                                    <li role="presentation" class="span3">
                                        <a href="career.php#opnings" aria-controls="Opnings" role="tab" data-toggle="tab">
                                            <h4><span class="">Job Openings</span></h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="container">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="aboutus">
                                        <div class='row-fluid product-wrapper'>
                                            <label for="">WHY LEAPSWITCH</label>
                                            <p>LeapSwitch Networks is an End-End Cloud hosting company with presence in 18 location in 10 countries across 3 continents.With a variety of services that range from IaaS to PaaS we aim at providing the best solution that is unique to each client.</p>
                                            <p>We encourage an employee friendly, open seating culture which support ease of communication among employees, encourage teams to work effectively and exposes to various function which widens the prospective of how the Gears works in a company.</p>
                                            <div class="line desktop-content"></div>
                                            <!--<div class="gallery desktop-content">
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img data-src="holder.js/397x397" class="rounded float-left" alt="397x397" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d62d5713a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d62d5713a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 397px; height: 397px;">
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img data-src="holder.js/397x397" class="rounded float-left" alt="397x397" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d62d5713a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d62d5713a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 397px; height: 397px;">
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img data-src="holder.js/397x397" class="rounded float-left" alt="397x397" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d62d5713a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d62d5713a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 397px; height: 397px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="line desktop-content"></div> -->
                                        </div>
                                        <div class="row-fluid values">
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <label for="">VALUES</label>
                                                    <h1>What we care about</h1>
                                                    <p class="gray-text">We value a win-win solution to the clients and the employees</p>
                                                </div>
                                                <div class="span6">
                                                    <ol class="values-list">
                                                        <li><small>01</small> Knowledge Empowerment</li>
                                                        <li><small>02</small> Impact > hours.</li>
                                                        <li><small>03</small> Delivering the optimal solution</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="row-fluid benefits">
                                            <label for="">BENEFITS</label>
                                            <h1>You’ll enjoy working with us</h1>
                                            <div class="features">
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/work.svg" alt="Great Location" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Great Location</h4>
                                                        <p class="sub-content">Leapswitch Networks HQ is located in Pune. </p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/healthcare.svg" alt="Health Care" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Health Care</h4>
                                                        <p class="sub-content">We care about health. You’ll get full medical benefits* to keep you feeling great.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/trophy.svg" alt="Trophy.svg" style="height: 70px;">
                                                            <h4 class="featuretitle">Awards
                                                            </h4>
                                                            <p class="sub-content">Awarding employees for exemplary work is a great way to recognize team members committed to your company’s values and your intended business direction.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/outing.svg" alt="Team Events" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Team Events</h4>
                                                        <p class="sub-content">Enjoy team events from movie outings to out station trip that help us bond and laugh together.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/workplace.svg" alt="Open-Plan Workspace" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Open-Plan Workspace</h4>
                                                        <p class="sub-content">This structure support ease of communication among employees is supposed to encourage teams to work effectively</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/worklife.svg" alt="Life-Changing Work" style="height: 70px;">
                                                            <h4 class="featuretitle">Life-Changing Work
                                                            </h4>
                                                            <p class="sub-content">Our unique business model and wide range of services provides extensive knowledge in the Web hosting space provides many opportunities for personal and career growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="opnings">
                                        <div class='product-wrapper row-fluid'>
                                            <!-- Recooty Widget START-->
                                                <iframe id="iframe-container-1" width="100%" frameborder="0" height="300" src="https://widget.recooty.com/openings.php?key=bGVhcHN3aXRjaC1uZXR3b3Jrcy1wdnQtbHRk0387e752de768f5209f20749c0d910ad"></iframe>
                                                <script>
                                                window.addEventListener("message",function(e){var t=e.data.split("-"),n=t[0];"iframe1"==t[1]&&(document.getElementById("iframe-container-1").style.height=n+"px")},!1);
                                                </script>
                                                <!-- Recooty Widget END-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Tab -->
            </section>
            <!--  Chat With Us  -->
            <?php include("chating.php"); ?>
        </div>
        <!--//page_container-->
        <?php include("footer.php"); ?>
