<?php

function checkDomainName(){
if(isset($_POST['domainSearch']) ){
$domainName=$_POST['domainName'];
$cate=$_POST['cate'];
$name="www.".$domainName.".".$cate."";
$ip = gethostbyname($name);

if($name==$ip){	
	return "<h6 style='color:green;' class='f-center f-primary-b'>Domain Name '".$name."' is Available</h6>
	<center><a href=''>Contact us to register this Website Name</a></center>";
}else{
	return "<h6 style='color:red;' class='f-center f-primary-b'>Domain Name '".$name."' is Not Available</h6>";
}
}
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="description" content="web design, web development in Switzerland, invoice and billing invoice system for travels, jewellery in Bern" />
    <title>Saran Solutions - Web design, website development, Invoice and Billing System in Switzerland	- Home</title>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="js/bxslider/jquery.bxslider.css">
<!-- End bxslider -->

<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="js/radial-progress/style.css">
<!-- End bxslider -->

<!-- Animate css -->
<link type="text/css" rel='stylesheet' href="css/animate.css">
<!-- End Animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="css/bootstrap.min.css">
<link type="text/css" rel='stylesheet' href="js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
<!-- End Bootstrap css -->

<!-- Jquery UI css -->
<link type="text/css" rel='stylesheet' href="js/jqueryui/jquery-ui.css">
<link type="text/css" rel='stylesheet' href="js/jqueryui/jquery-ui.structure.css">
<!-- End Jquery UI css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

<link type="text/css" rel='stylesheet' href="fonts/fonts.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="css/main-default.css">

<link type="text/css" rel='stylesheet' href="js/rs-plugin/css/settings.css">
<link type="text/css" rel='stylesheet' href="js/rs-plugin/css/settings-custom.css">
<link type="text/css" rel='stylesheet' href="js/rs-plugin/videojs/video-js.css">
<!-- Animation hover css -->
<link type="text/css" rel='stylesheet' href="css/hover-effect-base.css">
<link type="text/css" rel='stylesheet' href="css/hover-effect-up.css">
<link type="text/css" rel='stylesheet' href="css/hover-effect-down.css">
<!-- End Animation hover css -->

</head>
<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- google analytics dont remove -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61205163-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- google analytics dont remove -->

<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
<header>
  <div class="container b-header__box b-relative">
    <a href="/" class="b-left b-logo "><img class="color-theme" data-retina src="img/logo-header-default.png" alt="Logo" /></a>
    <div class="b-header-r b-right b-header-r--icon">
      
      <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
      <nav class="b-top-nav f-top-nav b-right j-top-nav">
          <ul class="b-top-nav__1level_wrap">
    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="index.php">
	<i class="fa fa-home b-menu-1level-ico"></i>Home 
	<span class="b-ico-dropdown">
	     <i class="fa fa-arrow-circle-down"></i>
	</span>
 </a>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="aboutus.html">
		   <i class="fa fa-folder-open b-menu-1level-ico"></i>About Us
		  <span class="b-ico-dropdown">
		   <i class="fa fa-arrow-circle-down"></i>
		  </span>
		</a>    
    </li>
  <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
       <a href="services.html">
		   <i class="fa fa-picture-o b-menu-1level-ico"></i>Services
		<span class="b-ico-dropdown">
		  <i class="fa fa-arrow-circle-down"></i>
		</span>
	 </a>
	  <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title">Services</li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_1.html"><i class="fa fa-angle-right"></i>Web Design</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_2.html"><i class="fa fa-angle-right"></i>Web Devlopement</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_3.html"><i class="fa fa-angle-right"></i>Hosting</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_4.html"><i class="fa fa-angle-right"></i>Domain Registration</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_5.html"><i class="fa fa-angle-right"></i>Mobile Application</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_6.html"><i class="fa fa-angle-right"></i>Flyers Design</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_7.html"><i class="fa fa-angle-right"></i>SEO</a></li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_8.html"><i class="fa fa-angle-right"></i>Social Marketing</a></li>
               
            </ul>
        </div>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="solutions.html">
		   <i class="fa fa-code b-menu-1level-ico"></i>Solutions
		<span class="b-ico-dropdown">
		   <i class="fa fa-arrow-circle-down"></i>
		 </span>
		 </a>
	 <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title">Solutions</li>
			  <li data-box-id="0" class="b-top-nav__2level f-top-nav__2level f-primary b-top-nav__with-multi-lvl"><a onclick="return false" href=""><i class="fa fa-angle-right"></i>Travel Solutions</a>
                    <ul id="0" class="b-top-nav__multi-lvl-box">
                        <li class="b-top-nav__multi-lvl"><a href="portfolio_our_portfolio_1_colums.html"><i class="fa fa-angle-right"></i>Sabre Red</a></li>
                        <li class="b-top-nav__multi-lvl"><a href="portfolio_our_portfolio_1_colums_v2.html"><i class="fa fa-angle-right"></i>Amadeus</a></li>
                    </ul>
                </li>
               <li data-box-id="0" class="b-top-nav__2level f-top-nav__2level f-primary b-top-nav__with-multi-lvl"><a onclick="return false" href=""><i class="fa fa-angle-right"></i>Billing & Invoice System</a>
                    <ul id="0" class="b-top-nav__multi-lvl-box">
                        <li class="b-top-nav__multi-lvl"><a href="portfolio_our_portfolio_1_colums.html"><i class="fa fa-angle-right"></i>Jewellery</a></li>
                        <li class="b-top-nav__multi-lvl"><a href="portfolio_our_portfolio_1_colums_v2.html"><i class="fa fa-angle-right"></i>Textiles</a></li>
                    </ul>
                </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="page_header_3.html"><i class="fa fa-angle-right"></i>Barcode Configuration</a></li>
                 
            </ul>
        </div>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
        <a href="clients.html">
		<i class="fa fa-cloud-download b-menu-1level-ico"></i>Clients
		<span class="b-ico-dropdown">
		    <i class="fa fa-arrow-circle-down"></i>
		</span>
		</a>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="contactus.html">
		  <i class="fa fa-folder-open b-menu-1level-ico"></i>Contact us
		<span class="b-ico-dropdown">
		   <i class="fa fa-arrow-circle-down"></i>
		 </span>
		</a>   
    </li>   
</ul>
      </nav>
    </div>
  </div>
</header>
<div class="j-menu-container"></div>


<div class="l-main-container">
    <div class="b-slidercontainer">
    <div class="b-slider j-fullscreenslider">
        <ul>
            <li data-transition="3dcurtain-vertical" data-slotamount="7">
                <div class="tp-bannertimer"></div>
                <img data-retina src="img/slider/slider-lg__bg.png">
                <div class="caption sfb"  data-x="center" data-y="bottom" data-speed="700" data-start="1700" data-easing="Power4.easeOut" style="z-index: 2">
                    <img data-retina src="img/slider/slider_main_2-1.png">
                </div>
                <div class="caption sfl"  data-x="50" data-y="bottom" data-speed="700" data-start="2500" data-easing="Power4.easeOut">
                    <img data-retina src="img/slider/slider_main_2-2.png">
                </div>
                <div class="caption sfr"  data-x="right" data-y="bottom" data-hoffset="-30" data-speed="700" data-start="2500" data-easing="Power4.easeOut">
                    <img data-retina src="img/slider/slider_main_2-3.png">
                </div>
                <div class="caption lft"  data-x="center" data-y="30" data-speed="600" data-start="2600">
                    <h1 class="f-primary-b c-white" >awesome websites</h1>
                </div>
                <div class="caption"  data-x="center" data-y="90" data-speed="600" data-start="3200">
                    <p class="f-primary-b f-slider-lg-item__text_desc f-center c-white" >
                        Webiste for Corporate, Travel, Education, Real Estate...
                        <br/>
                        and much more website						
                    </p>
                </div>
            </li>
            <li data-transition="" data-slotamount="7">
                <div class="tp-bannertimer"></div>
                <img data-retina src="img/slider/slider-lg__bg.png">
                <div class="caption sfb"  data-x="right" data-y="bottom" data-speed="700" data-start="1700" data-easing="Power4.easeOut">
                    <img data-retina src="img/slider/slider-ipad.png">
                </div>
                <div class="caption sfl"  data-x="right" data-y="bottom" data-speed="700" data-start="2500" data-easing="Power4.easeOut" style="z-index: 2">
                    <img data-retina src="img/slider/slider-iphone.png">
                </div>
                <div class="caption lft"  data-x="left" data-y="112" data-speed="600" data-start="2600">
                    <h1 class="f-primary-b c-white" >Fully responsive design</h1>
                    <h3 class="f-primary-b c-white">Fully responsive design for all device</h3>					
                </div>
               

            </li>
            <li data-transition="" data-slotamount="7">
                <div class="tp-bannertimer"></div>
                <img data-retina src="img/slider/slider-lg__bg.png">
                <div class="caption sfb"  data-x="right" data-y="70" data-speed="700" data-start="1700" data-easing="Power4.easeOut" style="z-index: 2">
                    <img data-retina src="img/slider/slider-imac.png">
                </div>
                <div class="caption lft"  data-x="left" data-y="95" data-speed="600" data-start="2600">
                    <h2 class="f-primary c-white">Our Wesite</h2>
                </div>
                <div class="caption lft"  data-x="left" data-y="135" data-speed="600" data-start="2600">
                    <h1 class="f-primary-b c-white b-bg-slider-title">modern. creative. unique</h1>
                </div>
                <div class="caption lft"  data-x="left" data-y="220" data-speed="600" data-start="2600">
                    <ul class="b-slider-list f-slider-list c-white">
                        <li>
                            <i class="fa fa-tablet"></i> <span>Responsive HTML theme</span>
                        </li>
                        <li>
                            <i class="fa fa-cog"></i> <span>Easy to use and powerful theme options</span>
                        </li>
                        <li>
                            <i class="fa fa-trophy"></i> <span>Multi purpose with 5+ inner pages</span>
                        </li>
                        <li>
                            <i class="fa fa-globe"></i> <span>Awesome icons included</span>
                        </li>
                        <li>
                            <i class="fa fa-spinner"></i> <span>Unlimited colors support</span>
                        </li>
                        <li>
                            <i class="fa fa-life-ring"></i> <span>Free setting-up and support</span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
    
<section class="b-desc-section-container b-diagonal-line-bg-light">
    <div class="container">		
		<form method="POST" action="index.php">
        <h4 class="f-center f-primary-b">		
		Website Name Search
		</h4>		
		<h4 class="f-center f-primary-b">
		www.<input type="text" name="domainName" style="color:#000;">
		</input>
		<select name="cate">
			<option value="com">.com</option>
			<option value="ch">.ch</option>
		</select>
		<input type="submit" name="domainSearch" value="Go"></input>
		
		<?php 
			echo checkDomainName();		
		?>		
		</form>
		<hr>
		
		<div class="b-infoblock-with-icon-group row">
       
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="b-infoblock-with-icon">
     

<!-- second row of skills end -->
        </div>
    </div>
</section>


<section class="b-infoblock--small">
    <div class="container">
        <div class="row b-col-default-indent">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="f-primary-l f-center c-default">Our Hosting Plan</h2>				
                <p class="f-primary-l f-center">Every web hosting plan comes with a 14 day money back guarantee, 99.9% uptime guarantee, and is fully guaranteed. If you have a problem with the regular support, just ask that your ticket be assigned to our team that you deserve and get back to you within 24Hrs.</p>
				<center>
				 <div>
					<a class="f-tag b-tag" href="#">24/7 Dedicated Support</a>
					<a class="f-tag b-tag" href="#">99% Uptime Gurantee</a>
					<a class="f-tag b-tag" href="#">14 days money back gurantee</a>
				</div>
				</center>
            </div>
        </div>
		<div class="b-shortcode-example b-shortcode-example--btn">
        <a href=""><button class="button-lg">PHP MYSQL</button></a>
        <button class="button-lg">JAVA MYSQL</button>
		<button class="button-lg">.NET MSSQL</button>
        <button class="button-lg button-gray-light">VPS Web Hosting</button>
		<button class="button-lg button-red">Dedicated Servers</button>
		<button class="button-lg button-orange">Transform</button>
      </div>
        <div class="b-shortcode-example b-null-bottom-indent">
            <div class="b-pricing-info__container f-center">
  <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
    <div class="b-pricing-info__item-row b-pricing-info__item-title">
      <h4 class="f-primary-b">basic</h4>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-price">
      <h2 class="f-primary-b">$15 / <small class="f-primary">year</small></h2>
    </div>
    <div class="b-pricing-info__item-row">
      <p>500 MB Disk Space</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>1 GB Bandwidth</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>Host 1 Domain</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>10 Email Accounts</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>PHP 5, Perl5, Softaculous</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>No Contract or Hidden fees</p>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
      <a class="b-btn f-btn b-btn-sm f-primary-b">Order</a>
    </div>
  </div>
  <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
    <div class="b-pricing-info__item-row b-pricing-info__item-title">
      <h4 class="f-primary-b">Neptune</h4>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-price">
      <h2 class="f-primary-b">$20 / <small class="f-primary">year</small></h2>
    </div>
    <div class="b-pricing-info__item-row">
      <p>1 GB Disk Space</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>5 GB Bandwidth</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>Host 1 Domain</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>10 Email Accounts</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>PHP 5, Perl5, Softaculous</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>No Contract or Hidden fees</p>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
      <a class="b-btn f-btn b-btn-sm f-primary-b">Order</a>
    </div>
  </div>

  <div class="clearfix visible-sm-block"></div>

  <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
    <div class="b-pricing-info__item-row b-pricing-info__item-title">
      <h4 class="f-primary-b">Jupiter</h4>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-price">
      <h2 class="f-primary-b">$30 / <small class="f-primary">year</small></h2>
    </div>

    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Disk Space</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Bandwidth</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>Host 1 Domain</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Email Accounts</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>PHP 5, Perl5, Softaculous</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>No Contract or Hidden fees</p>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
      <a class="b-btn f-btn b-btn-sm f-primary-b">Order</a>
    </div> 
  </div>
  <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
    <div class="b-pricing-info__item-row b-pricing-info__item-title">
      <h4 class="f-primary-b">earth</h4>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-price">
      <h2 class="f-primary-b">$70 / <small class="f-primary">year</small></h2>
    </div>
    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Disk Space</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Bandwidth</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>Host UNLIMITED Domain</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>UNLIMITED Email Accounts</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>PHP 5, Perl5, Softaculous</p>
    </div>
    <div class="b-pricing-info__item-row">
      <p>No Contract or Hidden fees</p>
    </div>
    <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
      <a class="b-btn f-btn b-btn-sm f-primary-b">Order</a>
    </div>
  </div>
</div>
        </div>
    </div>
</section>

<section class="b-diagonal-line-bg-light b-section-info">
    <div class="container">		
        <div class="row">
            <div class="b-section-info__img img-appearance-1 wrap-img-appearance col-sm-6 col-xs-12">
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-1" src="img/animation-data/imac.png" alt="imac"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-2" src="img/animation-data/mac-book.png" alt="mac-book"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-3" src="img/animation-data/ipad.png" alt="ipad"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-4" src="img/animation-data/ipad-mini.png" alt="ipad-mini"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-5" src="img/animation-data/iphone.png" alt="iphone"/>
            </div>
            <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                <h2 class="f-primary-b">ARE YOU READY TO DiSCOVER?</h2>
                <p class="f-section-info__text_short f-primary-sb">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut massa</p>
                <div class="b-ol-list-text-container">
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">1</div>
                        <div class="b-ol-list-text__item_info">
                            <a href="#" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb">Our website for Travel company</a>
                            <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">The website for Gk Swiss Travels was developed by us.  </p>
                        </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">2</div>
                        <div class="b-ol-list-text__item_info">
                            <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Our website for Jewellery Shops</a>
                            <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">The website for PMP jewellery and Sagana Jewellery was developed by us.</p>
                        </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">3</div>
                        <div class="b-ol-list-text__item_info">
                            <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Invoice system for travels</a>
                            <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">We have developed the invoice systemfor Gk Swiss Travels, Siva travels, Kayathiri Travels and Travel Link. </p>
                        </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">4</div>
                        <div class="b-ol-list-text__item_info">
                            <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Invoice system for Jewellery</a>
                            <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">We have developed the invoice system for Sagana Jewellery,PMP Jewellery and  SKT Nathan jewellery  </p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<section class="b-diagonal-line-bg-light">
    <div class="b-employee">
        <div class="container">
            <h2 class="f-center f-primary-b">Our Clients</h2>
            <p class="b-infoblock-description f-desc-section f-center f-employee__desc">Our Prestigious Clients in Website development.</p>
            <div class="b-hr-stars f-hr-stars container">
                <div class="b-hr-stars__group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="b-employee-container row">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://gkswiss-travels.ch/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/1.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://gkswiss-travels.ch/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">GK Swiss GMBH</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://saganajewellery.com/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/2.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://saganajewellery.com/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Sagana Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>This website developed by us.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://mhswiss.ch/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/3.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://mhswiss.ch/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">PMP Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>This website developed by us.</p>
            
        </div>
    </div>
	  <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://mhswiss.ch/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/4.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://mhswiss.ch/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Mother House</h4>
            <div class="b-employee-item__position f-employee-item__position">Money Transfer Remittance</div>
            <p>This website developed by us.</p>
            
        </div>
    </div>
 </div>
    </div>
</section>
<section class="b-diagonal-line-bg-light">
    
        <div class="container">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://www.joysbeauty.ch/" target="blank"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/joy.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://www.joysbeauty.ch/" target='blank' class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Joy's Beauty Saloon</h4>
            <div class="b-employee-item__position f-employee-item__position">Beauty Saloon</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
   <div class=" view view-sixth">
    <a href="http://vellan-chettiar.com/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/vellan.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://vellan-chettiar.com/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
   </div>
            <h4 class="f-primary-b">Virallur Vellan-chettiar</h4>
            <div class="b-employee-item__position f-employee-item__position">Community Website</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	<div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
   <div class=" view view-sixth">
    <a href="http://vrss.ch/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/vrss1.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://vrss.ch/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
   </div>
            <h4 class="f-primary-b">VRSS</h4>
            <div class="b-employee-item__position f-employee-item__position">நலிவடைந்தோர் உதவிசங்கம்</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	<div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
   <div class=" view view-sixth">
    <a href="http://vskmotorss.com/" target='blank' ><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/vsk.jpg" alt=""/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://vskmotorss.com/" class="b-btn f-btn b-btn-light f-btn-light info" target='blank' ><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
   </div>
            <h4 class="f-primary-b">VSK MOTORSs GMBH</h4>
            <div class="b-employee-item__position f-employee-item__position">AUTO MOTORS</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	</div>
	</section>
	<section class="b-diagonal-line-bg-light">
    <div class="b-employee">
        <div class="container">
		
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="http://vsk-car-rent.ch/" target="blank"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/vsk1.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="http://vsk-car-rent.ch/" target='blank' class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">VSH MOTORSs GMBH</h4>
            <div class="b-employee-item__position f-employee-item__position">CAR RENT</div>
            <p>This website developed by us.</p>
        </div>
    </div>
	
	</div>
	</div>
</section>
<section class="b-diagonal-line-bg-light">
    <div class="b-employee">
        <div class="container">
            
            <p class="b-infoblock-description f-desc-section f-center f-employee__desc">Our Prestigious Clients in Invoice systems for Sabre Red & Amadeus.</p>
            <div class="b-hr-stars f-hr-stars container">
                <div class="b-hr-stars__group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="b-employee-container row">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/b11.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/b1.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/b11.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Kayathiri Travels</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>Invoice for Amadeus Server.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/b22.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/b2.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/b22.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">GK Swiss Gmbh</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>Invoice for Sabre Red Server.</p>
        </div>
    </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/b33.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/b3.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/b33.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Travel Link</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>Invoice for Amadeus Server.</p>
        </div>
    </div>
	     
</div>

        </div>
    </div>
</section>
<section class="b-diagonal-line-bg-light">
    <div class="b-employee">
        <div class="container">
            
            <p class="b-infoblock-description f-desc-section f-center f-employee__desc">Our Prestigious Clients in Invoice systems for Mortage & Mothly Schmes.</p>
            <div class="b-hr-stars f-hr-stars container">
                <div class="b-hr-stars__group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="b-employee-container row">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/i11.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/i1.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i11.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Sagana Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>Invoice for Monthly scheme and mortage.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/i22.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/i2.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i22.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">PMP Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>Invoice for Monthly scheme and mortage.</p>
        </div>
    </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/i33.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/i3.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i33.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">SKT Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>Invoice for Monthly scheme and mortage.</p>
        </div>
    </div>
	     
</div>

        </div>
    </div>
</section>
<section class="b-diagonal-line-bg-light">
    <div class="b-employee">
        <div class="container">
            
            <p class="b-infoblock-description f-desc-section f-center f-employee__desc">Our Prestigious Clients in Expense/Income Management system.</p>
            <div class="b-hr-stars f-hr-stars container">
                <div class="b-hr-stars__group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="b-employee-container row">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/i11.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/e1.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/e11.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Sagana Jewellery</h4>
            <div class="b-employee-item__position f-employee-item__position">Jewellery Shop</div>
            <p>Expense/Income Management System.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/e22.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/e2.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i22.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">GK Swiss Gmbh</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>Expense/Income Management System.</p>
        </div>
    </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/e33.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/e3.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i33.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">Kayathiri Travels</h4>
            <div class="b-employee-item__position f-employee-item__position">Travels Company</div>
            <p>Expense/Income Management System.</p>
        </div>
    </div>
	      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="b-employee-item b-employee-item--color f-employee-item">
            <div class=" view view-sixth">
    <a href="img/client/i44.jpg"><img class="j-data-element" data-animate="fadeInDown" data-retina src="img/client/i4.jpg" alt="/"/></a><br>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="img/client/i44.jpg" class='b-btn f-btn b-btn-light f-btn-light fancybox info'><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
            <h4 class="f-primary-b">VSK Motors Gmbh</h4>
            <div class="b-employee-item__position f-employee-item__position">Auto Motors</div>
            <p>Kredit/Debit Management System</p>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2014 - All Rights Reserved</div>
            <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="b-footer-secondary row">
      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
          <a href=""><img data-retina class="b-footer-logo color-theme" src="img/logo/logo.png" alt="Logo"/></a>
          <div class="b-footer-logo-text f-footer-logo-text">
          <p>
			<b>Contact Numbers</b><br>
			+91 95002 66414<br>
			+41 76410 9795
		  </p>
          <div class="b-btn-group-hor f-btn-group-hor">
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-dribbble"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-behance"></i>
            </a>
          </div>
        </div>
      </div>
	  <!-- Coloumn 2 -->
       <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">contact info</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
			<b>Main Branch</b><br/>
              Saran Solutions<br/>
				25, Keelaputhur main road,<br/>
				Eda Street, Palakkarai,<br/>
				Trichy-620001, India.<br/>
				 
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Skype: Saran Solutions
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:saransolutions.in@gmail.com">saransolutions.in@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
	  <!-- Coloumn 3 -->
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">contact info</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
			<b>Swiss Branch</b><br/>
              Saran Solutions<br/>
                226, Schwarzenburgstrasse,<br/>
                3097, Liebefeld,<br/>
				Bern, Switzerland.<br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Skype: Saran Solutions
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:saransolutions.in@gmail.com">saransolutions.in@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
	  <!-- Coloumn 4 -->
      <div class="col-md-3 col-sm-12 col-xs-12 ">
        <h4 class="f-primary-b">Facebook</h4>
          <div class='fb-like-box'
      data-href='https://www.facebook.com/pages/Saran-Solutions/850419968342961?ref=hl'
      data-show-faces='true' data-stream='false'
      data-width='280' data-height='240'
      data-header='false'
      >
     </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/breakpoints.js"></script>
<script src="js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/scrollspy.js"></script>
<script src="js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="js/masonry.pkgd.min.js"></script>
<script src='js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="js/bxslider/jquery.bxslider.min.js"></script>
<!-- end bxslider -->
<!-- smooth-scroll -->
<script src="js/smooth-scroll/SmoothScroll.js"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- end carousel -->
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rs-plugin/videojs/video.js"></script>

<!-- jquery ui -->
<script src="js/jqueryui/jquery-ui.js"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="js/modules/sliders.js"></script>
<script src="js/modules/ui.js"></script>
<script src="js/modules/retina.js"></script>
<script src="js/modules/animate-numbers.js"></script>
<script src="js/modules/parallax-effect.js"></script>
<script src="js/modules/maps-google.js"></script>
<script src="js/modules/color-themes.js"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="js/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/audioplayer/js/jplayer.playlist.min.js"></script>
<script src="js/audioplayer.js"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="js/radial-progress/jquery.easing.1.3.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="js/radial-progress/radialProgress.js"></script>
<script src="js/progressbars.js"></script>
<!-- end Progress -->

<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script src="js/google-chart.js"></script>
<!-- end Google services -->
<script src="js/j.placeholder.js"></script>

<!-- Fancybox -->
<script src="js/fancybox/jquery.fancybox.pack.js"></script>
<script src="js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->
<script src="js/user.js"></script>
<script src="js/timeline.js"></script>
<script src="js/fontawesome-markers.js"></script>
<script src="js/markerwithlabel.js"></script>
<script src="js/cookie.js"></script>

<!--Loader-->
<script src="js/loader.js"></script>
<!--End Loader-->


</body>
</html>