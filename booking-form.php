<div>
    <div class="checkout-sec contactus-form">

        <div class="row form-type">

                <div class="row ">
                    <div class="col-md-6">
                        <label>Name <span><i class="fa fa-user" id="booking-icon"></i></span></label>
                        <div class="form-group">
                            <input type="text" class="form-control input-validater" name="txtFullName" id="txtFullName">
                            <div class="col-lg-12">
                                <span id="spanFullName"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span><i class="fa fa-envelope" id="booking-icon"></i></span></label>
                            <input type="email" class="form-control input-validater" name="txtEmail" id="txtEmail">
                            <div class="col-lg-12">
                                <span id="spanEmail"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number <span><i class="fa fa-mobile" id="booking-icon"></i></span></label>
                            <input type="tel" class="form-control input-validater" id="txtPhone" name="txtPhone">
                            <div class="col-lg-12">
                                <span id="spanPhone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country<span><i class="fa fa-map" id="booking-icon"></i></span></label>
                            <input type="text" class="form-control input-validater" id="txtCountry" name="txtCountry">
                            <div class="col-lg-12">
                                <span id="spanCountry"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Tour Package <span><i class="fa fa-map" id="booking-icon"></i></span></label>
                        <input type="text" class="form-control input-validater" id="txtTour" name="txtTour" value="<?php echo $TOUR_PACKAGE->title ?>">
                        <div class="col-lg-12">
                            <span id="spanTour"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Airport Pickup <span><i class="fa fa-plane" id="booking-icon"></i></span></label>
                            <select class="form-control h-booking input-validater" id="txtAirport" name="txtAirport">
                                <option value="">
                                    -- Please Select one --
                                </option>
                                <option> Yes </option>
                                <option> No </option>
                            </select>
                            <div class="col-lg-12">
                                <span id="spanAirport" class="notvalidated" style="display: none;">This field can not be empty</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check In <span><i class="fa fa-calendar-check-o" id="booking-icon"></i></span></label>
                            <input type="text" class="form-control input-validater datepicker hasDatepicker" id="txtCheckIn" name="txtCheckIn" placeholder="dd-mm-yy">
                            <div class="col-lg-12">
                                <span id="spanCheckIn"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check Out <span><i class="fa fa-calendar-minus-o" id="booking-icon"></i></span></label>
                            <input type="text" class="form-control input-validater datepicker hasDatepicker" id="txtCheckOut" name="txtCheckOut" placeholder="dd-mm-yy">
                            <div class="col-lg-12">
                                <span id="spanCheckOut"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No of Adults <span><i class="fa fa-users" id="booking-icon"></i></span></label>
                            <input type="number" class="form-control input-validater" id="txtAdult" name="txtAdult" min="0">
                            <div class="col-lg-12">
                                <span id="spanAdult"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No of Children  <span><i class="fa fa-users" id="booking-icon"></i></span></label>
                            <input type="number" class="form-control input-validater" id="txtChild" name="txtChild" min="0">
                            <div class="col-lg-12">
                                <span id="spanChild"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                        <span id="capspan" ></span>
                    </div>
                    <div class="col-md-3"> 
                        <label></label>
                        <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                    </div>
                    <div class="col-md-3">
                        <div class="div-check" >
                            <img src="./booking-form/img/checking.gif" id="checking"/>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" id="btnSubmit" value="Book Now" />
                    </div>
                </div>
        </div><!-- Checkout -->
        <div id="dismessage" align="center"></div>
    </div>
</div>

