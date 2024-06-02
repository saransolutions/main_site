<?php
require_once 'funcs/cons.php';
require_once 'funcs/db.php';
require_once 'funcs/page.php';
session_start();
change_lang();
$profile = array();
$profile['page'] = 'packages';
echo get_doc($profile);

function get_price(){
    return '<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
      <div class="container">
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
          <li><i class="fa fa-angle-right"></i><span>Our Package</span></li>
        </ul>
      </div>
    </div>
  
    <section class="b-infoblock--small">
      <div class="container">
        <div class="row b-col-default-indent">
          <div class="col-md-8 offset-md-2">
            <h2 class="f-legacy-h2 f-primary-l f-center c-default">our pricing table</h2>
            <p class="f-primary-l f-center">We design your success by bringing promising ideas to life, online. We’re a
              digital marketing agency with an in-house team of strategists, marketers, developers, writers and designers
              who are dedicated to make your brand a great success.</p>
          </div>
        </div>
        <div class="b-shortcode-example b-null-bottom-indent">
          <div class="b-pricing-info__container f-center row">
            <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
              <div class="b-pricing-info__item-row b-pricing-info__item-title">
                <h4 class="f-legacy-h4 f-primary-b">basic</h4>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-price">
                <h2 class="f-legacy-h2 f-primary-b">CHF 500 <small class="f-primary">(One Time)</small></h2>
              </div>
              <div class="b-pricing-info__item-row">
                <p>01 Email Account</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>01 Website Layout</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>02 Photo Stock Banner</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>01 Javascript Slider</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>01 Hosting</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>01 Domain Name Server</p>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                <a class="b-btn f-btn b-btn-sm f-primary-b">more</a>
              </div>
            </div>
            <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
              <div class="b-pricing-info__item-row b-pricing-info__item-title">
                <h4 class="f-legacy-h4 f-primary-b">Medium</h4>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-price">
                <h2 class="f-legacy-h2 f-primary-b">CHF 750 <small class="f-primary">(One Time)</small></h2>
              </div>
              <div class="b-pricing-info__item-row">
                <p>05 Email Account</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>04 Website Layout</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>03 Photo Stock Banner& 01 Javascript Slider</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Social Media Support</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Content Management System (CMS) and Training</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p> Domain Name and Hosting Support</p>
              </div>
  
              <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                <a class="b-btn f-btn b-btn-sm f-primary-b">More details...</a>
              </div>
            </div>
            <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
              <div class="b-pricing-info__item-row b-pricing-info__item-title">
                <h4 class="f-legacy-h4 f-primary-b">gold </h4>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-price">
                <h2 class="f-legacy-h2 f-primary-b">CHF 1000<small class="f-primary">(One Time)</small></h2>
              </div>
              <div class="b-pricing-info__item-row">
                <p>5 Email Account & 5+ Page Layout</p>
              </div>
  
              <div class="b-pricing-info__item-row">
                <p>03 Photo Stock Banner & Javascript Slider</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Search Engine Optimization (SEO)</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Social Media Marketing</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Content Management System (CMS) and Training</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p> Domain Name & Hosting Support</p>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                <a class="b-btn f-btn b-btn-sm f-primary-b">more details...</a>
              </div>
            </div>
            <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
              <div class="b-pricing-info__item-row b-pricing-info__item-title">
                <h4 class="f-legacy-h4 f-primary-b">Platinum</h4>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-price">
                <h2 class="f-legacy-h2 f-primary-b">CHF 1500 <small class="f-primary">(One Time)</small></h2>
              </div>
              <div class="b-pricing-info__item-row">
                <p>5+ pages & 3 Photo Stock Banner</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Admin Pages & Contact Support</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Search Engine Optimization (SEO)</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Content Management System (CMS) and Training</p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>Mobile & Tablet Responsive Design </p>
              </div>
              <div class="b-pricing-info__item-row">
                <p>5+ Domain Name & Hosting Support</p>
              </div>
              <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                <a class="b-btn f-btn b-btn-sm f-primary-b">more details...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="b-diagonal-line-bg-light">
      <div class="container b-infoblock">
        <div class="row b-infoblock-with-icon-group b-infoblock-with-icon--dialog-r">
  
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="our_services_version_1.html"
                class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-suitcase"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="our_services_version_1.html"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">E-Commerce
                  Website</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ----
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="our_services_version_1.html"
                class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-heart"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="our_services_version_1.html"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Travelling
                  System</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ----
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-jsfiddle"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="#"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Jewelry
                  System</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ---
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-comments"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="our_services_version_1.html"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Money Tranfer
                  Progrmming</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ---
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="our_services_version_1.html"
                class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-shopping-cart"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="#"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Billing
                  System</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ----
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="b-infoblock-with-icon">
              <a href="our_services_version_1.html"
                class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                <i class="fa fa-magic"></i>
              </a>
              <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="#"
                  class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-sb">Program for Tax
                  purpose</a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                  ___
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>';
}

?>