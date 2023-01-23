<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo SITENAME; ?></title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/logo1.png" type="image/x-icon">
    <link href="<?php echo URLROOT; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylepreloader.css" type="image/x-icon">
    <link href="<?php echo URLROOT; ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="preloader">
    </div>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #6eb688 !important;background-image:none!important;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URLROOT; ?>">
                <div class="sidebar-brand-icon ">
                    <img src="<?php echo URLROOT; ?>/img/logo2.png" style="height: 4em;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Admin<sup><?php echo SITENAME; ?></sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URLROOT; ?>/Admin/dashbord">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="<?php echo URLROOT; ?>/Users/login">Login</a>
                        <a class="collapse-item" href="<?php echo URLROOT; ?>/Users/register">Register</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="<?php echo URLROOT; ?>/Client/index">Home</a>

                    </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/Admin/tables">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" style="background-color: #6eb688 !important;background-image:none!important;">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user_name']; ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                total des produits
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['numbreproduits']->cnt ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                prix maximum </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['maximum']->cnt ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <section style="background-color: #eee;">
                        <div class="container py-5">
                            <div class="row">
                                <div class="d-flex justify-content-between" style="width:100%;">
                                    <div class="card mb-4" style="    width: 32em;">
                                        <div class="card-body text-center">
                                            <img src="<?php echo URLROOT; ?>/public/img/png-clipart-avatar-female-girls-avatar-purple-face.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                            <h5 class="my-3"><?php echo $_SESSION['user_name']; ?></h5>
                                            <p class="text-muted mb-1">Admin</p>
                                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                            <div class="d-flex justify-content-center mb-2">
                                                <button type="button" class="btn btn-primary"><?php echo $_SESSION['user_email']; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <ul class="list-group list-group-flush rounded-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fas fa-globe fa-lg text-warning"></i>
                                                <p class="mb-0">https://<?php echo $_SESSION['user_name']; ?>.com</p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                                <p class="mb-0"><?php echo $_SESSION['user_name']; ?></p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                                <p class="mb-0">@<?php echo $_SESSION['user_name']; ?></p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                <p class="mb-0"><?php echo $_SESSION['user_name']; ?></p>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                <p class="mb-0"><?php echo $_SESSION['user_name']; ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>

            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fadwa</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo URLROOT; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo URLROOT; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?php echo URLROOT; ?>/js/sb-admin-2.min.js"></script>

    <script src="<?php echo URLROOT; ?>/vendor/chart.js/Chart.min.js"></script>

    <script src="<?php echo URLROOT; ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo URLROOT; ?>/js/demo/chart-pie-demo.js"></script>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
</body>

</html>