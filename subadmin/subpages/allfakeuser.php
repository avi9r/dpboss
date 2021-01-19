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
                            <h2 class="pageheader-title">All Fake Users</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Fake Users</a></li>
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

                <?php

                 $sql="SELECT * FROM fakeuser";

                 $res=mysqli_query($db,$sql) or die(mysqli_error($db));
				?>
				

				

             
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                                <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>Username</th>
                                                <th>Mobile</th>
                                                <th>Today's Post</th>
                                                <th>Total Post</th>
                                                <th>Last Posted</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	 <!-- output data of each row -->
    					<?php while($row = $res->fetch_assoc()) {  ?>
                                            <tr>
                                                <!--  -->
                                                <td><?php echo $row['firstname']  ?></td>
                                                <td><?php echo $row['lastname']  ?></td>
                                                <td><?php echo $row['username']  ?></td>
                                                <td><?php echo $row['mobile']  ?></td>
                                               
                                            </tr>
                                          
                                         <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                 <th>Username</th>
                                                <th>Mobile</th>
                                                <th>Today's Post</th>
                                                <th>Total Post</th>
                                                <th>Last Posted</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
               
            </div>
            <!-- ============================================================== -->


</div>

        <!-- /Content Section -->


        


        <!-- footer -->
            <!-- ============================================================== -->
      <?php include '../subfooter.php'; ?>