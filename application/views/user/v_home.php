 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>

<section>
<<<<<<< HEAD
    <div class="row full-width-search">
        <div class="container clear-padding">

            <div class="offer-slider">
                <div class="owl-carousel col-md-4 text-right" id="offer1">
                    <div class="item">
=======
    <div style="border-radius: 10px;" class="row full-width-search" style="border-radius: 10px;">
        <div style="border-radius: 10px;" class="container clear-padding" style="border-radius: 10px;">
            <div style="border-radius: 10px;" class="col-md-8 search-section" style="border-radius: 10px;">
                <div style="border-radius: 10px;" role="tabpanel" style="border-radius: 10px;">
                    <!-- BEGIN: CATEGORY TAB -->
                    <ul class="nav nav-tabs search-top" role="tablist" id="searchTab" style="border-radius: 10px;">
                        <li role="presentation" class="active text-center">
                            <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
                                <i class="fa fa-plane"></i> 
                                <span>FLIGHTS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i> 
                                <span>HOTELS</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#holiday" aria-controls="holiday" role="tab" data-toggle="tab">
                                <i class="fa fa-suitcase"></i>
                                <span>HOLIDAYS</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#taxi" aria-controls="taxi" role="tab" data-toggle="tab">
                                <i class="fa fa-cab"></i>
                                <span>CAR</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#cruise" aria-controls="cruise" role="tab" data-toggle="tab">
                                <i class="fa fa-ship"></i>
                                <span>CRUISE</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END: CATEGORY TAB -->

                    <!-- BEGIN: TAB PANELS -->
                    <div style="border-radius: 10px;" class="tab-content" style="border-radius: 10px;">
                            <!-- BEGIN: FLIGHT SEARCH -->
                            <div style="border-radius: 10px;" role="tabpanel" class="tab-pane active" id="flight">
                                <form>
                                    <div style="border-radius: 10px;" class="col-md-12 product-search-title">Book Flight Tickets</div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="One Way"> One Way
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Round Trip"> Round Trip
                                        </label>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Leaving From</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="departure_city" class="form-control" required placeholder="E.g. London">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Leaving To</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="destination_city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Departure</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Return</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="return_date" class="form-control" name="return_date" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Adult</label><br>
                                        <input id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Child</label><br>
                                        <input type="text" id="child_count" name="child_count" value="1" class="form-control quantity-padding">
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 search-col-padding">
                                        <label>Class</label><br>
                                        <select class="selectpicker">
                                            <option>Business</option>
                                            <option>Economy</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Search Flights</button>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END: FLIGHT SEARCH -->
                            
                            <!-- START: HOTEL SEARCH -->
                            <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="hotel">
                                <form >
                                    <div style="border-radius: 10px;" class="col-md-12 product-search-title">Book Hotel Rooms</div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <label>I Want To Go</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="destination-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Check - In</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="check-in" id="check_in" class="form-control" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Check - Out</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="check-out" id="check_out" class="form-control" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-3 col-sm-3 search-col-padding">
                                        <label>Adult</label><br>
                                        <input id="hotel_adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-3 col-sm-3 search-col-padding">
                                        <label>Child</label><br>
                                        <input type="text" id="hotel_child_count" name="child_count" value="1" class="form-control quantity-padding">
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-3 col-sm-3 search-col-padding">
                                        <label>Rooms</label><br>
                                        <select class="selectpicker" name="rooms">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-3 col-sm-3 search-col-padding">
                                        <label>Nights</label><br>
                                        <select class="selectpicker" name="nights">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END: HOTEL SEARCH -->
                                
                            <!-- START: BEGIN HOLIDAY -->
                            <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="holiday">
                                <form >
                                    <div style="border-radius: 10px;" class="col-md-12 product-search-title">Book Holiday Packages</div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>From</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>I Want To Go</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Starting From</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="package_start" class="form-control" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Duration(Optional)</label><br>
                                        <select class="selectpicker" name="holiday_duration">
                                            <option>3 Days</option>
                                            <option>5 Days</option>
                                            <option>1 Week</option>
                                            <option>2 Weeks</option>
                                            <option>1 Month</option>
                                            <option>1+ Month</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Package Type(Optional)</label><br>
                                        <select class="selectpicker" name="package_type">
                                            <option>Group</option>
                                            <option>Family</option>
                                            <option>Individual</option>
                                            <option>Honeymoon</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Budget(Optional)</label><br>
                                        <select class="selectpicker" name="package_budget">
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>1000+</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Search Packages</button>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END: HOLIDAYS -->
                            
                            <!-- START: CAR SEARCH -->
                            <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="taxi">
                                <form >
                                    <div style="border-radius: 10px;" class="col-md-12 product-search-title">Search Perfect Car</div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Pick Up Location</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="departure-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Drop Off Location</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="destination-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Pick Up Date</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="car_start" class="form-control" placeholder="MM/DD/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Pick Off Date</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="car_end" class="form-control" placeholder="MM/DD/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Car Brnad(Optional)</label><br>
                                        <select class="selectpicker" name="brand">
                                            <option>BMW</option>
                                            <option>Audi</option>
                                            <option>Mercedes</option>
                                            <option>Suzuki</option>
                                            <option>Honda</option>
                                            <option>Hyundai</option>
                                            <option>Toyota</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Car Type(Optional)</label><br>
                                        <select class="selectpicker" name="car_type">
                                            <option>Limo</option>
                                            <option>Sedan</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Search Cars</button>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END: CAR SEARCH -->
                            
                            <!-- START: CRUISE SEARCH -->
                            <div style="border-radius: 10px;" role="tabpanel" class="tab-pane" id="cruise">
                                <form >
                                    <div style="border-radius: 10px;" class="col-md-12 product-search-title">Cruise Holidays</div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>From</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>I Want To Go</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Starting From</label>
                                        <div style="border-radius: 10px;" class="input-group">
                                            <input type="text" id="cruise_start" class="form-control" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                        </div>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Duration(Optional)</label><br>
                                        <select class="selectpicker" name="holiday_duration">
                                            <option>3 Days</option>
                                            <option>5 Days</option>
                                            <option>1 Week</option>
                                            <option>2 Weeks</option>
                                            <option>1 Month</option>
                                            <option>1+ Month</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Package Type(Optional)</label><br>
                                        <select class="selectpicker" name="package_type">
                                            <option>Group</option>
                                            <option>Family</option>
                                            <option>Individual</option>
                                            <option>Honeymoon</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 search-col-padding">
                                        <label>Budget(Optional)</label><br>
                                        <select class="selectpicker" name="package_budget">
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>1000+</option>
                                        </select>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                    <div style="border-radius: 10px;" class="col-md-12 search-col-padding">
                                        <button type="submit" class="search-button btn transition-effect">Search Cruises</button>
                                    </div>
                                    <div style="border-radius: 10px;" class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END: CRUISE SEARCH -->
                            
                        </div>
                        <!-- END: TAB PANE -->
                </div>
            </div>
            <div style="border-radius: 10px;" class="offer-slider">
                <div style="border-radius: 10px;" class="owl-carousel col-md-4 text-right" id="offer1">
                    <div style="border-radius: 10px;" class="item">
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
                        <h3>Hong Kong Fun</h3>
                        <h4>Starting From $599/Person</h4>
                        <a href="#">KNOW MORE</a>
                    </div>
                    <div style="border-radius: 10px;" class="item">
                        <h3>Romantic Paris</h3>
                        <h4>Starting From $999/Person</h4>
                        <a href="#">KNOW MORE</a>
                    </div>
                    <div style="border-radius: 10px;" class="item">
                        <h3>Sky High Dubai</h3>
                        <h4>Starting From $399/Person</h4>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-work">
        <div style="border-radius: 10px;" class="row work-row">
            <div style="border-radius: 10px;" class="container">
                <div style="border-radius: 10px;" class="section-title text-center">
                    <h2>HOW IT WORKS?</h2>
                    <h4>SEARCH - SELECT - BOOK</h4>
                    <div style="border-radius: 10px;" class="space"></div>
                    <p>
                        Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div style="border-radius: 10px;" class="work-step">
                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 first-step text-center">
                        <i class="fa fa-search"></i>
                        <h5>SEARCH</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 second-step text-center">
                        <i class="fa fa-heart-o"></i>
                        <h5>SELECT</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-4 col-sm-4 third-step text-center">
                        <i class="fa fa-shopping-cart"></i>
                        <h5>BOOK</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--END: HOW IT WORK -->

<!-- START: PRODUCT SECTION-->
<section class="hotel-product home-product">
    <!-- START: PRODUCT ROW 1 -->
    <div style="border-radius: 10px;" class="row light-row">
            <div style="border-radius: 10px;" class="col-md-6 clear-padding wow slideInLeft">
                <div style="border-radius: 10px;" class="product-wrapper">
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 home-product-padding tooltip-right">
                        <h4>Romantic Paris</h4>
                        <h5><i class="fa fa-map-marker"></i> France</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div style="border-radius: 10px;" class="rating-box">
                            <div style="border-radius: 10px;" class="pull-left">
                                <img src="<?php echo base_url() ?>master/client/assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$999/Person</span>
=======
                        <div style="border-radius: 10px;" class="clearfix"></div>
                        <div style="border-radius: 10px;" class="pricing-info">
                            <div style="border-radius: 10px;" class="pull-left">
                                <span>$999/Person</span> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour12.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="detail-link-wrapper">
                            <div style="border-radius: 10px;" class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="border-radius: 10px;" class="clearfix"></div>
                <div style="border-radius: 10px;" class="product-wrapper">
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour11.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="detail-link-wrapper">
                            <div style="border-radius: 10px;" class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 home-product-padding tooltip-left">
                        <h4>Blue Beach</h4>
                        <h5><i class="fa fa-map-marker"></i> Dubai</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div style="border-radius: 10px;" class="rating-box">
                            <div style="border-radius: 10px;" class="pull-left">
                                <img src="<?php echo base_url() ?>master/client/assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$899/Person</span>
=======
                        <div style="border-radius: 10px;" class="clearfix"></div>
                        <div style="border-radius: 10px;" class="pricing-info">
                            <div style="border-radius: 10px;" class="pull-left">
                                <span>$899/Person</span> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div style="border-radius: 10px;" class="clearfix visible-sm-block"></div>
            <div style="border-radius: 10px;" class="col-md-6 clear-padding image-lg wow slideInRight">
                <img src="<?php echo base_url() ?>master/client/assets/images/home31.jpg" alt="cruise">
                <div style="border-radius: 10px;" class="overlay">
                    <div style="border-radius: 10px;" class="product-detail text-center">
                        <h3>Africa Safari</h3>
                        <h5><i class="fa fa-map-marker"></i> KENYA</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div style="border-radius: 10px;" class="rating-box">
                            <div style="border-radius: 10px;" class="pull-left">
                                <img src="<?php echo base_url() ?>master/client/assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$499/Person</span>
=======
                        <div style="border-radius: 10px;" class="clearfix"></div>
                        <div style="border-radius: 10px;" class="pricing-info">
                            <div style="border-radius: 10px;" class="pull-left">
                                <span>$499/Person</span> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
                            </div>
                            <div style="border-radius: 10px;" class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div style="border-radius: 10px;" class="clearfix"></div>
                    </div>
                </div>
            </div>
    </div>
    <!-- END: PRODUCT ROW 1 -->
</section>
<!-- END: PRODUCT SECTION -->

<!-- BEGIN: TOP DESTINATION SECTION -->
<section id="home-top-destination">
    <div style="border-radius: 10px;" class="row image-background">
        <div style="border-radius: 10px;" class="td-overlay">
            <div style="border-radius: 10px;" class="container">
                <div style="border-radius: 10px;" class="light-section-title text-center">
                    <h2>TOP DESTINATION</h2>
                    <h4>EXPLORE</h4>
                    <div style="border-radius: 10px;" class="space"></div>
                    <p>
                        Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div style="border-radius: 10px;" class="col-md-10 col-md-offset-1 on-top clear-padding">
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour1.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="overlay">
                            <div style="border-radius: 10px;" class="wrapper">
                                <h5>FRANCE</h5>
                                <h3><span>ROMANTIC PARIS</span></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <a href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour2.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="overlay">
                            <div style="border-radius: 10px;" class="wrapper">
                                <h5>BANGKOK</h5>
                                <h3><span>DISENYLAND BANGKOK</span></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <a href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" class="clearfix visible-md-block"></div>
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour3.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="overlay">
                            <div style="border-radius: 10px;" class="wrapper">
                                <h5>DUBAI</h5>
                                <h3><span>SKY HIGH DUBAI</span></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <a href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                        <img src="<?php echo base_url() ?>master/client/assets/images/tour5.jpg" alt="cruise">
                        <div style="border-radius: 10px;" class="overlay">
                            <div style="border-radius: 10px;" class="wrapper">
                                <h5>AUSTRIA</h5>
                                <h3><span>HILLY VIEW</span></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <a href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 10px;" class="clearfix visible-md-block"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: TOP DESTINATION SECTION -->

<!-- BEGIN: RECENT BLOG POST -->
<section id="recent-blog">
    <div style="border-radius: 10px;" class="row top-offer">
        <div style="border-radius: 10px;" class="container">
            <div style="border-radius: 10px;" class="section-title text-center">
                <h2>RECENT BLOG POSTS</h2>
                <h4>NEWS</h4>
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                            <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a>
=======
                            <div style="border-radius: 10px;" class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                <a href="#" class="text-center">MORE</a> 
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
                <p>
                    Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInLeft">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-suitcase"></i></div>
                    <h4>Handpicked Tour</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">KNOW MORE</a>
                </div>
            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInUp">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-phone"></i></div>
                    <h4>Dedicated Support</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">KNOW MORE</a>
                </div>
            </div>
            <div style="border-radius: 10px;" class="col-md-4 col-sm-4 wow slideInRight">
                <div style="border-radius: 10px;" class="choose-us-item text-center">
                    <div style="border-radius: 10px;" class="choose-icon"><i class="fa fa-smile-o"></i></div>
                    <h4>Lowest Price</h4>
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">KNOW MORE</a>
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
<<<<<<< HEAD
<script type="text/javascript">
=======
<script type="text/javascript">  
    $var = url= window.location.origin;
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
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
<<<<<<< HEAD
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo1.jpg', title : 'Slide 1'},
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo2.jpg', title : 'Slide 2'},
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bromo3.jpg', title : 'Slide 3'},
=======
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bg-image10.jpg', title : 'Slide 1'},  
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bg-image11.jpg', title : 'Slide 2'},
                                                        {image : '<?php echo base_url() ?>master/client/assets/images/bg-image12.jpg', title : 'Slide 3'},
>>>>>>> dd8ad8ddb8b6c355e1a88270158fc51831448eae
                                                ]

                });
            });

</script>
</body>
</html>
