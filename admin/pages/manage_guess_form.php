<?php

require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');

$row['admin_id']=$_SESSION['admin_id'];



//code for auto posting winners=====================
$c_time = date('h:i');
//if($c_time == 08:00)
if($c_time == 08:00 || $c_time == 08:01){
	
	$qry = "SELECT myguests.*,posts.*,lottery_name.* FROM myguests 
                            LEFT JOIN posts ON myguests.id = posts.author 
                            LEFt JOIN lottery_name ON posts.lottery_id = lottery_name.lottery_id 
                            WHERE posts.lottery_id = 2  and posts.body LIKE '%9%'  ";
	$filter_postings_array = array();
            $filter_postings = mysqli_query($db,$qry) or die(mysqli_error($db));
            if($filter_postings->num_rows > 0){
                while($posting = $filter_postings->fetch_assoc()){
                    $filter_postings_array[] = $posting;
                }
            }
			//echo $qry;die;												
	$body = "";
                $admin_id = $_SESSION["admin_id"];
				//print_r( $filter_postings);die;
                foreach( $filter_postings as $posting ){
                    $body .= "<p>" . $posting['name'] . "</p>";
                }
				//echo $body;die;
                $body .= '<p class="congrats hwq" style="display: block !important;">Congratulation Winners</p>';
                $sql_admin_insert = "INSERT INTO posts (body, admin_id) 
                                            VALUES('$body', $admin_id ) ";
				//echo $sql_admin_insert;die;					
                mysqli_query($db,$sql_admin_insert) or die(mysqli_error($db)); 
}
//autoposting end======================



if(isset($_SESSION['admin_id'])){  
    $_SERVER["PHP_SELF"];
} else {             
    header("Location: ../login.php"); 
}  
$time = date('h:i:s', time());
// $sql_lottery = "SELECT * FROM lottery_name WHERE '$time' >= strt_time AND '$time' < end_time AND status = 1 ";
$sql_lottery = "SELECT * FROM lottery_name WHERE status = 1 ";
$lotteries = mysqli_query($db,$sql_lottery) or die(mysqli_error($db));

$sql="SELECT * from posts p left outer join myguests q on q.id=p.author 
				left outer join fakeuser r on r.fakeid=p.fakeuser 
				left outer join admin s on s.admin_id=p.admin_id 
                inner join lottery_name on p.lottery_id=lottery_name.lottery_id
                left outer join subadmin t on t.subadmin_id=p.subadmin_id order by post_id DESC";


$postings = mysqli_query($db,$sql) or die(mysqli_error($db));
$filter = false;

if( !empty($_POST) ){    

    if( isset($_POST['filter']) ){
        $filter = true;
        $where = array();
        foreach($_POST as $key => $param){        
            if( !empty($_POST[$key]) ){
                if( $key == 'lottery' ){
                    $where[] = " posts.lottery_id = $param ";
                }
                if( $key == 'value1' || $key == 'value2' ){
                    $where[] = " posts.body LIKE '%$param%' ";
                }
                if( $key == 'date' ){
                    $where[] = " posts.post_time LIKE '%$param%' ";
                }            
            }
        }

        $_SESSION['filter_postings'] = false;
        if(count($where) > 0){
            $sql_filter = "SELECT myguests.*,posts.*,lottery_name.* FROM myguests 
                            LEFT JOIN posts ON myguests.id = posts.author 
                            LEFt JOIN lottery_name ON posts.lottery_id = lottery_name.lottery_id 
                            WHERE ";
        
            $WHERE = implode(" AND ", $where);
            $sql_filter .= $WHERE;
            $sql_filter .= " AND posts.admin_id IS NULL";

            $filter_postings_array = array();
            $filter_postings = mysqli_query($db,$sql_filter) or die(mysqli_error($db));
            if($filter_postings->num_rows > 0){
                while($posting = $filter_postings->fetch_assoc()){
                    $filter_postings_array[] = $posting;
                }
            }
            $_SESSION['filter_postings'] = $filter_postings_array;            
        }
    }

    if( isset($_POST['send_congrats']) || isset($_POST['send_congrats_to_all']) ){

        $count = 0;
        $congrats_text = $_POST['congrats_text'];        
        if(!empty($_SESSION['filter_postings'])){
            $filter_postings = $_SESSION['filter_postings'];
            $count = count($filter_postings);
        }
        if( !empty($_POST['checkbox']) ){
            $checks = $_POST['checkbox'];            
            $filter_postings = array_filter($filter_postings, function($posting) use ($checks){
                return in_array($posting['post_id'], $checks);
            });
            $count = count($filter_postings);
        }
        if($count > 0){

            if( isset($_POST['send_congrats']) ){
                foreach( $filter_postings as $posting ){
                    $body = $posting['body'] . '<p class="congrats hwq" style="display: block !important;">'.$_POST['congrats_text'].'</p>';
					//echo $body;die;	
                    $author = $posting["author"];
                    $lottery =$posting["lottery_id"];
                    $admin_id = $_SESSION["admin_id"];
                    $publication_status = $posting["publication_status"];;
                    $sql_admin_insert = "INSERT INTO posts (body, author, admin_id,lottery_id, publication_status) 
                                            VALUES('$body',$author, $admin_id,$lottery, $publication_status ) ";
                    mysqli_query($db,$sql_admin_insert) or die(mysqli_error($db));
                }
            }

            if( isset($_POST['send_congrats_to_all']) ){
                $body = "";
                $admin_id = $_SESSION["admin_id"];
				//print_r( $filter_postings);die;
                foreach( $filter_postings as $posting ){
                    $body .= "<p>" . $posting['name'] . "</p>";
                }
                $body .= '<p class="congrats hwq" style="display: block !important;">'.$_POST['congrats_text'].'</p>';
                $sql_admin_insert = "INSERT INTO posts (body, admin_id) 
                                            VALUES('$body', $admin_id ) ";
				//echo $sql_admin_insert;die;					
                mysqli_query($db,$sql_admin_insert) or die(mysqli_error($db));                
            }

        }
    }
    
    
}
if( isset($_POST['delete_post']) ){
	
		$del_post = "DELETE FROM posts WHERE post_id = '$_POST[abc]' ";
		//echo $del_post;die;
		 mysqli_query($db,$del_post) or die(mysqli_error($db));
		 header("location: manage_guess_form.php");

}


?>

   

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
					
                        <h2 class="pageheader-title">All Posts</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Posts</a></li>
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
                    <div class="card my-card">
                        <div class="row pt-3">
                            <div class="col-12 text-left">
                                <h4>Search Forum</h4>
                                <hr>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="exampleFormControlSelect1">Search String</label>
                                <select class="form-control" name="lottery" id="exampleFormControlSelect1">
                                    <option value="">Select Lottery</option>
                                    <?php while($lottery = $lotteries->fetch_assoc()){ ?>
                                        <option value="<?= $lottery['lottery_id'] ?>"><?= $lottery['l_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="value1">Value 1</label>
                                <input type="text" name="value1" class="form-control" id="value1" placeholder="">
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="value2">Value 2</label>
                                <input type="text" name="value2" class="form-control" id="value2" placeholder="">
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="">
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" name="filter" class="btn btn-success w-25">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                    <div class="card my-card">
                        <div class="row">
                            <div class="col-12 text-left">
                                <h4>Delete Multiple</h4>
                                <hr>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <select class="form-control" id="delete">
                                    <option selected disabled>-- select --</option>
                                    <option value="date">date</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <button type="submit" class="btn btn-danger w-100">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card my-card">
                    <div class="d-flex justify-content-between">
                        <h4>Manage Guessing Forum</h4>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="selectall">
                            <label class="custom-control-label" for="selectall">Select All</label>
                        </div>
                    </div>
                    <hr>
                    <?php if($filter){ ?>

                        <?php if(count($filter_postings_array) > 0){ ?>
                            
                            <form method="POST" class="" action="<?= $_SERVER['PHP_SELF'] ?>">

                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <input type="text" name="congrats_text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="send_congrats" class="btn btn-sm btn-success">Send</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="send_congrats_to_all" class="btn btn-sm btn-success">Send Users List</button>
                                    </div>
                                </div>
                            

                                <?php foreach($filter_postings_array as $posting){ 
                                    $dt = new DateTime($posting['post_time']);
                                    $date = $dt->format('d/m/Y');
                                    $time = $dt->format('H:i A');    
                                ?>
                                
                                    <div class="border border-primary rounded my-card2" >
                                        <div class="panel panel-heading list-group-item-primary p-2 text-left">
                                            <?= $posting['name'] ?> - posted on
                                            (<?php echo $date . ' ' .$time ?>)
                                        </div>
                                        <div class="panel-body text-center pt-2">
                                            <p><?= $posting['l_name'] ?></p>
                                            <p style="margin-top:10px;"><?= $posting['body'] ?></p>                                        
                                            <p style="margin-top:10px;">GoodLucKall</p>
                                        </div>
                                        <div class="panel-footer d-flex justify-content-between list-group-item-secondary p-2">
                                            <div>
											
                                                <a class="btn btn-warning">Edit</a>
                                                <a class="btn btn-danger" href="#">Delete</a>
                                            </div>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="checkbox[]" value="<?= $posting['post_id']; ?>" class="custom-control-input" id="switch<?= $posting['post_id'] ?>">
                                                <label class="custom-control-label" for="switch<?= $posting['post_id'] ?>"></label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </form>

                        <?php } else { ?>
                            <p>No Records Found</p>
                        <?php } ?>

                    <?php } else { ?>

                        <?php 
                            while($posting = $postings->fetch_assoc()){                             
                                $dt = new DateTime($posting['post_time']);
                                $date = $dt->format('d/m/Y');
                                $time = $dt->format('H:i A');    
                        ?>
                            <div class="border border-primary rounded my-card2" >
                                <div class="panel panel-heading list-group-item-primary p-2 text-left">
                                    <?= $posting['name'] ?> - posted on
                                    (<?php echo $date . ' ' .$time ?>)
                                </div>
                                <div class="panel-body text-center pt-2">
                                    <p><?= $posting['l_name'] ?></p>
                                    <p style="margin-top:10px;"><?= $posting['body'] ?></p>
                                    <!-- <p>8 - 116/279</p>
                                    <p>GoodLucKall</p> -->
                                </div>
                                <div class="panel-footer d-flex justify-content-between list-group-item-secondary p-2">
                                    <div>
									<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
											<input type="hidden" class="vala" name="abc" value="<?php echo $posting['post_id']; ?>">
                                        	<a href="edit.php?po_id=<?php echo $posting['post_id']; ?>" class="btn btn-warning" >Edit</a>
                                        <input type="submit" name="delete_post" class="btn btn-danger " id="delete-btn" value="Delete">
										</form>
                                    </div>
                                    <!-- <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch1">
                                        <label class="custom-control-label" for="switch1"></label>
                                    </div> -->
                                </div>
                            </div>
                        <?php } ?>

                    <?php } ?>
                
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

        </div>
            
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->

<!-- /Content Section -->


<!-- footer -->
<?php include 'footer.php'; ?>
