<?php
date_default_timezone_set('Asia/Kolkata');
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
                          <h2 class="pageheader-title">All Lottery</h2>
                          <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                          <div class="page-breadcrumb">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Lottery</a></li>
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

               // $sql="SELECT * FROM comments";
                // $sql="SELECT * from comments  left outer join myguests left outer join fakeuser left outer join posts ORDER BY comment_id DESC";


                 $sql="SELECT * from lottery_name ORDER BY lottery_id";

               $res=mysqli_query($db,$sql) or die(mysqli_error($db));
               
              
               ?>

              


            
           
              <div class="row">
              <a href="../pages/addsubadmin.php" class="btn btn-success ml-auto" >Add Lottery</a>
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
                              <div class="table-responsive gfgh">
                          
                                  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Sl No.</th>
                                              <th>Lottery Name</th>
                                              <th>Start Time</th>
                                              <th>End Time</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                           
                                              
                                          </tr>
                                      </thead>

                                      <tbody>
                                           <!-- output data of each row -->
                      <?php while($row = $res->fetch_assoc()) { 
                          $dt = new DateTime($row['strt_time']);
                          $dt2 = new DateTime($row['end_time']);

                         
                          $time = $dt->format('H:i A');
                          $time2 = $dt2->format('H:i A');
                          ?>
                                          <tr>
                                              <!--  -->
                                              <td><?php echo $row['lottery_id']  ?></td>
                                              <td><?php echo $row['l_name']  ?></td>
                                              <td><?php echo $time;  ?></td>
                                              <td><?php echo $time2; ?></td>
                                              
                                              <td> <?php  if (1 == $row['status']) {?>
                    
                                            <a class="btn-success mr-25" >
                                        <i class="badge badge-success">Active</i>
                                    </a>              
                                            
                                    <?php    } else {?>  
                                
                                        <a class=" btn-danger ml-2" >
                                                    <i class="badge badge-danger">InActive</i>
                                                </a>
      
                                        <?php } ?></td>


                                                  
                                              <td>
      <a class="btn btn-danger" href="allsubadmins.php?deletesubadmin=<?php echo $row['comment_id']; ?>">Delete</a>
      
                                              </td>

          
                                             
                                              
                                          </tr>
                                        
                                       <?php  } ?>
                                      </tbody>
                                      <tfoot>
                                           <tr>
                                              <th>Sl No.</th>
                                              <th>Lottery Name</th>
                                              <th>Start Time</th>
                                              <th>End Time</th>
                                              <th>Status</th>
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
      <?php include 'footer.php'; ?>