<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dedicated Servers | India - Pune | Managed | Linux | Windows - Leapswitch Networks</title>
    <?php include("../../base-url.php");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leapswitch offers Dedicated Servers in Pune, India with Premium Network, Latest Servers and managed services.">
    <meta name="keywords" content="dedicated servers india, dedicated hostings india, india dedicated servers, dedicated server pune, managed dedicated server india, unmetered dedicated servers india">
    <meta name="author" content="Leapswitch Networks">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
    </style>
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
                  <h1><span class="h5">Pune, India</span></h1>
                  <?php include("../../banner-content/dedicated-banner.php"); ?>
                  <a href="pune-india/dedicated-servers/index.php#plan" type="button" class="btn btn-primary btn-lg">View Plans</a>
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
              <option value="kiev-ukraine/dedicated-servers/index.php">Kiev, Ukraine</option>
              <option value="frankfurt-germany/dedicated-servers/index.php">Frankfurt, Germany</option>
            </optgroup>
            <optgroup label="India">
              <option value="pune-india/dedicated-servers/index.php" selected>Pune, MH</option>
              <option value="mumbai-india/dedicated-servers/index.php">Mumbai, MH</option>
              <option value="delhi-india/dedicated-servers/index.php">Delhi, NCR</option>
            </optgroup>
          </select>​
        </form>
        <!--  Product Plan -->
        <section class="service_area bg-gray" id="plan">
          <div class="container">
            <div class="container-fluid">
              <div class='product-wrapper row-fluid' >
                <?php include("../../service-info/dedicated-servers.php"); ?>
                <div class="section-title textcenter"><h2>Dedicated Server Hosting</h2></div>
                <div class='product-line row-fluid tab-product-line'>
                  <div class='package span3'>
                    <div class='name'>Quad Core</div>
                    <div class='price'>
                      <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      { ?>
                      <strong>₹8000 </strong>
                      <?php }else{ ?>
                      <strong>$135</strong>
                      <?php }?>
                    </div>
                    <div class='trial'>
                      <?php
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
                      <li>
                        <strong>Single</strong> Processor
                      </li>
                      <li>
                        <strong>4</strong> cores (8 vCPU)<!-- Physical Cores -->
                      </li>
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
                  <div class='package brilliant span3'>
                    <div class='name'>Quad Core</div>
                    <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      { ?>
                      <strong>₹10000 </strong>
                      <?php }else{ ?>
                      <strong>$160</strong>
                    <?php }?></div>
                    <div class='trial'><?php
                      if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&pid=620&currency=2" class="orderbutton">CONFIGURE NOW</a>
                      ';
                      }
                      else
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&pid=620&currency=1" class="orderbutton">CONFIGURE NOW</a>
                      ';
                      }
                      ?>
                    </div>
                    <hr>
                    <ul>
                      <li>
                        <strong>E3-1230v5/v6</strong> Dedicated Server
                      </li>
                      <li>
                        <strong>16 GB</strong> RAM (upto 64 GB RAM)
                      </li>
                      <li>
                        <strong>Single</strong> Processor
                      </li>
                      <li>
                        <strong>4</strong> cores (8 vCPU)<!-- Physical Cores -->
                      </li>
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
                  <div class='package span3'>
                    <div class='name'>Hexa Core</div>
                    <div class='price'>
                      <?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      { ?>
                      <strong>₹12000 </strong>
                      <?php }else{ ?>
                      <strong>$200</strong>
                      <?php }?>
                    </div>
                    <div class='trial'>
                      <?php
                      if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&pid=686&currency=2" class="orderbutton">CONFIGURE NOW</a>
                      ';
                      }
                      else
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&pid=686&currency=1" class="orderbutton">CONFIGURE NOW</a>
                      ';
                      }
                      ?>
                    </div>
                    <hr>
                    <ul>
                      <li>
                        <strong>E5-2630/2640</strong> Dedicated Server
                      </li>
                      <li>
                        <strong>32 GB</strong> RAM (upto 192 GB RAM)
                      </li>
                      <li>
                        <strong>Single</strong> Processor
                      </li>
                      <li>
                        <strong>6</strong> cores (12 vCPU)
                      </li>
                      <li>
                        <strong>1TB</strong> HDD (upto 8)
                      </li>
                      <li>
                        <strong>100 mbps</strong> Port speed
                      </li>
                      <li>
                        <strong>2000GB</strong> Data Transfer
                      </li>
                    </ul>
                  </div>
                  <div class='package span3'>
                    <div class='name'>Octa Core</div>
                    <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      { ?>
                      <strong>₹14000 </strong>
                      <?php }else{ ?>
                      <strong>$235</strong>
                    <?php }?></div>
                    <div class='trial'><?php
                      if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&amp;pid=658&amp;currency=2">CONFIGURE NOW</a>
                      ';
                      }
                      else
                      {
                      echo '
                      <a href="https://service.leapswitch.com/cart.php?a=add&amp;pid=658&amp;currency=1" class="orderbutton">CONFIGURE NOW</a>
                      ';
                      }
                      ?>
                    </div>
                    <hr>
                    <ul>
                      <li>
                        <strong>E5-2665/2670</strong> Dedicated Server
                      </li>
                      <li>
                        <strong>32 GB</strong> RAM (upto 192 GB RAM)
                      </li>
                      <li>
                        <strong>Single</strong> Processor
                      </li>
                      <li>
                        <strong>8</strong> cores (16 vCPU)<!-- Physical Cores -->
                      </li>
                      <li>
                        <strong>1TB</strong> HDD (upto 8)
                      </li>
                      <li>
                        <strong>100 mbps</strong> Port speed
                      </li>
                      <li>
                        <strong>2000GB</strong> Data Transfer
                      </li>
                    </ul>
                  </div>
                  <span id="dots"></span>
                </div>
                  <div class='product-line row-fluid tab-product-line' id="more">
                    <div class='package span3'>
                      <div class='name'>Deca Core</div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹16000 </strong>
                        <?php }else{ ?>
                        <strong>$270</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=689&currency=2" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=689&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        ?>
                      </div>
                      <hr>
                      <ul>
                        <li>
                          <strong>E5-2660v2</strong> Dedicated Server
                        </li>
                        <li>
                          <strong>32 GB</strong> RAM (upto 192 GB RAM)
                        </li>
                        <li>
                          <strong>Single</strong> Processor
                        </li>
                        <li>
                          <strong>10</strong> cores (20 vCPU)<!-- Physical Cores -->
                        </li>
                        <li>
                          <strong>1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>2000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                    <div class='package span3'>
                      <div class='name'>Dual Hexa Core</div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹18000 </strong>
                        <?php }else{ ?>
                        <strong>$300</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=690&currency=2"class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=690&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                      ?></div>
                      <hr>
                      <ul>
                        <li>
                          <strong>Dual E5-2640</strong> Dedicated Server
                        </li>
                        <li>
                          <strong>32 GB</strong> RAM (upto 384 GB RAM)
                        </li>
                        <li>
                          <strong>Dual</strong> Processor
                        </li>
                        <li>
                          <strong>12</strong> cores (24 vCPU)<!-- Physical Cores -->
                        </li>
                        <li>
                          <strong>2 x 1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>5000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                    <div class='package brilliant span3'>
                      <div class='name'>Dual Octa Core</div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹20000 </strong>
                        <?php }else{ ?>
                        <strong>$335</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=657&pid=686&currency=2" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=657&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                      ?></div>
                      <hr>
                      <ul>
                        <li>
                          <strong>E5-2665/2670</strong> Dedicated Server
                        </li>
                        <li>
                          <strong>64 GB</strong> RAM (upto 384 GB RAM)
                        </li>
                        <li>
                          <strong>Dual</strong> Processor
                        </li>
                        <li>
                          <strong>16</strong> cores (32 vCPU)<!-- Physical Cores -->
                        </li>
                        <li>
                          <strong>2 x 1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>5000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                    <div class='package span3'>
                      <div class='name'>Dual Deca core</div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹22000 </strong>
                        <?php }else{ ?>
                        <strong>$370</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=691&currency=2" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=691&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                      ?></div>
                      <hr>
                      <ul>
                        <li>
                          <strong>Dual E5-2660v2</strong> Dedicated Server
                        </li>
                        <li>
                          <strong>64 GB</strong> RAM (upto 384 GB RAM)
                        </li>
                        <li>
                          <strong>Dual</strong> Processor
                        </li>
                        <li>
                          <strong>20</strong> cores (40 vCPU)<!-- Physical Cores -->
                        </li>
                        <li>
                          <strong>2 x 1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>5000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- <div class='product-line row-fluid tab-product-line' id="more">
                    <div class='package span3'>
                      <div class='name'>Hexa Core<br><span>[12 Threads]</span></div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹8000</strong>
                        <?php }else{ ?>
                        <strong>$135</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=759&currency=2" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=759&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        ?>
                      </div>
                      <hr>
                      <ul>
                        <li>
                          <strong>E-2136 </strong> Dedicated Server
                        </li>
                        <li>
                          <strong>32 GB DDR4</strong> RAM (upto 192 GB RAM)
                        </li>
                        <li>
                          <strong>Single</strong> Processor
                        </li>
                        <li>
                          <strong>6</strong> cores (12 Threads)
                        </li>
                        <li>
                          <strong>1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>2000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                    <div class='package span3'>
                      <div class='name'>Hexa Core<br><span>[6 Threads]</span></div>
                      <div class='price'><?php   if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        { ?>
                        <strong>₹8000</strong>
                        <?php }else{ ?>
                        <strong>$135</strong>
                      <?php }?></div>
                      <div class='trial'><?php
                        if($_SERVER["HTTP_CF_IPCOUNTRY"] == 'IN')
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=760&currency=2" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        else
                        {
                        echo '
                        <a href="https://service.leapswitch.com/cart.php?a=add&pid=760&currency=1" class="orderbutton">CONFIGURE NOW</a>
                        ';
                        }
                        ?>
                      </div>
                      <hr>
                      <ul>
                        <li>
                          <strong>E-2126</strong> Dedicated Server
                        </li>
                        <li>
                          <strong>32 GB DDR4</strong> RAM (upto 192 GB RAM)
                        </li>
                        <li>
                          <strong>Single</strong> Processor
                        </li>
                        <li>
                          <strong>6</strong> cores (6 Threads)
                        </li>
                        <li>
                          <strong>1TB</strong> HDD (upto 8)
                        </li>
                        <li>
                          <strong>100 mbps</strong> Port speed
                        </li>
                        <li>
                          <strong>2000GB</strong> Data Transfer
                        </li>
                      </ul>
                    </div>
                  </div> -->
                <div><p onclick="myFunction()" id="myBtn"><span class="see-plans">See more plans</span></p>
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
            <div class="container-fluid">
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
                      <span class="box-heading">Move to lightning fast<br>SSD based Servers<br><a href="pune-india/managed-vps-hosting/linux.php" class="btn btn-primary btn-lg">Managed Linux Cloud Servers</a></span>
                    </div>
                    <div class="span6 link-box nomargin gray-border-left">
                      <span class="box-heading">Hosting PHP websites<br>for your customers?<br><a href="pune-india/reseller-web-hosting/linux.php" class="btn btn-primary btn-lg">Reseller Linux Web Hosting</a></span>
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
