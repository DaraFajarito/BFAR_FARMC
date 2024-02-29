<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quantum Able Bootstrap 4 Admin Dashboard Template</title>
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
    <link rel="shortcut icon" href="./../../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./../../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="./../../assets/icon/themify-icons/themify-icons.css">

    <!-- Font Awesome -->
    <link href="./../../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="./../../assets/icon/icofont/css/icofont.css">


    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="./../../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="./../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Date Picker css -->
    <link rel="stylesheet" href="./../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

    <!-- Bootstrap Date-Picker css -->
    <link rel="stylesheet" href="./../../assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="./../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Select 2 css -->
    <link rel="stylesheet" href="./../../assets/plugins/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="./../../assets/plugins/select2/css/s2-docs.css">

    <!-- Multi Select css -->
    <link rel="stylesheet" href="./../../assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="./../../assets/plugins/multiselect/css/multi-select.css" />

    <!-- Color Picker css -->
    <link rel="stylesheet" href="./../../assets/plugins/spectrum/spectrum.css" />

    <!-- Tags css -->
    <link rel="stylesheet" href="./../../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="./../../assets/plugins/syntaxhighlighter/styles/shCoreDjango.css" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="./../../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="./../../assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="./../../assets/css/color/color-1.min.css" id="color" />


</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo"><img src="../../img/FARMC_new.png" style=" width:200px;" alt="logo"></a>
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
                                <span>Mr. <b>Montallana</b> <i class=" icofont icofont-simple-down"></i></span>
                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
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
                        <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/index.php">
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
                                                <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/LoD/L1/Level1.php">
                                                    1.1.1.1 LEVEL 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/LoD/L2/Level2.php">
                                                    1.1.1.2 LEVEL 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/LoD/L3/Level3.php">
                                                    1.1.1.3 LEVEL 3
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/LoD/L4/Level4.php">
                                                    1.1.1.4 LEVEL 4
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="../../../BFAR_FARMC/LoD/L5/Level5.php">
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
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>3.1 Provincial Fisherfolk Representative</a></li>
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
    </div>


    <div class="wrapper">
        <!-- Navbar-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header" style="padding-left: 90px" ;>

                        <a href="index.html" class="logo"><img src="../../img/Logo_BFAR.png" style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>

                        <a href="../../../BFAR_FARMC/FARMC_Profile_Form/Composition/Mandated_Member.php" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-block">
                                    <hr>
                                    <div class="grid-material bg-general"><b>A. COMPOSITION OF MEMBERSHIP</b>
                                    </div>
                                    <hr>

                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label for="inline3mail" class="block form-control-label"><strong>2. Fisherfolk Representative</strong></label>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <form method="post" id="yourFormId">
                                                    <select class="js-example-basic-single form-control">
                                                        <optgroup label="Fisherfolk Representative">
                                                            <option value="AL">Municipal Fisherfolk</option>
                                                            <option value="WY">Fisherworker</option>
                                                            <option value="WY">Commercial Fishing Operator</option>
                                                            <option value="WY">Women Fisherfolk Sector Representative</option>
                                                            <option value="WY">Youth Fisherfolk Sector Representative</option>
                                                            <option value="WY">Indigenous Peoples(IP's) if any</option>
                                                        </optgroup>
                                                    </select>
                                                </form>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <form action="process_form.php" method="post" id="yourFormId">
                                                    <div class="form-group row">
                                                        <label for="h-email" class="col-md-2 col-form-label form-control-label">Province</label>
                                                        <div class="col-md-2">
                                                            <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <form method="post" id="yourFormId">
                                                <div class="col-md-6">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-3">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Endorsement of Fisherfolk Organization as their respective</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-left: 200px;">
                                                    <input id="inline3mail" type="file" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>

                                            </form>


                                            <form method="post" id="yourFormId">
                                                <div class="col-md-4">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-3">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Barangay Certification</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-3">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Atleast 1 year residency</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <input id="inline3mail" type="file" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>
                                            </form>

                                            <form method="post" id="yourFormId">
                                                <div class="col-md-6">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-3">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Source of income (Capture/Culture/Processing)</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-left: 200px;">
                                                    <input id="inline3mail" type="file" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>
                                            </form>

                                            <form method="post" id="yourFormId">
                                                <div class="col-md-6">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-3">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Good Moral Character</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-left: 200px;">
                                                    <input id="inline3mail" type="file" class="form-control" style="width:200px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>
                                            </form>

                                            <div class="col-md-12">
                                                <br>
                                                <form method="post" id="yourFormId">
                                                    <div class="form-group row">
                                                        <label for="h-email" class="col-md-2 col-form-label form-control-label">Name of Organization</label>
                                                        <div class="col-md-2">
                                                            <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <form method="post" id="yourFormId">
                                                <div class="col-md-6" style=" line-height:4rem">
                                                    <small><b><em>Date of Registration</b></em></small>
                                                    <input id="inline3mail" type="date" class="form-control" style="width: 300px;" placeholder="">
                                                    <small><b><em>Date of Accreditation</em></b></small>
                                                    <input id="inline3mail" type="date" class="form-control" style="width: 300px;" placeholder="">
                                                </div>
                                                <div class="col-md-6" style=" line-height:4rem">
                                                    <br> <!-- <small><b><em>Date of Registration</b></em></small> -->
                                                    <input id="inline3mail" type="file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                    <br> <!-- <small><b><em>Date of Accreditation</em></b></small> -->
                                                    <input id="inline3mail" type="file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br>    
                                        <div class="col-md-10 text-center">
                                            <button class="btn btn-primary" onclick="submitFormAndAddAnother()">Add another</button>
                                        </div>
                                        <div class="col-md-2 text-right">
                                            <a href="../../../BFAR_FARMC/FARMC_Profile_Form/Committee/MFARMC_Committee.php" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- </div> -->





        <!-- Required Jqurey -->
        <script src="./../../assets/plugins/jquery/dist/jquery.min.js"></script>
        <script src="./../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="./../../assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script src="./../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- waves effects.js -->
        <script src="./../../assets/plugins/Waves/waves.min.js"></script>

        <!-- Scrollbar JS-->
        <script src="./../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="./../../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="./../../assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script src="./../../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Date picker.js -->
        <script src="./../../assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
        <script src="./../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- Select 2 js -->
        <script src="./../../assets/plugins/select2/dist/js/select2.full.min.js"></script>

        <!-- Max-Length js -->
        <script src="./../../assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

        <!-- Multi Select js -->
        <script src="./../../assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
        <script src="./../../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="./../../assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

        <!-- Tags js -->
        <script src="./../../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

        <!-- Bootstrap Datepicker js -->
        <script type="text/javascript" src="./../../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="./../../assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

        <!-- bootstrap range picker -->
        <script type="text/javascript" src="./../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- color picker -->
        <script type="text/javascript" src="./../../assets/plugins/spectrum/spectrum.js"></script>
        <script type="text/javascript" src="./../../assets/plugins/jscolor/jscolor.js"></script>

        <!-- highlite js -->
        <script type="text/javascript" src="./../../assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript" src="./../../assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
        <script type="text/javascript" src="./../../assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all();
        </script>

        <!-- custom js -->
        <script type="text/javascript" src="./../../assets/js/main.min.js"></script>
        <script type="text/javascript" src="./../../assets/pages/advance-form.js"></script>
        <script src="./../../assets/js/menu.min.js"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all();
        </script>

        <script>
            function submitFormAndAddAnother() {
                // Submit the form
                document.getElementById("yourFormId").submit();
                // Clear the form fields
                document.getElementById("yourFormId").reset();
            }
        </script>

        <script>
            document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (this.value === 'IPoption') {
                        document.getElementById('textBoxContainer').style.display = 'block';
                    } else {
                        document.getElementById('textBoxContainer').style.display = 'none';
                    }
                });
            });
        </script>
</body>

</html>