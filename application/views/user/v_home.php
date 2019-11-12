 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>

<section>
    <div class="row full-width-search ">
        <div class="container clear-padding">
          <div class="col-md-2"></div>
          <div class="col-md-8" style="padding: 5px;border: 1px solid white;border-radius: 10px;background:transparent;min-height:50px;margin-top:300px;">
            <form>

              <div class="clearfix"></div>
              <div style="margin-top:10px;margin-Bottom:5px;border-radius:15px;" class="col-md-3 col-sm-4 search-col-padding">
                <div class="input-group">
                  <input type="text" style="background:transparent;" name="departure_city" class="destination form_depan form-control" required placeholder="Destination">
                  <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                </div>
              </div>
              <div style="margin-top:10px;margin-Bottom:5px;border-radius:15px;" class="col-md-3 m-t-30 col-sm-3 search-col-padding">
                <div class="input-group">
                  <input style="background:transparent;" type="text" name="departure_city" class="travelers form_depan form-control" required placeholder="Travelers">
                  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                </div>
              </div>
              <div style="margin-top:10px;margin-Bottom:5px;border-radius:15px;" class="col-md-3 m-t-30 col-sm-3 search-col-padding">
                <div class="input-group">
                  <input style="background:transparent;" type="text" name="departure_city" class="duration form_depan form-control" required placeholder="Duration">
                  <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 search-col-padding">
                <button type="button" style="padding:1px;border-radius:10px;" class="search-button btn btn-sm form-control transition-effect">GO</button>
              </div>



              <div class="clearfix"></div>
            </form>
          </div>
          <div class="col-md-2"></div>

            <div class="offer-slider">
                <div class="owl-carousel col-md-4 text-right" id="offer1" >

                </div>
            </div>

        </div>
    </div>

</section>

<!-- BEGIN: RECENT BLOG POST -->
<section id="recent-blog">
    <div style="border-radius: 10px;" class="row top-offer">
        <div style="border-radius: 10px;" class="container">
            <div style="border-radius: 10px;" class="section-title text-center">
                <h2>Popular Tour Packages</h2>
            </div>
            <div style="border-radius: 10px;" class="owl-carousel" id="post-list">
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer1.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.2s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer2.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.3s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer3.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.4s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer4.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.5s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer3.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="room-grid-view wow slideInUp" data-wow-delay="0.6s">
                    <img src="<?php echo base_url() ?>master/client/assets/images/offer2.jpg" alt="cruise">
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5>POST TITLE GOES HERE</h5>
                            <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                        </div>
                        <div style="border-radius: 10px;" class="post-desc">
                            <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: RECENT BLOG POST -->

<!-- START: WHY CHOOSE US SECTION -->
<section id="why-choose-us">
    <div style="border-radius: 10px;" class="row choose-us-row">
        <div style="border-radius: 10px;" class="container clear-padding">
            <div style="border-radius: 10px;" class="light-section-title text-center">
                <h2>WHY CHOOSE US?</h2>
                <h4>REASONS TO TRUST US</h4>
                <div style="border-radius: 10px;" class="space"></div>

            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInLeft">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-suitcase"></i></div>
                    <h4>Handpicked Tour</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" style="border-radius:10px">KNOW MORE</a>
                </div>
            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInUp">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-phone"></i></div>
                    <h4>Dedicated Support</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" style="border-radius:10px">KNOW MORE</a>
                </div>
            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInRight">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-smile-o"></i></div>
                    <h4>Lowest Price</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" style="border-radius:10px">KNOW MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: WHY CHOOSE US SECTION -->

<!-- START: HOT  DEALS -->
<section>
    <div style="border-radius: 10px;" class="row hot-deals">
        <div style="border-radius: 10px;" class="container clear-padding">
            <div style="border-radius: 10px;" class="section-title text-center">
                <h2>HOT DEALS</h2>
                <h4>SAVE MORE</h4>
            </div>
            <div style="border-radius: 10px;" role="tabpanel" class="text-center">
                <!-- BEGIN: CATEGORY TAB -->
                <ul class="nav nav-tabs" role="tablist" id="hotDeal">
                    <li role="presentation" class="active text-center">
                        <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                            <i class="fa fa-bed"></i>
                            <span>HOTELS</SPAN>
                        </a>
                    </li>
                    <li role="presentation" class="text-center">
                        <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                            <i class="fa fa-suitcase"></i>
                            <span>HOLIDAYS</SPAN>
                        </a>
                    </li>
                    <li role="presentation" class="text-center">
                        <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                            <i class="fa fa-plane"></i>
                            <span>FLIGHTS</SPAN>
                        </a>
                    </li>
                    <li role="presentation" class="text-center">
                        <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                            <i class="fa fa-taxi"></i>
                            <span>CARS</SPAN>
                        </a>
                    </li>
                    <li role="presentation" class="text-center">
                        <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">
                            <i class="fa fa-bed"></i>
                            <span>HOTEL+FLIGHTS</SPAN>
                        </a>
                    </li>
                </ul>
                <!-- END: CATEGORY TAB -->
                <div style="border-radius: 10px;" class="clearfix"></div>
                <!-- BEGIN: TAB PANELS -->
                <div style="border-radius: 10px;" class="tab-content">
                    <!-- BEGIN: FLIGHT SEARCH -->
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane active fade in" id="tab1">
                        <div style="border-radius: 10px;" class="col-md-6 hot-deal-list wow slideInLeft">
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer1.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Hotel Grand Lilly</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$499</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer2.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Royal Resort</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$399</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer3.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Hotel Grand Lilly</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$499</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                        </div>
                        <div style="border-radius: 10px;" class="col-md-6 hot-deal-grid wow slideInRight">
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour1.jpg" alt="Cruise">
                                    <h5>Paris Starting From $49/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour2.jpg" alt="Cruise">
                                    <h5>Bangkok Starting From $69/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour3.jpg" alt="Cruise">
                                    <h5>Dubai Starting From $99/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour4.jpg" alt="Cruise">
                                    <h5>Italy Starting From $59/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane fade" id="tab2">
                        <div style="border-radius: 10px;" class="col-md-6 hot-deal-list">
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer3.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Hotel Grand Lilly</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$499</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer2.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Royal Resort</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$399</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                            <div style="border-radius: 10px;" class="item">
                                <div style="border-radius: 10px;" class="col-xs-3">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/offer1.jpg" alt="Cruise">
                                </div>
                                <div style="border-radius: 10px;" class="col-md-7 col-xs-6">
                                    <h5>Hotel Grand Lilly</h5>
                                    <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                    <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div style="border-radius: 10px;" class="col-md-2 col-xs-3">
                                    <h4>$499</h4>
                                    <h6>Per Night</h6>
                                    <a href="#">BOOK</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="clearfix"></div>
                        </div>
                        <div style="border-radius: 10px;" class="col-md-6 hot-deal-grid">
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour5.jpg" alt="Cruise">
                                    <h5>Paris Starting From $49/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour6.jpg" alt="Cruise">
                                    <h5>Bangkok Starting From $69/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour7.jpg" alt="Cruise">
                                    <h5>Dubai Starting From $99/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-6 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img src="<?php echo base_url() ?>master/client/assets/images/tour8.jpg" alt="Cruise">
                                    <h5>Italy Starting From $59/Night</h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="tab3">
                        Lorem Lpsum 3
                    </div>
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="tab4">
                        Lorem Lpsum 4
                    </div>
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="tab5">
                        Lorem Lpsum 5
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: HOT DEALS -->


<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
<script type="text/javascript">
    $var = url= window.location.origin;
            /* SLIDER SETTINGS */
            jQuery(function($){
                "use strict";
                $.supersized({

                    //Functionality
                    slideshow               :   1,      //Slideshow on/off
                    autoplay                :   1,      //Slideshow starts playing automatically
                    start_slide             :   1,      //Start slide (0 is random)
                    random                  :   0,      //Randomize slide order (Ignores start slide)
                    slide_interval          :   10000,  //Length between transitions
                    transition              :   1,      //0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed        :   500,    //Speed of transition
                    new_window              :   1,      //Image links open in new window/tab
                    pause_hover             :   0,      //Pause slideshow on hover
                    keyboard_nav            :   0,      //Keyboard navigation on/off
                    performance             :   1,      //0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect           :   1,      //Disables image dragging and right click with Javascript

                    //Size & Position
                    min_width               :   0,      //Min width allowed (in pixels)
                    min_height              :   0,      //Min height allowed (in pixels)
                    vertical_center         :   1,      //Vertically center background
                    horizontal_center       :   1,      //Horizontally center background
                    fit_portrait            :   1,      //Portrait images will not exceed browser height
                    fit_landscape           :   0,      //Landscape images will not exceed browser width

                    //Components
                    navigation              :   1,      //Slideshow controls on/off
                    thumbnail_navigation    :   1,      //Thumbnail navigation
                    slide_counter           :   1,      //Display slide numbers
                    slide_captions          :   1,      //Slide caption (Pull from "title" in slides array)
                    slides                  :   [       //Slideshow Images
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo1.jpg', title : 'Slide 1'},
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo2.jpg', title : 'Slide 2'},
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo0.jpg', title : 'Slide 3'},
                                                ]

                });
            });

  $(document).ready(function(){
    $(document).on("focus",".destination",function(){
      $("#destination").modal("toggle");
    })
    $(document).on("focus",".travelers",function(){
      $("#travelers").modal("toggle");
    })
    $(document).on("focus",".duration",function(){
      $("#duration").modal("toggle");
    })
  })
</script>
</body>
</html>
<!-- modal small -->
<div class="modal fade" id="destination" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row col-md-12">
          <div class="col-md-4" >
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>
          <div class="col-md-4" style="border-radius:10px">
            <div class="holiday-grid-view" style="border-radius:10px">
      					<div class="holiday-header-wrapper">
      						<div class="holiday-header">
      							<div class="holiday-img">
      								<img src="<?php echo base_url()?>master/client/assets/images/tour1.jpg" alt="cruise">
      							</div>
      							<div class="detail">
      								<a href="#"><i class="fa fa-plus"></i></a>
      							</div>
      							<div class="holiday-price">
      								<h4>$499</h4>
      								<h5>7 Days</h5>
      							</div>
      							<div class="holiday-title">
      								<h3>Step Into Heaven</h3>
      								<h5>Asia &#187; Nepal</h5>
      							</div>
      						</div>
      					</div>
      			</div>
          </div>

        </div>
      </div>
      <div class="row modal-footer">
        <button class="btn btn-primary btn-md pull-right" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal small -->
<!-- modal small -->
<div class="modal fade" id="travelers" style="margin-top:200px;" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <form>

          <div class="col-md-4 col-sm-6 search-col-padding">
            <label>Adult</label><br>
            <input id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-6 search-col-padding">
            <label>Child</label><br>
            <input type="text" id="child_count" name="child_count" value="0" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-6 search-col-padding">
            <label></label><br>
            <button style="margin-top:5px;" class="form-control btn btn-primary btn-md pull-right" data-dismiss="modal">Done</button>
          </div>
          <div class="clearfix"></div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- end modal small -->
<!-- modal small -->
<div class="modal fade" id="duration" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <form>
          <div class="col-md-12 product-search-title">Book Flight Tickets</div>
          <div class="col-md-12 search-col-padding">
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="One Way"> One Way
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Round Trip"> Round Trip
            </label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6 col-sm-6 search-col-padding">
            <label>Leaving From</label>
            <div class="input-group">
              <input type="text" name="departure_city" class="form-control" required placeholder="E.g. London">
              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 search-col-padding">
            <label>Leaving To</label>
            <div class="input-group">
              <input type="text" name="destination_city" class="form-control" required placeholder="E.g. New York">
              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6 col-sm-6 search-col-padding">
            <label>Departure</label>
            <div class="input-group">
              <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 search-col-padding">
            <label>Return</label>
            <div class="input-group">
              <input type="text" id="return_date" class="form-control" name="return_date" placeholder="DD/MM/YYYY">
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-4 col-sm-4 search-col-padding">
            <label>Adult</label><br>
            <input id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-4 search-col-padding">
            <label>Child</label><br>
            <input type="text" id="child_count" name="child_count" value="1" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-4 search-col-padding">
            <label>Class</label><br>
            <select class="selectpicker">
              <option>Business</option>
              <option>Economy</option>
            </select>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 search-col-padding">
            <button type="submit" class="search-button btn transition-effect">Search Flights</button>
          </div>
          <div class="clearfix"></div>
        </form>

      </div>
      <div class="row modal-footer">
        <button class="btn btn-primary btn-md pull-right" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal small -->
