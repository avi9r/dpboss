<?php
   ob_start();

require_once('../connect.php');
session_start();
$row['id']=$_SESSION['id'];


        if(isset($_SESSION['id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                  
 header("Location: ../block_login.php"); 


                   } 
        

if (isset($_POST['adminlogin'])) {
    
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
       
       
            $sql="SELECT * FROM block_admin WHERE username='$admin_email' && password='$admin_password'";
            $sql_id="SELECT id FROM block_admin WHERE username ='$admin_email'";
            
             $res=mysqli_query($db,$sql) or die(mysqli_error($db));
            $result = mysqli_query($db,$sql_id) or die(mysqli_error($db));
             if (mysqli_num_rows($res) > 0) {
               
                $row =$result->fetch_assoc();
                // echo $row['admin_id'];
                $_SESSION['id']=$row['id'];
                

                
             
?>
        
   


<!-- navbar -->
       <?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
         



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
                            <h2 class="pageheader-title">All Users</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Users</a></li>
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

                 $sql="SELECT * FROM myguests";

                 $res=mysqli_query($db,$sql) or die(mysqli_error($db));
				?>
				

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
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Mobile</th>
                                                <th>status</th>
                                                <th>Date of birth</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	 <!-- output data of each row -->
    					<?php 
					
						while($row = $res->fetch_assoc()) { 
						//(isset({
								$t = date('YmdHi');
										        $x = $row["timer"];
										       //echo $x;
									if($row['status']==0 && $t >= $x){
									   
									$qry= "UPDATE myguests SET status = '1' WHERE id = '$row[id]'";
  
                                           // echo $query;
             
                                            mysqli_query($db, $qry) or die(mysqli_error($db)); 
                                           
						}// }
						
						?>
                                            <tr>
                                                <!--  -->
                                                <td><?php echo $row['name']  ?></td>
                                                <td><?php echo $row['username']  ?></td>
                                                <td><?php echo $row['mobile']  ?></td>
                                                <td>
                                                     <?php if ($row['status'] == 1) {?>

                                                    <a class="btn btn-danger mr-25 ml-2" href="allusers.php?disapprove=<?php echo $row['id']; ?>">
                        <i class="fa fa-thumbs-down"></i>
                                            </a>
                                        <?php }else{ ?>
                                            <a class="btn btn-success mr-25" href="allusers.php?approve=<?php echo $row['id']; ?>">
            <i class="fa fa-thumbs-up"></i>
                                        </a>
                                        <?php } ?>
                                            &nbsp;&nbsp;
                                            <?php if ($row['status'] == 1) {?>
                                               <a class="btn-success mr-25">
            <i class="badge badge-success">Active</i>
                </a>
                                      <?php      }else{ ?>
 
                                            <a class=" btn-danger ml-2" >
                        <i class="badge badge-danger">InActive</i>
                    </a><?php } ?>
                                        </td>
                                                <td><?php echo $row['dob']   ?>
                                    
                                                	
                                                
<div class="dropdown ml-auto float-right">
	<a class="toolbar" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="mdi mdi-dots-vertical"></i>
	</a>
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-160px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">

		<!--  -->

		<a class="dropdown-item" x-placement="bottom-end" href="block_by.php?block=<?php echo $row['id']; ?>">Block</div>
		
		
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
                                                <th>Status</th>
                                                <th>Date of birth</th>
                                                
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
      <?php include 'footer.php'; 
	  }else{
				 
                 echo ' 
				 
  <span style="position:absolute;top:0;left:50%;transform:translateX(-50%);color:red"><span class="" onclick="this.parentElement.style.display="none";></span> 
  <strong>Invalid!  Username Or Password.</strong></span>
';
             }
	  
	  
}
	  ?>