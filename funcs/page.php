<?php
function get_doc($profile){
    $content = '<!DOCTYPE html><html>';
    $content .= get_head($profile);
    $content .= '<body>';
    $content .= get_header();
    $content .= whatsapp();
    if ($profile['page'] == 'home'){
        $content .= get_slider();
        $content .= choose_us();
        $content .= services();
        $content .= get_feedback();
        $content .= client();
    }elseif ($profile['page'] == 'about_us'){
        $content .=  first_section();
        $content .=  second_section();
        $content .=  third_section();
        $content .=  fourth_section();
    }elseif ($profile['page'] == 'contact_us'){
        $content .=  contact_first_section();
        $content .=  contact_second_section();
    }
    
    $content .= footer();
    $content .= call_js();
    $content .= '<script type="text/javascript" src="https://www.google.com/jsapi?autoload={\"modules\":[{\"name\":\"visualization\",\"version\":\"1\",\"packages\":[\"corechart\"]}]}"></script>';
    $content .= '</body>';
    $content .= '</html>';
    return $content;
}
function change_lang(){
    if (isset($_GET['lang'])){
        $_SESSION["lang"] = $_GET['lang'];
    }
}


  function get_value($page,$tag, $button){
    $lang = $_SESSION['lang'];
    foreach (LANG_TABLE as $row){
        return $row[$page][$tag][$button][$lang];
    }
    
  }

  function get_title($profile){
    $page = 'common';
    $tag = 'title';
    $button = $profile['page'];
    return MAIN_TITLE.' - '.get_value($page, $tag, $button);
  }

  
  function get_head($profile){
      return '
      <head>
      <meta charset="utf-8">
      <title>'.get_title($profile).'</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        '.css_links().'
  </head>
      ';
  }

  function css_links(){
    return '<link rel="shortcut icon" href="favicon.ico">
  
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
    <link type="text/css" rel="stylesheet" href="js/rs-plugin/videojs/video-js.css">';
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
                            <li><a href="home.php">'.get_value('common', 'title', 'home').'</a></li>
                            <li><a href="about.php">'.get_value('common', 'title', 'about_us').'</a></li>
                            <li><a href="service.php">'.get_value('common', 'title', 'our_services').'</a></li>
                            <li><a href="contact.php">'.get_value('common', 'title', 'contact_us').'</a></li>
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
                 <li><b>Website Development</b></li><hr>
                 <li><b>Billing System</b></li><hr>
                 <li><b>Travel System</b></li><hr>
                 <li><b>Money Transfer Program</b></li>
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
                 <b>'.MAIN_ADDRESS.'<br/>
                    '.MAIN_CITY.'<br/>
                    
                </b>
                </div>
              </div>
              <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                  <a href="mailto:'.MAIN_EMAIL.'"><b>'.MAIN_EMAIL.'</b></a>
                </div>
              </div>
              <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                  <b>'.MAIN_PHONE.'</b>
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
  
  function call_js(){
    $part1 = '<script src="js/breakpoints.js"></script>
    <script src="js/jquery/jquery-1.11.1.min.js"></script>
    <!-- bootstrap -->
    <script src="js/scrollspy.js"></script>
    <script src="js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- end bootstrap -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- bxslider -->
    <script src="js/bxslider/jquery.bxslider.min.js"></script>
    <!-- end bxslider -->
    <!-- flexslider -->
    <script src="js/flexslider/jquery.flexslider.js"></script>
    <!-- end flexslider -->
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
            src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAJ7dgBDkg2ze3UT4pMUFfgO6ltF2lZT9o"></script>
    <!-- Modules -->
    <script src="js/modules/sliders.js"></script>
    <script src="js/modules/ui.js"></script>
    <script src="js/modules/retina.js"></script>
    <script src="js/modules/animate-numbers.js"></script>
    <script src="js/modules/parallax-effect.js"></script>
    <script src="js/modules/settings.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
    <script src="js/radial-progress/radialProgress.js"></script>
    <script src="js/progressbars.js"></script>
    <!-- end Progress -->
    
    <!-- Google services -->
    
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
    <script src="js/loader.js"></script>
    <script src="js/scrollIt/scrollIt.min.js"></script>
    <script src="js/modules/navigation-slide.js"></script>';
    return $part1;
  }


 function first_section(){
    return '<section class="b-diagonal-line-bg-light b-infoblock--small ">
    <div class="container">
        <div class="row b-col-default-indent">
            <div class="col-md-6 col-xs-12">
                <div class="b-slidercontainer b-small-arr f-small-arr b-shadow-container">
                    <div class="b-slider j-smallslider">
                        <ul>
                            <li data-transition="3dcurtain-vertical" data-slotamount="12">
                                <img data-retina src="img/slider/slider_small_1.jpg">
                            </li>
                            <li data-transition="" data-slotamount="12">
                                <img data-retina src="img/slider/slider-education.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3 class="f-primary-b">WELCOME TO OUR COMPANY</h3>
                <p class="f-primary-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. </p>
                <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Web and graphich Design</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Website development</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile game design</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile app developmemt</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> CMS integration</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile games</a></li>
    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Software development</a></li>
</ul>

                <div class="b-btn-container">
                    <a href="about_us_meet_our_team_detail.html" class="b-btn f-btn b-btn-md f-btn-md b-btn-default f-primary-b button-gray-light">TAKE A TOUR</a>
                    <a href="contact_us.html" class="b-btn f-btn b-btn-md f-btn-md b-btn-default f-primary-b button-gray-light">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</section> ';
 }
 function second_section(){
    return '<section class="b-remaining">
    <div class="container b-infoblock--without-border">
        <div class="row b-shortcode-example">
            <div  data-active="4" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
    <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
        <ul>
            <li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-suitcase"></i> About us</a></li>
            <li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-flask"></i> Our history</a></li>
            <li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-flag"></i> Our missions</a></li>
            <li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-users"></i> Our clients</a></li>
            <li><a class="f-primary-l" href="#tabs-5"><i class="fa fa-home"></i> Heading office</a></li>
            <li><a class="f-primary-l" href="#tabs-6"><i class="fa fa-comments"></i> Our team</a></li>
        </ul>
    </div>
    <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
        <div id="tabs-1">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
        <div id="tabs-2">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Content heading 2</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
        <div id="tabs-3">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
        <div id="tabs-4">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
                <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">
                    <div class="f-left b-logo-group j-logo-slider">
                        <div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-1.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-1h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-2.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-2h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-3.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-3h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-4.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-4h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-5.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-5h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-3.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-3h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-4.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-4h.png" alt=""/>
</a></div>
<div class="b-logo-item"><a href="#">
    <img class="is-normal" src="img/slider/partner/client-logo-5.png" alt=""/>
    <img class="is-hover" src="img/slider/partner/client-logo-5h.png" alt=""/>
</a></div>

                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-5">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Content heading 5</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
        <div id="tabs-6">
            <div class="b-tabs-vertical__content-text">
                <h3 class="f-tabs-vertical__title f-primary-b">Content heading 6</h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>';
 }
 function third_section(){
    return '<section class="b-infoblock--without-border b-diagonal-line-bg-light b-bg-full-primary">
    <div class="container">
        <h3 class="f-legacy-h3 f-primary-b">Our skills</h3>
        <div class="row">
            <p class="f-primary-l col-md-8">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula. Donec viverra semper arcu ut blandit. Suspendisse ac tempus diam. Duis dignissim lacinia sapien in tempor.</p>
        </div>
        <div class="b-column-20p f-center">
            <div class="b-column b-default-top-indent">
                <div class="b-infoblock-with-icon">
                    <div class="b-infoblock-with-icon__progressbar">
                        <div data-radialprogress class="b-radial-progress" id="div1"
                             data-value="90"
                             data-duration="1000"
                             data-delay="300"
                             data-diameter = "125"
                             data-style="notFilled">
                            <i class="fa fa-rocket b-radial-progress__label f-radial-progress__label"></i>
                        </div>
                    </div>
                    <div class="f-infoblock-with-icon__info">
                        <a href="our_services_version_1.html" class="c-primary b-infoblock-with-icon__info_title f-primary-sb f-uppercase f-title-small">graphic design</a>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-l">
                            Quisque at tortor a libero posuere laoreet vitae sed arcu
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-column b-default-top-indent">
                <div class="b-infoblock-with-icon b-infoblock-with-icon__progressbar">
                    <div class="b-infoblock-with-icon__progressbar">
                        <div data-radialprogress class="b-radial-progress" id="div2"
                             data-value="90"
                             data-duration="1000"
                             data-delay="300"
                             data-diameter = "125"
                             data-style="notFilled">
                            <i class="fa fa-html5 b-radial-progress__label f-radial-progress__label"></i>
                        </div>
                    </div>
                    <div class="f-infoblock-with-icon__info">
                        <a href="our_services_version_1.html" class="c-primary b-infoblock-with-icon__info_title f-primary-sb f-uppercase f-title-small">html5 & css 3</a>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-l">
                            Quisque at tortor a libero posuere laoreet vitae sed arcu
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-column b-default-top-indent">
                <div class="b-infoblock-with-icon">
                    <div class="b-infoblock-with-icon__progressbar">
                        <div data-radialprogress class="b-radial-progress" id="div3"
                             data-value="90"
                             data-duration="1000"
                             data-delay="300"
                             data-diameter = "125"
                             data-style="notFilled">
                            <i class="fa fa-mobile b-radial-progress__label f-radial-progress__label"></i>
                        </div>
                    </div>
                    <div class="f-infoblock-with-icon__info">
                        <a href="our_services_version_1.html" class="c-primary b-infoblock-with-icon__info_title f-primary-sb f-uppercase f-title-small">mobile design</a>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-l">
                            Quisque at tortor a libero posuere laoreet vitae sed arcu
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-column b-default-top-indent">
                <div class="b-infoblock-with-icon">
                    <div class="b-infoblock-with-icon__progressbar">
                        <div data-radialprogress class="b-radial-progress" id="div4"
                             data-value="80"
                             data-duration="1000"
                             data-delay="300"
                             data-diameter = "125"
                             data-style="notFilled">
                            <i class="fa fa-code b-radial-progress__label f-radial-progress__label"></i>
                        </div>
                    </div>
                    <div class="f-infoblock-with-icon__info">
                        <a href="our_services_version_1.html" class="c-primary b-infoblock-with-icon__info_title f-primary-sb f-uppercase f-title-small">programing</a>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-l">
                            Quisque at tortor a libero posuere laoreet vitae sed arcu
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-column b-default-top-indent">
                <div class="b-infoblock-with-icon">
                    <div class="b-infoblock-with-icon__progressbar">
                        <div data-radialprogress class="b-radial-progress" id="div5"
                             data-value="80"
                             data-duration="1000"
                             data-delay="300"
                             data-diameter = "125"
                             data-style="notFilled">
                            <i class="fa fa-eraser b-radial-progress__label f-radial-progress__label"></i>
                        </div>
                    </div>
                    <div class="f-infoblock-with-icon__info">
                        <a href="our_services_version_1.html" class="c-primary b-infoblock-with-icon__info_title f-primary-sb f-uppercase f-title-small">web design</a>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-l">
                            Quisque at tortor a libero posuere laoreet vitae sed arcu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';
 }
 function fourth_section(){
    return '<section class="b-google-map map-theme">
    <div class="b-google-map__map-view b-google-map__map-height">
<!-- Google map load -->
</div>
<img data-retina src="img/google-map-marker-default.png" data-label="" class="marker-template d-none" />
<div class="b-google-map__info-window-template d-none"
 data-selected-marker="0"
 data-width="526">
<div class="b-google-map__info-window col-xs-12">
<div class="col-lg-7 col-xs-12 b-google-map__info-window-address">
    <ul class="list-unstyled">
<li class="col-xs-12">
    <div class="b-google-map__info-window-address-icon f-center pull-left">
        <i class="fa fa-home"></i>
    </div>
    <div>
        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
            frexy studio
        </div>
        <div class="desc">1234 Street Name, City Name, United States.</div>
    </div>
</li>
<li class="col-xs-12">
    <div class="b-google-map__info-window-address-icon f-center pull-left">
        <i class="fa fa-globe"></i>
    </div>
    <div>
        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
            portfolio homepage
        </div>
        <div class="desc">http://yoursite.com</div>
    </div>
</li>
<li class="col-xs-12">
    <div class="b-google-map__info-window-address-icon f-center pull-left">
        <i class="fa fa-skype"></i>
    </div>
    <div>
        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
            Skype
        </div>
        <div class="desc">ask.company</div>
    </div>
</li>
<li class="col-xs-12">
    <div class="b-google-map__info-window-address-icon f-center pull-left">
        <i class="fa fa-envelope"></i>
    </div>
    <div>
        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
            email
        </div>
        <div class="desc">mail@example.com</div>
    </div>
</li>
</ul>

</div>
<div class="col-lg-5 b-google-map__info-window-image hidden-xs hidden-sm hidden-md">
    <img data-retina src="img/google-map-skyscrapper.png" style="width: 218px; height: 243px;" alt=""/>
</div>
</div>
</div>
    <div class="b-contact-form container">
<div class="b-contact-form__window c-primary row">
    <div class="col-xs-12 col-sm-12 b-contact-form__window-title f-contact-form__window-title text-uppercase f-primary-b">
        drop a line
        <hr />
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_name" class="b-contact-form__window-form-row-label">Your name</label>
            <input type="text" class="form-control" id="contact_form_name" />
        </div>
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_email" class="b-contact-form__window-form-row-label">Your email</label>
            <input type="text" class="form-control" id="contact_form_email" />
        </div>
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_website" class="b-contact-form__window-form-row-label">Your website</label>
            <input type="text" class="form-control" id="contact_form_website" />
        </div>
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_title" class="b-contact-form__window-form-row-label">Your title</label>
            <input type="text" class="form-control" id="contact_form_title" />
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_message" class="b-contact-form__window-form-row-label">Your message</label>
            <textarea id="contact_form_message" rows="7" class="b-contact-form__window-form-textarea form-control"></textarea>
        </div>
        <div class="b-contact-form__window-form-row">
            <label for="contact_form_copy" class="b-contact-form__window-form-row-label">
                <input type="checkbox" id="contact_form_copy" class="b-form-checkbox" />
                <span><span class="f-primary">Send me a copy</span></span>
            </label>
        </div>
        <div class="b-contact-form__window-form-row">
            <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-contact-form__window-form-row-button">send message</a>
        </div>
    </div>
</div>
</div>
</section>';
 }

 function contact_first_section(){
    return '
        <section class="container">
        <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->

       <div class="l-main-container">
            <div class="b-breadcrumbs f-breadcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="https://saransolutions.ch"> <i class="fa fa-home"></i>Saran Solutions</a></li>
                        <li><span> <i class="fa fa-angle-right"></i>Contact Us</span></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2717.8156967910822!2d7.313810500000001!3d47.06346560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e23003a385691%3A0x2fab28a6ad19611!2sSaran%20Solution!5e0!3m2!1sen!2sch!4v1715119419996!5m2!1sen!2sch" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
</div>
</section>
      
        ';
    }
function contact_second_section(){
        return '<section class="b-diagonal-line-bg-light b-bord-box">
        <section class="container">
        <div class="row b-shortcode-example">
        <div class="col-xs-12 col-sm-6">
            <div class="b-form-row f-primary-l f-title-big c-secondary">Create an account</div>
            <div class="b-form-row">Consectetur adipiscing elituis sagittis eu mi et pellentesqueur</div>
            <hr class="b-hr" />
            <div class="row b-form-inline b-form-horizontal">
                <div class="col-xs-12">
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_email">Your Email</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_email" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_password">Your password</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_password" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_confirm">Confirm password</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_confirm" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_phone">Phone Number</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_phone" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_location">Location</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_location" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-horizontal__label" for="create_account_name">Your name</label>
                        <div class="b-form-horizontal__input">
                            <input type="text" id="create_account_name" class="form-control" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <div class="b-form-horizontal__label"></div>
                        <div class="b-form-horizontal__input">
                            <label for="create_account_terms">
                                <input type="checkbox" class="b-form-checkbox b-form-checkbox" id="create_account_terms" />
                                <span>I agree to <a href="#" class="c-secondary f-more">Terms of Use</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="b-form-row">
                        <div class="b-form-horizontal__label"></div>
                        <div class="b-form-horizontal__input">
                            <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="b-form-row f-primary-l f-title-big c-secondary">Contact us</div>
            <div class="b-form-row">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc</div>
            <hr class="b-hr" />
            <div class="row">
                <div class="col-sm-6">
                    <div class="b-form-row">
                        <input type="text" class="form-control" placeholder="Your Email" />
                    </div>
                    <div class="b-form-row">
                        <input type="text" class="form-control" placeholder="Your email" />
                    </div>
                    <div class="b-form-row">
                        <input type="text" class="form-control" placeholder="Your website" />
                    </div>
                    <div class="b-form-row">
                        <input type="text" class="form-control" placeholder="Your title" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="b-form-row">
                        <textarea class="form-control" placeholder="Your message" rows="5"></textarea>
                    </div>
                    <div class="b-form-row">
                        <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">send message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
 </section>
</section>
            ';
        }


        
?>