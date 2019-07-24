<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$txtFullName = '';
$txtEmail = '';
$txtContact = '';
$txtCheckIn = '';
$txtCheckOut = '';
$txtNumAduts = '';
$txtNumChilds = '';

if (isset($_POST['txtFullName'])) {
    $txtFullName = $_POST['txtFullName'];
}
if (isset($_POST['txtEmail'])) {
    $txtEmail = $_POST['txtEmail'];
}
if (isset($_POST['txtContact'])) {
    $txtContact = $_POST['txtContact'];
}

if (isset($_POST['txtNumAduts'])) {
    $txtNumAduts = $_POST['txtNumAduts'];
}

if (isset($_POST['txtCheckIn'])) {
    $txtCheckIn = $_POST['txtCheckIn'];
}

if (isset($_POST['txtCheckOut'])) {
    $txtCheckOut = $_POST['txtCheckOut'];
}

if (isset($_POST['txtNumChilds'])) {
    $txtNumChilds = $_POST['txtNumChilds'];
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
$TOUR_PACKAGE = new TourPackage($id);
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content=" ">
        <meta name="author" content=" ">
        <title>Apple Vacations -Inquire Now</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <!-- Google web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Pavanam' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">
        <link href="css/date_time_picker.css" rel="stylesheet">
        <!-- Radio and check inputs -->
        <link href="css/skins/square/grey.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body> 
        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->
        <section class="parallax-window" data-parallax="scroll" data-image-src="img/inq.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Inquire Now</h1>
                    <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
                </div>
            </div>
        </section>
        <!-- End Section hero_2 -->

        <main>
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                        </li>
                        <li><a href="#">Inquire<i class="fa fa-angle-right fa-i"></i></a>
                        </li>
                        <li><?php echo $TOUR_PACKAGE->title ?></li>
                    </ul>
                </div>
            </div>
            <!-- End position -->

            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-12 add_bottom_15">
                        <div class="step">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="txtFullName" id="txtFullName" placeholder="Name" value="<?php echo $txtFullName ?>">
                                        <span id="spanFullName"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" value="<?php echo $txtEmail ?>"/>
                                        <span id="spanEmail"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone Number" value="<?php echo $txtContact ?>" />
                                        <span id="spanPhone"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Country Code</label>
                                        <input type="text" class="form-control" name="txtCountry" id="txtCountry" placeholder="Country"/>
                                        <span id="spanCountry"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Tour Packages</label>
                                        <select class="form-control" id="txtTour" name="txtTour">

                                            <option> -- Please select your Tour Package -- </option>
                                            <?php
                                            foreach ($TOUR_PACKAGE->all() as $tour_package) {

                                                if ($tour_package['id'] == $TOUR_PACKAGE->id) {
                                                    ?>
                                                    <option value="<?php echo $tour_package['title'] ?>" selected=""><?php echo $tour_package['title'] ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option value="<?php echo $tour_package['title'] ?>" ><?php echo $tour_package['title'] ?></option>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <span id="spanTour"></span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Airport Pickup</label>
                                        <select class="form-control" id="txtAirport" name="txtAirport">
                                            <option> -- Airport Pickup  -- </option>
                                            <option value="yes">  Yes </option>
                                            <option value="no">  No </option>
                                        </select>
                                    </div>
                                    <span id="spanAirport"></span>
                                </div> 
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-calendar-7"></i>Check In </label>
                                        <input class="date-pick form-control" data-date-format="M d, D" type="text" name="txtCheckIn" id="txtCheckIn">
                                    </div> 
                                    <span id="spanCheckIn"></span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Check Out</label>
                                        <input class="date-pick form-control" data-date-format="M d, D" type="text" name="txtCheckOut" id="txtCheckOut" >
                                        <span id="spanCheckOut"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-user"></i>Num Adults </label>
                                        <input class="  form-control"  type="number" min="0"name="txtAdult" id="txtAdult" placeholder="Num Adults" value="<?php echo $txtNumAduts ?>">
                                    </div>
                                    <span id="spanAdult"></span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-user"></i> Num Children</label>
                                        <input class="  form-control"  type="number" min="0"name="txtChild" id="txtChild" placeholder="Num Child" value="<?php echo $txtNumChilds ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-comment"></i>Message </label>
                                        <textarea id="txtMessage" name="txtMessage"  class="form-control" rows="8" placeholder="Write your message"></textarea>
                                    </div>
                                    <span id="spanMessage"></span>
                                </div>  
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="comment">Security Code:</label>
                                        <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                        <span id="capspan" ></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"  >
                                        <?php include("./contact-form/captchacode-widget.php"); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <button name="submit" type="submit" value="Submit" class="site-button btn_1 green medium" id="btnSubmit"> <span>Inquire</span> </button>
                                    </div>
                                </div>
                                <div id="dismessage" align="center"></div>       
                            </div> 
                        </div>  
                    </div>  
                </div>  
        </main>
        <!-- End main -->
        <?php include './footer.php'; ?>

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!-- Scroll to top jump button end-->



        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <!-- Specific scripts -->
        <script src="js/icheck.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });

            $('input.date-pick').datepicker('setDate', 'today');
            $('input.time-pick').timepicker({
                minuteStep: 15,
                showInpunts: false
            });
        </script>
        <script src="booking-form/scripts.js" type="text/javascript"></script>

    </body>
</html>