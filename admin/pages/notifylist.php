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
                            <h2 class="pageheader-title">All Users Notifications</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Notifications</a></li>
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
                
                $sql="SELECT * FROM devicestatus";

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
                                    
                                        <form action="sendnotify.php" method="post">
                                        	
                                            <table border="1" style="width:50%">

                                            <tr>
                                            <th>Select</th>
                                            <th>Users Name(Registered)</th>
                                            </tr>
                                            <?php
                                            while($row = $res->fetch_assoc()) { 

                                                echo "<tr>";
                                                echo "<td style='width:5%'><input type='checkbox' class='checkbox' name='checkbox[]' value='".$row['fb_token']."'></td><td style='width:10%'>".$row['username']."</td>";
                                                echo "<td style='width:5%;display:none'><input type='text' class='checkbox' name='deviceid' value='".$row['device_id']."'></td>";
                                                echo "</tr>";
                                             }
                                            ?>
                                            
                                            </table>
                                 <input type="checkbox" class="chk_boxes" label="check all"  />check all
                                 



                                            <input class="row" type="text" name="title" style="width:30%;margin-left:20px;margin-top:20px" placeholder="title"/>
                                            <input class="row" type="text" name="body" style="width:50%;margin-left:20px;margin-top:20px" placeholder="body"/>
                                            
                                            <input type="submit" id="send" name="send" value="Send" />
                                                
                                         </form>
                                       
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


 
<script type="text/javascript">
    $(function() {
    $('.chk_boxes').click(function() {
        $('.checkbox').prop('checked', this.checked);
    });
});
</script> 