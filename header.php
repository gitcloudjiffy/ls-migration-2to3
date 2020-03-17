<!-- Add Fevicon -->
<link rel="shortcut icon" href="img/favicon.png" />
<!-- Add Css -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- For product plan -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Add Font -->
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
<!-- Owl Stylesheets -->
<link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<link href='https://fonts.googleapis.com/css?family=Libre Barcode 39 Extended Text' rel='stylesheet'>
<!-- JS -->
<!-- owl javascript -->
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script>var $x = jQuery.noConflict();</script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>var $y = jQuery.noConflict();</script>
<script>
// Mega Menu - For Responsive Top Nav & Active Menu
$y(document).ready(function(){
var str=location.href.toLowerCase();
console.log(str);
//var n = str.search(".php");
//var n1 = str.search("2/");
//var k = str.substring(n1+2,n);
//console.log(n);
//$y("#"+k).addClass("active");
if(str.indexOf("domain") != -1)
{
k = "domain";
$y("#"+k).addClass("active");
k = "";
}
else if(str.indexOf("shared") != -1)
{
k = "shared-hosting";
$y("#"+k).addClass("active");
k = "";
}
else if(str.indexOf("vps") != -1)
{
k = "vps";
$y("#"+k).addClass("active");
k = "";
}
else if(str.indexOf("dedicated") != -1)
{
k = "dedicated-server";
$y("#"+k).addClass("active");
k = "";
}
else if(str.indexOf("email") != -1)
{
k = "email";
$y("#"+k).addClass("active");
k = "";
}
else if(str.indexOf("ssl") != -1)
{
k = "ssl";
$y("#"+k).addClass("active");
k = "";
}
// else if(str.indexOf("about") != -1)
// {
// k = "about";
// $y("#"+k).addClass("active");
// k = "";
// }
else
{
k = "home";
$y("#"+k).addClass("active");
k = "";
}
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/55ae4f7929ac8aa73237254c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-43578725-1', 'leapswitch.com');
ga('send', 'pageview');
</script>
<!--header-->
<div class="header">
  <div class="wrap">
    <div class="">
        <div class="container-fluid topnav visible-desktop">
          <div class="container">
            <div class="row-fluid">
              <div class="span3 ">
                <div class="logo-wrap">
                  <div class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo" /></a>
                  </div>
                </div>
              </div>
              <div class="span9">
                <div class="row2">
                  <nav id="main_sub">
                    <ul id="sel" class="nav sf-menu">
                      <li class="sub-menu"><a href="https://service.leapswitch.com/clientarea.php" title="Login">Login</a> </li>
                      <li class="sub-menu"> <a href="JavaScript:Void(0);" title="24x7 Support">24x7 Support : +91-9595-233-556</a> </li>
                      <li><a href="about-us.php">About</a></li>
                      <li><a href="https://service.leapswitch.com/submitticket.php?step=2&deptid=1" title="Connect with Sales Team">Contact Us</a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="container-fluid navbar navbar-static-top">
          <div class="navbar-inner">
			<div class="row">
				<div class="container mobile-container">
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <!-- Be sure to leave the brand out there if you want it shown -->
              <div class="logo-wrap brand hidden-desktop">
                <div class="logo"><a class="hidden-desktop" href=""><img src="img/logo.png" alt="" /></a><!-- ls-logo.png -->
                </div>
              </div>
              <!-- Everything you want hidden at 940px or less, place within here -->
              <div class="nav-collapse collapse mobile-nav"><!-- id="sticky-nav" -->
                <!-- desktop nav -->
                <ul class="nav visible-desktop">
                  <li class="" id="home"><a href="index.php">Home</a></li>
                  <li class="dropdown" id="domain"><a class="dropdown-toggle" data-hover="dropdown" data-target="#" href="domain-name-registration/index.php">Domains &nbsp;
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu sub-menu-list menu-dropdown menu-fullwidth" role="menu" aria-labelledby="dLabel">
                      <div class="container">
                        <div class="row-fluid">
                          <li class="span4">
                            <h3><span class="lnr lnr-pencil"></span> <span class="text-h3">Registration</span></h3>
                            <a href="domain-name-registration/index.php#name"><div class="dropdown-subheading">Domain Name Registration <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Check domain availability and book it right away <!-- in a few seconds --></div></a>
                            <a href="domain-name-registration/domain-reseller.php"><div class="dropdown-subheading">Domain Reseller<i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Book domains on behalf of your client</div></a>
                          </li>
                          <li class="span4">
                            <h3><span class="lnr lnr-move"></span> <span class="text-h3">Transfer</span></h3>
                            <a href="https://service.leapswitch.com/cart.php?a=add&domain=transfer&currency=2" target="_blank"><div class="dropdown-subheading">Domain Transfer <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Transfer your domain and get a 1 year extension</div></a>
                          </li>
                          <li class="span4 textcenter">
                            <img class="service-icon" src="img/icon/domain.svg" alt="">
                            <div class="dropdown-discription">Having your own domain name is the first step to building an online presence.</div>
                            <!-- <div class="scene">
                              <div class="ticket"></div>
                            </div> -->
                          </li>
                        </div>
                      </div>
                    </ul>
                  </li>
                  <li class="dropdown" id="shared-hosting"><a class="dropdown-toggle" data-hover="dropdown" data-target="#" href="shared-hosting/index.php">Hosting &nbsp;
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu sub-menu-list menu-dropdown menu-fullwidth">
                      <div class="container">
                        <div class="row-fluid">
                          <li class="span4">
                            <h3><span class="lnr lnr-inbox"></span> <span class="text-h3">Shared Hosting</span></h3>
                            <a href="pune-india/shared-web-hosting/linux.php"><div class="dropdown-subheading">Linux Hosting <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Fully Featured Linux plans with cPanel, Perl, PHP and more.</div></a>
                            <a href="pune-india/shared-web-hosting/windows.php"><div class="dropdown-subheading">Windows Hosting <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Fully Featured Windows hosting plans with Plesk, ASP.NET and more.</div></a>
                          </li>
                          <li class="span4">
                            <h3><span class="lnr lnr-database"></span> <span class="text-h3">Reseller Hosting</span></h3>
                            <a href="pune-india/reseller-web-hosting/linux.php"><div class="dropdown-subheading">Linux Reseller Hosting <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Start your hosting business with cPanel/WHM today.</div></a>
                            <a href="pune-india/reseller-web-hosting/windows.php"><div class="dropdown-subheading">Windows Reseller Hosting <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Start your hosting business with Plesk panel today.</div></a>
                          </li>
                          <li class="span4 textcenter">
                            <img class="service-icon" src="img/icon/shared-hosting.svg" alt="">
                            <div class="dropdown-discription">Start selling shared hosting services by using the reseller hosting packages.</div>
                            <!-- <div class="scene">
                              <div class="ticket"></div>
                            </div> -->
                          </li>
                        </div>
                      </div>
                    </ul>
                  </li>
                  <li class="dropdown" id="vps"><a class="dropdown-toggle" data-hover="dropdown" data-target="#" href="vps/index.php">Cloud VPS &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu sub-menu-list menu-dropdown menu-fullwidth">
                      <div class="container">
                        <div class="row-fluid">
                          <li class="span4">
                            <h3><span class="lnr lnr-cloud-check"></span> <span class="text-h3">Managed Cloud Servers</span></h3>
                            <a href="pune-india/managed-vps-hosting/linux.php"><div class="dropdown-subheading">Linux Managed Cloud Servers <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Fully managed Linux Cloud Servers<br><br></div></a>
                            <a href="pune-india/managed-vps-hosting/windows.php"><div class="dropdown-subheading">Windows Managed Cloud Servers <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Fully managed Windows Cloud Servers</div></a>
                          </li>
                          <li class="span4">
                            <h3><span class="lnr lnr-cloud"></span> <span class="text-h3">Self-Managed Cloud Servers</span></h3>
                            <a href="pune-india/unmanaged-vps-hosting/linux.php"><div class="dropdown-subheading">Linux Self-Managed Cloud Servers <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Self-Managed Linux Cloud Servers with root access.</div></a>
                            <a href="pune-india/unmanaged-vps-hosting/windows.php"><div class="dropdown-subheading">Windows Self-Managed Cloud Servers <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Self-Managed Windows Cloud Servers with RDP access.</div></a>
                          </li>
                          <li class="span4 textcenter">
                            <img class="service-icon" src="img/icon/cloud-vps.svg" alt="">
                            <div class="dropdown-discription">Enjoy faster performance and stability with our Virtual Private Server</div>
                            <!-- <div class="scene">
                              <div class="ticket"></div>
                            </div> -->
                          </li>
                        </div>
                      </div>
                    </ul>
                  </li>
                  <li class="dropdown" id="dedicated-server"><a class="dropdown-toggle" data-hover="dropdown" data-target="#" href="dedicated/index.php">Dedicated &nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu sub-menu-list menu-dropdown menu-fullwidth">
                        <div class="container">
                          <div class="row-fluid">
                            <li class="span4"> <h3><span class="lnr lnr-cloud"></span> <span class="text-h3">Location</span></h3><a href="pune-india/dedicated-servers/index.php"><div class="dropdown-subheading">Asia <i class="fa fa-angle-right"></i></div><div class="dropdown-discription"><div class="region"><img src="img/icon/india.svg" alt=""></div>Pune [MH], Mumbai [MH], Delhi [NCR]</div></a><a href="asheville-usa/dedicated-servers/index.php"><div class="dropdown-subheading">USA <i class="fa fa-angle-right"></i></div><div class="dropdown-discription"><div class="region"><img src="img/icon/usa.svg" alt=""></div>Asheville [NC], Los Angeles [CA]</div></a><a href="lisbon-portugal/dedicated-servers/index.php"><div class="dropdown-subheading">Europe <i class="fa fa-angle-right"></i></div><div class="dropdown-discription"><div class="region"><img src="img/icon/europe.svg" alt=""></div>Lisbon [Portugal], Kiev [Ukraine]</div></a>
                            </li>
                            <li class="span4">&nbsp;</li>
                            <li class="span4 textcenter">
                              <img class="service-icon" src="img/icon/server.svg" alt="">
                              <div class="dropdown-discription">Enhance your own and your customers' growth by providing more flexibility, scalability, and better management.
                              </div>
                              <!-- <div class="scene">
                                <div class="ticket"></div>
                              </div> -->
                            </li>
                          </div>
                        </div>
                      </ul>
                  </li>
                  <li id="pass"><a href="https://cloudjiffy.com/" target="_blank" class="new-notification">PaaS Cloud</a></li>
                  <li class="" id="email">
                      <a href="email-hosting/index.php">Business E-Mail</a>
                  </li>
                  <li class="dropdown" id="ssl">
                    <a class="dropdown-toggle" data-hover="dropdown" data-target="#" href="ssl/index.php"><!-- hot-notification -->
                      Security &nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu sub-menu-list menu-dropdown menu-fullwidth">
                        <div class="container">
                          <div class="row-fluid">
                            <li class="span4"><a href="ssl/index.php"><div class="dropdown-subheading">SSL <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Secure your website with https.</div></a><a href="http://cloudbackup.leapswitch.com/index.html"><div class="dropdown-subheading">Backup <i class="fa fa-angle-right"></i></div><div class="dropdown-discription">Ransomware protected Cloud Backup solution.</div></a>
                            </li>
                            <li class="span4"><a href="https://service.leapswitch.com/store/sitelock"><div class="dropdown-subheading">Site Lock <i class="fa fa-angle-right"></i><span class="submenu-flag">NEW</span></div><div class="dropdown-discription">Website security &amp; malware protection for your website.</div></a></li>
                            <li class="span4 textcenter">
                              <img class="service-icon" src="img/icon/ssl.svg" alt="">
                              <div class="dropdown-discription">Security is no longer optional. Secure your website today..!!</div>
                              <!-- <div class="scene">
                                <div class="ticket"></div>
                              </div> -->
                            </li>
                          </div>
                        </div>
                      </ul>
                  </li>
                  <!-- <li class="" id="about"><a href="about-us.php">About</a></li> -->
                </ul>
                <!-- mobile nav -->
                <ul class="nav hidden-desktop ">
                    <li>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="https://service.leapswitch.com/clientarea.php" title="Login">Login <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="JavaScript:Void(0);" title="24x7 Support">24x7 Support : +91-9595-233-556 <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="https://service.leapswitch.com/submitticket.php?step=2&deptid=1" title="Connect with Sales Team">Contact Us <i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li><h3 class="mobile-menu-title">Domains</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="domain-name-registration/#name">Registration <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="domain-name-registration/#transfer">Transfer <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="domain-name-registration/domain-reseller.php">Domain Reseller <i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li><h3 class="mobile-menu-title">Hosting</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="shared-hosting/index.php">Shared Hosting <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="reseller-hosting/index.php">Reseller Hosting <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="email-hosting/index.php">Business E-Mail <i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li><h3 class="mobile-menu-title">Cloud Server</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="vps/index.php">Linux Cloud Server [Managed/Self-Managed] <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="vps/index.php">Windows Cloud  [Managed/Self-Managed] <i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li><h3 class="mobile-menu-title">Servers</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="pune-india/dedicated-servers/index.php">Dedicated<i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li class="bottom-padding"><h3 class="mobile-menu-title">Cloud Made Simple</h3>
                      <ul class="mobile-dropdown-menu">
                        <li>
                          <a href="https://cloudjiffy.com/" target="_blank" class="">Paas Cloud<i class="fa fa-angle-right"></i><span class="submenu-flag">NEW</span></a>
                        </li>
                      </ul>
                    </li>
                    <li><h3 class="mobile-menu-title">Security &amp; Backup</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="ssl/index.php">SSL <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="https://service.leapswitch.com/store/sitelock">SiteLock <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="http://cloudbackup.leapswitch.com/index.html"><div class="dropdown-subheading">Backup <i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                    <li class="bottom-padding"><h3 class="mobile-menu-title">Know More</h3>
                      <ul class="mobile-dropdown-menu">
                        <li><a href="about-us.php">About<i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </li>
                </ul>
                <!-- .nav, .navbar-search, .navbar-form, etc -->
              </div>
            </div>
          </div>
			</div>
		</div>
    </div>
  </div>
</div>
<!--/header-->
