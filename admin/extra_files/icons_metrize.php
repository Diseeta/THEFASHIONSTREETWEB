<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_metrize.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Design_Gurus" name="author">
    <meta content="WOW Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>WOW - Admin Template Bootstrap 4 with material design</title>

    <!--favicon-->
    <link href="assets/images/favicon.ico" rel="shortcut icon">

    <!--Preloader-CSS-->
    <link rel="stylesheet" href="assets/plugins/preloader/preloader.css">

    <!--bootstrap-4-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--Custom Scroll-->
    <link rel="stylesheet" href="assets/plugins/customScroll/jquery.mCustomScrollbar.min.css">
    <!--Font Icons-->
    <link rel="stylesheet" href="assets/icons/dripicons/dripicons.css">
    <link rel="stylesheet" href="assets/icons/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/icons/metrize/metrize.css">

    <!--Date-range-->
    <link rel="stylesheet" href="assets/plugins/date-range/daterangepicker.css">
    <!--Drop-Zone-->
    <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
    <!--Full Calendar-->
    <link rel="stylesheet" href="assets/plugins/full-calendar/fullcalendar.min.css">
    <!--Normalize Css-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--Main Css-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!---Preloader Starts Here--->
<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo text-center"><img class="img-fluid" src="assets/images/logo-c.png" alt="" class="ip-logo text-center"/></h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>
<!---Preloader Ends Here--->


<!--Navigation-->
<nav id="navigation" class="navigation-sidebar bg-primary">
    <div class="navigation-header">
        <a href="index.html"><span class="logo">WOW - Admin</span></a>
        <!--<img src="logo.png" alt="logo" class="brand" height="50">-->
    </div>

    <!--Navigation Profile area-->
    <div class="navigation-profile">
        <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
        <h4 class="name">Meera</h4>
        <span class="designation">UI/UX EXPERT</span>

        <a id="show-user-menu" href="javascript:void(0);" class="circle-white-btn profile-setting"><i class="fa fa-cog"></i></a>

        <!--logged user hover menu-->
        <div class="logged-user-menu bg-white">
            <div class="avatar-info">
                <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
                <h4 class="name">Meera</h4>
                <span class="designation">UI/UX EXPERT</span>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-email-outline"></i>
                        <span>Emails</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-person-outline"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="user_change-password.html">
                        <i class="ion-ios-locked-outline"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-log-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Dashboard</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="index.html">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Main Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard_tasks-list.html">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Tasks List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="apps_calendar.html">
                    <span class="icon-thumbnail"><i class="fa fa-calendar"></i></span>
                    <span class="title">Full Calendar</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-document-new"></i></span>
                    <span class="title">Pages</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="pages_invoice.html">
                            <span class="icon-thumbnail"><i class="dripicons-print"></i></span>
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_login.html">
                            <span class="icon-thumbnail"><i class="dripicons-enter"></i></span>
                            <span class="title">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_register.html">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_404.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">404 Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_500.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">500 Page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-graph-bar"></i></span>
                    <span class="title">Charts</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="charts_line.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-line"></i></span>
                            <span class="title">Line Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_bar.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-bar"></i></span>
                            <span class="title">Bar Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_pie-doughnut.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-pie"></i></span>
                            <span class="title">Pie & Doughnut</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_sparkline.html">
                            <span class="icon-thumbnail">SP</span>
                            <span class="title">Sparkline </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-heart"></i></span>
                    <span class="title">UI Kit</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="uikit_alerts.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">Alerts</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_buttons.html">
                            <span class="icon-thumbnail"><i class="dripicons-bold"></i></span>
                            <span class="title">Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_grid.html">
                            <span class="icon-thumbnail"><i class="dripicons-view-thumb"></i></span>
                            <span class="title">Grid</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_modals.html">
                            <span class="icon-thumbnail"><i class="dripicons-duplicate"></i></span>
                            <span class="title">Modals</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_progress.html">
                            <span class="icon-thumbnail"><i class="dripicons-scale"></i></span>
                            <span class="title">Progress Bar</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_tooltips.html">
                            <span class="icon-thumbnail"><i class="dripicons-message"></i></span>
                            <span class="title">Tooltips</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-article"></i></span>
                    <span class="title">Forms</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="forms_regular.html">
                            <span class="icon-thumbnail"><i class="dripicons-blog"></i></span>
                            <span class="title">Regular Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_validation.html">
                            <span class="icon-thumbnail"><i class="dripicons-checkmark"></i></span>
                            <span class="title">Form Validation</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_uploads.html">
                            <span class="icon-thumbnail"><i class="dripicons-upload"></i></span>
                            <span class="title">File Uploads</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_ckEditor.html">
                            <span class="icon-thumbnail"><i class="dripicons-document-edit"></i></span>
                            <span class="title">CK Editor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-view-list-large"></i></span>
                    <span class="title">Tables</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="tables_regular.html">
                            <span class="icon-thumbnail">RT</span>
                            <span class="title">Regular Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables_data-table.html">
                            <span class="icon-thumbnail">DT</span>
                            <span class="title">Data Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables_editable.html">
                            <span class="icon-thumbnail">ET</span>
                            <span class="title">Editable Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-store"></i></span>
                    <span class="title">Icons</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="icons_simple-line.html">
                            <span class="icon-thumbnail">SL</span>
                            <span class="title">Simple Line</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_themify.html">
                            <span class="icon-thumbnail">TH</span>
                            <span class="title">Themify</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_dripicons.html">
                            <span class="icon-thumbnail">DP</span>
                            <span class="title">Dripicons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_eightyshades.html">
                            <span class="icon-thumbnail">ES</span>
                            <span class="title">Eightyshades</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_fontawesome.html">
                            <span class="icon-thumbnail">FA</span>
                            <span class="title">Font Awesome</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_foundation.html">
                            <span class="icon-thumbnail">FO</span>
                            <span class="title">Foundation</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_metrize.html" class="active">
                            <span class="icon-thumbnail">MI</span>
                            <span class="title">Metrize Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_typicons.html">
                            <span class="icon-thumbnail">TY</span>
                            <span class="title">Typicons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_weathericons.html">
                            <span class="icon-thumbnail">WI</span>
                            <span class="title">Weather Icons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="documentation.html">
                    <span class="icon-thumbnail"><i class="dripicons-document"></i></span>
                    <span class="title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">
        <!--Header Fixed-->
        <div class="header fixed-header">
            <div class="container-fluid" style="padding: 10px 25px">
                <div class="row">
                    <div class="col-9 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <span class="logo">WOW - Admin</span>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Icons</li>
                            <li class="breadcrumb-item active">Metrize</li>
                        </ol>
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-primary btn-round pull-right d-none d-md-block">Buy Theme Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="block">
                            <div class="block-heading">
                                <h5>Metrize Icons</h5>
                                <p class="mt-2">Powered by Metrize Icons set, for more info <a href="http://www.alessioatzeni.com/metrize-icons/" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="icon-yen"></i><span>icon-yen</span></a></li>
                                <li><a href="#"><i class="icon-world"></i><span>icon-world</span></a></li>
                                <li><a href="#"><i class="icon-wireframe-globe"></i><span>icon-wireframe-globe</span></a></li>
                                <li><a href="#"><i class="icon-wind"></i><span>icon-wind</span></a></li>
                                <li><a href="#"><i class="icon-wifi"></i><span>icon-wifi</span></a></li>
                                <li><a href="#"><i class="icon-waves"></i><span>icon-waves</span></a></li>
                                <li><a href="#"><i class="icon-viewport"></i><span>icon-viewport</span></a></li>
                                <li><a href="#"><i class="icon-viewport-video"></i><span>icon-viewport-video</span></a></li>
                                <li><a href="#"><i class="icon-user"></i><span>icon-user</span></a></li>
                                <li><a href="#"><i class="icon-user-remove"></i><span>icon-user-remove</span></a></li>
                                <li><a href="#"><i class="icon-user-ban"></i><span>icon-user-ban</span></a></li>
                                <li><a href="#"><i class="icon-user-add"></i><span>icon-user-add</span></a></li>
                                <li><a href="#"><i class="icon-upload"></i><span>icon-upload</span></a></li>
                                <li><a href="#"><i class="icon-upload-selection"></i><span>icon-upload-selection</span></a></li>
                                <li><a href="#"><i class="icon-upload-selection-circle"></i><span>icon-upload-selection-circle</span></a></li>
                                <li><a href="#"><i class="icon-underline"></i><span>icon-underline</span></a></li>
                                <li><a href="#"><i class="icon-triple-points"></i><span>icon-triple-points</span></a></li>
                                <li><a href="#"><i class="icon-top-bottom"></i><span>icon-top-bottom</span></a></li>
                                <li><a href="#"><i class="icon-three-points"></i><span>icon-three-points</span></a></li>
                                <li><a href="#"><i class="icon-three-points-top"></i><span>icon-three-points-top</span></a></li>
                                <li><a href="#"><i class="icon-three-points-bottom"></i><span>icon-three-points-bottom</span></a></li>
                                <li><a href="#"><i class="icon-text-width"></i><span>icon-text-width</span></a></li>
                                <li><a href="#"><i class="icon-text-size-upper"></i><span>icon-text-size-upper</span></a></li>
                                <li><a href="#"><i class="icon-text-size-reduce"></i><span>icon-text-size-reduce</span></a></li>
                                <li><a href="#"><i class="icon-text-paragraph"></i><span>icon-text-paragraph</span></a></li>
                                <li><a href="#"><i class="icon-text-normal"></i><span>icon-text-normal</span></a></li>
                                <li><a href="#"><i class="icon-text-justify-right"></i><span>icon-text-justify-right</span></a></li>
                                <li><a href="#"><i class="icon-text-justify-left"></i><span>icon-text-justify-left</span></a></li>
                                <li><a href="#"><i class="icon-text-justify-center"></i><span>icon-text-justify-center</span></a></li>
                                <li><a href="#"><i class="icon-text-height"></i><span>icon-text-height</span></a></li>
                                <li><a href="#"><i class="icon-text-center"></i><span>icon-text-center</span></a></li>
                                <li><a href="#"><i class="icon-text-bold"></i><span>icon-text-bold</span></a></li>
                                <li><a href="#"><i class="icon-text-align-right"></i><span>icon-text-align-right</span></a></li>
                                <li><a href="#"><i class="icon-text-align-left"></i><span>icon-text-align-left</span></a></li>
                                <li><a href="#"><i class="icon-telephone"></i><span>icon-telephone</span></a></li>
                                <li><a href="#"><i class="icon-sunshine"></i><span>icon-sunshine</span></a></li>
                                <li><a href="#"><i class="icon-sun"></i><span>icon-sun</span></a></li>
                                <li><a href="#"><i class="icon-stop"></i><span>icon-stop</span></a></li>
                                <li><a href="#"><i class="icon-star"></i><span>icon-star</span></a></li>
                                <li><a href="#"><i class="icon-speed"></i><span>icon-speed</span></a></li>
                                <li><a href="#"><i class="icon-sound-on"></i><span>icon-sound-on</span></a></li>
                                <li><a href="#"><i class="icon-sound-off"></i><span>icon-sound-off</span></a></li>
                                <li><a href="#"><i class="icon-sos"></i><span>icon-sos</span></a></li>
                                <li><a href="#"><i class="icon-social-zerply"></i><span>icon-social-zerply</span></a></li>
                                <li><a href="#"><i class="icon-social-youtube"></i><span>icon-social-youtube</span></a></li>
                                <li><a href="#"><i class="icon-social-yelp"></i><span>icon-social-yelp</span></a></li>
                                <li><a href="#"><i class="icon-social-yahoo"></i><span>icon-social-yahoo</span></a></li>
                                <li><a href="#"><i class="icon-social-wordpress"></i><span>icon-social-wordpress</span></a></li>
                                <li><a href="#"><i class="icon-social-virb"></i><span>icon-social-virb</span></a></li>
                                <li><a href="#"><i class="icon-social-vimeo"></i><span>icon-social-vimeo</span></a></li>
                                <li><a href="#"><i class="icon-social-viddler"></i><span>icon-social-viddler</span></a></li>
                                <li><a href="#"><i class="icon-social-twitter"></i><span>icon-social-twitter</span></a></li>
                                <li><a href="#"><i class="icon-social-tumblr"></i><span>icon-social-tumblr</span></a></li>
                                <li><a href="#"><i class="icon-social-stumbleupon"></i><span>icon-social-stumbleupon</span></a></li>
                                <li><a href="#"><i class="icon-social-soundcloud"></i><span>icon-social-soundcloud</span></a></li>
                                <li><a href="#"><i class="icon-social-skype"></i><span>icon-social-skype</span></a></li>
                                <li><a href="#"><i class="icon-social-sharethis"></i><span>icon-social-sharethis</span></a></li>
                                <li><a href="#"><i class="icon-social-quora"></i><span>icon-social-quora</span></a></li>
                                <li><a href="#"><i class="icon-social-pinterest"></i><span>icon-social-pinterest</span></a></li>
                                <li><a href="#"><i class="icon-social-photobucket"></i><span>icon-social-photobucket</span></a></li>
                                <li><a href="#"><i class="icon-social-paypal"></i><span>icon-social-paypal</span></a></li>
                                <li><a href="#"><i class="icon-social-myspace"></i><span>icon-social-myspace</span></a></li>
                                <li><a href="#"><i class="icon-social-linkedin"></i><span>icon-social-linkedin</span></a></li>
                                <li><a href="#"><i class="icon-social-last-fm"></i><span>icon-social-last-fm</span></a></li>
                                <li><a href="#"><i class="icon-social-grooveshark"></i><span>icon-social-grooveshark</span></a></li>
                                <li><a href="#"><i class="icon-social-google-plus"></i><span>icon-social-google-plus</span></a></li>
                                <li><a href="#"><i class="icon-social-github"></i><span>icon-social-github</span></a></li>
                                <li><a href="#"><i class="icon-social-forrst"></i><span>icon-social-forrst</span></a></li>
                                <li><a href="#"><i class="icon-social-flickr"></i><span>icon-social-flickr</span></a></li>
                                <li><a href="#"><i class="icon-social-facebook"></i><span>icon-social-facebook</span></a></li>
                                <li><a href="#"><i class="icon-social-evernote"></i><span>icon-social-evernote</span></a></li>
                                <li><a href="#"><i class="icon-social-envato"></i><span>icon-social-envato</span></a></li>
                                <li><a href="#"><i class="icon-social-email"></i><span>icon-social-email</span></a></li>
                                <li><a href="#"><i class="icon-social-dribbble"></i><span>icon-social-dribbble</span></a></li>
                                <li><a href="#"><i class="icon-social-digg"></i><span>icon-social-digg</span></a></li>
                                <li><a href="#"><i class="icon-social-deviantart"></i><span>icon-social-deviantart</span></a></li>
                                <li><a href="#"><i class="icon-social-blogger"></i><span>icon-social-blogger</span></a></li>
                                <li><a href="#"><i class="icon-social-behance"></i><span>icon-social-behance</span></a></li>
                                <li><a href="#"><i class="icon-social-bebo"></i><span>icon-social-bebo</span></a></li>
                                <li><a href="#"><i class="icon-social-addthis"></i><span>icon-social-addthis</span></a></li>
                                <li><a href="#"><i class="icon-social-500px"></i><span>icon-social-500px</span></a></li>
                                <li><a href="#"><i class="icon-snow"></i><span>icon-snow</span></a></li>
                                <li><a href="#"><i class="icon-sliders"></i><span>icon-sliders</span></a></li>
                                <li><a href="#"><i class="icon-sliders-vertical"></i><span>icon-sliders-vertical</span></a></li>
                                <li><a href="#"><i class="icon-sign-male"></i><span>icon-sign-male</span></a></li>
                                <li><a href="#"><i class="icon-sign-female"></i><span>icon-sign-female</span></a></li>
                                <li><a href="#"><i class="icon-shield"></i><span>icon-shield</span></a></li>
                                <li><a href="#"><i class="icon-settings"></i><span>icon-settings</span></a></li>
                                <li><a href="#"><i class="icon-setting"></i><span>icon-setting</span></a></li>
                                <li><a href="#"><i class="icon-select-square"></i><span>icon-select-square</span></a></li>
                                <li><a href="#"><i class="icon-select-circle"></i><span>icon-select-circle</span></a></li>
                                <li><a href="#"><i class="icon-search"></i><span>icon-search</span></a></li>
                                <li><a href="#"><i class="icon-scale"></i><span>icon-scale</span></a></li>
                                <li><a href="#"><i class="icon-rules"></i><span>icon-rules</span></a></li>
                                <li><a href="#"><i class="icon-rss"></i><span>icon-rss</span></a></li>
                                <li><a href="#"><i class="icon-retweet"></i><span>icon-retweet</span></a></li>
                                <li><a href="#"><i class="icon-report-comment"></i><span>icon-report-comment</span></a></li>
                                <li><a href="#"><i class="icon-refresh"></i><span>icon-refresh</span></a></li>
                                <li><a href="#"><i class="icon-rec"></i><span>icon-rec</span></a></li>
                                <li><a href="#"><i class="icon-random"></i><span>icon-random</span></a></li>
                                <li><a href="#"><i class="icon-quote"></i><span>icon-quote</span></a></li>
                                <li><a href="#"><i class="icon-question"></i><span>icon-question</span></a></li>
                                <li><a href="#"><i class="icon-previous-fast-step"></i><span>icon-previous-fast-step</span></a></li>
                                <li><a href="#"><i class="icon-prev-step"></i><span>icon-prev-step</span></a></li>
                                <li><a href="#"><i class="icon-pounds"></i><span>icon-pounds</span></a></li>
                                <li><a href="#"><i class="icon-podcast"></i><span>icon-podcast</span></a></li>
                                <li><a href="#"><i class="icon-plus"></i><span>icon-plus</span></a></li>
                                <li><a href="#"><i class="icon-play"></i><span>icon-play</span></a></li>
                                <li><a href="#"><i class="icon-pin"></i><span>icon-pin</span></a></li>
                                <li><a href="#"><i class="icon-pin-map"></i><span>icon-pin-map</span></a></li>
                                <li><a href="#"><i class="icon-pig-money"></i><span>icon-pig-money</span></a></li>
                                <li><a href="#"><i class="icon-pause"></i><span>icon-pause</span></a></li>
                                <li><a href="#"><i class="icon-paperclip"></i><span>icon-paperclip</span></a></li>
                                <li><a href="#"><i class="icon-paperclip-oblique"></i><span>icon-paperclip-oblique</span></a></li>
                                <li><a href="#"><i class="icon-options-settings"></i><span>icon-options-settings</span></a></li>
                                <li><a href="#"><i class="icon-officine"></i><span>icon-officine</span></a></li>
                                <li><a href="#"><i class="icon-officine-2"></i><span>icon-officine-2</span></a></li>
                                <li><a href="#"><i class="icon-off"></i><span>icon-off</span></a></li>
                                <li><a href="#"><i class="icon-number-zero"></i><span>icon-number-zero</span></a></li>
                                <li><a href="#"><i class="icon-number-two"></i><span>icon-number-two</span></a></li>
                                <li><a href="#"><i class="icon-number-three"></i><span>icon-number-three</span></a></li>
                                <li><a href="#"><i class="icon-number-six"></i><span>icon-number-six</span></a></li>
                                <li><a href="#"><i class="icon-number-seven"></i><span>icon-number-seven</span></a></li>
                                <li><a href="#"><i class="icon-number-one"></i><span>icon-number-one</span></a></li>
                                <li><a href="#"><i class="icon-number-nine"></i><span>icon-number-nine</span></a></li>
                                <li><a href="#"><i class="icon-number-four"></i><span>icon-number-four</span></a></li>
                                <li><a href="#"><i class="icon-number-five"></i><span>icon-number-five</span></a></li>
                                <li><a href="#"><i class="icon-number-eight"></i><span>icon-number-eight</span></a></li>
                                <li><a href="#"><i class="icon-next-step"></i><span>icon-next-step</span></a></li>
                                <li><a href="#"><i class="icon-next-fast-step"></i><span>icon-next-fast-step</span></a></li>
                                <li><a href="#"><i class="icon-music"></i><span>icon-music</span></a></li>
                                <li><a href="#"><i class="icon-multi-borders"></i><span>icon-multi-borders</span></a></li>
                                <li><a href="#"><i class="icon-minus"></i><span>icon-minus</span></a></li>
                                <li><a href="#"><i class="icon-marker"></i><span>icon-marker</span></a></li>
                                <li><a href="#"><i class="icon-marker-points"></i><span>icon-marker-points</span></a></li>
                                <li><a href="#"><i class="icon-marker-minus"></i><span>icon-marker-minus</span></a></li>
                                <li><a href="#"><i class="icon-marker-add"></i><span>icon-marker-add</span></a></li>
                                <li><a href="#"><i class="icon-map"></i><span>icon-map</span></a></li>
                                <li><a href="#"><i class="icon-male-symbol"></i><span>icon-male-symbol</span></a></li>
                                <li><a href="#"><i class="icon-mailbox"></i><span>icon-mailbox</span></a></li>
                                <li><a href="#"><i class="icon-mail"></i><span>icon-mail</span></a></li>
                                <li><a href="#"><i class="icon-magnet"></i><span>icon-magnet</span></a></li>
                                <li><a href="#"><i class="icon-magic-wand"></i><span>icon-magic-wand</span></a></li>
                                <li><a href="#"><i class="icon-login-lock-refresh"></i><span>icon-login-lock-refresh</span></a></li>
                                <li><a href="#"><i class="icon-locked"></i><span>icon-locked</span></a></li>
                                <li><a href="#"><i class="icon-location"></i><span>icon-location</span></a></li>
                                <li><a href="#"><i class="icon-location-maps"></i><span>icon-location-maps</span></a></li>
                                <li><a href="#"><i class="icon-list-square"></i><span>icon-list-square</span></a></li>
                                <li><a href="#"><i class="icon-list-circle"></i><span>icon-list-circle</span></a></li>
                                <li><a href="#"><i class="icon-link-url"></i><span>icon-link-url</span></a></li>
                                <li><a href="#"><i class="icon-line-through"></i><span>icon-line-through</span></a></li>
                                <li><a href="#"><i class="icon-limit-directions"></i><span>icon-limit-directions</span></a></li>
                                <li><a href="#"><i class="icon-like-upload"></i><span>icon-like-upload</span></a></li>
                                <li><a href="#"><i class="icon-like-remove"></i><span>icon-like-remove</span></a></li>
                                <li><a href="#"><i class="icon-like-download"></i><span>icon-like-download</span></a></li>
                                <li><a href="#"><i class="icon-like-close"></i><span>icon-like-close</span></a></li>
                                <li><a href="#"><i class="icon-like-ban"></i><span>icon-like-ban</span></a></li>
                                <li><a href="#"><i class="icon-like-add"></i><span>icon-like-add</span></a></li>
                                <li><a href="#"><i class="icon-left-right"></i><span>icon-left-right</span></a></li>
                                <li><a href="#"><i class="icon-leaf"></i><span>icon-leaf</span></a></li>
                                <li><a href="#"><i class="icon-layers"></i><span>icon-layers</span></a></li>
                                <li><a href="#"><i class="icon-landscape"></i><span>icon-landscape</span></a></li>
                                <li><a href="#"><i class="icon-key"></i><span>icon-key</span></a></li>
                                <li><a href="#"><i class="icon-italic"></i><span>icon-italic</span></a></li>
                                <li><a href="#"><i class="icon-info"></i><span>icon-info</span></a></li>
                                <li><a href="#"><i class="icon-idea"></i><span>icon-idea</span></a></li>
                                <li><a href="#"><i class="icon-home-wifi"></i><span>icon-home-wifi</span></a></li>
                                <li><a href="#"><i class="icon-heart"></i><span>icon-heart</span></a></li>
                                <li><a href="#"><i class="icon-hdd"></i><span>icon-hdd</span></a></li>
                                <li><a href="#"><i class="icon-hdd-raid"></i><span>icon-hdd-raid</span></a></li>
                                <li><a href="#"><i class="icon-hdd-net"></i><span>icon-hdd-net</span></a></li>
                                <li><a href="#"><i class="icon-grids"></i><span>icon-grids</span></a></li>
                                <li><a href="#"><i class="icon-grid-big"></i><span>icon-grid-big</span></a></li>
                                <li><a href="#"><i class="icon-graphs"></i><span>icon-graphs</span></a></li>
                                <li><a href="#"><i class="icon-forward"></i><span>icon-forward</span></a></li>
                                <li><a href="#"><i class="icon-fire"></i><span>icon-fire</span></a></li>
                                <li><a href="#"><i class="icon-female-symbol"></i><span>icon-female-symbol</span></a></li>
                                <li><a href="#"><i class="icon-eye"></i><span>icon-eye</span></a></li>
                                <li><a href="#"><i class="icon-eye-disabled"></i><span>icon-eye-disabled</span></a></li>
                                <li><a href="#"><i class="icon-expand"></i><span>icon-expand</span></a></li>
                                <li><a href="#"><i class="icon-expand-vertical"></i><span>icon-expand-vertical</span></a></li>
                                <li><a href="#"><i class="icon-expand-horizontal"></i><span>icon-expand-horizontal</span></a></li>
                                <li><a href="#"><i class="icon-expand-directions"></i><span>icon-expand-directions</span></a></li>
                                <li><a href="#"><i class="icon-exclamation"></i><span>icon-exclamation</span></a></li>
                                <li><a href="#"><i class="icon-euro"></i><span>icon-euro</span></a></li>
                                <li><a href="#"><i class="icon-email-upload"></i><span>icon-email-upload</span></a></li>
                                <li><a href="#"><i class="icon-email-spam"></i><span>icon-email-spam</span></a></li>
                                <li><a href="#"><i class="icon-email-remove"></i><span>icon-email-remove</span></a></li>
                                <li><a href="#"><i class="icon-email-luminosity"></i><span>icon-email-luminosity</span></a></li>
                                <li><a href="#"><i class="icon-email-download"></i><span>icon-email-download</span></a></li>
                                <li><a href="#"><i class="icon-email-close"></i><span>icon-email-close</span></a></li>
                                <li><a href="#"><i class="icon-email-add"></i><span>icon-email-add</span></a></li>
                                <li><a href="#"><i class="icon-eject"></i><span>icon-eject</span></a></li>
                                <li><a href="#"><i class="icon-drops"></i><span>icon-drops</span></a></li>
                                <li><a href="#"><i class="icon-drop"></i><span>icon-drop</span></a></li>
                                <li><a href="#"><i class="icon-download"></i><span>icon-download</span></a></li>
                                <li><a href="#"><i class="icon-download-selection"></i><span>icon-download-selection</span></a></li>
                                <li><a href="#"><i class="icon-download-selection-circle"></i><span>icon-download-selection-circle</span></a></li>
                                <li><a href="#"><i class="icon-double-diamonds"></i><span>icon-double-diamonds</span></a></li>
                                <li><a href="#"><i class="icon-dot-square"></i><span>icon-dot-square</span></a></li>
                                <li><a href="#"><i class="icon-dot-line"></i><span>icon-dot-line</span></a></li>
                                <li><a href="#"><i class="icon-dot-circle"></i><span>icon-dot-circle</span></a></li>
                                <li><a href="#"><i class="icon-dollar"></i><span>icon-dollar</span></a></li>
                                <li><a href="#"><i class="icon-documents"></i><span>icon-documents</span></a></li>
                                <li><a href="#"><i class="icon-document"></i><span>icon-document</span></a></li>
                                <li><a href="#"><i class="icon-document-fill"></i><span>icon-document-fill</span></a></li>
                                <li><a href="#"><i class="icon-directions"></i><span>icon-directions</span></a></li>
                                <li><a href="#"><i class="icon-cross"></i><span>icon-cross</span></a></li>
                                <li><a href="#"><i class="icon-credit-card"></i><span>icon-credit-card</span></a></li>
                                <li><a href="#"><i class="icon-copy-paste-document"></i><span>icon-copy-paste-document</span></a></li>
                                <li><a href="#"><i class="icon-copy-document"></i><span>icon-copy-document</span></a></li>
                                <li><a href="#"><i class="icon-contract-vertical"></i><span>icon-contract-vertical</span></a></li>
                                <li><a href="#"><i class="icon-contract-horizontal"></i><span>icon-contract-horizontal</span></a></li>
                                <li><a href="#"><i class="icon-contract-directions"></i><span>icon-contract-directions</span></a></li>
                                <li><a href="#"><i class="icon-compass"></i><span>icon-compass</span></a></li>
                                <li><a href="#"><i class="icon-compass-2"></i><span>icon-compass-2</span></a></li>
                                <li><a href="#"><i class="icon-comments"></i><span>icon-comments</span></a></li>
                                <li><a href="#"><i class="icon-comment"></i><span>icon-comment</span></a></li>
                                <li><a href="#"><i class="icon-coins"></i><span>icon-coins</span></a></li>
                                <li><a href="#"><i class="icon-cloud"></i><span>icon-cloud</span></a></li>
                                <li><a href="#"><i class="icon-cloud-upload"></i><span>icon-cloud-upload</span></a></li>
                                <li><a href="#"><i class="icon-cloud-remove"></i><span>icon-cloud-remove</span></a></li>
                                <li><a href="#"><i class="icon-cloud-download"></i><span>icon-cloud-download</span></a></li>
                                <li><a href="#"><i class="icon-cloud-add"></i><span>icon-cloud-add</span></a></li>
                                <li><a href="#"><i class="icon-clock"></i><span>icon-clock</span></a></li>
                                <li><a href="#"><i class="icon-circles"></i><span>icon-circles</span></a></li>
                                <li><a href="#"><i class="icon-check"></i><span>icon-check</span></a></li>
                                <li><a href="#"><i class="icon-chat"></i><span>icon-chat</span></a></li>
                                <li><a href="#"><i class="icon-chart-down"></i><span>icon-chart-down</span></a></li>
                                <li><a href="#"><i class="icon-cd-dvd-rom"></i><span>icon-cd-dvd-rom</span></a></li>
                                <li><a href="#"><i class="icon-camera"></i><span>icon-camera</span></a></li>
                                <li><a href="#"><i class="icon-button-question"></i><span>icon-button-question</span></a></li>
                                <li><a href="#"><i class="icon-button-minus"></i><span>icon-button-minus</span></a></li>
                                <li><a href="#"><i class="icon-button-exclamation"></i><span>icon-button-exclamation</span></a></li>
                                <li><a href="#"><i class="icon-button-email"></i><span>icon-button-email</span></a></li>
                                <li><a href="#"><i class="icon-button-close"></i><span>icon-button-close</span></a></li>
                                <li><a href="#"><i class="icon-button-check"></i><span>icon-button-check</span></a></li>
                                <li><a href="#"><i class="icon-button-add"></i><span>icon-button-add</span></a></li>
                                <li><a href="#"><i class="icon-brush"></i><span>icon-brush</span></a></li>
                                <li><a href="#"><i class="icon-browser-sizes"></i><span>icon-browser-sizes</span></a></li>
                                <li><a href="#"><i class="icon-box-remove"></i><span>icon-box-remove</span></a></li>
                                <li><a href="#"><i class="icon-box-close"></i><span>icon-box-close</span></a></li>
                                <li><a href="#"><i class="icon-box-blank"></i><span>icon-box-blank</span></a></li>
                                <li><a href="#"><i class="icon-box-add"></i><span>icon-box-add</span></a></li>
                                <li><a href="#"><i class="icon-bolt"></i><span>icon-bolt</span></a></li>
                                <li><a href="#"><i class="icon-block-menu"></i><span>icon-block-menu</span></a></li>
                                <li><a href="#"><i class="icon-blank"></i><span>icon-blank</span></a></li>
                                <li><a href="#"><i class="icon-bezier"></i><span>icon-bezier</span></a></li>
                                <li><a href="#"><i class="icon-bars"></i><span>icon-bars</span></a></li>
                                <li><a href="#"><i class="icon-ban-circle"></i><span>icon-ban-circle</span></a></li>
                                <li><a href="#"><i class="icon-bag"></i><span>icon-bag</span></a></li>
                                <li><a href="#"><i class="icon-backward"></i><span>icon-backward</span></a></li>
                                <li><a href="#"><i class="icon-axis-rules"></i><span>icon-axis-rules</span></a></li>
                                <li><a href="#"><i class="icon-atom"></i><span>icon-atom</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up"></i><span>icon-arrow-up</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-thin"></i><span>icon-arrow-up-thin</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-light"></i><span>icon-arrow-up-light</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-bold"></i><span>icon-arrow-up-bold</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-bold-round"></i><span>icon-arrow-up-bold-round</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-big"></i><span>icon-arrow-up-big</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right"></i><span>icon-arrow-right</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-thin"></i><span>icon-arrow-right-thin</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-light"></i><span>icon-arrow-right-light</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-bold"></i><span>icon-arrow-right-bold</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-bold-round"></i><span>icon-arrow-right-bold-round</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-big"></i><span>icon-arrow-right-big</span></a></li>
                                <li><a href="#"><i class="icon-arrow-oblique-expand"></i><span>icon-arrow-oblique-expand</span></a></li>
                                <li><a href="#"><i class="icon-arrow-oblique-expand-directions"></i><span>icon-arrow-oblique-expand-directions</span></a></li>
                                <li><a href="#"><i class="icon-arrow-oblique-contract"></i><span>icon-arrow-oblique-contract</span></a></li>
                                <li><a href="#"><i class="icon-arrow-oblique-contract-directions"></i><span>icon-arrow-oblique-contract-directions</span></a></li>
                                <li><a href="#"><i class="icon-arrow-multi-line-up"></i><span>icon-arrow-multi-line-up</span></a></li>
                                <li><a href="#"><i class="icon-arrow-multi-line-right"></i><span>icon-arrow-multi-line-right</span></a></li>
                                <li><a href="#"><i class="icon-arrow-multi-line-left"></i><span>icon-arrow-multi-line-left</span></a></li>
                                <li><a href="#"><i class="icon-arrow-multi-line-down"></i><span>icon-arrow-multi-line-down</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left"></i><span>icon-arrow-left</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-thin"></i><span>icon-arrow-left-thin</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-light"></i><span>icon-arrow-left-light</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-bold"></i><span>icon-arrow-left-bold</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-bold-round"></i><span>icon-arrow-left-bold-round</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-big"></i><span>icon-arrow-left-big</span></a></li>
                                <li><a href="#"><i class="icon-arrow-fill-up"></i><span>icon-arrow-fill-up</span></a></li>
                                <li><a href="#"><i class="icon-arrow-fill-right"></i><span>icon-arrow-fill-right</span></a></li>
                                <li><a href="#"><i class="icon-arrow-fill-left"></i><span>icon-arrow-fill-left</span></a></li>
                                <li><a href="#"><i class="icon-arrow-fill-down"></i><span>icon-arrow-fill-down</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down"></i><span>icon-arrow-down</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-thin"></i><span>icon-arrow-down-thin</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-light"></i><span>icon-arrow-down-light</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-bold"></i><span>icon-arrow-down-bold</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-bold-round"></i><span>icon-arrow-down-bold-round</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-big"></i><span>icon-arrow-down-big</span></a></li>
                                <li><a href="#"><i class="icon-arrow-cycling"></i><span>icon-arrow-cycling</span></a></li>
                                <li><a href="#"><i class="icon-arrow-cycle"></i><span>icon-arrow-cycle</span></a></li>
                                <li><a href="#"><i class="icon-arrow-curve-right"></i><span>icon-arrow-curve-right</span></a></li>
                                <li><a href="#"><i class="icon-arrow-curve-recycle"></i><span>icon-arrow-curve-recycle</span></a></li>
                                <li><a href="#"><i class="icon-arrow-curve-left"></i><span>icon-arrow-curve-left</span></a></li>
                                <li><a href="#"><i class="icon-animal-footprint"></i><span>icon-animal-footprint</span></a></li>
                                <li><a href="#"><i class="icon-alarm-clock"></i><span>icon-alarm-clock</span></a></li>
                                <li><a href="#"><i class="icon-air-plane"></i><span>icon-air-plane</span></a></li>
                                <li><a href="#"><i class="icon-adjust"></i><span>icon-adjust</span></a></li>
                                <li><a href="#"><i class="icon-cube"></i><span>icon-cube</span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!---Right Tray--->
<div class="right-sidebar px-3">
    <button class="right-side-toggle"><i class="fa fa-cog fa-spin"></i></button>
	<div class="block bg-trans" style="margin-bottom: 0">
        <div class="block-heading">
            <h5>Top Navigation</h5>
        </div>
        <ul class="list-unstyled top-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/cyan"><div class="color-div" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
	
    <div class="block bg-trans">
        <div class="block-heading">
            <h5>Side Navigation</h5>
        </div>
        <ul class="list-unstyled side-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/cyan"><div class="color-div" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
</div>

<!--Jquery-->
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<!--Bootstrap Js-->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--Modernizr Js-->
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!--Morphin Search JS-->
<script type="text/javascript" src="assets/plugins/morphin-search/classie.js"></script>
<script type="text/javascript" src="assets/plugins/morphin-search/morphin-search.js"></script>
<!--Morphin Search JS-->
<script type="text/javascript" src="assets/plugins/preloader/pathLoader.js"></script>
<script type="text/javascript" src="assets/plugins/preloader/preloader-main.js"></script>

<!--Chart js-->
<script type="text/javascript" src="assets/plugins/charts/Chart.min.js"></script>

<!--Sparkline Chart Js-->
<script type="text/javascript" src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="assets/plugins/sparkline/jquery.charts-sparkline.js"></script>

<!--Custom Scroll-->
<script type="text/javascript" src="assets/plugins/customScroll/jquery.mCustomScrollbar.min.js"></script>
<!--Sortable Js-->
<script type="text/javascript" src="assets/plugins/sortable2/sortable.min.js"></script>
<!--DropZone Js-->
<script type="text/javascript" src="assets/plugins/dropzone/dropzone.js"></script>
<!--Date Range JS-->
<script type="text/javascript" src="assets/plugins/date-range/moment.min.js"></script>
<script type="text/javascript" src="assets/plugins/date-range/daterangepicker.js"></script>
<!--CK Editor JS-->
<script type="text/javascript" src="assets/plugins/ckEditor/ckeditor.js"></script>
<!--Data-Table JS-->
<script type="text/javascript" src="assets/plugins/data-tables/datatables.min.js"></script>
<!--Editable JS-->
<script type="text/javascript" src="assets/plugins/editable/editable.js"></script>
<!--Full Calendar JS-->
<script type="text/javascript" src="assets/plugins/full-calendar/fullcalendar.min.js"></script>

<!--- Main JS -->
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_metrize.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
</html>
