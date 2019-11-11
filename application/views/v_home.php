 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>

<section>
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
                                    </di