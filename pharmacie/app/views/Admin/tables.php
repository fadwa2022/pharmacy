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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo URLROOT; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URLROOT; ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylepreloader.css" type="image/x-icon">

    <!-- Custom styles for this page -->
    <link href="<?php echo URLROOT; ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div id="preloader">


    </div>
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #6eb688 !important;background-image:none!important;" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URLROOT; ?>/Client/index">
                <div class="sidebar-brand-icon ">
                    <img src="<?php echo URLROOT; ?>/img/logo2.png" style="height: 4em;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Admin<sup><?php echo  $_SESSION['user_name'] ?></sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URLROOT; ?>/Admin/dashbord">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form  method="post" action="<?= URLROOT ?>/Admin/filter" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="produit" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"  style="background-color: #6eb688 !important;" >
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 larg"><?php echo  $_SESSION['user_name'] ?></span>
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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <?php flash('message'); ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold " style="color: #6eb688;"> <a href="<?php echo URLROOT; ?>/Admin/Addproduit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11H7v2h4v4h2v-4h4v-2h-4V7h-2v4z" fill="rgba(110,182,136,1)" />
                                    </svg></a>Products</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>image</th>
                                            <th>Nom Product</th>
                                            <th class="d-flex justify-content-between">Price
                                                <div>
                                          <a href="<?php echo URLROOT; ?>/Admin/tables/1/Prix"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" fill="rgba(146,147,152,1)"/></svg> </a>
                                          <a href="<?php echo URLROOT; ?>/Admin/tables/1/Prixdec"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" fill="rgba(148,149,152,1)"/></svg></a>
</div>
                                        </th>
                                            <th>Quantite</th>
                                            <th>Discription</th>
                                            <th class="d-flex justify-content-between">Date
                                            <div>
                                          <a href="<?php echo URLROOT; ?>/Admin/tables/1/date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" fill="rgba(146,147,152,1)"/></svg> </a>
                                          <a href="<?php echo URLROOT; ?>/Admin/tables/1/datedec"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" fill="rgba(148,149,152,1)"/></svg></a>
</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>image</th>
                                            <th>Nom Product</th>
                                            <th>Price</th>
                                            <th>Quantite</th>
                                            <th>Discription</th>
                                            <th>Date</th>
                                           
                                        </tr>

                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data['produit'] as  $produit) :   ?>
                                            <tr>
                                                <td> <img src="<?php echo URLROOT; ?>/img/<?php echo  $produit->Image; ?>" alt="" style="width: 5em;"> </td>
                                                <td> <?php echo  $produit->Nom; ?></td>
                                                <td> <?php echo  $produit->Prix; ?></td>
                                                <td> <?php echo  $produit->quantite; ?></td>
                                                <td> <?php echo  $produit->discription; ?></td>
                                                <td> <?php echo  $produit->date; ?></td>
                                              
                                                <!-- supp -->
                                                <td> <a href="<?php echo URLROOT; ?>/Admin/Updateproduit/<?php echo $produit->Id; ?>" class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z" fill="rgba(110,182,136,1)"/></svg></a></td>
                                                <!-- edit -->
                                                <td> <a href="<?php echo URLROOT; ?>/Admin/deleteproduit/<?php echo $produit->Id; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" fill="rgba(110,182,136,1)"/></svg></a></td>


                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true" style="color: #6eb688;" >&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" style="color: #6eb688 !important;" href="<?= URLROOT; ?>/Admin/tables/1/Prix">1</a></li>
                                        <li class="page-item"><a class="page-link"  style="color: #6eb688;" href="<?= URLROOT; ?>/Admin/tables/2">2</a></li>
                                        <li class="page-item"><a class="page-link"  style="color: #6eb688;"  href="<?= URLROOT; ?>/Admin/tables/3">3</a></li>
                                        <li class="page-item"><a class="page-link" style="color: #6eb688;" href="<?= URLROOT; ?>/Admin/tables/4">4</a></li>
                                   

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true" style="color: #6eb688;" >&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;Fadwa</span>
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
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
    <script src="<?php echo URLROOT; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo URLROOT; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?php echo URLROOT; ?>/js/sb-admin-2.min.js"></script>

    <script src="<?php echo URLROOT; ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URLROOT; ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo URLROOT; ?>/js/demo/datatables-demo.js"></script>

</body>

</html>