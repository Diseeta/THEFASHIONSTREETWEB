<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:04:24 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Design_Gurus" name="author">
    <meta content="WOW Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>DEALHUB | ADMIN</title>

    <!--favicon-->
    <link href="assets/images/favicon.ico" rel="shortcut icon">

    <!--Preloader-CSS-->
    <link rel="stylesheet" href="assets/plugins/preloader/preloader.css">

    <!--bootstrap-4-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--Custom Scroll-->
    <link rel="stylesheet" href="assets/plugins/customScroll/jquery.mCustomScrollbar.min.css">
    <!--Font Icons-->
    <link rel="stylesheet" href="assets/icons/simple-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/icons/dripicons/dripicons.css">
    <link rel="stylesheet" href="assets/icons/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/icons/eightyshades/eightyshades.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/icons/foundation/foundation-icons.css">
    <link rel="stylesheet" href="assets/icons/metrize/metrize.css">
    <link rel="stylesheet" href="assets/icons/typicons/typicons.min.css">
    <link rel="stylesheet" href="assets/icons/weathericons/css/weather-icons.min.css">

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
<!--<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo text-center"><img class="img-fluid" src="assets/images/logo-c.png" alt="" class="ip-logo text-center"/></h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>-->
<!---Preloader Ends Here--->


<!--Navigation-->
<!-- HEADER -->

<?php
	include("header.php");
?>

<!-- END HEADER -->

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">
        <!--Header Fixed-->
        <div class="header fixed-header">
            <div class="container-fluid" style="padding: 10px 25px">
                <div class="row">
                    <div class="col-9 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <span class="logo">Admin</span>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin Panel</a></li>
                        </ol>
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <!--<a href="javascript:void(0);" class="btn btn-primary btn-round pull-right d-none d-md-block">Buy Theme Now</a>-->
                    </div>
                </div>
            </div>
        </div>


        <!--Main Content-->
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4>Overview</h4>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value">57</div>
                            <div class="trending trending-up">
                                <span>12%</span>
                                <i class="fa fa-caret-up"></i>
                            </div>
                            <p class="label">Products Sold</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value">$315</div>
                            <div class="trending trending-down-basic">
                                <span>12%</span>
                                <i class="fa fa-long-arrow-down"></i>
                            </div>
                            <p class="label">Todays Profit</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block down mb-4">
                            <div class="value">195</div>
                            <div class="trending">
                                <span>12%</span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                            <p class="label">New Visitors</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block counter-bg-img mb-4" style="background: url(assets/images/counter-bg-img.jpg);">
                            <div class="fade-color">
                                <div class="value text-white">109</div>
                                <div class="trending trending-up">
                                    <span>12%</span>
                                    <i class="fa fa-caret-up"></i>
                                </div>
                                <p class="label text-white">New Lovers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="section-title">
                            <h4>Multi Charts</h4>
                        </div>

                        <div class="block graph-block mb-4">
                            <div class="graph-big-text mb-4">
                                <p class="graph-label">Unique Visitors</p>
                                <h4 class="graph-value">12,537</h4>
                            </div>
                            <div class="graph-pills">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#two-lines-graph" role="tab" aria-controls="pills-home" aria-expanded="true">Lines 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#lines-graph" role="tab" aria-controls="pills-profile" aria-expanded="true">Line 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab3" data-toggle="pill" href="#colored-line-graph" role="tab" aria-controls="pills-profile" aria-expanded="true">C-Line 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab4" data-toggle="pill" href="#bar-graph" role="tab" aria-controls="pills-profile" aria-expanded="true">Bar 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab5" data-toggle="pill" href="#gradient-bar-graph" role="tab" aria-controls="pills-profile" aria-expanded="true">C-Bar 2</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <canvas id="filledLineChart" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4 col-md-3 col-lg-3">

                        <div class="section-title">
                            <h4>Donut Chart</h4>
                        </div>

                        <div class="block chart-block mb-4">

                            <div class="doughnut-chart mb-3">
                                <div class="inside-doughnut-chart-label">
                                    <strong>142</strong>
                                    <span>Total Orders</span>
                                </div>
                                <canvas id="doghnutChart" class="chart"></canvas>
                            </div>

                            <div class="chart-legends">
                                <div class="legend-value-w">
                                    <div class="legend-pin" style="background-color: var(--primary-color)"></div>
                                    <div class="legend-value">Processed</div>
                                </div>
                                <div class="legend-value-w">
                                    <div class="legend-pin" style="background-color: var(--light-color)"></div>
                                    <div class="legend-value">Pending</div>
                                </div>
                                <div class="legend-value-w">
                                    <div class="legend-pin" style="background-color: var(--success-color)"></div>
                                    <div class="legend-value">Completed</div>
                                </div>
                                <div class="legend-value-w">
                                    <div class="legend-pin" style="background-color: var(--danger-color)"></div>
                                    <div class="legend-value">Cancelled</div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="block counter-block py-4 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h4>$168.90</h4>
                                    <p class="label">This Month</p>
                                </div>
                                <div class="col-6">
                                    <span class="sparklineBarChartPrimary float-right"></span>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block bg-dark py-4 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-white">$168.90</h4>
                                    <p class="label text-white">This Month</p>
                                </div>
                                <div class="col-6">
                                    <span class="sparklineBarChartPrimary float-right"></span>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block bg-primary py-4 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-white">$168.90</h4>
                                    <p class="label text-white">This Month</p>
                                </div>
                                <div class="col-6">
                                    <span class="sparklineBarChartWhite float-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="block counter-block mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4>$168.90</h4>
                                    <p class="label">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-2">
                                        <div class="progress-bar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="32" role="progressbar" style="width: 32%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block bg-dark mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-white">$168.90</h4>
                                    <p class="label text-white">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-2">
                                        <div class="progress-bar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="56" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block bg-primary mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-white">$168.90</h4>
                                    <p class="label text-white">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress white mt-2">
                                        <div class="progress-bar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar" style="width: 82%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="block counter-block mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4>$168.90</h4>
                                    <p class="label">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success" aria-valuemax="100" aria-valuemin="0" aria-valuenow="32" role="progressbar" style="width: 32%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4>$168.90</h4>
                                    <p class="label">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" aria-valuemax="100" aria-valuemin="0" aria-valuenow="56" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block counter-block mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4>$168.90</h4>
                                    <p class="label">This Month</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-warning" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar" style="width: 82%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="block table-block mb-4">
                            <div class="block-heading d-flex align-items-center" style="border:0; padding-bottom: 0;">
                                <h5 class="text-truncate">Order History</h5>
                                <div class="ml-auto w-25">
                                    <select class="custom-select form-rounded form-control input-sm">
                                        <option>Todays</option>
                                        <option>Yesterday</option>
                                        <option>Last Week</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-scroll" style="max-height: 250px;">
                                <div class="table-responsive text-no-wrap">
                                    <table class="table">
                                        <tbody class="text-middle">
                                        <tr>
                                            <td class="name">John Mayers</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <div class="product-img-more">+4</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$190</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Meera</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$25</td>
                                        </tr>
                                        <tr>
                                            <td class="name">William J</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$350</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Bruno Black</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/9.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/10.jpg">
                                                <div class="product-img-more">+10</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-danger">Over Due</span></td>
                                            <td class="price">$1999</td>
                                        </tr>
                                        <tr>
                                            <td class="name">mishti</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/11.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/12.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$85</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Inayat Sheikh</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                                <div class="product-img-more">+2</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$72</td>
                                        </tr>
                                        <tr>
                                            <td class="name">John Mayers</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                                <div class="product-img-more">+4</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$190</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Meera</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$25</td>
                                        </tr>
                                        <tr>
                                            <td class="name">William J</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/9.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/10.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/11.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$350</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Bruno Black</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/12.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <div class="product-img-more">+10</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-danger">Over Due</span></td>
                                            <td class="price">$1999</td>
                                        </tr>
                                        <tr>
                                            <td class="name">mishti</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$85</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Inayat Sheikh</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                                <div class="product-img-more">+2</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$72</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-12 col-md-6 col-lg-6">
                        <div class="block bg-trans table-block mb-4">
                            <div class="block-heading d-flex align-items-center" style="border:0; padding-bottom: 0;">
                                <h5 class="text-truncate">Order History</h5>
                                <div class="ml-auto w-25">
                                    <select class="custom-select form-rounded form-control input-sm">
                                        <option>Todays</option>
                                        <option>Yesterday</option>
                                        <option>Last Week</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-scroll" style="max-height: 250px;">
                                <div class="table-responsive text-no-wrap">
                                    <table class="table">
                                        <tbody class="text-middle">
                                        <tr>
                                            <td class="name">John Mayers</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <div class="product-img-more">+4</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$190</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Meera</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$25</td>
                                        </tr>
                                        <tr>
                                            <td class="name">William J</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$350</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Bruno Black</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/9.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/10.jpg">
                                                <div class="product-img-more">+10</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-danger">Over Due</span></td>
                                            <td class="price">$1999</td>
                                        </tr>
                                        <tr>
                                            <td class="name">mishti</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/11.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/12.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$85</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Inayat Sheikh</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                                <div class="product-img-more">+2</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$72</td>
                                        </tr>
                                        <tr>
                                            <td class="name">John Mayers</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                                <div class="product-img-more">+4</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$190</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Meera</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$25</td>
                                        </tr>
                                        <tr>
                                            <td class="name">William J</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/9.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/10.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/11.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-warning">pending</span></td>
                                            <td class="price">$350</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Bruno Black</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/12.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/1.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/2.jpg">
                                                <div class="product-img-more">+10</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-danger">Over Due</span></td>
                                            <td class="price">$1999</td>
                                        </tr>
                                        <tr>
                                            <td class="name">mishti</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/3.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/4.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/5.jpg">
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$85</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Inayat Sheikh</td>
                                            <td class="product">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/6.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/7.jpg">
                                                <img class="product-img" data-toggle="tooltip" data-title="Product Name" src="assets/images/products/8.jpg">
                                                <div class="product-img-more">+2</div>
                                            </td>
                                            <td class="status"><span class="badge badge-pill bg-success">Success</span></td>
                                            <td class="price">$72</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:05:18 GMT -->
</html>