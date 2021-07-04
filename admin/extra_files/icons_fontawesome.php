<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_fontawesome.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
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
                        <a href="icons_fontawesome.html" class="active">
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
                        <a href="icons_metrize.html">
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
                            <li class="breadcrumb-item active">Font-Awesome</li>
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
                                <h5>FontAwesome Icons</h5>
                                <p class="mt-2">Powered by Font Awesome Icons set, for more info <a href="https://github.com/FortAwesome/Font-Awesome" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="fa fa-glass"></i><span>fa fa-glass</span></a></li>
                                <li><a href="#"><i class="fa fa-music"></i><span>fa fa-music</span></a></li>
                                <li><a href="#"><i class="fa fa-search"></i><span>fa fa-search</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i><span>fa fa-envelope-o</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>fa fa-heart</span></a></li>
                                <li><a href="#"><i class="fa fa-star"></i><span>fa fa-star</span></a></li>
                                <li><a href="#"><i class="fa fa-star-o"></i><span>fa fa-star-o</span></a></li>
                                <li><a href="#"><i class="fa fa-user"></i><span>fa fa-user</span></a></li>
                                <li><a href="#"><i class="fa fa-film"></i><span>fa fa-film</span></a></li>
                                <li><a href="#"><i class="fa fa-th-large"></i><span>fa fa-th-large</span></a></li>
                                <li><a href="#"><i class="fa fa-th"></i><span>fa fa-th</span></a></li>
                                <li><a href="#"><i class="fa fa-th-list"></i><span>fa fa-th-list</span></a></li>
                                <li><a href="#"><i class="fa fa-check"></i><span>fa fa-check</span></a></li>
                                <li><a href="#"><i class="fa fa-times"></i><span>fa fa-times</span></a></li>
                                <li><a href="#"><i class="fa fa-search-plus"></i><span>fa fa-search-plus</span></a></li>
                                <li><a href="#"><i class="fa fa-search-minus"></i><span>fa fa-search-minus</span></a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i><span>fa fa-power-off</span></a></li>
                                <li><a href="#"><i class="fa fa-signal"></i><span>fa fa-signal</span></a></li>
                                <li><a href="#"><i class="fa fa-cog"></i><span>fa fa-cog</span></a></li>
                                <li><a href="#"><i class="fa fa-trash-o"></i><span>fa fa-trash-o</span></a></li>
                                <li><a href="#"><i class="fa fa-home"></i><span>fa fa-home</span></a></li>
                                <li><a href="#"><i class="fa fa-file-o"></i><span>fa fa-file-o</span></a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i><span>fa fa-clock-o</span></a></li>
                                <li><a href="#"><i class="fa fa-road"></i><span>fa fa-road</span></a></li>
                                <li><a href="#"><i class="fa fa-download"></i><span>fa fa-download</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-o-down"></i><span>fa fa-arrow-circle-o-down</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-o-up"></i><span>fa fa-arrow-circle-o-up</span></a></li>
                                <li><a href="#"><i class="fa fa-inbox"></i><span>fa fa-inbox</span></a></li>
                                <li><a href="#"><i class="fa fa-play-circle-o"></i><span>fa fa-play-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-repeat"></i><span>fa fa-repeat</span></a></li>
                                <li><a href="#"><i class="fa fa-refresh"></i><span>fa fa-refresh</span></a></li>
                                <li><a href="#"><i class="fa fa-list-alt"></i><span>fa fa-list-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-lock"></i><span>fa fa-lock</span></a></li>
                                <li><a href="#"><i class="fa fa-flag"></i><span>fa fa-flag</span></a></li>
                                <li><a href="#"><i class="fa fa-headphones"></i><span>fa fa-headphones</span></a></li>
                                <li><a href="#"><i class="fa fa-volume-off"></i><span>fa fa-volume-off</span></a></li>
                                <li><a href="#"><i class="fa fa-volume-down"></i><span>fa fa-volume-down</span></a></li>
                                <li><a href="#"><i class="fa fa-volume-up"></i><span>fa fa-volume-up</span></a></li>
                                <li><a href="#"><i class="fa fa-qrcode"></i><span>fa fa-qrcode</span></a></li>
                                <li><a href="#"><i class="fa fa-barcode"></i><span>fa fa-barcode</span></a></li>
                                <li><a href="#"><i class="fa fa-tag"></i><span>fa fa-tag</span></a></li>
                                <li><a href="#"><i class="fa fa-tags"></i><span>fa fa-tags</span></a></li>
                                <li><a href="#"><i class="fa fa-book"></i><span>fa fa-book</span></a></li>
                                <li><a href="#"><i class="fa fa-bookmark"></i><span>fa fa-bookmark</span></a></li>
                                <li><a href="#"><i class="fa fa-print"></i><span>fa fa-print</span></a></li>
                                <li><a href="#"><i class="fa fa-camera"></i><span>fa fa-camera</span></a></li>
                                <li><a href="#"><i class="fa fa-font"></i><span>fa fa-font</span></a></li>
                                <li><a href="#"><i class="fa fa-bold"></i><span>fa fa-bold</span></a></li>
                                <li><a href="#"><i class="fa fa-italic"></i><span>fa fa-italic</span></a></li>
                                <li><a href="#"><i class="fa fa-text-height"></i><span>fa fa-text-height</span></a></li>
                                <li><a href="#"><i class="fa fa-text-width"></i><span>fa fa-text-width</span></a></li>
                                <li><a href="#"><i class="fa fa-align-left"></i><span>fa fa-align-left</span></a></li>
                                <li><a href="#"><i class="fa fa-align-center"></i><span>fa fa-align-center</span></a></li>
                                <li><a href="#"><i class="fa fa-align-right"></i><span>fa fa-align-right</span></a></li>
                                <li><a href="#"><i class="fa fa-align-justify"></i><span>fa fa-align-justify</span></a></li>
                                <li><a href="#"><i class="fa fa-list"></i><span>fa fa-list</span></a></li>
                                <li><a href="#"><i class="fa fa-outdent"></i><span>fa fa-outdent</span></a></li>
                                <li><a href="#"><i class="fa fa-indent"></i><span>fa fa-indent</span></a></li>
                                <li><a href="#"><i class="fa fa-video-camera"></i><span>fa fa-video-camera</span></a></li>
                                <li><a href="#"><i class="fa fa-picture-o"></i><span>fa fa-picture-o</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil"></i><span>fa fa-pencil</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>fa fa-map-marker</span></a></li>
                                <li><a href="#"><i class="fa fa-adjust"></i><span>fa fa-adjust</span></a></li>
                                <li><a href="#"><i class="fa fa-tint"></i><span>fa fa-tint</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil-square-o"></i><span>fa fa-pencil-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-share-square-o"></i><span>fa fa-share-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-check-square-o"></i><span>fa fa-check-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-arrows"></i><span>fa fa-arrows</span></a></li>
                                <li><a href="#"><i class="fa fa-step-backward"></i><span>fa fa-step-backward</span></a></li>
                                <li><a href="#"><i class="fa fa-fast-backward"></i><span>fa fa-fast-backward</span></a></li>
                                <li><a href="#"><i class="fa fa-backward"></i><span>fa fa-backward</span></a></li>
                                <li><a href="#"><i class="fa fa-play"></i><span>fa fa-play</span></a></li>
                                <li><a href="#"><i class="fa fa-pause"></i><span>fa fa-pause</span></a></li>
                                <li><a href="#"><i class="fa fa-stop"></i><span>fa fa-stop</span></a></li>
                                <li><a href="#"><i class="fa fa-forward"></i><span>fa fa-forward</span></a></li>
                                <li><a href="#"><i class="fa fa-fast-forward"></i><span>fa fa-fast-forward</span></a></li>
                                <li><a href="#"><i class="fa fa-step-forward"></i><span>fa fa-step-forward</span></a></li>
                                <li><a href="#"><i class="fa fa-eject"></i><span>fa fa-eject</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-left"></i><span>fa fa-chevron-left</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i><span>fa fa-chevron-right</span></a></li>
                                <li><a href="#"><i class="fa fa-plus-circle"></i><span>fa fa-plus-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-minus-circle"></i><span>fa fa-minus-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-times-circle"></i><span>fa fa-times-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-check-circle"></i><span>fa fa-check-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-question-circle"></i><span>fa fa-question-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-info-circle"></i><span>fa fa-info-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-crosshairs"></i><span>fa fa-crosshairs</span></a></li>
                                <li><a href="#"><i class="fa fa-times-circle-o"></i><span>fa fa-times-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-check-circle-o"></i><span>fa fa-check-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-ban"></i><span>fa fa-ban</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-left"></i><span>fa fa-arrow-left</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-right"></i><span>fa fa-arrow-right</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-up"></i><span>fa fa-arrow-up</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-down"></i><span>fa fa-arrow-down</span></a></li>
                                <li><a href="#"><i class="fa fa-share"></i><span>fa fa-share</span></a></li>
                                <li><a href="#"><i class="fa fa-expand"></i><span>fa fa-expand</span></a></li>
                                <li><a href="#"><i class="fa fa-compress"></i><span>fa fa-compress</span></a></li>
                                <li><a href="#"><i class="fa fa-plus"></i><span>fa fa-plus</span></a></li>
                                <li><a href="#"><i class="fa fa-minus"></i><span>fa fa-minus</span></a></li>
                                <li><a href="#"><i class="fa fa-asterisk"></i><span>fa fa-asterisk</span></a></li>
                                <li><a href="#"><i class="fa fa-exclamation-circle"></i><span>fa fa-exclamation-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-gift"></i><span>fa fa-gift</span></a></li>
                                <li><a href="#"><i class="fa fa-leaf"></i><span>fa fa-leaf</span></a></li>
                                <li><a href="#"><i class="fa fa-fire"></i><span>fa fa-fire</span></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i><span>fa fa-eye</span></a></li>
                                <li><a href="#"><i class="fa fa-eye-slash"></i><span>fa fa-eye-slash</span></a></li>
                                <li><a href="#"><i class="fa fa-exclamation-triangle"></i><span>fa fa-exclamation-triangle</span></a></li>
                                <li><a href="#"><i class="fa fa-plane"></i><span>fa fa-plane</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i><span>fa fa-calendar</span></a></li>
                                <li><a href="#"><i class="fa fa-random"></i><span>fa fa-random</span></a></li>
                                <li><a href="#"><i class="fa fa-comment"></i><span>fa fa-comment</span></a></li>
                                <li><a href="#"><i class="fa fa-magnet"></i><span>fa fa-magnet</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-up"></i><span>fa fa-chevron-up</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-down"></i><span>fa fa-chevron-down</span></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i><span>fa fa-retweet</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i><span>fa fa-shopping-cart</span></a></li>
                                <li><a href="#"><i class="fa fa-folder"></i><span>fa fa-folder</span></a></li>
                                <li><a href="#"><i class="fa fa-folder-open"></i><span>fa fa-folder-open</span></a></li>
                                <li><a href="#"><i class="fa fa-arrows-v"></i><span>fa fa-arrows-v</span></a></li>
                                <li><a href="#"><i class="fa fa-arrows-h"></i><span>fa fa-arrows-h</span></a></li>
                                <li><a href="#"><i class="fa fa-bar-chart"></i><span>fa fa-bar-chart</span></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i><span>fa fa-twitter-square</span></a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i><span>fa fa-facebook-square</span></a></li>
                                <li><a href="#"><i class="fa fa-camera-retro"></i><span>fa fa-camera-retro</span></a></li>
                                <li><a href="#"><i class="fa fa-key"></i><span>fa fa-key</span></a></li>
                                <li><a href="#"><i class="fa fa-cogs"></i><span>fa fa-cogs</span></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i><span>fa fa-comments</span></a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>fa fa-thumbs-o-up</span></a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-down"></i><span>fa fa-thumbs-o-down</span></a></li>
                                <li><a href="#"><i class="fa fa-star-half"></i><span>fa fa-star-half</span></a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i><span>fa fa-heart-o</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i><span>fa fa-sign-out</span></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i><span>fa fa-linkedin-square</span></a></li>
                                <li><a href="#"><i class="fa fa-thumb-tack"></i><span>fa fa-thumb-tack</span></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i><span>fa fa-external-link</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-in"></i><span>fa fa-sign-in</span></a></li>
                                <li><a href="#"><i class="fa fa-trophy"></i><span>fa fa-trophy</span></a></li>
                                <li><a href="#"><i class="fa fa-github-square"></i><span>fa fa-github-square</span></a></li>
                                <li><a href="#"><i class="fa fa-upload"></i><span>fa fa-upload</span></a></li>
                                <li><a href="#"><i class="fa fa-lemon-o"></i><span>fa fa-lemon-o</span></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i><span>fa fa-phone</span></a></li>
                                <li><a href="#"><i class="fa fa-square-o"></i><span>fa fa-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-bookmark-o"></i><span>fa fa-bookmark-o</span></a></li>
                                <li><a href="#"><i class="fa fa-phone-square"></i><span>fa fa-phone-square</span></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i><span>fa fa-twitter</span></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i><span>fa fa-facebook</span></a></li>
                                <li><a href="#"><i class="fa fa-github"></i><span>fa fa-github</span></a></li>
                                <li><a href="#"><i class="fa fa-unlock"></i><span>fa fa-unlock</span></a></li>
                                <li><a href="#"><i class="fa fa-credit-card"></i><span>fa fa-credit-card</span></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i><span>fa fa-rss</span></a></li>
                                <li><a href="#"><i class="fa fa-hdd-o"></i><span>fa fa-hdd-o</span></a></li>
                                <li><a href="#"><i class="fa fa-bullhorn"></i><span>fa fa-bullhorn</span></a></li>
                                <li><a href="#"><i class="fa fa-bell"></i><span>fa fa-bell</span></a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i><span>fa fa-certificate</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-o-right"></i><span>fa fa-hand-o-right</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-o-left"></i><span>fa fa-hand-o-left</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-o-up"></i><span>fa fa-hand-o-up</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-o-down"></i><span>fa fa-hand-o-down</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-left"></i><span>fa fa-arrow-circle-left</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>fa fa-arrow-circle-right</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-up"></i><span>fa fa-arrow-circle-up</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-down"></i><span>fa fa-arrow-circle-down</span></a></li>
                                <li><a href="#"><i class="fa fa-globe"></i><span>fa fa-globe</span></a></li>
                                <li><a href="#"><i class="fa fa-wrench"></i><span>fa fa-wrench</span></a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i><span>fa fa-tasks</span></a></li>
                                <li><a href="#"><i class="fa fa-filter"></i><span>fa fa-filter</span></a></li>
                                <li><a href="#"><i class="fa fa-briefcase"></i><span>fa fa-briefcase</span></a></li>
                                <li><a href="#"><i class="fa fa-arrows-alt"></i><span>fa fa-arrows-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-users"></i><span>fa fa-users</span></a></li>
                                <li><a href="#"><i class="fa fa-link"></i><span>fa fa-link</span></a></li>
                                <li><a href="#"><i class="fa fa-cloud"></i><span>fa fa-cloud</span></a></li>
                                <li><a href="#"><i class="fa fa-flask"></i><span>fa fa-flask</span></a></li>
                                <li><a href="#"><i class="fa fa-scissors"></i><span>fa fa-scissors</span></a></li>
                                <li><a href="#"><i class="fa fa-files-o"></i><span>fa fa-files-o</span></a></li>
                                <li><a href="#"><i class="fa fa-paperclip"></i><span>fa fa-paperclip</span></a></li>
                                <li><a href="#"><i class="fa fa-floppy-o"></i><span>fa fa-floppy-o</span></a></li>
                                <li><a href="#"><i class="fa fa-square"></i><span>fa fa-square</span></a></li>
                                <li><a href="#"><i class="fa fa-bars"></i><span>fa fa-bars</span></a></li>
                                <li><a href="#"><i class="fa fa-list-ul"></i><span>fa fa-list-ul</span></a></li>
                                <li><a href="#"><i class="fa fa-list-ol"></i><span>fa fa-list-ol</span></a></li>
                                <li><a href="#"><i class="fa fa-strikethrough"></i><span>fa fa-strikethrough</span></a></li>
                                <li><a href="#"><i class="fa fa-underline"></i><span>fa fa-underline</span></a></li>
                                <li><a href="#"><i class="fa fa-table"></i><span>fa fa-table</span></a></li>
                                <li><a href="#"><i class="fa fa-magic"></i><span>fa fa-magic</span></a></li>
                                <li><a href="#"><i class="fa fa-truck"></i><span>fa fa-truck</span></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i><span>fa fa-pinterest</span></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-square"></i><span>fa fa-pinterest-square</span></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i><span>fa fa-google-plus-square</span></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i><span>fa fa-google-plus</span></a></li>
                                <li><a href="#"><i class="fa fa-money"></i><span>fa fa-money</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-down"></i><span>fa fa-caret-down</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-up"></i><span>fa fa-caret-up</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-left"></i><span>fa fa-caret-left</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i><span>fa fa-caret-right</span></a></li>
                                <li><a href="#"><i class="fa fa-columns"></i><span>fa fa-columns</span></a></li>
                                <li><a href="#"><i class="fa fa-sort"></i><span>fa fa-sort</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-desc"></i><span>fa fa-sort-desc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-asc"></i><span>fa fa-sort-asc</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i><span>fa fa-envelope</span></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i><span>fa fa-linkedin</span></a></li>
                                <li><a href="#"><i class="fa fa-undo"></i><span>fa fa-undo</span></a></li>
                                <li><a href="#"><i class="fa fa-gavel"></i><span>fa fa-gavel</span></a></li>
                                <li><a href="#"><i class="fa fa-tachometer"></i><span>fa fa-tachometer</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>fa fa-comment-o</span></a></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i><span>fa fa-comments-o</span></a></li>
                                <li><a href="#"><i class="fa fa-bolt"></i><span>fa fa-bolt</span></a></li>
                                <li><a href="#"><i class="fa fa-sitemap"></i><span>fa fa-sitemap</span></a></li>
                                <li><a href="#"><i class="fa fa-umbrella"></i><span>fa fa-umbrella</span></a></li>
                                <li><a href="#"><i class="fa fa-clipboard"></i><span>fa fa-clipboard</span></a></li>
                                <li><a href="#"><i class="fa fa-lightbulb-o"></i><span>fa fa-lightbulb-o</span></a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i><span>fa fa-exchange</span></a></li>
                                <li><a href="#"><i class="fa fa-cloud-download"></i><span>fa fa-cloud-download</span></a></li>
                                <li><a href="#"><i class="fa fa-cloud-upload"></i><span>fa fa-cloud-upload</span></a></li>
                                <li><a href="#"><i class="fa fa-user-md"></i><span>fa fa-user-md</span></a></li>
                                <li><a href="#"><i class="fa fa-stethoscope"></i><span>fa fa-stethoscope</span></a></li>
                                <li><a href="#"><i class="fa fa-suitcase"></i><span>fa fa-suitcase</span></a></li>
                                <li><a href="#"><i class="fa fa-bell-o"></i><span>fa fa-bell-o</span></a></li>
                                <li><a href="#"><i class="fa fa-coffee"></i><span>fa fa-coffee</span></a></li>
                                <li><a href="#"><i class="fa fa-cutlery"></i><span>fa fa-cutlery</span></a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i><span>fa fa-file-text-o</span></a></li>
                                <li><a href="#"><i class="fa fa-building-o"></i><span>fa fa-building-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hospital-o"></i><span>fa fa-hospital-o</span></a></li>
                                <li><a href="#"><i class="fa fa-ambulance"></i><span>fa fa-ambulance</span></a></li>
                                <li><a href="#"><i class="fa fa-medkit"></i><span>fa fa-medkit</span></a></li>
                                <li><a href="#"><i class="fa fa-fighter-jet"></i><span>fa fa-fighter-jet</span></a></li>
                                <li><a href="#"><i class="fa fa-beer"></i><span>fa fa-beer</span></a></li>
                                <li><a href="#"><i class="fa fa-h-square"></i><span>fa fa-h-square</span></a></li>
                                <li><a href="#"><i class="fa fa-plus-square"></i><span>fa fa-plus-square</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i><span>fa fa-angle-double-left</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>fa fa-angle-double-right</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-up"></i><span>fa fa-angle-double-up</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-down"></i><span>fa fa-angle-double-down</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-left"></i><span>fa fa-angle-left</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i><span>fa fa-angle-right</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-up"></i><span>fa fa-angle-up</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-down"></i><span>fa fa-angle-down</span></a></li>
                                <li><a href="#"><i class="fa fa-desktop"></i><span>fa fa-desktop</span></a></li>
                                <li><a href="#"><i class="fa fa-laptop"></i><span>fa fa-laptop</span></a></li>
                                <li><a href="#"><i class="fa fa-tablet"></i><span>fa fa-tablet</span></a></li>
                                <li><a href="#"><i class="fa fa-mobile"></i><span>fa fa-mobile</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i><span>fa fa-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-quote-left"></i><span>fa fa-quote-left</span></a></li>
                                <li><a href="#"><i class="fa fa-quote-right"></i><span>fa fa-quote-right</span></a></li>
                                <li><a href="#"><i class="fa fa-spinner"></i><span>fa fa-spinner</span></a></li>
                                <li><a href="#"><i class="fa fa-circle"></i><span>fa fa-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-reply"></i><span>fa fa-reply</span></a></li>
                                <li><a href="#"><i class="fa fa-github-alt"></i><span>fa fa-github-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-folder-o"></i><span>fa fa-folder-o</span></a></li>
                                <li><a href="#"><i class="fa fa-folder-open-o"></i><span>fa fa-folder-open-o</span></a></li>
                                <li><a href="#"><i class="fa fa-smile-o"></i><span>fa fa-smile-o</span></a></li>
                                <li><a href="#"><i class="fa fa-frown-o"></i><span>fa fa-frown-o</span></a></li>
                                <li><a href="#"><i class="fa fa-meh-o"></i><span>fa fa-meh-o</span></a></li>
                                <li><a href="#"><i class="fa fa-gamepad"></i><span>fa fa-gamepad</span></a></li>
                                <li><a href="#"><i class="fa fa-keyboard-o"></i><span>fa fa-keyboard-o</span></a></li>
                                <li><a href="#"><i class="fa fa-flag-o"></i><span>fa fa-flag-o</span></a></li>
                                <li><a href="#"><i class="fa fa-flag-checkered"></i><span>fa fa-flag-checkered</span></a></li>
                                <li><a href="#"><i class="fa fa-terminal"></i><span>fa fa-terminal</span></a></li>
                                <li><a href="#"><i class="fa fa-code"></i><span>fa fa-code</span></a></li>
                                <li><a href="#"><i class="fa fa-reply-all"></i><span>fa fa-reply-all</span></a></li>
                                <li><a href="#"><i class="fa fa-star-half-o"></i><span>fa fa-star-half-o</span></a></li>
                                <li><a href="#"><i class="fa fa-location-arrow"></i><span>fa fa-location-arrow</span></a></li>
                                <li><a href="#"><i class="fa fa-crop"></i><span>fa fa-crop</span></a></li>
                                <li><a href="#"><i class="fa fa-code-fork"></i><span>fa fa-code-fork</span></a></li>
                                <li><a href="#"><i class="fa fa-chain-broken"></i><span>fa fa-chain-broken</span></a></li>
                                <li><a href="#"><i class="fa fa-question"></i><span>fa fa-question</span></a></li>
                                <li><a href="#"><i class="fa fa-info"></i><span>fa fa-info</span></a></li>
                                <li><a href="#"><i class="fa fa-exclamation"></i><span>fa fa-exclamation</span></a></li>
                                <li><a href="#"><i class="fa fa-superscript"></i><span>fa fa-superscript</span></a></li>
                                <li><a href="#"><i class="fa fa-subscript"></i><span>fa fa-subscript</span></a></li>
                                <li><a href="#"><i class="fa fa-eraser"></i><span>fa fa-eraser</span></a></li>
                                <li><a href="#"><i class="fa fa-puzzle-piece"></i><span>fa fa-puzzle-piece</span></a></li>
                                <li><a href="#"><i class="fa fa-microphone"></i><span>fa fa-microphone</span></a></li>
                                <li><a href="#"><i class="fa fa-microphone-slash"></i><span>fa fa-microphone-slash</span></a></li>
                                <li><a href="#"><i class="fa fa-shield"></i><span>fa fa-shield</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i><span>fa fa-calendar-o</span></a></li>
                                <li><a href="#"><i class="fa fa-fire-extinguisher"></i><span>fa fa-fire-extinguisher</span></a></li>
                                <li><a href="#"><i class="fa fa-rocket"></i><span>fa fa-rocket</span></a></li>
                                <li><a href="#"><i class="fa fa-maxcdn"></i><span>fa fa-maxcdn</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-left"></i><span>fa fa-chevron-circle-left</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i><span>fa fa-chevron-circle-right</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-up"></i><span>fa fa-chevron-circle-up</span></a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-down"></i><span>fa fa-chevron-circle-down</span></a></li>
                                <li><a href="#"><i class="fa fa-html5"></i><span>fa fa-html5</span></a></li>
                                <li><a href="#"><i class="fa fa-css3"></i><span>fa fa-css3</span></a></li>
                                <li><a href="#"><i class="fa fa-anchor"></i><span>fa fa-anchor</span></a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i><span>fa fa-unlock-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-bullseye"></i><span>fa fa-bullseye</span></a></li>
                                <li><a href="#"><i class="fa fa-ellipsis-h"></i><span>fa fa-ellipsis-h</span></a></li>
                                <li><a href="#"><i class="fa fa-ellipsis-v"></i><span>fa fa-ellipsis-v</span></a></li>
                                <li><a href="#"><i class="fa fa-rss-square"></i><span>fa fa-rss-square</span></a></li>
                                <li><a href="#"><i class="fa fa-play-circle"></i><span>fa fa-play-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-ticket"></i><span>fa fa-ticket</span></a></li>
                                <li><a href="#"><i class="fa fa-minus-square"></i><span>fa fa-minus-square</span></a></li>
                                <li><a href="#"><i class="fa fa-minus-square-o"></i><span>fa fa-minus-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-level-up"></i><span>fa fa-level-up</span></a></li>
                                <li><a href="#"><i class="fa fa-level-down"></i><span>fa fa-level-down</span></a></li>
                                <li><a href="#"><i class="fa fa-check-square"></i><span>fa fa-check-square</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil-square"></i><span>fa fa-pencil-square</span></a></li>
                                <li><a href="#"><i class="fa fa-external-link-square"></i><span>fa fa-external-link-square</span></a></li>
                                <li><a href="#"><i class="fa fa-share-square"></i><span>fa fa-share-square</span></a></li>
                                <li><a href="#"><i class="fa fa-compass"></i><span>fa fa-compass</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-square-o-down"></i><span>fa fa-caret-square-o-down</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-square-o-up"></i><span>fa fa-caret-square-o-up</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-square-o-right"></i><span>fa fa-caret-square-o-right</span></a></li>
                                <li><a href="#"><i class="fa fa-eur"></i><span>fa fa-eur</span></a></li>
                                <li><a href="#"><i class="fa fa-gbp"></i><span>fa fa-gbp</span></a></li>
                                <li><a href="#"><i class="fa fa-usd"></i><span>fa fa-usd</span></a></li>
                                <li><a href="#"><i class="fa fa-inr"></i><span>fa fa-inr</span></a></li>
                                <li><a href="#"><i class="fa fa-jpy"></i><span>fa fa-jpy</span></a></li>
                                <li><a href="#"><i class="fa fa-rub"></i><span>fa fa-rub</span></a></li>
                                <li><a href="#"><i class="fa fa-krw"></i><span>fa fa-krw</span></a></li>
                                <li><a href="#"><i class="fa fa-btc"></i><span>fa fa-btc</span></a></li>
                                <li><a href="#"><i class="fa fa-file"></i><span>fa fa-file</span></a></li>
                                <li><a href="#"><i class="fa fa-file-text"></i><span>fa fa-file-text</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-alpha-asc"></i><span>fa fa-sort-alpha-asc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-alpha-desc"></i><span>fa fa-sort-alpha-desc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-amount-asc"></i><span>fa fa-sort-amount-asc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-amount-desc"></i><span>fa fa-sort-amount-desc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-numeric-asc"></i><span>fa fa-sort-numeric-asc</span></a></li>
                                <li><a href="#"><i class="fa fa-sort-numeric-desc"></i><span>fa fa-sort-numeric-desc</span></a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i><span>fa fa-thumbs-up</span></a></li>
                                <li><a href="#"><i class="fa fa-thumbs-down"></i><span>fa fa-thumbs-down</span></a></li>
                                <li><a href="#"><i class="fa fa-youtube-square"></i><span>fa fa-youtube-square</span></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i><span>fa fa-youtube</span></a></li>
                                <li><a href="#"><i class="fa fa-xing"></i><span>fa fa-xing</span></a></li>
                                <li><a href="#"><i class="fa fa-xing-square"></i><span>fa fa-xing-square</span></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i><span>fa fa-youtube-play</span></a></li>
                                <li><a href="#"><i class="fa fa-dropbox"></i><span>fa fa-dropbox</span></a></li>
                                <li><a href="#"><i class="fa fa-stack-overflow"></i><span>fa fa-stack-overflow</span></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i><span>fa fa-instagram</span></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i><span>fa fa-flickr</span></a></li>
                                <li><a href="#"><i class="fa fa-adn"></i><span>fa fa-adn</span></a></li>
                                <li><a href="#"><i class="fa fa-bitbucket"></i><span>fa fa-bitbucket</span></a></li>
                                <li><a href="#"><i class="fa fa-bitbucket-square"></i><span>fa fa-bitbucket-square</span></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i><span>fa fa-tumblr</span></a></li>
                                <li><a href="#"><i class="fa fa-tumblr-square"></i><span>fa fa-tumblr-square</span></a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-down"></i><span>fa fa-long-arrow-down</span></a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-up"></i><span>fa fa-long-arrow-up</span></a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-left"></i><span>fa fa-long-arrow-left</span></a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i><span>fa fa-long-arrow-right</span></a></li>
                                <li><a href="#"><i class="fa fa-apple"></i><span>fa fa-apple</span></a></li>
                                <li><a href="#"><i class="fa fa-windows"></i><span>fa fa-windows</span></a></li>
                                <li><a href="#"><i class="fa fa-android"></i><span>fa fa-android</span></a></li>
                                <li><a href="#"><i class="fa fa-linux"></i><span>fa fa-linux</span></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i><span>fa fa-dribbble</span></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i><span>fa fa-skype</span></a></li>
                                <li><a href="#"><i class="fa fa-foursquare"></i><span>fa fa-foursquare</span></a></li>
                                <li><a href="#"><i class="fa fa-trello"></i><span>fa fa-trello</span></a></li>
                                <li><a href="#"><i class="fa fa-female"></i><span>fa fa-female</span></a></li>
                                <li><a href="#"><i class="fa fa-male"></i><span>fa fa-male</span></a></li>
                                <li><a href="#"><i class="fa fa-gratipay"></i><span>fa fa-gratipay</span></a></li>
                                <li><a href="#"><i class="fa fa-sun-o"></i><span>fa fa-sun-o</span></a></li>
                                <li><a href="#"><i class="fa fa-moon-o"></i><span>fa fa-moon-o</span></a></li>
                                <li><a href="#"><i class="fa fa-archive"></i><span>fa fa-archive</span></a></li>
                                <li><a href="#"><i class="fa fa-bug"></i><span>fa fa-bug</span></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i><span>fa fa-vk</span></a></li>
                                <li><a href="#"><i class="fa fa-weibo"></i><span>fa fa-weibo</span></a></li>
                                <li><a href="#"><i class="fa fa-renren"></i><span>fa fa-renren</span></a></li>
                                <li><a href="#"><i class="fa fa-pagelines"></i><span>fa fa-pagelines</span></a></li>
                                <li><a href="#"><i class="fa fa-stack-exchange"></i><span>fa fa-stack-exchange</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>fa fa-arrow-circle-o-right</span></a></li>
                                <li><a href="#"><i class="fa fa-arrow-circle-o-left"></i><span>fa fa-arrow-circle-o-left</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-square-o-left"></i><span>fa fa-caret-square-o-left</span></a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i><span>fa fa-dot-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i><span>fa fa-vimeo-square</span></a></li>
                                <li><a href="#"><i class="fa fa-try"></i><span>fa fa-try</span></a></li>
                                <li><a href="#"><i class="fa fa-plus-square-o"></i><span>fa fa-plus-square-o</span></a></li>
                                <li><a href="#"><i class="fa fa-space-shuttle"></i><span>fa fa-space-shuttle</span></a></li>
                                <li><a href="#"><i class="fa fa-slack"></i><span>fa fa-slack</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-square"></i><span>fa fa-envelope-square</span></a></li>
                                <li><a href="#"><i class="fa fa-wordpress"></i><span>fa fa-wordpress</span></a></li>
                                <li><a href="#"><i class="fa fa-openid"></i><span>fa fa-openid</span></a></li>
                                <li><a href="#"><i class="fa fa-university"></i><span>fa fa-university</span></a></li>
                                <li><a href="#"><i class="fa fa-graduation-cap"></i><span>fa fa-graduation-cap</span></a></li>
                                <li><a href="#"><i class="fa fa-yahoo"></i><span>fa fa-yahoo</span></a></li>
                                <li><a href="#"><i class="fa fa-google"></i><span>fa fa-google</span></a></li>
                                <li><a href="#"><i class="fa fa-reddit"></i><span>fa fa-reddit</span></a></li>
                                <li><a href="#"><i class="fa fa-reddit-square"></i><span>fa fa-reddit-square</span></a></li>
                                <li><a href="#"><i class="fa fa-stumbleupon-circle"></i><span>fa fa-stumbleupon-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-stumbleupon"></i><span>fa fa-stumbleupon</span></a></li>
                                <li><a href="#"><i class="fa fa-delicious"></i><span>fa fa-delicious</span></a></li>
                                <li><a href="#"><i class="fa fa-digg"></i><span>fa fa-digg</span></a></li>
                                <li><a href="#"><i class="fa fa-pied-piper-pp"></i><span>fa fa-pied-piper-pp</span></a></li>
                                <li><a href="#"><i class="fa fa-pied-piper-alt"></i><span>fa fa-pied-piper-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-drupal"></i><span>fa fa-drupal</span></a></li>
                                <li><a href="#"><i class="fa fa-joomla"></i><span>fa fa-joomla</span></a></li>
                                <li><a href="#"><i class="fa fa-language"></i><span>fa fa-language</span></a></li>
                                <li><a href="#"><i class="fa fa-fax"></i><span>fa fa-fax</span></a></li>
                                <li><a href="#"><i class="fa fa-building"></i><span>fa fa-building</span></a></li>
                                <li><a href="#"><i class="fa fa-child"></i><span>fa fa-child</span></a></li>
                                <li><a href="#"><i class="fa fa-paw"></i><span>fa fa-paw</span></a></li>
                                <li><a href="#"><i class="fa fa-spoon"></i><span>fa fa-spoon</span></a></li>
                                <li><a href="#"><i class="fa fa-cube"></i><span>fa fa-cube</span></a></li>
                                <li><a href="#"><i class="fa fa-cubes"></i><span>fa fa-cubes</span></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i><span>fa fa-behance</span></a></li>
                                <li><a href="#"><i class="fa fa-behance-square"></i><span>fa fa-behance-square</span></a></li>
                                <li><a href="#"><i class="fa fa-steam"></i><span>fa fa-steam</span></a></li>
                                <li><a href="#"><i class="fa fa-steam-square"></i><span>fa fa-steam-square</span></a></li>
                                <li><a href="#"><i class="fa fa-recycle"></i><span>fa fa-recycle</span></a></li>
                                <li><a href="#"><i class="fa fa-car"></i><span>fa fa-car</span></a></li>
                                <li><a href="#"><i class="fa fa-taxi"></i><span>fa fa-taxi</span></a></li>
                                <li><a href="#"><i class="fa fa-tree"></i><span>fa fa-tree</span></a></li>
                                <li><a href="#"><i class="fa fa-spotify"></i><span>fa fa-spotify</span></a></li>
                                <li><a href="#"><i class="fa fa-deviantart"></i><span>fa fa-deviantart</span></a></li>
                                <li><a href="#"><i class="fa fa-soundcloud"></i><span>fa fa-soundcloud</span></a></li>
                                <li><a href="#"><i class="fa fa-database"></i><span>fa fa-database</span></a></li>
                                <li><a href="#"><i class="fa fa-file-pdf-o"></i><span>fa fa-file-pdf-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-word-o"></i><span>fa fa-file-word-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-excel-o"></i><span>fa fa-file-excel-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-powerpoint-o"></i><span>fa fa-file-powerpoint-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-image-o"></i><span>fa fa-file-image-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-archive-o"></i><span>fa fa-file-archive-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-audio-o"></i><span>fa fa-file-audio-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-video-o"></i><span>fa fa-file-video-o</span></a></li>
                                <li><a href="#"><i class="fa fa-file-code-o"></i><span>fa fa-file-code-o</span></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i><span>fa fa-vine</span></a></li>
                                <li><a href="#"><i class="fa fa-codepen"></i><span>fa fa-codepen</span></a></li>
                                <li><a href="#"><i class="fa fa-jsfiddle"></i><span>fa fa-jsfiddle</span></a></li>
                                <li><a href="#"><i class="fa fa-life-ring"></i><span>fa fa-life-ring</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-o-notch"></i><span>fa fa-circle-o-notch</span></a></li>
                                <li><a href="#"><i class="fa fa-rebel"></i><span>fa fa-rebel</span></a></li>
                                <li><a href="#"><i class="fa fa-empire"></i><span>fa fa-empire</span></a></li>
                                <li><a href="#"><i class="fa fa-git-square"></i><span>fa fa-git-square</span></a></li>
                                <li><a href="#"><i class="fa fa-git"></i><span>fa fa-git</span></a></li>
                                <li><a href="#"><i class="fa fa-hacker-news"></i><span>fa fa-hacker-news</span></a></li>
                                <li><a href="#"><i class="fa fa-tencent-weibo"></i><span>fa fa-tencent-weibo</span></a></li>
                                <li><a href="#"><i class="fa fa-qq"></i><span>fa fa-qq</span></a></li>
                                <li><a href="#"><i class="fa fa-weixin"></i><span>fa fa-weixin</span></a></li>
                                <li><a href="#"><i class="fa fa-paper-plane"></i><span>fa fa-paper-plane</span></a></li>
                                <li><a href="#"><i class="fa fa-paper-plane-o"></i><span>fa fa-paper-plane-o</span></a></li>
                                <li><a href="#"><i class="fa fa-history"></i><span>fa fa-history</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-thin"></i><span>fa fa-circle-thin</span></a></li>
                                <li><a href="#"><i class="fa fa-header"></i><span>fa fa-header</span></a></li>
                                <li><a href="#"><i class="fa fa-paragraph"></i><span>fa fa-paragraph</span></a></li>
                                <li><a href="#"><i class="fa fa-sliders"></i><span>fa fa-sliders</span></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i><span>fa fa-share-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-share-alt-square"></i><span>fa fa-share-alt-square</span></a></li>
                                <li><a href="#"><i class="fa fa-bomb"></i><span>fa fa-bomb</span></a></li>
                                <li><a href="#"><i class="fa fa-futbol-o"></i><span>fa fa-futbol-o</span></a></li>
                                <li><a href="#"><i class="fa fa-tty"></i><span>fa fa-tty</span></a></li>
                                <li><a href="#"><i class="fa fa-binoculars"></i><span>fa fa-binoculars</span></a></li>
                                <li><a href="#"><i class="fa fa-plug"></i><span>fa fa-plug</span></a></li>
                                <li><a href="#"><i class="fa fa-slideshare"></i><span>fa fa-slideshare</span></a></li>
                                <li><a href="#"><i class="fa fa-twitch"></i><span>fa fa-twitch</span></a></li>
                                <li><a href="#"><i class="fa fa-yelp"></i><span>fa fa-yelp</span></a></li>
                                <li><a href="#"><i class="fa fa-newspaper-o"></i><span>fa fa-newspaper-o</span></a></li>
                                <li><a href="#"><i class="fa fa-wifi"></i><span>fa fa-wifi</span></a></li>
                                <li><a href="#"><i class="fa fa-calculator"></i><span>fa fa-calculator</span></a></li>
                                <li><a href="#"><i class="fa fa-paypal"></i><span>fa fa-paypal</span></a></li>
                                <li><a href="#"><i class="fa fa-google-wallet"></i><span>fa fa-google-wallet</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-visa"></i><span>fa fa-cc-visa</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i><span>fa fa-cc-mastercard</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i><span>fa fa-cc-discover</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i><span>fa fa-cc-amex</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i><span>fa fa-cc-paypal</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-stripe"></i><span>fa fa-cc-stripe</span></a></li>
                                <li><a href="#"><i class="fa fa-bell-slash"></i><span>fa fa-bell-slash</span></a></li>
                                <li><a href="#"><i class="fa fa-bell-slash-o"></i><span>fa fa-bell-slash-o</span></a></li>
                                <li><a href="#"><i class="fa fa-trash"></i><span>fa fa-trash</span></a></li>
                                <li><a href="#"><i class="fa fa-copyright"></i><span>fa fa-copyright</span></a></li>
                                <li><a href="#"><i class="fa fa-at"></i><span>fa fa-at</span></a></li>
                                <li><a href="#"><i class="fa fa-eyedropper"></i><span>fa fa-eyedropper</span></a></li>
                                <li><a href="#"><i class="fa fa-paint-brush"></i><span>fa fa-paint-brush</span></a></li>
                                <li><a href="#"><i class="fa fa-birthday-cake"></i><span>fa fa-birthday-cake</span></a></li>
                                <li><a href="#"><i class="fa fa-area-chart"></i><span>fa fa-area-chart</span></a></li>
                                <li><a href="#"><i class="fa fa-pie-chart"></i><span>fa fa-pie-chart</span></a></li>
                                <li><a href="#"><i class="fa fa-line-chart"></i><span>fa fa-line-chart</span></a></li>
                                <li><a href="#"><i class="fa fa-lastfm"></i><span>fa fa-lastfm</span></a></li>
                                <li><a href="#"><i class="fa fa-lastfm-square"></i><span>fa fa-lastfm-square</span></a></li>
                                <li><a href="#"><i class="fa fa-toggle-off"></i><span>fa fa-toggle-off</span></a></li>
                                <li><a href="#"><i class="fa fa-toggle-on"></i><span>fa fa-toggle-on</span></a></li>
                                <li><a href="#"><i class="fa fa-bicycle"></i><span>fa fa-bicycle</span></a></li>
                                <li><a href="#"><i class="fa fa-bus"></i><span>fa fa-bus</span></a></li>
                                <li><a href="#"><i class="fa fa-ioxhost"></i><span>fa fa-ioxhost</span></a></li>
                                <li><a href="#"><i class="fa fa-angellist"></i><span>fa fa-angellist</span></a></li>
                                <li><a href="#"><i class="fa fa-cc"></i><span>fa fa-cc</span></a></li>
                                <li><a href="#"><i class="fa fa-ils"></i><span>fa fa-ils</span></a></li>
                                <li><a href="#"><i class="fa fa-meanpath"></i><span>fa fa-meanpath</span></a></li>
                                <li><a href="#"><i class="fa fa-buysellads"></i><span>fa fa-buysellads</span></a></li>
                                <li><a href="#"><i class="fa fa-connectdevelop"></i><span>fa fa-connectdevelop</span></a></li>
                                <li><a href="#"><i class="fa fa-dashcube"></i><span>fa fa-dashcube</span></a></li>
                                <li><a href="#"><i class="fa fa-forumbee"></i><span>fa fa-forumbee</span></a></li>
                                <li><a href="#"><i class="fa fa-leanpub"></i><span>fa fa-leanpub</span></a></li>
                                <li><a href="#"><i class="fa fa-sellsy"></i><span>fa fa-sellsy</span></a></li>
                                <li><a href="#"><i class="fa fa-shirtsinbulk"></i><span>fa fa-shirtsinbulk</span></a></li>
                                <li><a href="#"><i class="fa fa-simplybuilt"></i><span>fa fa-simplybuilt</span></a></li>
                                <li><a href="#"><i class="fa fa-skyatlas"></i><span>fa fa-skyatlas</span></a></li>
                                <li><a href="#"><i class="fa fa-cart-plus"></i><span>fa fa-cart-plus</span></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i><span>fa fa-cart-arrow-down</span></a></li>
                                <li><a href="#"><i class="fa fa-diamond"></i><span>fa fa-diamond</span></a></li>
                                <li><a href="#"><i class="fa fa-ship"></i><span>fa fa-ship</span></a></li>
                                <li><a href="#"><i class="fa fa-user-secret"></i><span>fa fa-user-secret</span></a></li>
                                <li><a href="#"><i class="fa fa-motorcycle"></i><span>fa fa-motorcycle</span></a></li>
                                <li><a href="#"><i class="fa fa-street-view"></i><span>fa fa-street-view</span></a></li>
                                <li><a href="#"><i class="fa fa-heartbeat"></i><span>fa fa-heartbeat</span></a></li>
                                <li><a href="#"><i class="fa fa-venus"></i><span>fa fa-venus</span></a></li>
                                <li><a href="#"><i class="fa fa-mars"></i><span>fa fa-mars</span></a></li>
                                <li><a href="#"><i class="fa fa-mercury"></i><span>fa fa-mercury</span></a></li>
                                <li><a href="#"><i class="fa fa-transgender"></i><span>fa fa-transgender</span></a></li>
                                <li><a href="#"><i class="fa fa-transgender-alt"></i><span>fa fa-transgender-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-venus-double"></i><span>fa fa-venus-double</span></a></li>
                                <li><a href="#"><i class="fa fa-mars-double"></i><span>fa fa-mars-double</span></a></li>
                                <li><a href="#"><i class="fa fa-venus-mars"></i><span>fa fa-venus-mars</span></a></li>
                                <li><a href="#"><i class="fa fa-mars-stroke"></i><span>fa fa-mars-stroke</span></a></li>
                                <li><a href="#"><i class="fa fa-mars-stroke-v"></i><span>fa fa-mars-stroke-v</span></a></li>
                                <li><a href="#"><i class="fa fa-mars-stroke-h"></i><span>fa fa-mars-stroke-h</span></a></li>
                                <li><a href="#"><i class="fa fa-neuter"></i><span>fa fa-neuter</span></a></li>
                                <li><a href="#"><i class="fa fa-genderless"></i><span>fa fa-genderless</span></a></li>
                                <li><a href="#"><i class="fa fa-facebook-official"></i><span>fa fa-facebook-official</span></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i><span>fa fa-pinterest-p</span></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i><span>fa fa-whatsapp</span></a></li>
                                <li><a href="#"><i class="fa fa-server"></i><span>fa fa-server</span></a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i><span>fa fa-user-plus</span></a></li>
                                <li><a href="#"><i class="fa fa-user-times"></i><span>fa fa-user-times</span></a></li>
                                <li><a href="#"><i class="fa fa-bed"></i><span>fa fa-bed</span></a></li>
                                <li><a href="#"><i class="fa fa-viacoin"></i><span>fa fa-viacoin</span></a></li>
                                <li><a href="#"><i class="fa fa-train"></i><span>fa fa-train</span></a></li>
                                <li><a href="#"><i class="fa fa-subway"></i><span>fa fa-subway</span></a></li>
                                <li><a href="#"><i class="fa fa-medium"></i><span>fa fa-medium</span></a></li>
                                <li><a href="#"><i class="fa fa-y-combinator"></i><span>fa fa-y-combinator</span></a></li>
                                <li><a href="#"><i class="fa fa-optin-monster"></i><span>fa fa-optin-monster</span></a></li>
                                <li><a href="#"><i class="fa fa-opencart"></i><span>fa fa-opencart</span></a></li>
                                <li><a href="#"><i class="fa fa-expeditedssl"></i><span>fa fa-expeditedssl</span></a></li>
                                <li><a href="#"><i class="fa fa-battery-full"></i><span>fa fa-battery-full</span></a></li>
                                <li><a href="#"><i class="fa fa-battery-three-quarters"></i><span>fa fa-battery-three-quarters</span></a></li>
                                <li><a href="#"><i class="fa fa-battery-half"></i><span>fa fa-battery-half</span></a></li>
                                <li><a href="#"><i class="fa fa-battery-quarter"></i><span>fa fa-battery-quarter</span></a></li>
                                <li><a href="#"><i class="fa fa-battery-empty"></i><span>fa fa-battery-empty</span></a></li>
                                <li><a href="#"><i class="fa fa-mouse-pointer"></i><span>fa fa-mouse-pointer</span></a></li>
                                <li><a href="#"><i class="fa fa-i-cursor"></i><span>fa fa-i-cursor</span></a></li>
                                <li><a href="#"><i class="fa fa-object-group"></i><span>fa fa-object-group</span></a></li>
                                <li><a href="#"><i class="fa fa-object-ungroup"></i><span>fa fa-object-ungroup</span></a></li>
                                <li><a href="#"><i class="fa fa-sticky-note"></i><span>fa fa-sticky-note</span></a></li>
                                <li><a href="#"><i class="fa fa-sticky-note-o"></i><span>fa fa-sticky-note-o</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-jcb"></i><span>fa fa-cc-jcb</span></a></li>
                                <li><a href="#"><i class="fa fa-cc-diners-club"></i><span>fa fa-cc-diners-club</span></a></li>
                                <li><a href="#"><i class="fa fa-clone"></i><span>fa fa-clone</span></a></li>
                                <li><a href="#"><i class="fa fa-balance-scale"></i><span>fa fa-balance-scale</span></a></li>
                                <li><a href="#"><i class="fa fa-hourglass-o"></i><span>fa fa-hourglass-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hourglass-start"></i><span>fa fa-hourglass-start</span></a></li>
                                <li><a href="#"><i class="fa fa-hourglass-half"></i><span>fa fa-hourglass-half</span></a></li>
                                <li><a href="#"><i class="fa fa-hourglass-end"></i><span>fa fa-hourglass-end</span></a></li>
                                <li><a href="#"><i class="fa fa-hourglass"></i><span>fa fa-hourglass</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-rock-o"></i><span>fa fa-hand-rock-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-paper-o"></i><span>fa fa-hand-paper-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-scissors-o"></i><span>fa fa-hand-scissors-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-lizard-o"></i><span>fa fa-hand-lizard-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-spock-o"></i><span>fa fa-hand-spock-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-pointer-o"></i><span>fa fa-hand-pointer-o</span></a></li>
                                <li><a href="#"><i class="fa fa-hand-peace-o"></i><span>fa fa-hand-peace-o</span></a></li>
                                <li><a href="#"><i class="fa fa-trademark"></i><span>fa fa-trademark</span></a></li>
                                <li><a href="#"><i class="fa fa-registered"></i><span>fa fa-registered</span></a></li>
                                <li><a href="#"><i class="fa fa-creative-commons"></i><span>fa fa-creative-commons</span></a></li>
                                <li><a href="#"><i class="fa fa-gg"></i><span>fa fa-gg</span></a></li>
                                <li><a href="#"><i class="fa fa-gg-circle"></i><span>fa fa-gg-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-tripadvisor"></i><span>fa fa-tripadvisor</span></a></li>
                                <li><a href="#"><i class="fa fa-odnoklassniki"></i><span>fa fa-odnoklassniki</span></a></li>
                                <li><a href="#"><i class="fa fa-odnoklassniki-square"></i><span>fa fa-odnoklassniki-square</span></a></li>
                                <li><a href="#"><i class="fa fa-get-pocket"></i><span>fa fa-get-pocket</span></a></li>
                                <li><a href="#"><i class="fa fa-wikipedia-w"></i><span>fa fa-wikipedia-w</span></a></li>
                                <li><a href="#"><i class="fa fa-safari"></i><span>fa fa-safari</span></a></li>
                                <li><a href="#"><i class="fa fa-chrome"></i><span>fa fa-chrome</span></a></li>
                                <li><a href="#"><i class="fa fa-firefox"></i><span>fa fa-firefox</span></a></li>
                                <li><a href="#"><i class="fa fa-opera"></i><span>fa fa-opera</span></a></li>
                                <li><a href="#"><i class="fa fa-internet-explorer"></i><span>fa fa-internet-explorer</span></a></li>
                                <li><a href="#"><i class="fa fa-television"></i><span>fa fa-television</span></a></li>
                                <li><a href="#"><i class="fa fa-contao"></i><span>fa fa-contao</span></a></li>
                                <li><a href="#"><i class="fa fa-500px"></i><span>fa fa-500px</span></a></li>
                                <li><a href="#"><i class="fa fa-amazon"></i><span>fa fa-amazon</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar-plus-o"></i><span>fa fa-calendar-plus-o</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar-minus-o"></i><span>fa fa-calendar-minus-o</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar-times-o"></i><span>fa fa-calendar-times-o</span></a></li>
                                <li><a href="#"><i class="fa fa-calendar-check-o"></i><span>fa fa-calendar-check-o</span></a></li>
                                <li><a href="#"><i class="fa fa-industry"></i><span>fa fa-industry</span></a></li>
                                <li><a href="#"><i class="fa fa-map-pin"></i><span>fa fa-map-pin</span></a></li>
                                <li><a href="#"><i class="fa fa-map-signs"></i><span>fa fa-map-signs</span></a></li>
                                <li><a href="#"><i class="fa fa-map-o"></i><span>fa fa-map-o</span></a></li>
                                <li><a href="#"><i class="fa fa-map"></i><span>fa fa-map</span></a></li>
                                <li><a href="#"><i class="fa fa-commenting"></i><span>fa fa-commenting</span></a></li>
                                <li><a href="#"><i class="fa fa-commenting-o"></i><span>fa fa-commenting-o</span></a></li>
                                <li><a href="#"><i class="fa fa-houzz"></i><span>fa fa-houzz</span></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i><span>fa fa-vimeo</span></a></li>
                                <li><a href="#"><i class="fa fa-black-tie"></i><span>fa fa-black-tie</span></a></li>
                                <li><a href="#"><i class="fa fa-fonticons"></i><span>fa fa-fonticons</span></a></li>
                                <li><a href="#"><i class="fa fa-reddit-alien"></i><span>fa fa-reddit-alien</span></a></li>
                                <li><a href="#"><i class="fa fa-edge"></i><span>fa fa-edge</span></a></li>
                                <li><a href="#"><i class="fa fa-credit-card-alt"></i><span>fa fa-credit-card-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-codiepie"></i><span>fa fa-codiepie</span></a></li>
                                <li><a href="#"><i class="fa fa-modx"></i><span>fa fa-modx</span></a></li>
                                <li><a href="#"><i class="fa fa-fort-awesome"></i><span>fa fa-fort-awesome</span></a></li>
                                <li><a href="#"><i class="fa fa-usb"></i><span>fa fa-usb</span></a></li>
                                <li><a href="#"><i class="fa fa-product-hunt"></i><span>fa fa-product-hunt</span></a></li>
                                <li><a href="#"><i class="fa fa-mixcloud"></i><span>fa fa-mixcloud</span></a></li>
                                <li><a href="#"><i class="fa fa-scribd"></i><span>fa fa-scribd</span></a></li>
                                <li><a href="#"><i class="fa fa-pause-circle"></i><span>fa fa-pause-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-pause-circle-o"></i><span>fa fa-pause-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-stop-circle"></i><span>fa fa-stop-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-stop-circle-o"></i><span>fa fa-stop-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>fa fa-shopping-bag</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-basket"></i><span>fa fa-shopping-basket</span></a></li>
                                <li><a href="#"><i class="fa fa-hashtag"></i><span>fa fa-hashtag</span></a></li>
                                <li><a href="#"><i class="fa fa-bluetooth"></i><span>fa fa-bluetooth</span></a></li>
                                <li><a href="#"><i class="fa fa-bluetooth-b"></i><span>fa fa-bluetooth-b</span></a></li>
                                <li><a href="#"><i class="fa fa-percent"></i><span>fa fa-percent</span></a></li>
                                <li><a href="#"><i class="fa fa-gitlab"></i><span>fa fa-gitlab</span></a></li>
                                <li><a href="#"><i class="fa fa-wpbeginner"></i><span>fa fa-wpbeginner</span></a></li>
                                <li><a href="#"><i class="fa fa-wpforms"></i><span>fa fa-wpforms</span></a></li>
                                <li><a href="#"><i class="fa fa-envira"></i><span>fa fa-envira</span></a></li>
                                <li><a href="#"><i class="fa fa-universal-access"></i><span>fa fa-universal-access</span></a></li>
                                <li><a href="#"><i class="fa fa-wheelchair-alt"></i><span>fa fa-wheelchair-alt</span></a></li>
                                <li><a href="#"><i class="fa fa-question-circle-o"></i><span>fa fa-question-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-blind"></i><span>fa fa-blind</span></a></li>
                                <li><a href="#"><i class="fa fa-audio-description"></i><span>fa fa-audio-description</span></a></li>
                                <li><a href="#"><i class="fa fa-volume-control-phone"></i><span>fa fa-volume-control-phone</span></a></li>
                                <li><a href="#"><i class="fa fa-braille"></i><span>fa fa-braille</span></a></li>
                                <li><a href="#"><i class="fa fa-assistive-listening-systems"></i><span>fa fa-assistive-listening-systems</span></a></li>
                                <li><a href="#"><i class="fa fa-american-sign-language-interpreting"></i><span>fa fa-american-sign-language-interpreting</span></a></li>
                                <li><a href="#"><i class="fa fa-deaf"></i><span>fa fa-deaf</span></a></li>
                                <li><a href="#"><i class="fa fa-glide"></i><span>fa fa-glide</span></a></li>
                                <li><a href="#"><i class="fa fa-glide-g"></i><span>fa fa-glide-g</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-language"></i><span>fa fa-sign-language</span></a></li>
                                <li><a href="#"><i class="fa fa-low-vision"></i><span>fa fa-low-vision</span></a></li>
                                <li><a href="#"><i class="fa fa-viadeo"></i><span>fa fa-viadeo</span></a></li>
                                <li><a href="#"><i class="fa fa-viadeo-square"></i><span>fa fa-viadeo-square</span></a></li>
                                <li><a href="#"><i class="fa fa-snapchat"></i><span>fa fa-snapchat</span></a></li>
                                <li><a href="#"><i class="fa fa-snapchat-ghost"></i><span>fa fa-snapchat-ghost</span></a></li>
                                <li><a href="#"><i class="fa fa-snapchat-square"></i><span>fa fa-snapchat-square</span></a></li>
                                <li><a href="#"><i class="fa fa-pied-piper"></i><span>fa fa-pied-piper</span></a></li>
                                <li><a href="#"><i class="fa fa-first-order"></i><span>fa fa-first-order</span></a></li>
                                <li><a href="#"><i class="fa fa-yoast"></i><span>fa fa-yoast</span></a></li>
                                <li><a href="#"><i class="fa fa-themeisle"></i><span>fa fa-themeisle</span></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-official"></i><span>fa fa-google-plus-official</span></a></li>
                                <li><a href="#"><i class="fa fa-font-awesome"></i><span>fa fa-font-awesome</span></a></li>
                                <li><a href="#"><i class="fa fa-handshake-o"></i><span>fa fa-handshake-o</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-open"></i><span>fa fa-envelope-open</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-open-o"></i><span>fa fa-envelope-open-o</span></a></li>
                                <li><a href="#"><i class="fa fa-linode"></i><span>fa fa-linode</span></a></li>
                                <li><a href="#"><i class="fa fa-address-book"></i><span>fa fa-address-book</span></a></li>
                                <li><a href="#"><i class="fa fa-address-book-o"></i><span>fa fa-address-book-o</span></a></li>
                                <li><a href="#"><i class="fa fa-address-card"></i><span>fa fa-address-card</span></a></li>
                                <li><a href="#"><i class="fa fa-address-card-o"></i><span>fa fa-address-card-o</span></a></li>
                                <li><a href="#"><i class="fa fa-user-circle"></i><span>fa fa-user-circle</span></a></li>
                                <li><a href="#"><i class="fa fa-user-circle-o"></i><span>fa fa-user-circle-o</span></a></li>
                                <li><a href="#"><i class="fa fa-user-o"></i><span>fa fa-user-o</span></a></li>
                                <li><a href="#"><i class="fa fa-id-badge"></i><span>fa fa-id-badge</span></a></li>
                                <li><a href="#"><i class="fa fa-id-card"></i><span>fa fa-id-card</span></a></li>
                                <li><a href="#"><i class="fa fa-id-card-o"></i><span>fa fa-id-card-o</span></a></li>
                                <li><a href="#"><i class="fa fa-quora"></i><span>fa fa-quora</span></a></li>
                                <li><a href="#"><i class="fa fa-free-code-camp"></i><span>fa fa-free-code-camp</span></a></li>
                                <li><a href="#"><i class="fa fa-telegram"></i><span>fa fa-telegram</span></a></li>
                                <li><a href="#"><i class="fa fa-thermometer-full"></i><span>fa fa-thermometer-full</span></a></li>
                                <li><a href="#"><i class="fa fa-thermometer-three-quarters"></i><span>fa fa-thermometer-three-quarters</span></a></li>
                                <li><a href="#"><i class="fa fa-thermometer-half"></i><span>fa fa-thermometer-half</span></a></li>
                                <li><a href="#"><i class="fa fa-thermometer-quarter"></i><span>fa fa-thermometer-quarter</span></a></li>
                                <li><a href="#"><i class="fa fa-thermometer-empty"></i><span>fa fa-thermometer-empty</span></a></li>
                                <li><a href="#"><i class="fa fa-shower"></i><span>fa fa-shower</span></a></li>
                                <li><a href="#"><i class="fa fa-bath"></i><span>fa fa-bath</span></a></li>
                                <li><a href="#"><i class="fa fa-podcast"></i><span>fa fa-podcast</span></a></li>
                                <li><a href="#"><i class="fa fa-window-maximize"></i><span>fa fa-window-maximize</span></a></li>
                                <li><a href="#"><i class="fa fa-window-minimize"></i><span>fa fa-window-minimize</span></a></li>
                                <li><a href="#"><i class="fa fa-window-restore"></i><span>fa fa-window-restore</span></a></li>
                                <li><a href="#"><i class="fa fa-window-close"></i><span>fa fa-window-close</span></a></li>
                                <li><a href="#"><i class="fa fa-window-close-o"></i><span>fa fa-window-close-o</span></a></li>
                                <li><a href="#"><i class="fa fa-bandcamp"></i><span>fa fa-bandcamp</span></a></li>
                                <li><a href="#"><i class="fa fa-grav"></i><span>fa fa-grav</span></a></li>
                                <li><a href="#"><i class="fa fa-etsy"></i><span>fa fa-etsy</span></a></li>
                                <li><a href="#"><i class="fa fa-imdb"></i><span>fa fa-imdb</span></a></li>
                                <li><a href="#"><i class="fa fa-ravelry"></i><span>fa fa-ravelry</span></a></li>
                                <li><a href="#"><i class="fa fa-eercast"></i><span>fa fa-eercast</span></a></li>
                                <li><a href="#"><i class="fa fa-microchip"></i><span>fa fa-microchip</span></a></li>
                                <li><a href="#"><i class="fa fa-snowflake-o"></i><span>fa fa-snowflake-o</span></a></li>
                                <li><a href="#"><i class="fa fa-superpowers"></i><span>fa fa-superpowers</span></a></li>
                                <li><a href="#"><i class="fa fa-wpexplorer"></i><span>fa fa-wpexplorer</span></a></li>
                                <li><a href="#"><i class="fa fa-meetup"></i><span>fa fa-meetup</span></a></li>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_fontawesome.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
</html>