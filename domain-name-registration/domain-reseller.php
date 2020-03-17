<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Domain Reseller | Leapswitch Networks</title>
        <?php include("../base-url.php");?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <?php include("../header.php"); ?>
        <!--page_container-->
        <div class="page_container">
            <!-- Banner -->
            <div class="wrap block" style="padding:0; border:0;" id="domain-reseller-top">
                <div class="banner-container banner-img banner-reseller">
                    <div class="inner-container">
                        <div class="container">
                            <div class="row domain-sale">
                                <div class="banner-text text-center">
                                    <h1>Join the World’s Most Popular Reseller Program</h1>
                                    <p class="sub-title">Get Industry Best Prices that Promise You High Profit Margins</p>
                                </div>
                                <div class="row">
                                    <div class="span10 offset1">
                                        <?php
                                        // define variables and set to empty values
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
                                                $subject = 'New Request For Join Domain Reseller Program';
                                                $message = "
                                                <html>
                                                  <head>
                                                    <title>New Request For Join Domain Reseller Program</title>
                                                  </head>
                                                  <body>
                                                    <p>You have received a new registration request from your website www.leapswitch.com/domain-name-registration/domain-reseller.php form.</p>
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
                                            <form class="frm-domain" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
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
                                <!-- <div class="row">
                                    <div class="span10 offset1">
                                        <ul>
                                            <li class="domain_sale_box">
                                                <div class="domain_sale_name">
                                                    <p class="title">.BIZ</p>
                                                </div>
                                                <div class="domain_sale_price_new">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>360</p>
                                                </div>
                                                <div class="domain_sale_price_old">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>985</p>
                                                </div>
                                            </li>
                                            <li class="domain_sale_box">
                                                <div class="domain_sale_name">
                                                    <p class="title">.XYZ</p>
                                                </div>
                                                <div class="domain_sale_price_new">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>70</p>
                                                </div>
                                                <div class="domain_sale_price_old">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>760</p>
                                                </div>
                                            </li>
                                            <li class="domain_sale_box">
                                                <div class="domain_sale_name">
                                                    <p class="title">.NEWS</p>
                                                </div>
                                                <div class="domain_sale_price_new">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>645</p>
                                                </div>
                                                <div class="domain_sale_price_old">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>1440</p>
                                                </div>
                                            </li>
                                            <li class="domain_sale_box">
                                                <div class="domain_sale_name">
                                                    <p class="title">.LIVE</p>
                                                </div>
                                                <div class="domain_sale_price_new">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>155</p>
                                                </div>
                                                <div class="domain_sale_price_old">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>1440</p>
                                                </div>
                                            </li>
                                            <li class="domain_sale_box">
                                                <div class="domain_sale_name">
                                                    <p class="title">.HOST</p>
                                                </div>
                                                <div class="domain_sale_price_new">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>285</p>
                                                </div>
                                                <div class="domain_sale_price_old">
                                                    <p class="price_title"><span class="WebRupee">&#8377;</span>5850</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
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
                                if (distanceFromTop >= $x('#domain-reseller-top').height())
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
                                        <li role="presentation" class="active span3"><a href="domain-name-registration/domain-reseller.php#features" aria-controls="features" role="tab" data-toggle="tab"><h4><span class="">Features</span></h4></a>
                                    </li>
                                    <li role="presentation" class="span3"><a href="domain-name-registration/domain-reseller.php#store" aria-controls="store" role="tab" data-toggle="tab"><h4><span class="">Store Front</span></h4></a></li>
                                    <li role="presentation" class="span3"><a href="domain-name-registration/domain-reseller.php#automation" aria-controls="automation" role="tab" data-toggle="tab"><h4><span class="">Automation</span></h4></a></li>
                                    <li role="presentation" class="span3"><a href="domain-name-registration/domain-reseller.php#start" aria-controls="start" role="tab" data-toggle="tab"><h4><span class="">Start</span></h4></a></li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="container">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="features">
                                        <div class='product-wrapper row-fluid' id="plan">
                                            <p>Leapswitch makes selling Domains, Hosting &amp; Addons simple. Offer various domain extensions to your clients with these amazing features:</p>
                                            <div class="line"></div>
                                            <div class="section-title textcenter"><h2>Sell Digital Products &amp; Manage Customers Effortlessly!</h2></div>
                                            <div class="features">
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <ul>
                                                            <li><i class="fa fa-bookmark-o" aria-hidden="true"></i> Fully Usable Activation Deposit of just Rs.5000</li>
                                                            <li><i class="fa fa-user" aria-hidden="true"></i> Easily Manage your Customers and Sub-Resellers</li>
                                                            <li><i class="fa fa-cogs" aria-hidden="true"></i> FREE Fully-Customizable Storefront to Sell.</li>
                                                            <!-- <li><i class="fa fa-cubes" aria-hidden="true"></i> Sell Over 800 Products</li> -->
                                                            <!-- <li><i class="fa fa-shield" aria-hidden="true"></i> Fully Secure with 2 Factor Authentication</li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="span6">
                                                        <ul>
                                                            <!-- <li><i class="fa fa-lightbulb-o" aria-hidden="true"></i> SMS Updates about Your Account</li> -->
                                                            <li><i class="fa fa-life-ring" aria-hidden="true"></i> 24/7 Support Team</li>
                                                            <li><i class="fa fa-square-o" aria-hidden="true"></i> Completely White Labelled Program</li>
                                                            <!-- <li><i class="fa fa-credit-card" aria-hidden="true"></i> Pre-Integrated Payment Gateways</li> -->
                                                            <li><i class="fa fa-line-chart" aria-hidden="true"></i> Marketing Collaterals to Help You Sell</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="store">
                                        <div class='product-wrapper row-fluid' id="plan">
                                            <p>A Storefront that gives you an edge over every other Registrar and Webhost. Get started now!.</p>
                                            <div class="line"></div>
                                            <div class="section-title textcenter"><h2>Free Fully Brandable Storefront</h2></div>
                                            <div class="features">
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/gear.svg" alt="Completely Customizable" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Completely Customizable</h4>
                                                        <p class="sub-content">Modify the HTML, CSS, Images and Content. Ensure that your Brand Stands Out.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/coupon.svg" alt="Coupon Engine" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Coupon Engine</h4>
                                                        <p class="sub-content">Offer Discounts, Bundle Products & Upsell Discounted Products.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/content.svg" alt="SEO Friendly Content" style="height: 70px;">
                                                            <h4 class="featuretitle">SEO Friendly Content
                                                            </h4>
                                                            <p class="sub-content">50+ pages of Readymade Editable Content to Help Enhance your SEO Score.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/template.svg" alt="Pre-Created Templates" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Pre-Created Templates</h4>
                                                        <p class="sub-content">Use a Template which Specifically Offers the Products you wish to Sell.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/cart.svg" alt="Integrated Shopping Cart" style="height: 70px;">
                                                        </div>
                                                        <h4 class="featuretitle">Integrated Shopping Cart</h4>
                                                        <p class="sub-content">A Feature Rich &amp; User-Friendly Shopping Cart that Gives Customers a Seamless Buying Experience.</p>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="featureicon">
                                                            <img src="img/features/multilingual.svg" alt="Multilingual" style="height: 70px;">
                                                            <h4 class="featuretitle">Multilingual
                                                            </h4>
                                                            <p class="sub-content">Pre-translated in 8 International Languages. You can also add the translated language of your choice.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="automation">
                                        <div class="section-title textcenter"><h2>Marketing, Payment Processing &amp; Support</h2></div>
                                        <div class="features">
                                            <div class="row-fluid">
                                                <div class="span4">
                                                    <div class="featureicon">
                                                        <img src="img/features/credit-card.svg" alt="Pre-Integrated Payment Collection Gateways" style="height: 70px;">
                                                    </div>
                                                    <h4 class="featuretitle">Pre-Integrated Payment Collection Gateways</h4>
                                                    <p class="sub-content">Now Collect Payments from Your Customers Effortlessly. Your Control Panel comes with 9 Pre-Integrated Payment Options that can support payments through Credit Cards, Debit Cards, PayPal, Wire Transfers &amp; much more.</p>
                                                </div>
                                                <div class="span4">
                                                    <div class="featureicon">
                                                        <img src="img/features/box.svg" alt="Marketing Collaterals & Resources" style="height: 70px;">
                                                    </div>
                                                    <h4 class="featuretitle">Marketing Collaterals &amp; Resources</h4>
                                                    <p class="sub-content">Need to Reach out to More Customers? We have you covered! Check out our revamped Resource Center to download InfoGuides, Startup Guides, White-labelled Collaterals and much more.</p>
                                                </div>
                                                <div class="span4">
                                                    <div class="featureicon">
                                                        <img src="img/features/24-hours2.svg" alt="24x7 Sys-Ad Level Support Teams" style="height: 70px;">
                                                        <h4 class="featuretitle">24x7 Sys-Ad Level Support Teams
                                                        </h4>
                                                        <p class="sub-content">We are deeply committed to providing world class support as we recognize that Support is a fundamental pillar of your business. Our huge team of Dedicated Support specialists work 24/7 to ensure that every single query of yours is swiftly resolved.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="start">
                                        <div class='product-wrapper row-fluid' id="plan">
                                            <div class="section-title textcenter"><h2>Why Become a Domain Reseller?</h2></div>
                                            <p>Domain Reseller program provides businesses with a single platform to sell a variety of products like domains, hosting, servers, email solutions and more. It is a great way to earn good money with very little investment. In fact, you can even start with these product offerings and build your business towards other web services such as web designing, development, IT management, etc.</p>
                                            <p><strong>Domains:</strong> If you already have a business, you can add more than 500+ domains to your offerings. You can resell many of the prime market movers like .COM, .ORG, .NET, etc. or even new GTLDs like .TRAVEL, .VEGAS, .CLUB, etc. Offer the perfect TLD to each of your customers and help them boost their brand’s identity.</p>
                                            <p><strong>Hosting and Servers:</strong> You can pick a hosting service to resell from our wide suite of offerings that include Shared, Cloud Server, Dedicated, Reseller, Cloud and Windows Hosting services. In addition to these, you can also provide CMS based hosting solutions like Magento, Joomla and Drupal. In addition to this, being a market place, LeapSwitch allows you to provide Bluehost and Hostgator servers (Dedicated and Cloud Server) to customers that are looking for a specific hosting brand.</p>
                                            <p><strong>Email Products:</strong> Providing business and enterprise email is easy now. You can select the number of business/enterprise email accounts your customers need and charge them accordingly. Our OX7 powered email services allow easy collaboration and are protected from all kinds of cyber threats. You can also opt for Google’s G Suite product to provide more benefits to your customers in the form of larger storage space and other tools such as Google Docs, Sheets, Calendar, etc.</p>
                                            <p><strong>Add-ons:</strong> Protect your customers with security add-ons like SiteLock Security and SSL certificates that prevent a variety of security threats. These add-ons ensure security for all the confidential data on your customer’s website. Also, you can enable your customers to take a backup of their websites with CodeGuard website backup in case there is a loss of information.</p>
                                            <p>What’s more, our domain reseller program is a 100% white-labelled so your customers won’t even realise that we are involved. On top of that, you can decide the selling price of the products to maximize the profit margins of your business. You can also connect your existing domain reseller business through our WHMCS integration.</p>
                                            <p>Get started by signing up with LeapSwitch Domain Reseller Program and watch your business grow globally.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                    <!-- /Tab End -->
                </section>
                <!--  Chat With Us  -->
                <?php include("../chating.php"); ?>
                <!--  FAQ  -->
                <?php include("../faq/domain.php"); ?>
            </div>
            <!--//page_container-->
            <?php include("../footer.php"); ?>
