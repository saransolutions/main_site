<?php 
require_once 'funcs/cons.php';
require_once 'funcs/db.php';
require_once 'funcs/page.php';

session_start();
change_lang();

$page_name = 'home';
$profile = array();
$profile['page'] = $page_name;
$profile['block'] = 'header';
echo get_doc($profile);

##functions##
function get_slider(){

return '
    <div class="j-menu-container"></div>
    <div class="l-main-container">
        <div class="b-slidercontainer">
            <div class="b-slider j-fullscreenslider">
                <ul>
                    <li data-transition="3dcurtain-vertical" data-slotamount="7">
                        <div class="tp-bannertimer"></div>
                        <img data-retina src="img/slider/slider-lg__bg.png">
                        <div class="caption sfb" data-x="center" data-y="bottom" data-speed="700" data-start="1700"
                            data-easing="Power4.easeOut" style="z-index: 2">
                            <img data-retina src="img/sam/slider_main_2-1.png">
                        </div>
                        <div class="caption sfl" data-x="50" data-y="bottom" data-speed="700" data-start="2500"
                            data-easing="Power4.easeOut">
                            <img data-retina src="img/sam/slider_main_22.png">
                        </div>
                        <div class="caption sfr" data-x="right" data-y="bottom" data-hoffset="-30" data-speed="700"
                            data-start="2500" data-easing="Power4.easeOut">
                            <img data-retina src="img/sam/slider_main_2-3.png">
                        </div>
                        <div class="caption lft" data-x="center" data-y="30" data-speed="600" data-start="2600">
                            <h1 class="f-primary-b c-white f-legacy-h1">'.val("home", "awesome_and_unique_").'</h1>
                        </div>
                        <div class="caption" data-x="center" data-y="90" data-speed="600" data-start="3200">
                            <p class="f-primary-b f-slider-lg-item__text_desc f-center c-white">
                                '.val("home", "website_and_hosting").'
                                <br />
                                <i class="fa fa-phone" aria-hidden="true"></i> '.MAIN_PHONE.'
                            </p>
                        </div>
                    </li>
                    <li data-transition="" data-slotamount="7">
                        <div class="tp-bannertimer"></div>
                        <img data-retina src="img/slider/slider-lg__bg.png">
                        <div class="caption sfb" data-x="right" data-y="bottom" data-speed="700" data-start="1700"
                            data-easing="Power4.easeOut">
                            <img data-retina src="img/sam/slider-ipad.png">
                        </div>
                        <div class="caption sfl" data-x="right" data-y="bottom" data-speed="700" data-start="2500"
                            data-easing="Power4.easeOut" style="z-index: 2">
                            <img data-retina src="img/sam/slider-iphone.png">
                        </div>
                        <div class="caption lft" data-x="left" data-y="112" data-speed="600" data-start="2600">
                            <h1 class="f-primary-b c-white f-legacy-h1">'.val(HOME, "fully_responsive_de").'</h1>
                            <h3 class="f-primary-b c-white f-legacy-h3">'.val(HOME, "web_pages").'</h3>
                        </div>
                        <div class="caption" data-x="left" data-y="240" data-speed="600" data-start="3200">
                            <p class="f-primary-b f-slider-sm-item__text_desc c-white">
                            '.val(HOME, "free_support_for_se").'
                            </p>
                        </div>
                    </li>
                    <li data-transition="" data-slotamount="7">
    <div class="tp-bannertimer"></div>
    <img data-retina src="img/slider/slider-lg__bg.png">
    <div class="caption sfb" data-x="right" data-y="70" data-speed="700" data-start="1700" data-easing="Power4.easeOut"
        style="z-index: 2">
        <img data-retina src="img/sam/slider-imac.png">
    </div>
    <div class="caption lft" data-x="left" data-y="95" data-speed="600" data-start="2600">
        <h2 class="f-primary c-white f-legacy-h2">'.val(HOME, "modern_creative_uni").'</h2>
    </div>
    <div class="caption lft" data-x="left" data-y="135" data-speed="600" data-start="2600">
        <h1 class="f-primary-b c-white b-bg-slider-title f-legacy-h1">'.val(HOME, "multi_purpose_websi").'</h1>
    </div>
    <div class="caption lft" data-x="left" data-y="220" data-speed="600" data-start="2600">
        <ul class="b-slider-list f-slider-list c-white">
            <li>
                <i class="fa fa-tablet"></i> <span>'.val(HOME, "ecommerce_website").'</span>
            </li>
            <li>
                <i class="fa fa-cog"></i> <span>'.val(HOME, "creating_invoice_sy").'</span>
            </li>
            <li>
                <i class="fa fa-trophy"></i> <span>'.val(HOME, "multi_purpose_websi").'</span>
            </li>
            <li>
                <i class="fa fa-globe"></i> <span>'.val(HOME, "awesome_icons_inclu").'</span>
            </li>
            <li>
                <i class="fa fa-spinner"></i> <span>'.val(HOME, "unlimited_colors_su").'</span>
            </li>
            <li>
                <i class="fa fa-life-ring"></i> <span>'.val(HOME, "free_settingup_and_").'</span>
            </li>
        </ul>
    </div>
</li>
                </ul>
            </div>
        </div>';
}

function choose_us(){
    return '
    <section class="b-desc-section-container b-diagonal-line-bg-light">
    <div class="container">
        <h2 class="f-center f-primary-b f-legacy-h2">'.val('home', 'why_choose_us_?').'</h2>
        <div class="b-infoblock-with-icon-group row">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-tint"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Unique
                                and morden design</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                '.val(HOME, "multi_purpose_websi").'<br>
                                '.val(HOME, "design_free_logo_fo").'
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-spinner"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Unlimited
                                color schemes</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                We can make your business colorful.<br>
                                Design colorful image for your website
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-th-large"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Unlimited
                                page layouts</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                We can provide unlimited page layout for your website.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Awesome
                                e-commerce</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                We can provide E-commerce website very cheap price
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Invoices</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                Provide invoice for your business make life easier.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="b-infoblock-with-icon">
                        <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                            <i class="fa fa-font"></i>
                        </a>
                        <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                            <a href="#"
                                class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Free
                                fonts and icons</a>
                            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                Design and provide free icons for your website.<br>
                                Provide more than 3 languages for your website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    ';
    
}
function services(){
    return '
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
             <h2 class="f-primary-b f-legacy-h1">Our Service</h2>
             <div class="b-ol-list-text-container">
                 <div class="b-ol-list-text__item">
                     <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">1</div>
                     <div class="b-ol-list-text__item_info">
                        <a href="#" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb">'.val("home", "invoice_for_sabre_a").'</a>f
                        <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">'.val("home", "invoice_for_sabre_a1").'</p>
                     </div>
                 </div>
                 <div class="b-ol-list-text__item">
                     <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">2</div>
                     <div class="b-ol-list-text__item_info">
                        <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">'.val("home", "invoice_for_jewelle").'</a>
                        <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">'.val("home", "make_your_business_").'</p>
                     </div>
                 </div>
                 <div class="b-ol-list-text__item">
                     <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">3</div>
                     <div class="b-ol-list-text__item_info">
                         <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">'.val("home", "billing_system").'</a>
                         <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">'.val("home", "creating_billing_sy").' </p>
                     </div>
                 </div>
                 <div class="b-ol-list-text__item">
                     <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">4</div>
                     <div class="b-ol-list-text__item_info">
                         <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">'.val("home", "design_logo_busines").'</a>
                         <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">'.val("home", "design_logo_busines1").'</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</section>';
 
}
function get_feedback(){

return '
<div class="b-slider-primary">
    <div class="j-slider-primary">
        <div class="b-slider-primary-item b-slider-primary-item--bg f-slider-primary-item">
            <div class="container">
                <div class="f-slider-primary-item__title b-slider-primary-item__title f-primary-b">
                    <span><b>sundar</b></span>
                </div>
                <p class="b-slider-primary-item__text f-slider-primary-item__text f-primary-l"><br />
                </p>
            </div>
        </div>
        <div class="b-slider-primary-item b-slider-primary-item--bg f-slider-primary-item">
            <div class="container">
                <div class="f-slider-primary-item__title b-slider-primary-item__title f-primary-b">
                    <span><b>'.val("home", "custome_feedback").'</b></span>
                </div>
                <p class="b-slider-primary-item__text f-slider-primary-item__text f-primary-l"><br />
                </p>
            </div>
        </div>
        <div class="b-slider-primary-item b-slider-primary-item--bg f-slider-primary-item">
            <div class="container">
                <div class="f-slider-primary-item__title b-slider-primary-item__title f-primary-b">

                    <span><b>Customer Feedback</b></span>
                </div>
                <p class="b-slider-primary-item__text f-slider-primary-item__text f-primary-l"><br />
                </p>
            </div>
        </div>


    </div>
</div>
</div>

<hr>';

}
function client(){
    return '
<section class="b-infoblock-with-icon-group ">
    <div
        class="b-default-top-indent b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">
        <div class="f-center b-logo-group j-logo-slider">
            <div class="b-logo-item"><a href="#">
                    <img class="is-normal" src="img/clients/1.png" alt="" />
                    <img class="is-hover" src="img/clients/1.png" alt="" />
                </a></div>
            <div class="b-logo-item"><a href="#">
                    <img class="is-normal" src="img/clients/2.png" alt="" />
                    <img class="is-hover" src="img/slider/partner/client-logo-2h.png" alt="" />
                </a></div>
            <div class="b-logo-item"><a href="#">
                    <img class="is-normal" src="img/clients/3.png" alt="" />
                    <img class="is-hover" src="img/slider/partner/client-logo-2h.png" alt="" />
                </a></div>

            <div class="b-logo-item"></div>

        </div>
    </div>
</section>';

}