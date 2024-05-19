<?php
function after_header(){
    return '<div class="j-menu-container"></div>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
      <div class="b-inner-page-header__content">
        <div class="container">
          <h1 class="f-primary-l c-default">Contact us</h1>
        </div>
      </div>
    </div>
    
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Contact us v2</span></li>
                </ul>
            </div>
        </div>
      
        ';
    }
function first_section(){
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
 function second_section(){
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


		
