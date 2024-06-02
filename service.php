<?php
require_once 'funcs/cons.php';
require_once 'funcs/db.php';
require_once 'funcs/page.php';
session_start();
change_lang();
$profile = array();
$profile['page'] = 'services';
echo get_doc($profile);

function get_service()
{
    return '<div class="j-menu-container"></div>
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default">'.val('common', 'our_services').'</h1>
            </div>
        </div>
    </div>
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i>'.val('common', 'home').'</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">'.val('common', 'our_services').'</a></li>
            </ul>
        </div>
    </div>
    <div class="j-menu-container"></div>
    <div class="l-main-container">
        <div class="l-inner-page-container">
            <div class="container">
                <div class="row b-col-default-indent">
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/airtkt.jpg" alt="">
                            </div>
                            <div class="b-news-item__info">
                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Invoce for
                                        Sabre,Amadeus,Galileo</h4>
                                    We can design a invoice system for Sabre,Amadeus and Galileo.You can print the
                                    flight tiket perfectly.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/html.jpg" alt="">
                            </div>
                            <div class="b-news-item__info">
                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Web Design</h4>
                                    We can design a modern,unique and colorful website.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/shoppy.jpg" alt="">
                            </div>
                            <div class="b-news-item__info">
                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Website for online shopping
                                    </h4>
                                    We design a website and invoice system for all type of bussiness.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/money.jpeg" alt="">
                            </div>
                            <div class="b-news-item__info">
                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Money Transfer</h4>
                                    We can design a tool for money tranfer.It will be easy handling.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/jewelry.png" alt="">

                            </div>
                            <div class="b-news-item__info">

                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Invoice system for jewelery
                                        shop</h4>
                                    We design a invoice system for jewelry shop.Jewelery saving scheme also we designed.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/bar.jpg" alt="">

                            </div>
                            <div class="b-news-item__info">

                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Billing via barcode</h4>
                                    We can design a billing system via barcode.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/tax.jpg" alt="">

                            </div>
                            <div class="b-news-item__info">
                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">System for tax return</h4>
                                    We can design user friendly tool for tax return.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 b-news-item__block">
                        <div class="b-news-item b-news-item--medium-size f-news-item">
                            <div class="hidden-xs b-news-item__img view view-sixth">
                                <img data-retina="" src="img/service/online2.jpg" alt="">
                            </div>
                            <div class="b-news-item__info">

                                <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                    <h4 style="color:red;font-weight:bold;font-size:15px">Commercial Website</h4>
                                    We can design a E-Commerce website and SEO.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
?>
