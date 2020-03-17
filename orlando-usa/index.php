<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Orlando, FL | Shared Hosting | Reseller Hosting | Leapswitch Networks</title>
    <?php include("../base-url.php");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include("../header.php"); ?>
    <!--page_container-->
    <div class="page_container">
        <div class="wrap block" style="padding:0; border:0;">
            <div class="banner-container banner-img banner-city">
              <div class="inner-container">
                <div class="container">
                  <div class="span7">
                    <div class="banner-text dark-text">
                      <h1>Orlando, USA</h1>
                      <a href="orlando-usa/index.php#plan" type="button" class="btn btn-primary btn-lg">Get Started</a>
                    </div>
                  </div>
                  <div class="span5"></div>
                </div>
              </div>
            </div>
        </div>
        <div class="wrap">
            <form action="" id="countrybox">
              <label for="">Select Your Location</label>
                        <select onchange="location = this.options[this.selectedIndex].value;">
                           <option value="" disabled selected="">Please select your location</option>
                            <optgroup label="USA">
                                <option value="asheville-usa/index.php">Asheville, NC</option>
                                <option value="dallas-usa/index.php">Dallas, TX</option>
                                <option value="south-bend-usa/index.php">South Bend, IN</option>
                                <option value="orlando-usa/index.php" selected>Orlando, FL</option>
                                <option value="los-angeles-usa/index.php">Los Angeles, CA</option>
                            </optgroup>
                            <optgroup label="Europe">
                                <option value="barcelona-spain/index.php">Barcelona, Spain</option>
                                <option value="lisbon-portugal/index.php">Lisbon, Portugal</option>
                                <option value="kiev-ukraine/index.php">Kiev, Ukraine</option>
                            </optgroup>
                            <optgroup label="India">
                                <option value="pune-india/index.php">Pune, MH</option>
                                <option value="mumbai-india/index.php">Mumbai, MH</option>
                                <option value="delhi-india/index.php">Delhi, NCR</option>
                            </optgroup>
                        </select>​
            </form>
            <!--  Product Plan  -->
            <section class="service_area bg-white" id="plan">
              <div class="container">
                <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="">
                                <h2 class="title"><span>Orlando, FL, USA</span></h2>
                                <p>
                                    LeapSwitch Networks provides a high performance and secure platform for you to host your website/application/ blogs, email, etc. at an affordable price. Our Data Center in Florida - Forth Largest economy in US caters to the Middle and Eastern regions of the USA. Our datacenter's strategic location ensures we provide a wide range of solution whilst keeping your data safe and secure.
                                </p>
                                <div class="line"></div>
                                <div class="row-fluid service_inner">
                                    <div class="span6">
                                        <div class="service_item">
                                        <h4><i class="lnr lnr-inbox"></i>Shared Hosting (Linux)</h4>
                                            <p>Affordable and fully featured plans, cPanel Control Panel, HTML, PHP, MySQL, Email Accounts and Visitor Statistics, Ruby on Rails, CGI also supported, Anti-Spam, Malware and Anti-Virus, Starts at just <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                                            { ?>
                                            ₹119/month
                                            <?php }else{ ?>
                                            $1.99/month
                                            <?php }?>
                                            </p>
                                            <p class="text-right"><span><a href="orlando-usa/shared-web-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="service_item">
                                            <h4><i class="lnr lnr-database"></i>Reseller Hosting (Linux)</h4>
                                                <p>Private Nameservers, Overselling enabled , Unlimited Domains, cPanel Control Panel, Unlimited SQL databases, Plans starts @ <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                                                { ?>
                                                ₹449/month
                                                <?php }else{ ?>
                                                $7.49/month
                                                <?php }?>
                                                </p>
                                            <p class="text-right"><span><a href="orlando-usa/reseller-web-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
              </div>
            </section>
            <!-- Respective Data Center -->
            <section class="bg-gray">
                <div class="container">
                    <div class="container-fluid">
                        <div class="section-title textcenter">
                               <h2>Orlando Data Center</h2>
                        </div>
                        <div class='row-fluid product-wrapper'>
                            <div class="span6">
                                <label for="" class="labeltitle">About DC</label>
                                <p>Our 25,000 square foot Orlando data center facility was designed from the ground with stability, reliability and highest level of uptime standards in mind.</p>
                            </div>
                            <div class="span6">
                                <label for="" class="labeltitle">Facts</label>
                                <ol class="dc-values-list">
                                    <li>Diverse path network fiber into the facility and over 4 tier 1 network providers.</li>
                                    <li>Designed to ensure the electrical and mechanical systems were mission-critical and equally important, efficiently maintained to support scalability and sustain principal performance.</li>
                                    <li>Our data centers include complete redundancy in power, network connectivity, fire suppression, and unparalleled security & safety.</li>
                                    <li>All of our services are delivered with guaranteed service levels and around-the-clock support. Our data centers are staffed with on-site expert engineers and support technicians 24 hours a day, every day of the year.</li>
                                    <li>Using the latest equipment and technology we proudly deliver exceptional service, support, and hosting solutions.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  Chat With Us  -->
            <?php include("../chating.php"); ?>
        </div>
    <!--//page_container-->
    <?php include("../footer.php"); ?>
