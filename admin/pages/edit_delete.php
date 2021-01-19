<?php
//session_start();
require_once('../../connect.php');

$name = '';
$username = '';
$mobile = '';
$dob = '';
$publication_status = '';
if (isset($_GET['delete'])) {

	$id = $_GET['delete'];
	$sql = "DELETE FROM myguests WHERE id=$id";
	mysqli_query($db, $sql) or die(mysqli_error($db));

	$_SESSION['message'] = "Record has been deleted !";
	$_SESSION['msg_type'] = "danger";


	header("location: allusers.php");
}
if (isset($_GET['edit'])) {

	$id = $_GET['edit'];
	$sql = "SELECT * FROM myguests WHERE id='$id'";
	$res = mysqli_query($db, $sql) or die(mysqli_error($db));


	$row = $res->fetch_array();
	$name = $row['name'];
	$username = $row['username'];
	$mobile = $row['mobile'];
	$dob = $row['dob'];


	$_SESSION['id'] = $id;

	$_SESSION['name'] = $name;
	$_SESSION['username'] = $username;
	$_SESSION['mobile'] = $mobile;
	$_SESSION['dob'] = $dob;

	header("location: editusers.php");
}

	
/*
if (isset($_GET['block'])) {

	$id = $_GET['block'];
	$sql = "UPDATE myguests SET status='0' WHERE id=$id";
	//echo $sql;die;
	mysqli_query($db, $sql) or die(mysqli_error($db));

	$_SESSION['message'] = "User has been Blocked !";
	$_SESSION['msg_type'] = "danger";


	header("location: allusers.php");
}
*/

if (isset($_POST['updateuser'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$dob = $_POST['dob'];

	$sql_m = "UPDATE myguests SET name='$name', username='$username',mobile='$mobile', dob='$dob' WHERE id='$id' ";


	// $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
	$res_m = mysqli_query($db, $sql_m) or die(mysqli_error($db));

	header("location: allusers.php");
}

if (isset($_POST['addsubdomain'])) {

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];


	$sql_m = "INSERT INTO subadmin (fullname,username,password,mobile) VALUES('$fullname','$username','$password','$mobile')";


	// $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
	$res_m = mysqli_query($db, $sql_m) or die(mysqli_error($db));

	header("location: allsubadmins.php");
}



if (isset($_POST['addpost'])) {

	$admin_id = $_POST['admin_id'];
	$body = $_POST['body'];

	$sql_m = "INSERT INTO posts (admin_id,body) VALUES('$admin_id','$body')";


	// $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
	$res_m = mysqli_query($db, $sql_m) or die(mysqli_error($db));

	header("location: allposts.php");
}


if (isset($_GET['deletesubadmin'])) {

	$subadmin_id = $_GET['deletesubadmin'];
	$sql = "DELETE FROM subadmin WHERE subadmin_id=$subadmin_id";
	mysqli_query($db, $sql) or die(mysqli_error($db));

	$_SESSION['message'] = "Record has been deleted !";
	$_SESSION['msg_type'] = "danger";


	header("location: allsubadmins.php");
}


if (isset($_GET['editsubadmin'])) {

	$subadmin_id = $_GET['editsubadmin'];
	$sql = "SELECT * FROM subadmin WHERE subadmin_id='$subadmin_id'";
	$res = mysqli_query($db, $sql) or die(mysqli_error($db));


	$row = $res->fetch_array();
	$fullname = $row['fullname'];
	$username = $row['username'];
	$mobile = $row['mobile'];



	$_SESSION['subadmin_id'] = $subadmin_id;

	$_SESSION['fullname'] = $fullname;
	$_SESSION['username'] = $username;
	$_SESSION['mobile'] = $mobile;


	header("location: editsubadmins.php");
}

if (isset($_POST['updatesubadmin'])) {


	$subadmin_id = $_POST['subadmin_id'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];

	$mobile = $_POST['mobile'];



	$sql = "UPDATE subadmin SET fullname='$fullname', username='$username',mobile='$mobile' WHERE subadmin_id='$subadmin_id' ";
	mysqli_query($db, $sql) or die(mysqli_error($db));




	header("location: allsubadmins.php");
}



if (isset($_GET['approve'])) {

	$id = $_GET['approve'];
	// echo $id;
	// $sql="SELECT * FROM myguests WHERE id='$id'";
	$sqll = "UPDATE myguests SET status=1 WHERE id = '$id'";
	$ress = mysqli_query($db, $sqll) or die(mysqli_error($db));


?>
	<script type="text/javascript">
		window.location.href = 'allusers.php';
	</script>





<?php	}



if (isset($_GET['disapprove'])) {

	$id = $_GET['disapprove'];
	// echo $id;
	// $sql="SELECT * FROM myguests WHERE id='$id'";
	$sqlll = "UPDATE myguests SET status=0 WHERE id = '$id'";
	$resss = mysqli_query($db, $sqlll) or die(mysqli_error($db));


?>

	<script type="text/javascript">
		window.location.href = 'allusers.php';
	</script>





<?php	}


if (isset($_GET['block'])) {

	$id = $_GET['block'];
	// echo $id;
	$sql1 = "SELECT username FROM myguests WHERE id='$id'";
	$result1 = mysqli_query($db, $sql1) or die(mysqli_error($db));
	$row = $result1->fetch_assoc();
	//  echo $row['username'];die;


	$query = "UPDATE devicestatus SET status=0 WHERE username = '" . $row['username'] . "' ";
	// echo $query;die;
	$result = mysqli_query($db, $query) or die(mysqli_error($db));



?>

	<script type="text/javascript">
		window.location.href = 'allusers.php';
	</script>





<?php	} 

if (isset($_POST['addspecialoffer'])) {


	$details = $_POST['details'];

	$sql_m = "INSERT INTO special_offer (details) VALUES('$details')";


	// $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
	$res_m = mysqli_query($db, $sql_m) or die(mysqli_error($db));

	$_SESSION["flash"] = ["type" => "success", "message" => "Offer Inserted Successfully!"];


	header("location: special_offers.php");
}



