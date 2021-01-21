<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<!-- style -->


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
	.my-thankyou-modal {
		background-color: #0000008c;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 100%;
		height: 100%;
		display: none !important
	}

	.my-thankyou-modal p {
		margin: 0;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: #fff;
		padding: 10px 20px;
		border-radius: 6px;
		box-shadow: 0px 0px 10px -5px #000
	}

	.my-thankyou-modal p span {
		background-color: #fc3549;
		font-size: 19px;
		text-align: center;
		height: 30px;
		width: 30px;
		line-height: 1.5;
		position: absolute;
		border-radius: 96px;
		color: #fff;
		right: 0px;
		top: -105%;
		transform: translate(50%, 100%);
		box-shadow: 0 0 10px -2px #000;
		transition: all .3s
	}

	.my-thankyou-modal p span:hover {
		transform: scale(1.09) translate(50%, 100%)
	}

	.jsjs p,
	.jsjs {
		display: block !important
	}

	.card-body p{
white-space: pre-wrap;
}
</style>

<?php
require_once('connect.php');
date_default_timezone_set('Asia/Kolkata');
session_start();



//code for auto posting winners=====================
$c_time = date('h:i');
//if($c_time == 08:00)
if($c_time == '08:00' || $c_time == '08:01'){
	
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

$a = "";
if (isset($_SESSION['id'])) {
	$check = "Select count(*) as num from myguests where id ='" . $_SESSION['id'] . "'";
	$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
	$data = $res_sql->fetch_assoc();
	if ($data['num'] > 0) {
		$sql_query = "Select * from myguests where id ='" . $_SESSION['id'] . "'";
	} else {
		$sql_query = "Select * from fakeuser where fakeid ='" . $_SESSION['id'] . "'";
	}
	$res_sql = mysqli_query($db, $sql_query) or die(mysqli_error($db));
	$row_res = $res_sql->fetch_assoc();
	// echo $row_res["status"];
}






if (isset($_POST['submitpost']) && $row_res["status"] == 1) {
	$body = $_POST['body'];
	$author = $_POST['author'];
	$lottery = $_POST['lottery'];
	//echo $_SESSION['id'];die;
	if($author == $_SESSION['id']){
		$query = "INSERT INTO posts (body,author,lottery_id) VALUES('$body','$author','$lottery')";
	//	echo $query;die;

	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	$_SERVER['PHP_SELF'];
	echo '
			  <script>
function myFunction() {
  alert("The form was submitted");
}
</script>';
	}else{
		echo '
			  <script>
function myFunction() {
  alert("Bad Luck Hacker!");
}
</script>';
	}

	
} elseif (isset($_POST['submitfakepost'])) {
	$body = $_POST['body'];
	$fakeuser = $_POST['fakeid'];
//	echo $_SESSION['id'].$fakeuser;die;
	//$lottery = $_POST['lottery'];
	if($fakeuser == $_SESSION['id']){
	$query = "INSERT INTO posts (body,author) VALUES('$body','$fakeuser')";
//echo $query;die;
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	$_SERVER['PHP_SELF'];
	echo '
			  <script>
function myFunction() {
  alert("The form was submitted");
}
</script>';
	}else{
		echo '
			  <script>
function myFunction() {
  alert("Bad Luck Hacker!");
}
</script>';
	}
} elseif (isset($_SESSION['id']) != null && $row_res["status"] == 0) {
	echo "
	<!-- modal -->
<div class='my-thankyou-modal'>
	<p>
		Your account is blocked
		
	</p>
</div>
<!-- script -->
<script>
	$('.my-thankyou-modal').addClass('jsjs');
	$('.thank-modal-close').click(function(){
		$('.my-thankyou-modal').removeClass('jsjs');
	});
</script>";
	// $_SERVER['PHP_SELF'];
	// 	echo '<div>  <div class="alert">
	//   <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 

	// </div>
	// </div>';
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>DPBOSS.NET1 | GUESSING FORUM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

	<style>
		.overlay {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			transition: opacity 500ms;
			visibility: hidden;
			opacity: 0;
		}

		.overlay:target {
			visibility: visible;
			opacity: 1;
		}

		.popup {
			margin: 70px auto;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			width: 30%;
			position: relative;
			transition: all 2s ease-in-out;
		}

		.popup .close {
			position: absolute;
			top: 20px;
			right: 30px;
			transition: all 200ms;
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			color: #333;
		}

		/* card body last para*/
		.card-body p:nth-last-child(2) {
			background-color: #f4f4f4;
		}

		.card-body br,
		.card-body p {
			display: none;
		}

		.card-body p.aaaa,
		.card-body p.bbbb,
		.card-body p.cccc,
		.card-body p.dddd,
		.card-body p.eeee {
			display: block !important;
			line-height: 20px;
		}

		.card-body p:nth-last-child(2) {
			background-color: #f4f4f4;
			padding: 5px 10px 5px;
			margin: 5px 0 0;
		}


		card-body p:nth-last-child(2) {
			background-color: #f4f4f4
		}

		.card-body p {
			line-height: 20px;
		}

		.card-body p br,
		.card-body br,
		.card-body p {
			display: none !important
		}

		.card-body p.aaaa,
		.card-body p.bbbb,
		.card-body p.cccc,
		.card-body p.dddd,
		.card-body p.eeee {
			display: block !important;
			line-height: 20px;
			background-color: transparent;

		}

		/* .card-body p:not(.dddd):nth-last-child(2) { */


		/* background-color: #f4f4f4 ;
	padding: 5px 10px 5px;
	margin: 5px 0 0 */
		/* } */

		.overlay {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, .7);
			transition: opacity 500ms;
			visibility: hidden;
			opacity: 0
		}

		.overlay:target {
			visibility: visible;
			opacity: 1
		}

		.popup {
			margin: 70px auto;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			width: 30%;
			position: relative;
			transition: all 2s ease-in-out
		}

		.popup .close {
			position: absolute;
			top: 20px;
			right: 30px;
			transition: all 200ms;
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			color: #333
		}

		.card-body p:nth-last-child(2) {
			background-color: transparent
		}

		.card-body br,
		.card-body p {
			display: none
		}

		.card-body p.aaaa,
		.card-body p.bbbb,
		.card-body p.cccc,
		.card-body p.dddd,
		.card-body p.eeee {
			display: block !important;
			line-height: 20px;
			background-color: #f4f4f4
		}

		.card-body p:nth-last-child(2) {
			background-color: transparent;
			padding: 5px 10px 5px;
			margin: 5px 0 0
		}

		card-body p:nth-last-child(2) {
			background-color: transparent
		}

		.card-body p {
			line-height: 20px
		}

		.card-body p br,
		.card-body br,
		.card-body p {
			display: none !important
		}

		.card-body p.aaaa,
		.card-body p.bbbb,
		.card-body p.cccc,
		.card-body p.dddd,
		.card-body p.eeee {
			display: block !important;
			line-height: 20px;
			background-color: #f4f4f4;
			margin: 0;
		}

		.card-body p:not(.dddd):nth-last-child(2) {
			background-color: transparent;
			padding: 5px 10px 5px;
			margin: 5px 0 0
		}

		.card-body p:not(.dddd):nth-last-child(1) {
			background-color: transparent;
			padding: 5px 10px 5px;
			margin: 5px 0 0
		}

		.card-footer {
			padding: 0;
		}
		
		.congrats .hwq{
			display: block !important;
		}
	</style>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="top"></div>
	<!-- logo   -->
	<div class="logo-div">
		<a href="#">
			<img src="img/logo.png" alt="">
		</a>
	</div>
	<!-- logo   -->
	<!-- para1 -->
	<div class="para1">
		<p>
			DpBoss Guesing | Satta Matka | Matka Result | Kalyan Matka | Dpboss | Sattamatka.Com | Satta Matka Guessing |
			<a href="#" title="Satta matka chart">
				Satta Matka Charts
			</a>
			| Kalyan Main Milan Matka Bazar| Matka Game |
			<a href="#" title="Free Game Open To Close">
				Fix Matka Number
			</a>
			| Free Open To Close 17 | Satta King | DpBoss Matka Guessing | Satta Matka 143 Guessing |
		</p>
	</div>
	<!-- para1 -->
	<!-- forum-rules -->
	<div class="forum-rules">
		<div>
			<h4>Forum Rules</h4>
			<ul>
				<li>1. Don't Post Wrong Result.</li>
				<li>2. Dont Post Mobile Number Or Any Other Website Link.</li>
				<li>3. Post Your Guessing Daily.</li>
				<li>4. Don't Post More Than 4 Single Disit.</li>
				<li>5. Don't Use Abbusive Language In Forum.</li>
			</ul>
			<p>Follow All These Other Wise Your ID &amp; IP Would Be <span>Blocked Permanently.</span></p>
		</div>
	</div>
	<!-- forum-rules -->
	<!-- login -->

	<!-- message-box -->
	<form class="text-center" action="kalyan-guessing-forum.php" method="post" onsubmit="myFunction()">


		<div class="login-area">
			<h4>USER LOGIN AREA</h4>
			<?php
			if (isset($_SESSION['id'])) {
				$check = "Select count(*) as num from myguests where id ='" . $_SESSION['id'] . "'";
				//	echo $check;
				$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
				$data = $res_sql->fetch_assoc();
				if ($data['num'] > 0) {  ?>
					<select class="form-control" name="lottery" id="cars" required>
						<option value="">----- Select -----</option>
						<?php
						$time = date('H:i:s', time());
						$query_2 = "SELECT * FROM lottery_name WHERE '" . $time . "' >= strt_time AND '" . $time . "' < end_time ";
						echo $query_2;
						$res = mysqli_query($db, $query_2) or die(mysqli_error($db));
						while ($row = $res->fetch_assoc()) {
							// populate the options

							echo '<option value="' . $row['lottery_id'] . '">' . $row['l_name'] . '</option>';
						
						}
						?>
					</select>
			<?php
				}
			}
			?>
			<textarea rows="10" name="body" class="form-control" placeholder="Enter text here..." required></textarea>


			<!-- fixed-footer -->
			<div class="fixed-footer">
				<div>
				<a rel="nofollow" href="https://dpboss.net/" target="_blank">
						<i class="fas fa-home"></i>
						<span>Go to Home</span>
					</a>
				</div>
				<div>
					<a href="#">
						<i class="fas fa-clipboard-list"></i>
						<span>Guessing Forum</span>
					</a>
				</div>
				<div>
					<a href="#">
						<i class="fas fa-comments"></i>
						<span>Tricks Forum</span>
					</a>
				</div>
				<div>
					<a onClick="window.location.reload();">
						<i class="fas fa-sync"></i>
						<span>Refresh</span>
					</a>
				</div>
			</div>
			<!-- fixed-footer -->

			<?php

			if (isset($_SESSION['id'])) {
				$data['id'] = $_SESSION['id'];

				$check = "Select count(*) as num from myguests where id ='" . $_SESSION['id'] . "' and status ='1'";
				//	echo $check;
				$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
				$da = $res_sql->fetch_assoc();
				if ($data['num'] > 0) {
			?>
					<input type="text" name="author" id="myReadonlyInput" value="<?php echo $data['id']; ?>" style="display:none; ;">
					
					<input class="btn-aa my-btn22" name="submitpost" type="submit" value="SUBMIT"  />
					<?php		} else {
					$check = "Select count(*) as num from fakeuser where fakeid ='" . $_SESSION['id'] . "' and status ='1'";
					//	echo $check;
					$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
					$data1 = $res_sql->fetch_assoc();
					if ($data1['num'] > 0) {
					?> <input type="text" name="fakeid" id="myReadonlyInput" value="<?php echo $data['id']
																	?>" style="display:none; ;">

						<input class="btn-aa my-btn22" name="submitfakepost" type="submit" value="SUBMIT"  />
				<?php		} else {
						echo "<input class='btn-aa my-btn22' name='qwerty' type='submit' value='SUBMIT' disabled />";
					}
				}
			} else { ?>



				<a href="kalyan-login.php" class="btn-aa my-btn22" style="background-color: #e91e63;">LOGIN</a>
			<?php }  ?>


	</form>
	<!-- <a href="#" class="btn-bb my-btn22">SIGN UP NOW</a> -->
	<!-- extra features -->
	<div class="extra-feature">
		<h5>Extra feature</h5>
		<!-- <a href="#" class="btn-aa1 btn">Emoji</a> -->

		<a class="btn-aa1 btn" data-toggle="modal" data-target="#exampleModal">Emoji</a>
		<style>
			.modal-body {
				height: 60vh;
				overflow-y: scroll;
				overflow-x: hidden;
				margin-top: 10px;
			}

			.modal-open {
				padding-right: 0 !important;
			}
		</style>



		<a class="btn-bb1 btn" onclick="myFunction()">Special Offer</a>
		<a href="#" class="btn-cc1 btn">Search Users</a>
	</div>
	<!-- extra features -->
	</div>
	<!-- login -->
	<!-- quote-card-div -->
	<?php

	$sql = "SELECT * from special_offer order by offer_id DESC";
	//echo $sql;die;
	$res = mysqli_query($db, $sql) or die(mysqli_error($db));

	?>

	<div id="myDIV" style="display: none;">
		<?php

		if ($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {

				echo $row['details'];
			}
		}

		?>

	</div>


	<?php
	$limit = 25;

	if (isset($_GET["page"])) {
		$pn  = $_GET["page"];
	} else {
		$pn = 1;
	};

	$start_from = ($pn - 1) * $limit;


	$sql = "SELECT *   from posts p left outer join myguests q on q.id=p.author 
				left outer join fakeuser r on r.fakeid=p.author 
				left outer join admin s on s.admin_id=p.admin_id 
        left outer join lottery_name on p.lottery_id=lottery_name.lottery_id
				left outer join subadmin t on t.subadmin_id=p.subadmin_id where p.publication_status = 1 order by post_id DESC LIMIT $start_from, $limit";
	//echo $sql;die;

	$res = mysqli_query($db, $sql) or die(mysqli_error($db));

	$i = 1;
	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {

			$dt = new DateTime($row['post_time']);

			$date = $dt->format('d/m/Y');
			$time = $dt->format('h:i A');
			$post = $row['body'];

			$emojiQuery = "select * from emoticons";
			$res_emoji = mysqli_query($db, $emojiQuery) or die(mysqli_error($db));

			while ($roww = $res_emoji->fetch_assoc()) {

				$chars = $roww['emoji_name'];
				$imageTag = "<img src='img/emoji/" . $roww['image'] . "' />";
				$post = str_replace($chars, $imageTag, $post);
			}

	?>


			<div class="quote-card-div">
				<div class="my-card">
					<div class="card-head">
						<h4><?php
							$unamel = "Select username  from myguests where id ='" . $row['author'] . "'";
							//echo $unamel;die;
							$res_sqlq = mysqli_query($db, $unamel) or die(mysqli_error($db));
							$po = $res_sqlq->fetch_assoc();
							echo $po['username'];
							$uname = "Select username  from fakeuser where fakeid ='" . $row['author'] . "'";

							//echo $uname;die;
							$res_sql = mysqli_query($db, $uname) or die(mysqli_error($db));
							$data = $res_sql->fetch_assoc();
							echo $data['username'];
							echo $row['admin_name'];
							echo $row['fullname']; ?></h4>
						<h5><?php echo $date;
							echo "\n" . $time; ?></h5>
					</div>
					<div class="card-body">
						<?php
						//	echo "<p style='margin-top:10px' class=\"ffff\">" . nl2br($post) . "</p>";
						//echo $row['fakeuser'];die;
						// if ($row['fakeuser'] != null) {

						// 	//echo "<p style='margin-top:10px' class=\"ffff\">" . nl2br($post) . "</p>";
						// } elseif (isset($row['l_name'])) {

						echo "<p style='margin-top:10px;line-height: 2;' class=\"dddd\">" . $row['l_name'] . "</p><p class=\"eeee\">" . nl2br($post) . "</p>";
						//}
						?>
					</div>
					<div class="card-footer">
						<?php if (isset($_SESSION['id'])) {
							$data['id'] = $_SESSION['id'];
							$check = "Select count(*) as num from myguests where id ='" . $_SESSION['id'] . "' and status ='1'";
							//	echo $check;
							$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
							$data = $res_sql->fetch_assoc();
							if ($data['num'] > 0) {
						?>
								<a href="quote.php?postid=<?php echo $row['post_id']; ?>&lottery_id=<?php echo $row['lottery_id']; ?>" class="card-btn btn-11">[Quote]</a>
								<?php } else {
								$check = "Select count(*) as num from fakeuser where fakeid ='" . $_SESSION['id'] . "' and status ='1'";
								//	echo $check;
								$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
								$data = $res_sql->fetch_assoc();
								if ($data['num'] > 0) {  ?>
									<a href="quote.php?postid=<?php echo $row['post_id']; ?>&lottery_id=<?php echo $row['lottery_id']; ?>" class="card-btn btn-11">[Quote]</a>

								<?php		} else {
								?>
									<a href="#" class="card-btn btn-11">[Quote]</a>
							<?php

								}
							} ?>
							<a href="#top" class="card-btn btn-22">[Top]</a>
							<a href="#bottom" class="card-btn btn-33">[Down]</a>
						<?php     } else { ?>


							<a href="kalyan-login.php" class="card-btn btn-11">[Quote]</a>
							<a href="#top" class="card-btn btn-22">[Top]</a>
							<a href="#bottom" class="card-btn btn-33">[Down]</a>
						<?php } ?>
					</div>
				</div>

			</div>

	<?php

			$i++;
		}
	} ?>

	<!-- quote-card-div -->
	<!-- page-no pagination -->
	<div class="page-no">
		<ul class="page-no-ul">
			<?php
			$sql = "SELECT COUNT(*) FROM posts p left outer join myguests q on q.id=p.author 
		left outer join fakeuser r on r.fakeid=p.fakeuser 
		left outer join admin s on s.admin_id=p.admin_id 
left outer join lottery_name on p.lottery_id=lottery_name.lottery_id
		left outer join subadmin t on t.subadmin_id=p.subadmin_id order by post_id DESC";

			$rs_result = mysqli_query($db, $sql);
			$row = mysqli_fetch_row($rs_result);
			$total_records = $row[0];
			// Number of pages required. 
			$total_pages = ceil($total_records / $limit);
			$pagLink = "";
			for ($i = 1; $i <= $total_pages; $i++) {
				if ($i == $pn)
					$pagLink .= "<li class='active'><a href='kalyan-guessing-forum.php?page= 
                                    " . $i . "'>" . $i . "</a></li>";
				else
					$pagLink .= "<li><a href='kalyan-guessing-forum.php?page=" . $i . "'> 
                                        " . $i . "</a></li>";
			};
			echo $pagLink;

			?>
		</ul>
	</div>
	<!-- page-no pagination -->


	<div id="bottom"></div>
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}

		function myFunction() {
			var x = document.getElementById("myDIV");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>

	<script src="ft.js"></script>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php if (isset($_SESSION['id'])) {
						$data['id'] = $_SESSION['id'];
					?>
						<?php
						$sql = "SELECT * FROM emoticons";

						$res = mysqli_query($db, $sql) or die(mysqli_error($db));
						?>





						<div>
							<!-- ============================================================== -->
							<!-- data table  -->
							<!-- ============================================================== -->
							<div>
								<div>

									<div>

										<table id="example" class="table table-striped table-bordered second" style="width:100%">
											<thead>
												<tr>
													<th>Sl No.</th>
													<th>ShortCode</th>
													<th>Emoji</th>



												</tr>
											</thead>

											<tbody>
												<!-- output data of each row -->
												<?php while ($row = $res->fetch_assoc()) {  ?>
													<tr>
														<!--  -->
														<td><?php echo $row['emoji_id']  ?></td>
														<td><?php echo $row['emoji_name']  ?></td>
														<td><img src="../../img/emoji/<?php echo $row['image']; ?>" /></td>

													</tr>

												<?php  } ?>
											</tbody>
											<tfoot>
												<tr>
													<th>Sl No.</th>
													<th>ShortCode</th>
													<th>Emoji</th>



												</tr>
											</tfoot>
										</table>



									</div>
								</div>
							</div>
							<!-- ============================================================== -->
							<!-- end data table  -->
							<!-- ============================================================== -->
						</div>



					<?php } else { ?>
						<p>Please Login First</p>
					<?php } ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

				</div>
			</div>
		</div>
	</div>

</body>

</html>
<script>
	document.getElementById("myReadonlyInput").setAttribute("readonly", "true");
</script>