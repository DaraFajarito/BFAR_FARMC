<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form | BFAR - FARMC</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="./../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="./../assets/icon/themify-icons/themify-icons.css">

    <!-- Font Awesome -->
    <link href="./../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="./../assets/icon/icofont/css/icofont.css">


    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="./../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="./../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Date Picker css -->
    <link rel="stylesheet" href="./../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

    <!-- Bootstrap Date-Picker css -->
    <link rel="stylesheet" href="./../assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="./../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Select 2 css -->
    <link rel="stylesheet" href="./../assets/plugins/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="./../assets/plugins/select2/css/s2-docs.css">

    <!-- Multi Select css -->
    <link rel="stylesheet" href="./../assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="./../assets/plugins/multiselect/css/multi-select.css" />

    <!-- Color Picker css -->
    <link rel="stylesheet" href="./../assets/plugins/spectrum/spectrum.css" />

    <!-- Tags css -->
    <link rel="stylesheet" href="./../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="./../assets/plugins/syntaxhighlighter/styles/shCoreDjango.css" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="./../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="./../assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="./../assets/css/color/color-1.min.css" id="color" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            /* White background */
        }

        table {
            border-collapse: collapse;
            width: calc(300% - 10px);
            /* Adjusted width */
            margin: 20px auto;
            /* Centered horizontally */
        }

        th,
        td {
            border: none;
            /* Remove borders */
            padding: 0;
        }

        th {
            background-color: #f0f0f0;
            /* Light gray background for headers */
            padding: 8px;
        }

        .form-group {
            margin-right: 10px;
        }

        input[type="text"] {
            width: calc(105% - 10px);
            /* Adjusted width for text inputs */
            box-sizing: border-box;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            /* White background */
        }

        table {
            border-collapse: collapse;
            width: calc(300% - 10px);
            /* Adjusted width */
            margin: 20px auto;
            /* Centered horizontally */
        }

        th,
        td {
            border: none;
            /* Remove borders */
            padding: 0;
        }

        th {
            background-color: #f0f0f0;
            /* Light gray background for headers */
            padding: 8px;
        }

        .form-group {
            margin-right: 10px;
        }

        input[type="text"] {
            width: calc(105% - 10px);
            /* Adjusted width for text inputs */
            box-sizing: border-box;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>



</head>

<body>

    <body class="sidebar-mini fixed">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        <div class="wrapper">
            <!-- Navbar-->
            <header class="main-header-top hidden-print">
                <a href="index.html" class="logo"><img src="../../BFAR_FARMC/img/FARMC_new.png" style=" width: 200px;" alt="logo"></a>
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
                        <li>
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
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L1/Level1.php">
                                                        1.1.1.1 LEVEL 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L2/Level2.php">
                                                        1.1.1.2 LEVEL 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L3/Level3.php">
                                                        1.1.1.3 LEVEL 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L4/Level4.php">
                                                        1.1.1.4 LEVEL 4
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L5/Level5.php">
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
                                <li class="active treeview">
                                <li class="treeview">
                                    <a class="waves-effect waves-dark" href="#!">
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
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 inline-forms" style="padding-left: 90px;">

                                <div class="main-header">
                                    <a href="index.html" class="logo"><img src="./../img/Logo_BFAR.png" style=" width: 60px;" alt="logo"></a>
                                    <h4>M/C FARMC Profile</h4>
                                    <div>
                                        <a href="lform1.php">
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
                                        <li class="breadcrumb-item"><a href="#">FARMC Strenngthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                                        </li>
                                    </ol>
                                </div>
                                <a href="Level1.php" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                                <br> <br>
                                <div class="card">
                                    <div class="card-block">


                                        <div class="card inline-form-style">
                                            <div class="card-header">
                                                <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                                    <div class="grid-material bg-general">1. Personal Information</div>
                                                </div>

                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <form class="form-inline">
                                                                <div class="form-group m-r-15">
                                                                    <label for="inline3mail" class="block form-control-label">Name <em>(Family,given,middle & Ext.)</em></label>
                                                                    <input id="inline3mail" type="email" class="form-control" style="width: 800px;" placeholder="Enter name">
                                                                </div>
                                                            </form>
                                                            <br>

                                                            <form class="form-inline">
                                                                <div class="form-group m-r-15">
                                                                    <label for="inline3mail" class="block form-control-label">Address <em>(Barangay, City/Municipality, Province & Region)</em></label>
                                                                    <input id="inline3mail" type="email" class="form-control" style="width: 800px;" placeholder="Enter name">
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <!-- <div class="card-block"> -->
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                                            <form style="display: inline-block;">
                                                                <div style="text-align: left; padding: 10px; float: left; width: 25%;">
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> Municipal</label>
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> Fishworker</label>
                                                                </div>
                                                                <div style="text-align: left; padding: 10px; float: left; width: 25%;">
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> Commercial</label>
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> Women</label>
                                                                </div>
                                                                <div style="text-align: left; padding: 10px; float: left; width: 25%;">
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> Youth</label>
                                                                    <label style="display: block; margin-bottom: 5px;"><input type="radio" name="group1"> IP's</label>
                                                                </div>
                                                                <div style="text-align: left; padding: 10px; float: left; width: 25%;">
                                                                    <!-- Adjusted width and CSS white-space property -->
                                                                    <label style="display: block; margin-bottom: 5px; white-space: nowrap;"><input type="radio" name="group1"> Other's (Please Specify)</label>
                                                                    <div style="margin-top: -5px; margin-left: 20px;">
                                                                        <input type="text" class="form-control" placeholder="" style="width: 200px;">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>


                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="grid-material bg-general"><em>2. Status of Registration</em></div>
                                                <form>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                    <div class="grid-material bg-general"><em>Specify if yes,</em></div>

                                                    <form>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">

                                                                <label>
                                                                    <input type="radio" name="radio" c /><i class="helper"></i>DOLE
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>SEC
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>CDA
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                    <div class="grid-material bg-general"><em></em></div>

                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label for="reg_no">Registration No.</label>
                                                            <input id="reg_no" type="text" class="form-control" placeholder="Registration No.">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date Registered</label>
                                                            <input id="date" type="text" class="form-control" placeholder="Date Registered">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                            <!-- <div class="col-md-3">
                                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                    <div class="grid-material bg-general"><em>Religion Affiliation</em></div>

                                                    <form class="form-inline">
                                                        <div class="form-check">
                                                            <label for="islamRadio" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="religionRadios" id="islamRadio" value="Islam" onchange="toggleTextBox('islamRadio');">
                                                                Islam
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="form-check">
                                                            <label for="christianRadio" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="religionRadios" id="christianRadio" value="Christian" onchange="toggleTextBox('christianRadio');">
                                                                Christian
                                                            </label>
                                                        </div>
                                                        <div class="form-group" id="textBoxGroup" style="display: none;">
                                                            <label for="inline3mail" class="block form-control-label">If Christian, please specify</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->


                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="grid-material bg-general"><em>2. Status of Accreditation</em></div>
                                                <form>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                    <div class="grid-material bg-general"><em>Specify if yes,</em></div>

                                                    <form>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">

                                                                <label>
                                                                    <input type="radio" name="radio" c /><i class="helper"></i>Municipal
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>Provincial
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>National
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                    <div class="grid-material bg-general"><em></em></div>

                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label for="reg_no">Accredition No.</label>
                                                            <input id="reg_no" type="text" class="form-control" placeholder="Accredition No.">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">Date Accredited</label>
                                                            <input id="date" type="text" class="form-control" placeholder="Date Accredited">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <hr>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group m-r-15">
                                                    <!-- <hr> -->
                                                    <label for="inline3mail" class="block form-control-label">4. Officer and Management</em></label>
                                                    <label style="font-size: small;">4.1 Executive Officers</label>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Vice Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Treasurer</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Auditor</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">PRO</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Sgt-at-Arms</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Others</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group m-r-15">
                                                    <!-- <hr> -->
                                                    <label for="inline3mail" class="block form-control-label"></label>
                                                    <label style="font-size: small;">4.2 Board of Directors/Trustees</label>

                                                    <table id="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button onclick="addRow()">Add Row</button>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group m-r-15">
                                                    <!-- <hr> -->
                                                    <label for="inline3mail" class="block form-control-label"></em></label>
                                                    <label style="font-size: small;">4.3 Committees</label>
                                                    <div style="margin-top: 5px;"> <!-- Added a margin top to create space -->
                                                        <label style="font-size: smaller;">4.3.1 Membership Committee</label>
                                                    </div>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td> <!-- Changed from Vice Chairperson to Secretary -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Member</td> <!-- Changed from Secretary to Membership -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <!-- Remaining positions -->
                                                        </tbody>
                                                    </table>

                                                    <div style="margin-top: 5px;"> <!-- Added a margin top to create space -->
                                                        <label style="font-size: smaller;">4.3.2 Committee on Education and Research</label>
                                                    </div>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td> <!-- Changed from Vice Chairperson to Secretary -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Member</td> <!-- Changed from Secretary to Membership -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <!-- Remaining positions -->
                                                        </tbody>
                                                    </table>

                                                    <div style="margin-top: 5px;"> <!-- Added a margin top to create space -->
                                                        <label style="font-size: smaller;">4.3.3 Election Committee</label>
                                                    </div>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td> <!-- Changed from Vice Chairperson to Secretary -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Member</td> <!-- Changed from Secretary to Membership -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <!-- Remaining positions -->
                                                        </tbody>
                                                    </table>

                                                    <div style="margin-top: 5px;"> <!-- Added a margin top to create space -->
                                                        <label style="font-size: smaller;">4.3.4 Audit Committee</label>
                                                    </div>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td> <!-- Changed from Vice Chairperson to Secretary -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Member</td> <!-- Changed from Secretary to Membership -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <!-- Remaining positions -->
                                                        </tbody>
                                                    </table>

                                                    <div style="margin-top: 5px;"> <!-- Added a margin top to create space -->
                                                        <label style="font-size: smaller;">4.3.5 Others: please specify</label>
                                                    </div>

                                                    <table id="dynamic-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size: small;">Chairperson</td>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Secretary</td> <!-- Changed from Vice Chairperson to Secretary -->
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: small;">Member</td> <!-- Changed from Secretary to Membership -->
                                                                <td><input id="name" type="text" class="form-control" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                            <!-- Remaining positions -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group m-r-15">
                                                    <!-- <hr> -->
                                                    <label for="inline3mail" class="block form-control-label">List of members</em></label>
                                                    <!-- <label style="font-size: small;"></label> -->

                                                    <table id="dytable">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Civil Status</th>
                                                                <th>Gender</th>
                                                                <th>Birthday</th>
                                                                <th>4ps/Ips/SC/PWD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>
                                                                <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                                <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                                <td><input type="text" class="form-control" placeholder="Birthday"></td>
                                                                <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button onclick="addRow()">Add Row</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <a href="../../BFAR_FARMC/FARMC_MembersProfile_Form/FARMC_Membership.php" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Required Jqurey -->
                <script src="./../assets/plugins/jquery/dist/jquery.min.js"></script>
                <script src="./../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
                <script src="./../assets/plugins/tether/dist/js/tether.min.js"></script>

                <!-- Required Fremwork -->
                <script src="./../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                <!-- waves effects.js -->
                <script src="./../assets/plugins/Waves/waves.min.js"></script>

                <!-- Scrollbar JS-->
                <script src="./../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
                <script src="./../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

                <!--classic JS-->
                <script src="./../assets/plugins/classie/classie.js"></script>

                <!-- notification -->
                <script src="./../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

                <!-- Date picker.js -->
                <script src="./../assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
                <script src="./../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

                <!-- Select 2 js -->
                <script src="./../assets/plugins/select2/dist/js/select2.full.min.js"></script>

                <!-- Max-Length js -->
                <script src="./../assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

                <!-- Multi Select js -->
                <script src="./../assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
                <script src="./../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
                <script type="text/javascript" src="./../assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

                <!-- Tags js -->
                <script src="./../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

                <!-- Bootstrap Datepicker js -->
                <script type="text/javascript" src="./../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <script src="./../assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

                <!-- bootstrap range picker -->
                <script type="text/javascript" src="./../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

                <!-- color picker -->
                <script type="text/javascript" src="./../assets/plugins/spectrum/spectrum.js"></script>
                <script type="text/javascript" src="./../assets/plugins/jscolor/jscolor.js"></script>

                <!-- highlite js -->
                <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
                <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
                <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
                <script type="text/javascript">
                    SyntaxHighlighter.all();
                </script>

                <!-- custom js -->
                <script type="text/javascript" src="./../assets/js/main.min.js"></script>
                <script type="text/javascript" src="./../assets/pages/advance-form.js"></script>
                <script src="assets/js/menu.min.js"></script>
                <script type="text/javascript">
                    SyntaxHighlighter.all();
                </script>

                <script>
                    document.querySelectorAll('input[name="culturalCommunity"]').forEach(function(radio) {
                        radio.addEventListener('change', function() {
                            if (this.value === 'yes') {
                                document.getElementById('culturalCommunityDetails').style.display = 'block';
                            } else {
                                document.getElementById('culturalCommunityDetails').style.display = 'none';
                            }
                        });
                    });
                </script>

                <script>
                    document.querySelectorAll('input[name="Disability"]').forEach(function(radio) {
                        radio.addEventListener('change', function() {
                            if (this.value === 'yes') {
                                document.getElementById('DisabilityDetails').style.display = 'block';
                            } else {
                                document.getElementById('DisabilityDetails').style.display = 'none';
                            }
                        });
                    });
                </script>


                <script>
                    function toggleTextBox(radioId) {
                        var textBoxGroup = document.getElementById('textBoxGroup');
                        if (radioId === 'christianRadio') {
                            textBoxGroup.style.display = 'block';
                        } else {
                            textBoxGroup.style.display = 'none';
                        }
                    }
                </script>

                <script>
                    function showTertiaryTextbox() {
                        document.getElementById('tertiaryTextboxGroup').style.display = 'block';
                        document.getElementById('tesdaTextboxGroup').style.display = 'none';
                    }

                    function showTesdaTextbox() {
                        document.getElementById('tesdaTextboxGroup').style.display = 'block';
                        document.getElementById('tertiaryTextboxGroup').style.display = 'none';
                    }
                </script>

                <script>
                    function addRow() {
                        var etable = document.getElementById("table");
                        var row = etable.insertRow(-1);
                        var firstRow = table.rows[1]; // Get the first row (index 1, excluding the header row)

                        // Clone the first row and insert it as a new row
                        for (var i = 0; i < firstRow.cells.length; i++) {
                            var cell = row.insertCell(i);
                            var input = firstRow.cells[i].querySelector('input').cloneNode(true);
                            cell.appendChild(input);
                        }
                    }
                </script>

                <script>
                    function addRow() {
                        var ntable = document.getElementById("dytable");
                        var newRow = ntable.insertRow(-1); // Insert a new row at the last position

                        // Clone and append cells from the first row
                        var firstRowCells = table.rows[1].cells;
                        for (var i = 0; i < firstRowCells.length; i++) {
                            var newCell = newRow.insertCell(i);
                            var input = firstRowCells[i].querySelector('input').cloneNode(true);
                            newCell.appendChild(input);
                        }
                    }
                </script>


    </body>

</html>