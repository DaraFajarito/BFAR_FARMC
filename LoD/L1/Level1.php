<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | BFAR - FARMC</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="../../assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="../../assets/css/svg-weather.css" rel="stylesheet">

   


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo"><img src="../../img/FARMC_new.png" style=" width: 200px;" alt="logo"></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">

                    <ul class="top-nav">

                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <!-- <span><img class="img-circle " src="./../BFAR_FARMC/img/FarmC.jpg" style="width:60px; height: 50px" alt="User Image"></span> -->
                                <span>Mr. <b>Montallana</b> <i class=" icofont icofont-simple-down"></i></span>
                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <!-- <li><a href="#!"><i class="icon-settings"></i> Settings</a></li> -->
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <!-- <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li> -->
                                <li><a href="login.php"><i class="icon-logout"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">--- Main</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="../../index.php">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level">--- FARMC Profile</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>1. FARMC STRENGTHENING</span><i class="icon-arrow-down"></i></a>

                        <!-- MUNICIPAL -->
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    <span>1.1 Organized FARMC </span>
                                    <i class="icon-arrow-down"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.1 Municipal / City FARMC</span>
                                            <i class="icon-arrow-down"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li>
                                                <a class="waves-effect waves-dark" href="Level1.php">
                                                    1.1.1.1 LEVEL 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="../L2/Level2.php">
                                                    1.1.1.2 LEVEL 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="Level3.php">
                                                    1.1.1.3 LEVEL 3
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="Level4.php">
                                                    1.1.1.4 LEVEL 4
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="Level5.php">
                                                    1.1.1.5 LEVEL 5
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            1.1.2 Barangay / Lakewide FARMC
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            1.1.3 Integrated FARMC
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>


                        <!-- INTEGRATE FARMC -->
                        <ul class="treeview-menu">
                            <li class="treeview">
                            <a class="waves-effect waves-dark" href="../BFAR_FARMC/FARMC_MembersProfile_Form/member_info.php">
                                    <i class="icon-arrow-right"></i>
                                    <span>1.2 FARMC Membership</span>
                                    <i class="icon-arrow-down"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-level">--- FARMC Org</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Fisherfolk Organization </span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>2.1 Municipal</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 Fishworker</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.3 Commercial</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.4 Women Fisherfolk</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.5 Youth Fisherfolk</a></li>

                        </ul>
                    </li>

                    <li class="nav-level">--- FARMC DP</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Fisherfolk Directors Program
                                <br><small>(Regional Fisherfolk Council </small><small>of</small> <br><small> Leaders Assembly)</small>
                            </span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>3.1 Provincial Fisherfolk Rep</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 Regional Fisherfolk Director</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 National Fisherfolk Director</a></li>
                        </ul>
                    </li>

                    <li class="nav-level">--- More</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                                <ul class="treeview-menu">
                                    <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>

                                    <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                    <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>

                                </ul>
                            </li>

                            <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                            <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>

                        </ul>
                    </li>
                    <li class="nav-level">--- Menu Level</li>
                </ul>
            </section>
        </aside>

        <div class="wrapper">
            <div class="content-wrapper" style="padding-left: 80px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <a href="index.html" class="logo"><img src="../../img/Logo_BFAR.png" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile</h4>
                            <div>
                                <a href="../../FARMC_Profile_Form/FARMC_basic_structure.php">
                                    <button class="btn btn-primary" style="float:right"> + New Form </button>
                                </a>
                            </div>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strenngthening | Organized FARMC | Municipal / City FARMC • Level 1</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row dashboard-header">
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All Completed</span><span>M / C Level 1 </span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box">
                                    <i class="ti-signal text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-warning">All Incomplete</span><span>M / C Level 1 </span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box">
                                    <i class="ti-signal text-warning-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Bar chart</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="card">
                                <div class="card-block">
                                    <!-- Donut chart start -->
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Donut chart</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="donut-example"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-block">
                                    <!-- Donut chart start -->
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Donut chart</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="donut-example"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="../../FARMC_Profile_Form/FARMC_basic_structure.php">
                                <button class="btn btn-primary" style="float:right">All Completed </button>
                            </a>

                            <a href="../../FARMC_Profile_Form/FARMC_basic_structure.php">
                                <button class="btn btn-warning" style="float:right"> All Incomplete </button>
                            </a>
                            <br><br>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="nav nav-tabs  tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Occidental</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Oriental</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Marinduque</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Romblon</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Palawan</a>
                                                </li>

                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content tabs">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <div class="card">
                                                        <div class="card-block">
                                                            <div class="table-responsive">
                                                                <table class="table m-b-0 photo-table">
                                                                    <thead>
                                                                        <tr class="text-uppercase">
                                                                            <th>Photo</th>
                                                                            <th>Province</th>
                                                                            <th>Municipality</th>
                                                                            <th>Status</th>
                                                                            <th>Date</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                                                            </th>
                                                                            <td>Appestia Project
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>50%</td>
                                                                            <td>October 21, 2015</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-4.png" alt="User">
                                                                            </th>
                                                                            <td>Contract with belife Company
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>70%</td>
                                                                            <td>November 21, 2015</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                                                            </th>
                                                                            <td>Web Consultancy project
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">1,4</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>40%</td>
                                                                            <td>September 21, 2015</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-3.png" alt="User">
                                                                            </th>
                                                                            <td>Contract with belife Company
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>70%</td>
                                                                            <td>November 21, 2015</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                                                            </th>
                                                                            <td>Contract with belife Company
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>70%</td>
                                                                            <td>November 21, 2015</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                                                            </th>
                                                                            <td>Contract with belife Company
                                                                                <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30">
                                                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path>
                                                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                                </svg>
                                                                            </td>
                                                                            <td>70%</td>
                                                                            <td>November 21, 2015</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="profile1" role="tabpanel">
                                                    <p>2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                                </div>
                                                <div class="tab-pane" id="messages1" role="tabpanel">
                                                    <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                                        nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                                                </div>
                                                <div class="tab-pane" id="settings1" role="tabpanel">
                                                    <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Required Jqurey -->
    <script src="../../assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../../assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="../../assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="../../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="../../assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="../../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="../../assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="../../assets/js/main.min.js"></script>
    <script type="text/javascript" src="../../assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="../../assets/pages/elements.js"></script>
    <script src="../../assets/js/menu.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>

</body>

</html>