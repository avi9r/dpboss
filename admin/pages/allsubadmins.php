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
                            <h2 class="pageheader-title">All Sub-Admins</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sub-Admins</a></li>
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

                 $sql="SELECT * FROM subadmin";

                 $res=mysqli_query($db,$sql) or die(mysqli_error($db));
         		
                
                 ?>

                 <?php require_once('edit_delete.php');?>


                 <?php

				if (isset($_SESSION['message'])):
				?>



				<div class="alert alert-<?=$_SESSION['msg_type']?>">
					
					<?php

					echo $_SESSION['message'];
					unset($_SESSION['message']);
					
 
					?>
				</div>
			<?php
			ob_get_clean();
						exit;
						    endif  ?>
             
                <div class="row">
                	<a href="../pages/addsubadmin.php" class="btn btn-success ml-auto" >Add Subadmin</a>
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
                                                <th>Full Name</th>
                                                <th>Username</th>
                                                <th>Mobile</th>
                                             
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	 <!-- output data of each row -->
    					<?php while($row = $res->fetch_assoc()) {  ?>
                                            <tr>
                                                <!--  -->
                                                <td><?php echo $row['fullname']  ?></td>
                                                <td><?php echo $row['username']  ?></td>
                                                <td><?php echo $row['mobile']  ?>
                                                	

                                                	<div class="dropdown ml-auto float-right">
	<a class="toolbar" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="mdi mdi-dots-vertical"></i>
	</a>
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-160px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">

		<!--  -->

		<a class="dropdown-item" href="allsubadmins.php?editsubadmin=<?php echo $row['subadmin_id']; ?>">Edit</a>
		<a class="dropdown-item" href="allsubadmins.php?deletesubadmin=<?php echo $row['subadmin_id']; ?>">Delete</a>
		
	</div>
</div>
                                                </td>
                                               
                                                
                                            </tr>
                                          
                                         <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Mobile</th>
                                             
                                                
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