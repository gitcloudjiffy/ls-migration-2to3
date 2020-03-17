<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>South Bend, IN | Shared Hosting | Reseller Hosting | Cloud Servers | Leapswitch Networks</title>
        <?php include("../base-url.php");?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php include("../header.php"); ?>
        <!--page_container-->
        <div class="page_container">
            <!-- Banner -->
            <div class="wrap block" style="padding:0; border:0;">
                <div class="banner-container banner-img banner-city">
                  <div class="inner-container">
                    <div class="container">
                      <div class="span7">
                        <div class="banner-text dark-text">
                          <h1>South Bend, USA</h1>
                          <a href="south-bend-usa/index.php#plan" type="button" class="btn btn-primary btn-lg">Get Started</a>
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
                            <option value="asheville-usa/index.php">Asheville, NC</option>
                            <option value="dallas-usa/index.php">Dallas, TX</option>
                            <option value="south-bend-usa/index.php" selected>South Bend, IN</option>
                            <option value="orlando-usa/index.php">Orlando, FL</option>
                            <option value="los-angeles-usa/index.php">Los Angeles, CA</option>
                        </optgroup>
                        <optgroup label="Europe">
                            <option value="barcelona-spain/index.php">Barcelona, Spain</option>
                            <option value="lisbon-portugal/index.php">Lisbon, Portugal</option>
                            <option value="kiev-ukraine/index.php">Kiev, Ukraine</option>
                        </optgroup>
                        <optgroup label="India">
                            <option value="pune-india/index.php">Pune, India</option>
                            <option value="mumbai-india/index.php">Mumbai, MH</option>
                            <option value="delhi-india/index.php">Delhi, NCR</option>
                        </optgroup>
                    </select>​
                </form>
                <!--  Product Plan  -->
                <section class="service_area bg-white">
                  <div class="container">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="">
                                        <h2 class="title"><span>South Bend, IN, USA</span></h2>
                                        <p>LeapSwitch Networks provides a high performance and secure platform for you to host your website/application/blogs, email, etc. at an affordable price. Our Data Center in South Bend caters to the Middle, Eastern, Western and Mountain region of the USA. Our datacenter's strategic location ensures we provide a wide range of solution whilst keeping your data safe and secure across the entire US.</p>
                                        <div class="line"></div>
                                        <div class="row-fluid service_inner">
                                            <div class="span6">
                                                <div class="service_item">
                                                    <h4><i class="lnr lnr-inbox"></i>Shared Hosting (Linux)</h4>
                                                    <p>Affordable and fully featured plans, cPanel Control Panel, HTML, PHP, MySQL, Email Accounts and Visitor Statistics, Ruby on Rails, CGI also supported, Anti-Spam, Malware and Anti-Virus, Starts at just
                                                    <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                                                    { ?>
                                                    ₹119/month
                                                    <?php }else{ ?>
                                                    $1.99/month
                                                    <?php }?>
                                                    </p>
                                                    <p class="text-right"><span><a href="south-bend-usa/shared-web-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
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
                                                    <p class="text-right"><span><a href="south-bend-usa/reseller-web-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid service_inner">
                                            <div class="span6">
                                                <div class="service_item">
                                                    <h4><i class="lnr lnr-cloud-check"></i>Cloud Servers (Linux - Managed)</h4>
                                                    <p>OpenVZ / KVM Virtualization, Full Root Access , CentOS / Debian / Ubuntu OS , SolusVM Control Panel , cPanel / DirectAdmin / Virtualmin Panel , Managed / Self-Managed service , Starts @ <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                                                    { ?>
                                                    ₹1999/month
                                                    <?php }else{ ?>
                                                    $29/month
                                                    <?php }?></p>
                                                    <p class="text-right"><span><a href="south-bend-usa/managed-vps-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="service_item">
                                                    <h4><i class="lnr lnr-cloud"></i>Cloud Servers (Linux - Self-Managed)</h4>
                                                    <p>OpenVZ / KVM Virtualization, Full Root Access , CentOS / Debian / Ubuntu OS , SolusVM Control Panel , cPanel / DirectAdmin / Virtualmin Panel , Managed / Self-Managed service , Starts @ <?php if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                                                    { ?>
                                                    ₹350/month
                                                    <?php }else{ ?>
                                                    $5/month
                                                    <?php }?>
                                                    </p>
                                                    <p class="text-right"><span><a href="south-bend-usa/unmanaged-vps-hosting/linux.php"><i class="lnr lnr-magnifier"></i>View Plans</a></span></p>
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
                               <h2>South Bend Data Center</h2>
                        </div>
                        <div class='row-fluid product-wrapper'>
                            <div>
                                <label for="" class="labeltitle">Facts</label>
                                <ol class="dc-values-list">
                                    <li>At our South Bend datacenter, we use rock-solid Cisco Enterprise Networking equipment backed by a full multi-gigabit network. </li>
                                    <li>Our strategic location in the Midwest US gives equal network performance to East, West and Southern United States and Canada.</li>
                                    <li>We utilize several carriers meshed together through BGP (border gateway protocol) and can deliver connectivity to almost every major network backbone in under 5 milliseconds!</li>
                                    <li>Colostore utilize several carriers meshed together through BGP (border gateway protocol)</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </section>
                <!--  Chat With Us  -->
                <?php include("../chating.php"); ?>
            </div>
        <!--//page_container-->
        <?php include("../footer.php"); ?>
