<?php
session_start();
 require_once('../../connect.php');
$row['subadmin_id']=$_SESSION['subadmin_id'];

        if(isset($_SESSION['subadmin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: ../subadminlogin.php"); 

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
                            <h2 class="pageheader-title">Create Post</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Create Post</a></li>
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

                                            <?php  $id=$_SESSION['subadmin_id']; ?>
                                            <input type="" name="subadmin_id" style="display: none;" value="<?php echo $id; ?>">
                                           
                                            <label for="inputUserName">Create Post</label>
                                           <textarea class="form-control" rows="5" id="comment" name="body"></textarea>
                                        </div>

                                        
                                       
                                      
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                              
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="addpost" class="btn btn-space btn-primary">Submit</button>
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