<?php

require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');

$row['admin_id']=$_SESSION['admin_id'];


?>
<?php include 'header.php';?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
<?php include 'sidebar.php';?>

<div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
					
                        <h2 class="pageheader-title">Schedule Spin</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Spinner</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Schedule Spin</a></li>

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
            <!-- Forums Start -->
            <!-- ============================================================== -->
            <div class="guessing-dashboard container-fluid">
               <!-- forrm goes hear -->
            </div>

    
        </div>
            
    </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<script>
				
            </script>
            <!-- ============================================================== -->
            <!-- End Forums Start -->
            <!-- ============================================================== -->



<!-- footer -->
<?php include 'footer.php'; ?>