  <?php
  require_once('../../connect.php');
session_start();
$row['admin_id']=$_SESSION['admin_id'];

        if(isset($_SESSION['admin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: ../login.php"); 

                   }  ?>


   

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->


<!-- navbar -->
        <!-- ============================================================== -->
     <?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
        <?php include 'sidebar.php';?>


<?php require_once('edit_delete.php'); ?>

        <!-- Content Section -->

           <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Sudadmin</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit Sudadmin</a></li>
                                        <!-- <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

               
             
                 <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                            <div class="card">
                                <h5 class="card-header">Basic Form</h5>
                                <div class="card-body">
                                    <form action="edit_delete.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="subadmin_id" value="<?php $subadmin_id=$_SESSION['subadmin_id']; echo $subadmin_id; ?>" style="display: none;">
                                            <label for="inputUserName">Name</label>
                                            <input type="text" name="fullname" value="<?php $fullname=$_SESSION['fullname']; echo $fullname; ?>" required="" placeholder="Enter full name" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input type="text" name="username" value="<?php $username=$_SESSION['username']; echo $username; ?>" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputUserName">Mobile</label>
                                            <input type="text" name="mobile" value="<?php $mobile=$_SESSION['mobile']; echo $mobile; ?>" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>

                                    
                                       
                                       
                                      
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="updatesubadmin" class="btn btn-space btn-primary">Submit</button>
                                                    <button onclick="location.href = '../pages/allsubadmins.php';" class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                </div>
               
            </div>
            <!-- ============================================================== -->


</div>

        <!-- /Content Section -->


        


     <?php include 'footer.php'; ?>