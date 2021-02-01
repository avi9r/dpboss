<?php

require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');

$row['admin_id']=$_SESSION['admin_id'];
if(isset($_SESSION['admin_id'])){  
    $_SERVER["PHP_SELF"];
} else {             
    header("Location: ../login.php"); 
} 

if(isset($_POST['interval_schedule'])){
    //print_r($_POST);exit;
    $qry = "INSERT INTO `spin_schedule`( `game_date`, `type`, `start_time`, `end_time`, `interval_time`, `status`) 
            VALUES('$_POST[game_date]','$_POST[game_type]','$_POST[s_time]','$_POST[e_time]','$_POST[interval_time]','1')";
    if(mysqli_query($db,$qry)){
    $end =$_POST['e_time'];
    $start = $_POST['s_time'];
    $interval = $_POST['interval_time'];
    $tot_hrs = (strtotime($end) - strtotime($start)) / 3600;
    $spin_start_time = $start;
    $x=$interval*60;
    $get_id = "SELECT max(id) as flag FROM `spin_schedule`";
    $res =  mysqli_query($db, $get_id   ) or die(mysqli_error($db));
    $get = $res->fetch_assoc();

    for($i=0; $i< ($tot_hrs/$interval); $i++){
        $qry2 = "INSERT INTO `spin_manage`(`schedule_id`, `date`, `time`, `type`) 
            VALUES($get[flag],'$_POST[game_date]','$spin_start_time','$_POST[game_type]')";
            //echo $qry2;die;
        mysqli_query($db,$qry2) or die(mysqli_error($db));
        $spin_start_time =strtotime($spin_start_time);
        $spin_start_time = date("H:i", strtotime($x.'minutes', $spin_start_time));
        //echo $spin_start_time;die;
    }
    }
}elseif(isset($_POST['fix_schedule'])){
    //print_r($_POST);exit;
    $qry = "INSERT INTO `spin_schedule`(`game_date`, `type`, `status`) VALUES('$_POST[game_date]','$_POST[game_type]','1')";
    mysqli_query($db,$qry) or die(mysqli_error($db));
    $get_id = "SELECT max(id) as flag FROM `spin_schedule`";
    $res =  mysqli_query($db, $get_id   ) or die(mysqli_error($db));
    $get = $res->fetch_assoc();
    $qry2 = "INSERT INTO `spin_manage`(`schedule_id`, `date`, `time`, `type`, `lucky_num`) 
            VALUES($get[flag], '$_POST[game_date]','$_POST[spin_time]','$_POST[game_type]','$_POST[lucky_num]')";
    mysqli_query($db,$qry2) or die(mysqli_error($db));

}
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
               <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
               
               <label for="spinner">Game Date:</label>
                    <input type="date" id="spinner" name="game_date" required>
               
                <label for="type">Game type:</label>
                    <select name="game_type" id="game_type" required>
                        <option value="">Select Game type</option>
                        <option value="interval">Interval</option>
                        <option value="fix">Fix Time</option>
                    </select>
                   
                    <button type="button" class="btn-primary" id="get_form">Go</button>
                    <div class="interval" style="display: none;">
                        <label for="spinner">Start Time:</label>
                        <input type="time" id="s_time" name="s_time" >
                        <label for="spinner">End Time:</label>
                        <input type="time" id="e_time" name="e_time" >
                        <label for="spinner">Intervel Time:</label>
                        <select name="interval_time" id="interval_time" >
                            <option value="">Select Interval Time</option>
                            <option value="0.5">00:30 Hr</option>
                            <option value="1">01:00 Hr</option>
                            <option value="1.5">01:30 Hr</option>
                            <option value="2">02:00 Hr</option>
                            <option value="2.5">02:30 Hr</option>
                            <option value="3">03:00 Hr</option>
                            <option value="3.5">03:30 Hr</option>
                            <option value="4">04:00 Hr</option>
                            <option value="4.5">04:30 Hr</option>
                            <option value="5">05:00 Hr</option>
                        </select>
                        <div>
                            <input type="submit" name="interval_schedule" class="btn-success" value="Schedule">
                        </div>
                    </div>
                    <div class="fix_time" style="display: none;">
                        <label for="spinner">Start Time:</label>
                        <input type="time" id="spin_time" name="spin_time" >
                        <label for="spinner">Lucky Number:</label>
                        <input type="number" min="0" max="99"  id="lucky_num" name="lucky_num" >
                        <div>
                            <input type="submit" name="fix_schedule" class="btn-success" value="Schedule">
                        </div>
                    </div>
               <div>
               
               </div>
               </form>
            </div>

    
        </div>
            
    </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<script>
				$('#get_form').click(function(){
                    var type= $('#game_type').val();
                    if(type == 'interval'){
                        $('.fix_time').hide();
                        $('.interval').show();
                    }else if(type == 'fix')
                    {
                        $('.interval').hide();
                        $('.fix_time').show();
                    }else{
                        alert("Please select game type..!")
                    }
                    
                });
            </script>
            <!-- ============================================================== -->
            <!-- End Forums Start -->
            <!-- ============================================================== -->



<!-- footer -->
<?php include 'footer.php'; ?>