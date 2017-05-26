<!DOCTYPE html>
<html class=" ">
    <head>
        <!-- 
            * @Package: Complete Admin - Responsive Theme
            * @Subpackage: Bootstrap
            * @Version: 2.0
            * This file is part of Complete Admin Theme.
            -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Complete Admin :  Error Page</title>
        <base href="{{asset('')}}public/">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="TT_Admin/assets/images/favicon.png" type="image/x-icon" />
        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="TT_Admin/assets/images/apple-touch-icon-57-precomposed.png">
        <!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="TT_Admin/assets/images/apple-touch-icon-114-precomposed.png">
        <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="TT_Admin/assets/images/apple-touch-icon-72-precomposed.png">
        <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="TT_Admin/assets/images/apple-touch-icon-144-precomposed.png">
        <!-- For iPad Retina display -->
        <!-- CORE CSS FRAMEWORK - START -->
        <link href="TT_Admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="TT_Admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="TT_Admin/assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="TT_Admin/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="TT_Admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="TT_Admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <!-- CORE CSS TEMPLATE - START -->
        <link href="TT_Admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="TT_Admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
        
        <!-- END TOPBAR -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <section class="box nobox ">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    @if(!session('thongbao'))
                                    <h1 class="page_error_code text-primary">404</h1>
                                    <h1 class="page_error_info">Oops! Page Not Found</h1>
                                    @else
                                        <h1 class="page_error_code text-primary">Error</h1>
                                    <h1 class="page_error_info">{{session('thongbao')}}</h1>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6">
                                            <form action="javascript:;" method="post" class="page_error_search">
                                                <div class="input-group transparent">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-search icon-primary"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Try a new search">
                                                    <input type='submit' value="">
                                                </div>
                                                <div class="text-center page_error_btn">
                                                    <a class="btn btn-primary btn-lg" href='#'><i class='fa fa-location-arrow'></i> &nbsp; Back to Home</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
        <!-- CORE JS FRAMEWORK - START --> 
        <script src="TT_Admin/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="TT_Admin/assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="TT_Admin/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="TT_Admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="TT_Admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="TT_Admin/assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <script>window.jQuery||document.write('<script src="TT_Admin/assets/js/jquery-1.11.2.min.js"><\/script>');</script>
        <!-- CORE JS FRAMEWORK - END --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <!-- CORE TEMPLATE JS - START --> 
        <script src="TT_Admin/assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 
        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">
                        Body goes here...
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>