<?php

define("MAIN_TITLE", "Saran Solutions - Home");

function add_track_smart_look(){
  return "<script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '6681201ae463fd7e927258a9ecbfa3f9ebc400b2', { region: 'eu' });
</script>";
}

function get_head(){
    return '
    <head>
    '.add_track_smart_look().'
    <meta charset="utf-8">
    <title>'.MAIN_TITLE.'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bxslider -->
<link type="text/css" rel="stylesheet" href="js/bxslider/jquery.bxslider.css">
<!-- End bxslider -->

<!-- flexslider -->
<link type="text/css" rel="stylesheet" href="js/flexslider/flexslider.css">
<!-- End flexslider -->

<!-- radial-progress -->
<link type="text/css" rel="stylesheet" href="js/radial-progress/style.css">
<!-- End bxslider -->

<!-- animate css -->
<link type="text/css" rel="stylesheet" href="css/animate.css">
<!-- End animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
<!-- End Bootstrap css -->

<!-- jQuery UI css -->
<link type="text/css" rel="stylesheet" href="js/jqueryui/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="js/jqueryui/jquery-ui.structure.css">
<!-- End jQuery UI css -->

<!-- Fancybox -->
<link type="text/css" rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

<link type="text/css" rel="stylesheet" href="fonts/fonts.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

<link type="text/css" data-themecolor="default" rel="stylesheet" href="css/main-default.css">

<link type="text/css" rel="stylesheet" href="js/rs-plugin/css/settings.css">
<link type="text/css" rel="stylesheet" href="js/rs-plugin/css/settings-custom.css">
<link type="text/css" rel="stylesheet" href="js/rs-plugin/videojs/video-js.css">
</head>
	';
}

function footer(){
    return ' 
    <footer>
    <div class="b-footer-primary">
      <div class="container">
          <div class="row">
              <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2020 - All Rights Reserved</div>
              <div class="col-sm-8 col-xs-12">
                  <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                      <i class="fa fa-chevron-up"></i>
                  </div>
                  <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                      <ul>
                          <li><a href="index.php">Home</a></li>
                          
                          <li><a href="about.php">About Us</a></li>
                          <li><a href="service.php">Services</a></li>
                          <li><a href="price.php">Package</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                          
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
  </div>
    <div class="container">
      <div class="b-footer-secondary row">
        <div class="masonry-gridSizer col-sm-6 col-md-4 f-center b-footer-logo-containter">
            <a href=""><img data-retina class="b-footer-logo color-theme" src="img/logo/logo.png" alt="Logo"/></a>
            <div class="b-footer-logo-text f-footer-logo-text">
            <p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
            <div class="b-btn-group-hor f-btn-group-hor">
              <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                <i class="fa fa-youtube"></i>
              </a>
              <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                <i class="fa fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="masonry-gridSizer col-sm-6 col-md-4">
          <h4 class="f-primary-b f-legacy-h4">Our Services</h4>
          <div class="b-blog-short-post row">
            <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
               <li><b>Website Develop </b></li><hr>
               <li><b>Billing System  </b></li><hr>
               <li><b>Travel System </b></li><hr>
               <li><b>Money Transfer Program </b></li>
  
            </div>
          
          </div>
        </div>
        <div class="masonry-gridSizer col-sm-6 col-md-4">
          <h4 class="f-primary-b f-legacy-h4">Contact Info</h4>
          <div class="b-contacts-short-item-group">
            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
              <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="b-remaining f-contacts-short-item__text">
               <b> Saran Solutions<br/>
                  Wannersmattweg 10H <br/>
                  3250 , Lyss<br/>
                  Bern<br/></b>
              </div>
            </div>
            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
              <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                <a href="mailto:info@saransolutions.ch"><b>info@saransolutions.ch</b></a>
              </div>
            </div>
            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
              <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                <a href="mailto:saransolutions.in@gmail.com"><b>saransolutions.in@gmail.com</b></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
	';
}

function get_header(){
    return '
    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
     <header>
    <div class="container b-header__box b-relative">
      <a href="index.php" class="b-left b-logo "><img class="color-theme" data-retina src="img/logo/logo.png" alt="Logo" /></a>
      <div class="b-header-r b-right b-header-r--icon">
       <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
        <nav class="b-top-nav f-top-nav b-right j-top-nav">
            <ul class="b-top-nav__1level_wrap">
      <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="index.php"><i class="fa fa-home b-menu-1level-ico"></i>Home <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
       </li>
      <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
          <a href="about.php"><i class="fa fa-folder-open b-menu-1level-ico"></i>About Us<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
          
      </li>
      <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
          <a href="service.php"><i class="fa fa-picture-o b-menu-1level-ico"></i>Services <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
          
      </li>
      <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
          <a href="price.php"><i class="fa fa-code b-menu-1level-ico"></i>Price <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
         
      </li>
     <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
          <a href="contact.php"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact us<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
         
      </li>
    
    
    </ul>
    
        </nav>
      </div>
    </div>
    </header>
	';
}
function whatsapp(){
    return ' <div class="wabtn" id="wabutton">
    <style> [wa-tooltip] { position: relative; cursor: default;  &:hover { &::before { content: attr(wa-tooltip); font-size: 16px; text-align: center; position: absolute; display: block; right: calc(0% - 100px); left: null; min-width: 200px; max-width: 200px; bottom: calc(100% + 10px); transform: translate(-50%); animation: fade-in 500ms ease; background: #00E785; border-radius: 4px; padding: 10px; color: #ffffff; z-index: 1; } } }  @keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.1); } 100% { transform: scale(1); } }  [wa-tooltip] {  }  @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }</style>
    <a wa-tooltip="We are here! Get in touch with us:)" target="_blank" href="https://wa.me/41779445192?text=Hello!%20I%20am%20interested%20in%20your%20services%20and%20would%20like%20to%20know%20more%20about%20it.%20Could%20you%20send%20me%20more%20information?%20Thank%20you!" style=" cursor: pointer;height: 62px;width: auto;padding: 10px 10px 10px 10px;position: fixed !important;color: #fff;bottom: 20px;right: 20px;;display: flex;font-size: 18px;font-weight: 600;align-items: center;z-index: 999999999 !important;background-color: #00E785;box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.4);border-radius: 100px;animation: pulse 2.5s ease infinite;">
      <svg width="32" height="32" " viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1024_354)"><path d="M23.8759 4.06939C21.4959 1.68839 18.3316 0.253548 14.9723 0.0320463C11.613 -0.189455 8.28774 0.817483 5.61565 2.86535C2.94357 4.91323 1.10682 7.86244 0.447451 11.1638C-0.21192 14.4652 0.351026 17.8937 2.03146 20.8109L0.0625 28.0004L7.42006 26.0712C9.45505 27.1794 11.7353 27.7601 14.0524 27.7602H14.0583C16.8029 27.7599 19.4859 26.946 21.768 25.4212C24.0502 23.8965 25.829 21.7294 26.8798 19.1939C27.9305 16.6583 28.206 13.8682 27.6713 11.1761C27.1367 8.48406 25.8159 6.01095 23.8759 4.06939ZM14.0583 25.4169H14.0538C11.988 25.417 9.96008 24.8617 8.1825 23.8091L7.7611 23.5593L3.3945 24.704L4.56014 20.448L4.28546 20.0117C2.92594 17.8454 2.32491 15.2886 2.57684 12.7434C2.82877 10.1982 3.91938 7.80894 5.67722 5.95113C7.43506 4.09332 9.76045 2.87235 12.2878 2.48017C14.8152 2.08799 17.4013 2.54684 19.6395 3.78457C21.8776 5.02231 23.641 6.96875 24.6524 9.3179C25.6638 11.6671 25.8659 14.2857 25.2268 16.7622C24.5877 19.2387 23.1438 21.4326 21.122 22.999C19.1001 24.5655 16.6151 25.4156 14.0575 25.4157L14.0583 25.4169Z" fill="#E0E0E0"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6291 7.98363C10.3723 7.41271 10.1019 7.40123 9.85771 7.39143C9.65779 7.38275 9.42903 7.38331 9.20083 7.38331C9.0271 7.3879 8.8562 7.42837 8.69887 7.5022C8.54154 7.57602 8.40119 7.68159 8.28663 7.81227C7.899 8.17929 7.59209 8.62305 7.38547 9.11526C7.17884 9.60747 7.07704 10.1373 7.08655 10.6711C7.08655 12.3578 8.31519 13.9877 8.48655 14.2164C8.65791 14.4452 10.8581 18.0169 14.3425 19.3908C17.2382 20.5327 17.8276 20.3056 18.4562 20.2485C19.0848 20.1913 20.4843 19.4194 20.7701 18.6189C21.056 17.8183 21.0557 17.1323 20.9701 16.989C20.8844 16.8456 20.6559 16.7605 20.3129 16.5889C19.9699 16.4172 18.2849 15.5879 17.9704 15.4736C17.656 15.3594 17.4275 15.3023 17.199 15.6455C16.9705 15.9888 16.3139 16.7602 16.1137 16.9895C15.9135 17.2189 15.7136 17.2471 15.3709 17.0758C14.3603 16.6729 13.4275 16.0972 12.6143 15.3745C11.8648 14.6818 11.2221 13.8819 10.7072 13.0007C10.5073 12.6579 10.6857 12.472 10.8579 12.3007C11.0119 12.1472 11.2006 11.9005 11.3722 11.7003C11.5129 11.5271 11.6282 11.3346 11.7147 11.1289C11.7603 11.0343 11.7817 10.9299 11.7768 10.825C11.7719 10.7201 11.7409 10.6182 11.6867 10.5283C11.6001 10.3566 10.9337 8.66151 10.6291 7.98363Z" fill="white"></path><path d="M23.7628 4.02445C21.4107 1.66917 18.2825 0.249336 14.9611 0.0294866C11.6397 -0.190363 8.35161 0.804769 5.70953 2.82947C3.06745 4.85417 1.25154 7.77034 0.600156 11.0346C-0.051233 14.299 0.506321 17.6888 2.16894 20.5724L0.222656 27.6808L7.49566 25.7737C9.50727 26.8692 11.7613 27.4432 14.0519 27.4434H14.0577C16.7711 27.4436 19.4235 26.6392 21.6798 25.1321C23.936 23.6249 25.6947 21.4825 26.7335 18.9759C27.7722 16.4693 28.0444 13.711 27.5157 11.0497C26.9869 8.38835 25.6809 5.94358 23.7628 4.02445ZM14.0577 25.1269H14.0547C12.0125 25.1271 10.0078 24.5782 8.25054 23.5377L7.8339 23.2907L3.51686 24.4222L4.66906 20.2143L4.39774 19.7831C3.05387 17.6415 2.4598 15.1141 2.70892 12.598C2.95804 10.082 4.03622 7.72013 5.77398 5.88366C7.51173 4.04719 9.81051 2.84028 12.3089 2.45266C14.8074 2.06505 17.3638 2.5187 19.5763 3.74232C21.7888 4.96593 23.5319 6.89011 24.5317 9.21238C25.5314 11.5346 25.7311 14.1233 25.0993 16.5714C24.4675 19.0195 23.0401 21.1883 21.0414 22.7367C19.0427 24.2851 16.5861 25.1254 14.0577 25.1255V25.1269Z" fill="white"></path></g><defs><clipPath id="clip0_1024_354"><rect width="27.8748" height="28" fill="white" transform="translate(0.0625)"></rect></clipPath></defs></svg>
      <span class="button-text"></span>
    </a>
    </div>
   
	';
}


        
?>
 