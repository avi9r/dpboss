  
<?php
   ob_start();

  require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Calcutta');
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
$row['admin_id']=$_SESSION['admin_id'];

        if(isset($_SESSION['admin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                  
 header("Location: ../login.php"); 

 
                   }  ?>

<!-- navbar -->
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

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <input type="text" name="id" value="<?php echo $_GET['block']; ?>" hidden >
  <div class="form-group">
  <label>Blocking Reason</label>
    <input type="text" name="msg" id="msg" required>

    <label for="exampleFormControlSelect1">Blocking Time</label>
    <select name="time" id="time" required>
	<option value="">Select</option>
      <option value="1">1 Hour</option>
     
      <option value="24">1 Day</option>
	  <option value="0"> Permanent</option>
    </select>
  </div>
  
      <button type="submit" name="blockuser" class="btn btn-primary">Block</button>
   
</form>
<?php 
//print_r($_SESSION);


//echo $x;die;
if(isset($_POST['blockuser'] ) && $_POST['id']!= null) {

	$id = $_POST['id'];
	$x=$_POST['time'];
	$y=$_POST['msg'];
	if($x == 0){
		$t==0;
	}else{
    $t= date("YmdHi", strtotime("+$x hours"));
	}
	//$y= date("Y-m-d H:i");
	//echo $t;die;
	$sql = "UPDATE myguests SET status='0', timer='".$t."' WHERE id='".$id."'";
	//echo $sql;die;
	mysqli_query($db, $sql) or die(mysqli_error($db));
	
	$p= $x." "."Hr";
	$t2= date("y/m/d H:m");
	$q= "INSERT INTO `block_user`(`user_id`, `block_msg`, `block_time`,`blocked_for`) 
		VALUES ('$id','$y','$t2', '$p')";
	mysqli_query($db, $q) or die(mysqli_error($db));
	header("location: block.php");
	
}


?>

