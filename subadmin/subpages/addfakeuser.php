<?php
session_start();
 require_once('../../connect.php');
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
                            <h2 class="pageheader-title">Add Fake User</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add Fake User</a></li>
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

               <?php require_once('action.php'); ?>
             
                 <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                            <div class="card">
                                <h5 class="card-header">Basic Form</h5>
                                <div class="card-body">
                                    <form action="action.php" method="post">
                                        <div class="form-group">
                                           
                                            <label for="inputUserName">First Name</label>
                                            <input type="text" name="firstname" required="" placeholder="Enter full name" autocomplete="off" class="form-control">
                                        </div>

                                         <div class="form-group">
                                           
                                            <label for="inputUserName">Last Name</label>
                                            <input type="text" name="lastname" required="" placeholder="Enter full name" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input type="text" name="username" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputUserName">Mobile</label>
                                            <input type="text" name="mobile" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputUserName">Password</label>
                                            <input type="password" name="password" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                       
                                       
                                      
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="addfakeuser" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
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


        <!-- /Content Section -->


        


        <!-- footer -->
            <!-- ============================================================== -->
      <?php include '../subfooter.php'; ?>