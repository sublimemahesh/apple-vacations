<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Tour Package</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>

        <section class="content">
            <div class="container-fluid">  
                <?php
                $vali = new Validator();

                $vali->show_message();
                ?>
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create Tour Package</h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a href="manage-tour-package.php">
                                            <i class="material-icons">list</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal"  method="post" id="form-data"  enctype="multipart/form-data"> 

                                    <div class="col-md-12  ">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control" name="tour_type" id="tour_type" value="1">
                                                    <option value=""> --Please Select the tour type -- </option>

                                                    <?php
                                                    $TOUR_TYPE = new TourType(NULL);
                                                    foreach ($TOUR_TYPE->all() as $key => $tour_type) {
                                                        ?>
                                                        <option value="<?php echo $tour_type['id'] ?>">
                                                            <?php echo $tour_type['name'] ?>
                                                        </option> 
                                                    <?php } ?>


                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="title" class="form-control"  autocomplete="off" name="title" required="true">
                                                <label class="form-label">Title</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="dates" class="form-control"  autocomplete="off" name="dates" required="true">
                                                <label class="form-label">Dates</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">                                       
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" id="image" class="form-control" name="image_name"  required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="short_description" class="form-control" autocomplete="off" name="short_description" required="true">
                                                <label class="form-label">Short Description</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Description</label>
                                        <div class="form-line">
                                            <textarea id="description" name="description" class="form-control" rows="5"></textarea> 
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="includes">Includes</label>
                                        <div class="form-line">
                                            <textarea id="description-1" name="includes" class="form-control tinymce" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="excludes">Excludes</label>
                                        <div class="form-line">
                                            <textarea id="description-2" name="excludes" class="form-control tinymce" rows="5"></textarea> 
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div   style="margin-bottom: 15px;">
                                            <h2 style="font-size: 16px;">Manage Prices</h2> 
                                        </div> 

                                        <div class="col-md-5">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="name" class="form-control"  autocomplete="off"   required="true">
                                                    <label class="form-label">Pax</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" id="price" class="form-control"  autocomplete="off"   required="true">
                                                    <label class="form-label">Price</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="button" id="append" class="form-control btn btn-primary"   value=" + Add">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="form-group form-float"> 
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable" style="display: none;">
                                                    <thead>
                                                        <tr>
                                                            <th>Pax</th>
                                                            <th>Price</th> 
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Pax</th>
                                                            <th>Price</th>  
                                                            <th>Option</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody class="inc">
                                                    </tbody>

                                                </table> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12"> 
                                        <input type="hidden" name="create"value="create"/>
                                        <input type="submit" id="create" class="btn btn-primary m-t-15 waves-effect" value="create"/>
                                    </div>
                                    <div class="row clearfix">  </div>
                                    <hr/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- #END# Vertical Layout --> 
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>

        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
            tinymce.init({
                selector: "#description-1",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
            tinymce.init({
                selector: "#description-2",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
        </script>
        <script>
            $(document).ready(function () {
                $("#append").click(function () {

                    var name = $('#name').val();
                    var price = $('#price').val();

                    $('table').show();
                    $(".inc").append('<tr><td> ' + name + '  </td>  <input type="hidden" name="name[]" value="' + name + '"/>     <td> ' + price + ' </td> <input type="hidden" name="price[]" value="' + price + '"/>  <td ><div class="delete-pages btn btn-sm btn-danger remove-col" data-id=""> <i class="waves-effect glyphicon glyphicon-trash" data-type="cancel"></i></div>   </td> </tr> \n\
                 ');
                });


                $("#myTable").on('click', '.remove-col', function () {
                    $(this).closest('tr').remove();
                });
            });
        </script>
        <script src="js/ajax/tour-package.js" type="text/javascript"></script>
    </body>

</html>