<?php
session_start();
$row['subadmin_id']=$_SESSION['subadmin_id'];

        if(isset($_SESSION['subadmin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: subadminlogin.php"); 

                   }  ?>



       <?php include '../subheader.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
        <?php include '../subsidebar.php';?>


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                   
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dpboss Dashboard </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dpboss</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                   
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            

            <?php include '../subfooter.php';?>

