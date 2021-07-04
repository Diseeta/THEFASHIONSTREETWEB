<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_foundation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
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
    <link rel="stylesheet" href="assets/icons/foundation/foundation-icons.css">

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
                        <a href="icons_foundation.html" class="active">
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
                            <li class="breadcrumb-item active">Foundation</li>
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
                                <h5>Foundation Icons</h5>
                                <p class="mt-2">Powered by Foundation Icons set, for more info <a href="http://zurb.com/playground/foundation-icon-fonts-3" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="fi-address-book"></i><span>fi-address-book</span></a></li>
                                <li><a href="#"><i class="fi-alert"></i><span>fi-alert</span></a></li>
                                <li><a href="#"><i class="fi-align-center"></i><span>fi-align-center</span></a></li>
                                <li><a href="#"><i class="fi-align-justify"></i><span>fi-align-justify</span></a></li>
                                <li><a href="#"><i class="fi-align-left"></i><span>fi-align-left</span></a></li>
                                <li><a href="#"><i class="fi-align-right"></i><span>fi-align-right</span></a></li>
                                <li><a href="#"><i class="fi-anchor"></i><span>fi-anchor</span></a></li>
                                <li><a href="#"><i class="fi-annotate"></i><span>fi-annotate</span></a></li>
                                <li><a href="#"><i class="fi-archive"></i><span>fi-archive</span></a></li>
                                <li><a href="#"><i class="fi-arrow-down"></i><span>fi-arrow-down</span></a></li>
                                <li><a href="#"><i class="fi-arrow-left"></i><span>fi-arrow-left</span></a></li>
                                <li><a href="#"><i class="fi-arrow-right"></i><span>fi-arrow-right</span></a></li>
                                <li><a href="#"><i class="fi-arrow-up"></i><span>fi-arrow-up</span></a></li>
                                <li><a href="#"><i class="fi-arrows-compress"></i><span>fi-arrows-compress</span></a></li>
                                <li><a href="#"><i class="fi-arrows-expand"></i><span>fi-arrows-expand</span></a></li>
                                <li><a href="#"><i class="fi-arrows-in"></i><span>fi-arrows-in</span></a></li>
                                <li><a href="#"><i class="fi-arrows-out"></i><span>fi-arrows-out</span></a></li>
                                <li><a href="#"><i class="fi-asl"></i><span>fi-asl</span></a></li>
                                <li><a href="#"><i class="fi-asterisk"></i><span>fi-asterisk</span></a></li>
                                <li><a href="#"><i class="fi-at-sign"></i><span>fi-at-sign</span></a></li>
                                <li><a href="#"><i class="fi-background-color"></i><span>fi-background-color</span></a></li>
                                <li><a href="#"><i class="fi-battery-empty"></i><span>fi-battery-empty</span></a></li>
                                <li><a href="#"><i class="fi-battery-full"></i><span>fi-battery-full</span></a></li>
                                <li><a href="#"><i class="fi-battery-half"></i><span>fi-battery-half</span></a></li>
                                <li><a href="#"><i class="fi-bitcoin-circle"></i><span>fi-bitcoin-circle</span></a></li>
                                <li><a href="#"><i class="fi-bitcoin"></i><span>fi-bitcoin</span></a></li>
                                <li><a href="#"><i class="fi-blind"></i><span>fi-blind</span></a></li>
                                <li><a href="#"><i class="fi-bluetooth"></i><span>fi-bluetooth</span></a></li>
                                <li><a href="#"><i class="fi-bold"></i><span>fi-bold</span></a></li>
                                <li><a href="#"><i class="fi-book-bookmark"></i><span>fi-book-bookmark</span></a></li>
                                <li><a href="#"><i class="fi-book"></i><span>fi-book</span></a></li>
                                <li><a href="#"><i class="fi-bookmark"></i><span>fi-bookmark</span></a></li>
                                <li><a href="#"><i class="fi-braille"></i><span>fi-braille</span></a></li>
                                <li><a href="#"><i class="fi-burst-new"></i><span>fi-burst-new</span></a></li>
                                <li><a href="#"><i class="fi-burst-sale"></i><span>fi-burst-sale</span></a></li>
                                <li><a href="#"><i class="fi-burst"></i><span>fi-burst</span></a></li>
                                <li><a href="#"><i class="fi-calendar"></i><span>fi-calendar</span></a></li>
                                <li><a href="#"><i class="fi-camera"></i><span>fi-camera</span></a></li>
                                <li><a href="#"><i class="fi-check"></i><span>fi-check</span></a></li>
                                <li><a href="#"><i class="fi-checkbox"></i><span>fi-checkbox</span></a></li>
                                <li><a href="#"><i class="fi-clipboard-notes"></i><span>fi-clipboard-notes</span></a></li>
                                <li><a href="#"><i class="fi-clipboard-pencil"></i><span>fi-clipboard-pencil</span></a></li>
                                <li><a href="#"><i class="fi-clipboard"></i><span>fi-clipboard</span></a></li>
                                <li><a href="#"><i class="fi-clock"></i><span>fi-clock</span></a></li>
                                <li><a href="#"><i class="fi-closed-caption"></i><span>fi-closed-caption</span></a></li>
                                <li><a href="#"><i class="fi-cloud"></i><span>fi-cloud</span></a></li>
                                <li><a href="#"><i class="fi-comment-minus"></i><span>fi-comment-minus</span></a></li>
                                <li><a href="#"><i class="fi-comment-quotes"></i><span>fi-comment-quotes</span></a></li>
                                <li><a href="#"><i class="fi-comment-video"></i><span>fi-comment-video</span></a></li>
                                <li><a href="#"><i class="fi-comment"></i><span>fi-comment</span></a></li>
                                <li><a href="#"><i class="fi-comments"></i><span>fi-comments</span></a></li>
                                <li><a href="#"><i class="fi-compass"></i><span>fi-compass</span></a></li>
                                <li><a href="#"><i class="fi-contrast"></i><span>fi-contrast</span></a></li>
                                <li><a href="#"><i class="fi-credit-card"></i><span>fi-credit-card</span></a></li>
                                <li><a href="#"><i class="fi-crop"></i><span>fi-crop</span></a></li>
                                <li><a href="#"><i class="fi-crown"></i><span>fi-crown</span></a></li>
                                <li><a href="#"><i class="fi-css3"></i><span>fi-css3</span></a></li>
                                <li><a href="#"><i class="fi-database"></i><span>fi-database</span></a></li>
                                <li><a href="#"><i class="fi-die-five"></i><span>fi-die-five</span></a></li>
                                <li><a href="#"><i class="fi-die-four"></i><span>fi-die-four</span></a></li>
                                <li><a href="#"><i class="fi-die-one"></i><span>fi-die-one</span></a></li>
                                <li><a href="#"><i class="fi-die-six"></i><span>fi-die-six</span></a></li>
                                <li><a href="#"><i class="fi-die-three"></i><span>fi-die-three</span></a></li>
                                <li><a href="#"><i class="fi-die-two"></i><span>fi-die-two</span></a></li>
                                <li><a href="#"><i class="fi-dislike"></i><span>fi-dislike</span></a></li>
                                <li><a href="#"><i class="fi-dollar-bill"></i><span>fi-dollar-bill</span></a></li>
                                <li><a href="#"><i class="fi-dollar"></i><span>fi-dollar</span></a></li>
                                <li><a href="#"><i class="fi-download"></i><span>fi-download</span></a></li>
                                <li><a href="#"><i class="fi-eject"></i><span>fi-eject</span></a></li>
                                <li><a href="#"><i class="fi-elevator"></i><span>fi-elevator</span></a></li>
                                <li><a href="#"><i class="fi-euro"></i><span>fi-euro</span></a></li>
                                <li><a href="#"><i class="fi-eye"></i><span>fi-eye</span></a></li>
                                <li><a href="#"><i class="fi-fast-forward"></i><span>fi-fast-forward</span></a></li>
                                <li><a href="#"><i class="fi-female-symbol"></i><span>fi-female-symbol</span></a></li>
                                <li><a href="#"><i class="fi-female"></i><span>fi-female</span></a></li>
                                <li><a href="#"><i class="fi-filter"></i><span>fi-filter</span></a></li>
                                <li><a href="#"><i class="fi-first-aid"></i><span>fi-first-aid</span></a></li>
                                <li><a href="#"><i class="fi-flag"></i><span>fi-flag</span></a></li>
                                <li><a href="#"><i class="fi-folder-add"></i><span>fi-folder-add</span></a></li>
                                <li><a href="#"><i class="fi-folder-lock"></i><span>fi-folder-lock</span></a></li>
                                <li><a href="#"><i class="fi-folder"></i><span>fi-folder</span></a></li>
                                <li><a href="#"><i class="fi-foot"></i><span>fi-foot</span></a></li>
                                <li><a href="#"><i class="fi-foundation"></i><span>fi-foundation</span></a></li>
                                <li><a href="#"><i class="fi-graph-bar"></i><span>fi-graph-bar</span></a></li>
                                <li><a href="#"><i class="fi-graph-horizontal"></i><span>fi-graph-horizontal</span></a></li>
                                <li><a href="#"><i class="fi-graph-pie"></i><span>fi-graph-pie</span></a></li>
                                <li><a href="#"><i class="fi-graph-trend"></i><span>fi-graph-trend</span></a></li>
                                <li><a href="#"><i class="fi-guide-dog"></i><span>fi-guide-dog</span></a></li>
                                <li><a href="#"><i class="fi-hearing-aid"></i><span>fi-hearing-aid</span></a></li>
                                <li><a href="#"><i class="fi-heart"></i><span>fi-heart</span></a></li>
                                <li><a href="#"><i class="fi-home"></i><span>fi-home</span></a></li>
                                <li><a href="#"><i class="fi-html5"></i><span>fi-html5</span></a></li>
                                <li><a href="#"><i class="fi-indent-less"></i><span>fi-indent-less</span></a></li>
                                <li><a href="#"><i class="fi-indent-more"></i><span>fi-indent-more</span></a></li>
                                <li><a href="#"><i class="fi-info"></i><span>fi-info</span></a></li>
                                <li><a href="#"><i class="fi-italic"></i><span>fi-italic</span></a></li>
                                <li><a href="#"><i class="fi-key"></i><span>fi-key</span></a></li>
                                <li><a href="#"><i class="fi-laptop"></i><span>fi-laptop</span></a></li>
                                <li><a href="#"><i class="fi-layout"></i><span>fi-layout</span></a></li>
                                <li><a href="#"><i class="fi-lightbulb"></i><span>fi-lightbulb</span></a></li>
                                <li><a href="#"><i class="fi-like"></i><span>fi-like</span></a></li>
                                <li><a href="#"><i class="fi-link"></i><span>fi-link</span></a></li>
                                <li><a href="#"><i class="fi-list-bullet"></i><span>fi-list-bullet</span></a></li>
                                <li><a href="#"><i class="fi-list-number"></i><span>fi-list-number</span></a></li>
                                <li><a href="#"><i class="fi-list-thumbnails"></i><span>fi-list-thumbnails</span></a></li>
                                <li><a href="#"><i class="fi-list"></i><span>fi-list</span></a></li>
                                <li><a href="#"><i class="fi-lock"></i><span>fi-lock</span></a></li>
                                <li><a href="#"><i class="fi-loop"></i><span>fi-loop</span></a></li>
                                <li><a href="#"><i class="fi-magnifying-glass"></i><span>fi-magnifying-glass</span></a></li>
                                <li><a href="#"><i class="fi-mail"></i><span>fi-mail</span></a></li>
                                <li><a href="#"><i class="fi-male-female"></i><span>fi-male-female</span></a></li>
                                <li><a href="#"><i class="fi-male-symbol"></i><span>fi-male-symbol</span></a></li>
                                <li><a href="#"><i class="fi-male"></i><span>fi-male</span></a></li>
                                <li><a href="#"><i class="fi-map"></i><span>fi-map</span></a></li>
                                <li><a href="#"><i class="fi-marker"></i><span>fi-marker</span></a></li>
                                <li><a href="#"><i class="fi-megaphone"></i><span>fi-megaphone</span></a></li>
                                <li><a href="#"><i class="fi-microphone"></i><span>fi-microphone</span></a></li>
                                <li><a href="#"><i class="fi-minus-circle"></i><span>fi-minus-circle</span></a></li>
                                <li><a href="#"><i class="fi-minus"></i><span>fi-minus</span></a></li>
                                <li><a href="#"><i class="fi-mobile-signal"></i><span>fi-mobile-signal</span></a></li>
                                <li><a href="#"><i class="fi-mobile"></i><span>fi-mobile</span></a></li>
                                <li><a href="#"><i class="fi-monitor"></i><span>fi-monitor</span></a></li>
                                <li><a href="#"><i class="fi-mountains"></i><span>fi-mountains</span></a></li>
                                <li><a href="#"><i class="fi-music"></i><span>fi-music</span></a></li>
                                <li><a href="#"><i class="fi-next"></i><span>fi-next</span></a></li>
                                <li><a href="#"><i class="fi-no-dogs"></i><span>fi-no-dogs</span></a></li>
                                <li><a href="#"><i class="fi-no-smoking"></i><span>fi-no-smoking</span></a></li>
                                <li><a href="#"><i class="fi-page-add"></i><span>fi-page-add</span></a></li>
                                <li><a href="#"><i class="fi-page-copy"></i><span>fi-page-copy</span></a></li>
                                <li><a href="#"><i class="fi-page-csv"></i><span>fi-page-csv</span></a></li>
                                <li><a href="#"><i class="fi-page-delete"></i><span>fi-page-delete</span></a></li>
                                <li><a href="#"><i class="fi-page-doc"></i><span>fi-page-doc</span></a></li>
                                <li><a href="#"><i class="fi-page-edit"></i><span>fi-page-edit</span></a></li>
                                <li><a href="#"><i class="fi-page-export-csv"></i><span>fi-page-export-csv</span></a></li>
                                <li><a href="#"><i class="fi-page-export-doc"></i><span>fi-page-export-doc</span></a></li>
                                <li><a href="#"><i class="fi-page-export-pdf"></i><span>fi-page-export-pdf</span></a></li>
                                <li><a href="#"><i class="fi-page-export"></i><span>fi-page-export</span></a></li>
                                <li><a href="#"><i class="fi-page-filled"></i><span>fi-page-filled</span></a></li>
                                <li><a href="#"><i class="fi-page-multiple"></i><span>fi-page-multiple</span></a></li>
                                <li><a href="#"><i class="fi-page-pdf"></i><span>fi-page-pdf</span></a></li>
                                <li><a href="#"><i class="fi-page-remove"></i><span>fi-page-remove</span></a></li>
                                <li><a href="#"><i class="fi-page-search"></i><span>fi-page-search</span></a></li>
                                <li><a href="#"><i class="fi-page"></i><span>fi-page</span></a></li>
                                <li><a href="#"><i class="fi-paint-bucket"></i><span>fi-paint-bucket</span></a></li>
                                <li><a href="#"><i class="fi-paperclip"></i><span>fi-paperclip</span></a></li>
                                <li><a href="#"><i class="fi-pause"></i><span>fi-pause</span></a></li>
                                <li><a href="#"><i class="fi-paw"></i><span>fi-paw</span></a></li>
                                <li><a href="#"><i class="fi-paypal"></i><span>fi-paypal</span></a></li>
                                <li><a href="#"><i class="fi-pencil"></i><span>fi-pencil</span></a></li>
                                <li><a href="#"><i class="fi-photo"></i><span>fi-photo</span></a></li>
                                <li><a href="#"><i class="fi-play-circle"></i><span>fi-play-circle</span></a></li>
                                <li><a href="#"><i class="fi-play-video"></i><span>fi-play-video</span></a></li>
                                <li><a href="#"><i class="fi-play"></i><span>fi-play</span></a></li>
                                <li><a href="#"><i class="fi-plus"></i><span>fi-plus</span></a></li>
                                <li><a href="#"><i class="fi-pound"></i><span>fi-pound</span></a></li>
                                <li><a href="#"><i class="fi-power"></i><span>fi-power</span></a></li>
                                <li><a href="#"><i class="fi-previous"></i><span>fi-previous</span></a></li>
                                <li><a href="#"><i class="fi-price-tag"></i><span>fi-price-tag</span></a></li>
                                <li><a href="#"><i class="fi-pricetag-multiple"></i><span>fi-pricetag-multiple</span></a></li>
                                <li><a href="#"><i class="fi-print"></i><span>fi-print</span></a></li>
                                <li><a href="#"><i class="fi-prohibited"></i><span>fi-prohibited</span></a></li>
                                <li><a href="#"><i class="fi-projection-screen"></i><span>fi-projection-screen</span></a></li>
                                <li><a href="#"><i class="fi-puzzle"></i><span>fi-puzzle</span></a></li>
                                <li><a href="#"><i class="fi-quote"></i><span>fi-quote</span></a></li>
                                <li><a href="#"><i class="fi-record"></i><span>fi-record</span></a></li>
                                <li><a href="#"><i class="fi-refresh"></i><span>fi-refresh</span></a></li>
                                <li><a href="#"><i class="fi-results-demographics"></i><span>fi-results-demographics</span></a></li>
                                <li><a href="#"><i class="fi-results"></i><span>fi-results</span></a></li>
                                <li><a href="#"><i class="fi-rewind-ten"></i><span>fi-rewind-ten</span></a></li>
                                <li><a href="#"><i class="fi-rewind"></i><span>fi-rewind</span></a></li>
                                <li><a href="#"><i class="fi-rss"></i><span>fi-rss</span></a></li>
                                <li><a href="#"><i class="fi-safety-cone"></i><span>fi-safety-cone</span></a></li>
                                <li><a href="#"><i class="fi-save"></i><span>fi-save</span></a></li>
                                <li><a href="#"><i class="fi-share"></i><span>fi-share</span></a></li>
                                <li><a href="#"><i class="fi-sheriff-badge"></i><span>fi-sheriff-badge</span></a></li>
                                <li><a href="#"><i class="fi-shield"></i><span>fi-shield</span></a></li>
                                <li><a href="#"><i class="fi-shopping-bag"></i><span>fi-shopping-bag</span></a></li>
                                <li><a href="#"><i class="fi-shopping-cart"></i><span>fi-shopping-cart</span></a></li>
                                <li><a href="#"><i class="fi-shuffle"></i><span>fi-shuffle</span></a></li>
                                <li><a href="#"><i class="fi-skull"></i><span>fi-skull</span></a></li>
                                <li><a href="#"><i class="fi-social-500px"></i><span>fi-social-500px</span></a></li>
                                <li><a href="#"><i class="fi-social-adobe"></i><span>fi-social-adobe</span></a></li>
                                <li><a href="#"><i class="fi-social-amazon"></i><span>fi-social-amazon</span></a></li>
                                <li><a href="#"><i class="fi-social-android"></i><span>fi-social-android</span></a></li>
                                <li><a href="#"><i class="fi-social-apple"></i><span>fi-social-apple</span></a></li>
                                <li><a href="#"><i class="fi-social-behance"></i><span>fi-social-behance</span></a></li>
                                <li><a href="#"><i class="fi-social-bing"></i><span>fi-social-bing</span></a></li>
                                <li><a href="#"><i class="fi-social-blogger"></i><span>fi-social-blogger</span></a></li>
                                <li><a href="#"><i class="fi-social-delicious"></i><span>fi-social-delicious</span></a></li>
                                <li><a href="#"><i class="fi-social-designer-news"></i><span>fi-social-designer-news</span></a></li>
                                <li><a href="#"><i class="fi-social-deviant-art"></i><span>fi-social-deviant-art</span></a></li>
                                <li><a href="#"><i class="fi-social-digg"></i><span>fi-social-digg</span></a></li>
                                <li><a href="#"><i class="fi-social-dribbble"></i><span>fi-social-dribbble</span></a></li>
                                <li><a href="#"><i class="fi-social-drive"></i><span>fi-social-drive</span></a></li>
                                <li><a href="#"><i class="fi-social-dropbox"></i><span>fi-social-dropbox</span></a></li>
                                <li><a href="#"><i class="fi-social-evernote"></i><span>fi-social-evernote</span></a></li>
                                <li><a href="#"><i class="fi-social-facebook"></i><span>fi-social-facebook</span></a></li>
                                <li><a href="#"><i class="fi-social-flickr"></i><span>fi-social-flickr</span></a></li>
                                <li><a href="#"><i class="fi-social-forrst"></i><span>fi-social-forrst</span></a></li>
                                <li><a href="#"><i class="fi-social-foursquare"></i><span>fi-social-foursquare</span></a></li>
                                <li><a href="#"><i class="fi-social-game-center"></i><span>fi-social-game-center</span></a></li>
                                <li><a href="#"><i class="fi-social-github"></i><span>fi-social-github</span></a></li>
                                <li><a href="#"><i class="fi-social-google-plus"></i><span>fi-social-google-plus</span></a></li>
                                <li><a href="#"><i class="fi-social-hacker-news"></i><span>fi-social-hacker-news</span></a></li>
                                <li><a href="#"><i class="fi-social-hi5"></i><span>fi-social-hi5</span></a></li>
                                <li><a href="#"><i class="fi-social-instagram"></i><span>fi-social-instagram</span></a></li>
                                <li><a href="#"><i class="fi-social-joomla"></i><span>fi-social-joomla</span></a></li>
                                <li><a href="#"><i class="fi-social-lastfm"></i><span>fi-social-lastfm</span></a></li>
                                <li><a href="#"><i class="fi-social-linkedin"></i><span>fi-social-linkedin</span></a></li>
                                <li><a href="#"><i class="fi-social-medium"></i><span>fi-social-medium</span></a></li>
                                <li><a href="#"><i class="fi-social-myspace"></i><span>fi-social-myspace</span></a></li>
                                <li><a href="#"><i class="fi-social-orkut"></i><span>fi-social-orkut</span></a></li>
                                <li><a href="#"><i class="fi-social-path"></i><span>fi-social-path</span></a></li>
                                <li><a href="#"><i class="fi-social-picasa"></i><span>fi-social-picasa</span></a></li>
                                <li><a href="#"><i class="fi-social-pinterest"></i><span>fi-social-pinterest</span></a></li>
                                <li><a href="#"><i class="fi-social-rdio"></i><span>fi-social-rdio</span></a></li>
                                <li><a href="#"><i class="fi-social-reddit"></i><span>fi-social-reddit</span></a></li>
                                <li><a href="#"><i class="fi-social-skillshare"></i><span>fi-social-skillshare</span></a></li>
                                <li><a href="#"><i class="fi-social-skype"></i><span>fi-social-skype</span></a></li>
                                <li><a href="#"><i class="fi-social-smashing-mag"></i><span>fi-social-smashing-mag</span></a></li>
                                <li><a href="#"><i class="fi-social-snapchat"></i><span>fi-social-snapchat</span></a></li>
                                <li><a href="#"><i class="fi-social-spotify"></i><span>fi-social-spotify</span></a></li>
                                <li><a href="#"><i class="fi-social-squidoo"></i><span>fi-social-squidoo</span></a></li>
                                <li><a href="#"><i class="fi-social-stack-overflow"></i><span>fi-social-stack-overflow</span></a></li>
                                <li><a href="#"><i class="fi-social-steam"></i><span>fi-social-steam</span></a></li>
                                <li><a href="#"><i class="fi-social-stumbleupon"></i><span>fi-social-stumbleupon</span></a></li>
                                <li><a href="#"><i class="fi-social-treehouse"></i><span>fi-social-treehouse</span></a></li>
                                <li><a href="#"><i class="fi-social-tumblr"></i><span>fi-social-tumblr</span></a></li>
                                <li><a href="#"><i class="fi-social-twitter"></i><span>fi-social-twitter</span></a></li>
                                <li><a href="#"><i class="fi-social-vimeo"></i><span>fi-social-vimeo</span></a></li>
                                <li><a href="#"><i class="fi-social-windows"></i><span>fi-social-windows</span></a></li>
                                <li><a href="#"><i class="fi-social-xbox"></i><span>fi-social-xbox</span></a></li>
                                <li><a href="#"><i class="fi-social-yahoo"></i><span>fi-social-yahoo</span></a></li>
                                <li><a href="#"><i class="fi-social-yelp"></i><span>fi-social-yelp</span></a></li>
                                <li><a href="#"><i class="fi-social-youtube"></i><span>fi-social-youtube</span></a></li>
                                <li><a href="#"><i class="fi-social-zerply"></i><span>fi-social-zerply</span></a></li>
                                <li><a href="#"><i class="fi-social-zurb"></i><span>fi-social-zurb</span></a></li>
                                <li><a href="#"><i class="fi-sound"></i><span>fi-sound</span></a></li>
                                <li><a href="#"><i class="fi-star"></i><span>fi-star</span></a></li>
                                <li><a href="#"><i class="fi-stop"></i><span>fi-stop</span></a></li>
                                <li><a href="#"><i class="fi-strikethrough"></i><span>fi-strikethrough</span></a></li>
                                <li><a href="#"><i class="fi-subscript"></i><span>fi-subscript</span></a></li>
                                <li><a href="#"><i class="fi-superscript"></i><span>fi-superscript</span></a></li>
                                <li><a href="#"><i class="fi-tablet-landscape"></i><span>fi-tablet-landscape</span></a></li>
                                <li><a href="#"><i class="fi-tablet-portrait"></i><span>fi-tablet-portrait</span></a></li>
                                <li><a href="#"><i class="fi-target-two"></i><span>fi-target-two</span></a></li>
                                <li><a href="#"><i class="fi-target"></i><span>fi-target</span></a></li>
                                <li><a href="#"><i class="fi-telephone-accessible"></i><span>fi-telephone-accessible</span></a></li>
                                <li><a href="#"><i class="fi-telephone"></i><span>fi-telephone</span></a></li>
                                <li><a href="#"><i class="fi-text-color"></i><span>fi-text-color</span></a></li>
                                <li><a href="#"><i class="fi-thumbnails"></i><span>fi-thumbnails</span></a></li>
                                <li><a href="#"><i class="fi-ticket"></i><span>fi-ticket</span></a></li>
                                <li><a href="#"><i class="fi-torso-business"></i><span>fi-torso-business</span></a></li>
                                <li><a href="#"><i class="fi-torso-female"></i><span>fi-torso-female</span></a></li>
                                <li><a href="#"><i class="fi-torso"></i><span>fi-torso</span></a></li>
                                <li><a href="#"><i class="fi-torsos-all-female"></i><span>fi-torsos-all-female</span></a></li>
                                <li><a href="#"><i class="fi-torsos-all"></i><span>fi-torsos-all</span></a></li>
                                <li><a href="#"><i class="fi-torsos-female-male"></i><span>fi-torsos-female-male</span></a></li>
                                <li><a href="#"><i class="fi-torsos-male-female"></i><span>fi-torsos-male-female</span></a></li>
                                <li><a href="#"><i class="fi-torsos"></i><span>fi-torsos</span></a></li>
                                <li><a href="#"><i class="fi-trash"></i><span>fi-trash</span></a></li>
                                <li><a href="#"><i class="fi-trees"></i><span>fi-trees</span></a></li>
                                <li><a href="#"><i class="fi-trophy"></i><span>fi-trophy</span></a></li>
                                <li><a href="#"><i class="fi-underline"></i><span>fi-underline</span></a></li>
                                <li><a href="#"><i class="fi-universal-access"></i><span>fi-universal-access</span></a></li>
                                <li><a href="#"><i class="fi-unlink"></i><span>fi-unlink</span></a></li>
                                <li><a href="#"><i class="fi-unlock"></i><span>fi-unlock</span></a></li>
                                <li><a href="#"><i class="fi-upload-cloud"></i><span>fi-upload-cloud</span></a></li>
                                <li><a href="#"><i class="fi-upload"></i><span>fi-upload</span></a></li>
                                <li><a href="#"><i class="fi-usb"></i><span>fi-usb</span></a></li>
                                <li><a href="#"><i class="fi-video"></i><span>fi-video</span></a></li>
                                <li><a href="#"><i class="fi-volume-none"></i><span>fi-volume-none</span></a></li>
                                <li><a href="#"><i class="fi-volume-strike"></i><span>fi-volume-strike</span></a></li>
                                <li><a href="#"><i class="fi-volume"></i><span>fi-volume</span></a></li>
                                <li><a href="#"><i class="fi-web"></i><span>fi-web</span></a></li>
                                <li><a href="#"><i class="fi-wheelchair"></i><span>fi-wheelchair</span></a></li>
                                <li><a href="#"><i class="fi-widget"></i><span>fi-widget</span></a></li>
                                <li><a href="#"><i class="fi-wrench"></i><span>fi-wrench</span></a></li>
                                <li><a href="#"><i class="fi-x-circle"></i><span>fi-x-circle</span></a></li>
                                <li><a href="#"><i class="fi-x"></i><span>fi-x</span></a></li>
                                <li><a href="#"><i class="fi-yen"></i><span>fi-yen</span></a></li>
                                <li><a href="#"><i class="fi-zoom-in"></i><span>fi-zoom-in</span></a></li>
                                <li><a href="#"><i class="fi-zoom-out"></i><span>fi-zoom-out</span></a></li>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_foundation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
</html>

