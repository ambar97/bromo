 <?php $this->load->model('M_paket'); ?>
 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>

<section>
    <div class="row full-width-search ">
        <div class="container clear-padding">
            <div class="offer-slider">
                <div class="owl-carousel col-md-12 text-center" id="offer1" >
                <?php foreach ($slider->result() as $slidere): ?>
                  <div class="item">
                    <h3><?php echo $slidere->deskripsi ?></h3>
                    <h4><?php echo $slidere->tag ?></h4>
                  </div>
                <?php endforeach ?>
                <div class="item">
                    <h3>SunsetView</h3>
                    <h4>Jasa Untuk Perjalan Wisata Anda</h4>
                  </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8" style="padding-top: 5px;padding-bottom:10px;border: 1px solid white;border-radius: 10px;background:white;min-height:50px;margin-top:50px;">
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
                    <input style="background:transparent;" type="text" name="trv" id="trv" class="travelers form_depan form-control" required placeholder="Travelers">
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
                  <button type="button" style="padding:1px;border-radius:10px;" class="search-button btn btn-sm form-control transition-effect">LETS GO</button>
                </div>



                <div class="clearfix"></div>
                <input type="hidden" name="travelers" id="travelers">
              </form>
            </div>

        </div>
    </div>

</section>

<!-- BEGIN: RECENT BLOG POST -->
<section id="recent-blog">
    <div class="row top-offer radius">
        <div  class="radius container">
            <div class="radius ection-title text-center">
                <h2 style="margin-bottom:50px">Popular Tour Packages</h2>
            </div>
            <div class="radius owl-carousel" id="post-list">
                <?php foreach ($paket as $aket): ?>   
                <div class="radius room-grid-view wow slideInUp" data-wow-delay="0.1s">
                    <?php $id = $aket->idpaket_wisata; ?>
                <?php $sd = $this->M_paket->selectlimit($id)->result(); ?>
                <?php foreach ($sd as $huy): ?>
                    <img class="radius-img" style="min-height:250px;" src="<?php echo base_url() ?>gallery/paket/<?php echo $huy->gambar ?>" alt="cruise">
                <?php endforeach ?>
                    <div style="border-radius: 10px;" class="room-info">
                        <div style="border-radius: 10px;" class="post-title">
                            <h5><?php echo $aket->nama_paket ?></h5>
                            <p><i class="fa fa-price"></i> IDR <span style="font-weight: bold;"><?php echo number_format($aket->harga) ?></span></p>
                        </div>
                        <div style="border-radius: 10px;" class="room-book">
                            <div style="border-radius: 10px;" class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                <h5><i class="fa fa-star gold"></i> 2 <i class="fa fa-user"></i> 2</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
                <?php endforeach ?>

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
    <div style="border-radius: 10px;margin-top:" class="row hot-deals">
        <div style="border-radius: 10px;" class="container clear-padding">
            <div style="border-radius: 10px;" class="section-title text-center">
                <h2 style="margin-top:100px">Popular Destination</h2>
            </div>
            <div style="border-radius: 10px;" role="tabpanel" class="text-center">
                <!-- BEGIN: CATEGORY TAB -->
                <div style="border-radius: 10px;" class="tab-content">
                    <!-- BEGIN: FLIGHT SEARCH -->
                    <div style="border-radius: 10px;" role="tabpanel" class="tab-pane active fade in" id="tab1">

                        <div style="border-radius: 10px;" class="col-md-12 hot-deal-grid wow slideInRight">
                            <div style="border-radius: 10px;" class="col-sm-4 item">
                                <div  style="border-radius: 10px;" class="wrapper">
                                    <img style="min-height:300px;width:100%" src="<?php echo base_url() ?>master/client/assets/images/tour1.jpg" alt="Cruise">
                                    <h5>Paris </h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-4 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img style="min-height:300px;width:100%" class="radius" src="<?php echo base_url() ?>master/client/assets/images/tour2.jpg" alt="Cruise">
                                    <h5>Bangkok </h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-4 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img  style="min-height:300px;width: 100%" src="<?php echo base_url() ?>master/client/assets/images/tour3.jpg" alt="Cruise">
                                    <h5>Dubai </h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-4 item">
                                <div style="border-radius: 10px;" class="wrapper">
                                    <img style="min-height:300px;width:100%" src="<?php echo base_url() ?>master/client/assets/images/tour4.jpg" alt="Cruise">
                                    <h5>Italy </h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                            <div style="border-radius: 10px;" class="col-sm-4 item">
                                <div style="border-radius: 10px; " class="wrapper">
                                    <img style="min-height:300px" src="<?php echo base_url() ?>master/client/assets/images/bromo0.jpg" alt="Cruise">
                                    <h5>Bromo </h5>
                                    <a href="#">DETAILS</a>
                                </div>
                            </div>
                        </div>
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
                                                        <?php foreach ($slider->result() as $slidere) { ?>
                                                        {image : '<?php echo base_url().$slidere->gambar ?>', title : 'Slide 1'},
                                                        <?php } ?>
                                                ]

                });
            });

  $(document).ready(function(){
    $(document).on("focus",".destination",function(){
      $("#destination").modal("toggle");
    })
    $(document).on("focus",".travelers",function(){
      $("#travelers_modal").modal("toggle");
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
            <div class="holiday-grid-view radius">
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
<div class="modal fade" id="travelers_modal" style="margin-top:200px;padding-bottom:50px;border-radius:10px;" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <form>

          <div class="col-md-4 col-sm-6 search-col-padding">
            <label>Adult</label><br>
            <input style="border-radius:10px;" id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-6 search-col-padding">
            <label>Child</label><br>
            <input style="border-radius:10px;" type="text" id="child_count" name="child_count" value="0" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-6 search-col-padding">
            <label></label><br>
            <button style="margin-top:5px;border-radius:10px;" class="form-control btn btn-primary btn-md pull-right" data-dismiss="modal" id="done_travelers">Done</button>
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

      <div class="modal-body" style="padding-top:50px;">
        <form>


          <div class="col-md-8 col-sm-6 search-col-padding">
            <label>Duration</label><br>
            <input style="border-radius:10px;" type="text" id="child_count" name="datetimes" value="0" class="form-control quantity-padding">
          </div>
          <div class="col-md-4 col-sm-6 search-col-padding">
            <label></label><br>
            <button style="margin-top:5px;border-radius:10px;" class="form-control btn btn-primary btn-md pull-right" data-dismiss="modal">Done</button>
          </div>
          <div class="clearfix"></div>

        </form>

      </div>

    </div>
  </div>
</div>
<!-- end modal small
