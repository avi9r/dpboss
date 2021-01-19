  <?php
ob_start();
  require_once('../../connect.php');
session_start();

$row['admin_id']=$_SESSION['admin_id'];

        if(isset($_SESSION['admin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: ../login.php"); 


                   }  ?>


   

 <?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
        <?php include 'sidebar.php';?>



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
"SELECT m.name,n.firstname,repost,repost_id,b.post_id,b.body from reposts p left outer join myguests m on m.id=p.user_id left outer join fakeuser n on n.fakeid=p.user_id left outer join posts b on b.post_id=p.post_id ORDER BY repost_id DESC";
                 $sql="SELECT * FROM posts p left outer join myguests m on m.id=p.author left outer join fakeuser n on n.fakeid=p.fakeuser left outer join admin a on a.admin_id=p.admin_id left outer join subadmin s on s.subadmin_id=p.subadmin_id";

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
                                               
                                                <th>Post</th>
                                                <th>user</th>
                                                <th>fakeuser</th>
                                                <th>subadmin</th>
                                                <th>admin</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	 <!-- output data of each row -->
    					<?php while($row = $res->fetch_assoc()) {  ?>
                                            <tr>
                                                <!--  -->
                                                <td><?php echo $row['body']  ?></td>
                                                <td><?php echo $row['name']  ?></td>
                                                <td><?php echo $row['firstname']  ?></td>
                                                <td><?php echo $row['fullname']  ?></td>
                                                <td><?php echo $row['admin_name']  ?></td>
                                                <td><a class="btn btn-danger">Delete</a></td>
                                     
                                               
                                            </tr>
                                          
                                         <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                     <th>Post</th>
                                                <th>user</th>
                                                <th>fakeuser</th>
                                                <th>subadmin</th>
                                                <th>admin</th>
                                                <th>Action</th>
                                                
                                        
                                                
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
     <?php include 'footer.php'; ?>