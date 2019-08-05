<div>
    <div class="checkout-sec contactus-form">

        <div class="row form-type">
            <div class="booking-form">

                <div class="row ">
                    <div class="col-md-6">
                        <label>Name <span><i class="fa fa-user" id="booking-icon"></i></span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtFullName" id="txtFullName">
                            <div class="col-lg-12">
                                <span id="spanFullName"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span><i class="fa fa-envelope" id="booking-icon"></i></span></label>
                            <input type="email" class="form-control" name="txtEmail" id="txtEmail">
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
                            <input type="tel" class="form-control" id="txtPhone" name="txtPhone">
                            <div class="col-lg-12">
                                <span id="spanPhone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country<span><i class="fa fa-map" id="booking-icon"></i></span></label>
                            <input type="text" class="form-control" id="txtCountry" name="txtCountry">
                            <div class="col-lg-12">
                                <span id="spanCountry"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Tour Package <span><i class="fa fa-map" id="booking-icon"></i></span></label>
                        <input type="text" class="form-control" id="txtTour" name="txtTour">
                        <div class="col-lg-12">
                            <span id="spanTour"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Airport Pickup <span><i class="fa fa-plane" id="booking-icon"></i></span></label>
                            <select class="form-control h-booking" id="txtAirport" name="txtAirport">
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
                            <input type="text" class="form-control datepicker hasDatepicker" id="txtCheckIn" name="txtCheckIn">
                            <div class="col-lg-12">
                                <span id="spanCheckIn"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check Out <span><i class="fa fa-calendar-minus-o" id="booking-icon"></i></span></label>
                            <input type="text" class="form-control datepicker hasDatepicker" id="txtCheckOut" name="txtCheckOut">
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
                            <input type="number" class="form-control  " id="txtAdult" name="txtAdult" min="0">
                            <div class="col-lg-12">
                                <span id="spanAdult"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No of Children  <span><i class="fa fa-users" id="booking-icon"></i></span></label>
                            <input type="number" class="form-control  " id="txtChild" name="txtChild" min="0">
                            <div class="col-lg-12">
                                <span id="spanChild"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                        <input type="text" name="captchacode" id="captchacode" class="form-control" placeholder="Security code >> ">
                        <span id="capspan" ></span>
                    </div>
                    <div class="col-md-6"> 
                        <label></label>
                        <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" id="btnSubmit" value="send message" />
                    </div>
                </div>
            </div>
            <div id="dismessage" align="center"></div>

        </div><!-- Checkout -->
    </div>
</div>

