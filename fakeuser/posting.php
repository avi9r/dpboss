<?php
require_once('../connect.php');
date_default_timezone_set('Asia/Kolkata');
session_start();
$datafake['fakeid']=$_SESSION['fid'];

        if(isset($_SESSION['fid'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: signin.php"); 

                   } 

if (isset($_POST['enterfakepost'])) {
	$body = $_POST['body'];
	$fakeuser = $_POST['fakeuser'];
	$query = "INSERT INTO posts (body,fakeuser) VALUES('$body','$fakeuser')";

	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	$_SERVER['PHP_SELF'];
	echo '
			  <script>
function myFunction() {
  alert("The form was submitted");
}
</script>';
}
else{
    echo '
			  <script>
function myFunction() {
  alert("The form was not submitted");
}
</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<a href="logoutuser.php">Logout</a>
<div class="container col-8" style="margin-top: 50px !important;">
  <h2 class="d-flex justify-content-center">Posting page</h2>

<form action="posting.php" method="post">

<?php

if (isset($_SESSION['fid'])) {
    $datafake['fakeid']=$_SESSION['fid'];

?>
<input type="text" name="fakeuser" style="display: none;" value="<?php echo $datafake['fakeid'] ?>" />
<?php } ?>

    <div class="form-group mt-3">
        <label for="inputUserName">Enter Your Post</label>
        <textarea name="body" class="form-control" rows="4" cols="50">
</textarea></div>



    <div class="row">
        <div class="col-sm-6 pl-0">
            <p class="text-right">
                <button type="submit" name="enterfakepost" class="btn btn-space btn-success">Submit</button>
            </p>
        </div>
    </div>
</form>

</div>

</body>
<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
        }
    </script>
</html>