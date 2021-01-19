<?php require_once('connect.php'); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>resend OPT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<style>
body {
  background: #f4f4f4;
}
.mx-auto {
  width: 30%;
  margin-top: 20px;
  /*border: 2px solid #fff;*/
}
</style>
</head>
<body>
<div class="container-fluid justify-content-center">
  <div class="mx-auto card border-secondary border p-3" style="">

<form action="validateRegOtp.php" method="post">
  <label for="#"><h4>Enter your OTP</h4></label>
	<input type="text" id="otpId" name="otpId" placeholder="Enter otp" class="form-control mt-1">
	<button type="submit" name="mmmmm" class="btn btn-success btn-block mt-3">submit</button>
	<p id="message"></p>
</form>
<?php $mobile=$_SESSION['mobile']; 

$_SESSION['mobile']=$mobile;
?>
<div>
  <a href="otpbyregister.php" class="btn btn-sm btn-warning">Resend Otp</a>
</div>
</div>
</div>
</body>
</html>
<?php


$mobile = $_SESSION['mobile'];

if (isset($_POST['mmmmm'])) {
   $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.msg91.com/api/v5/otp/verify?mobile=". $mobile."&otp=". $_POST['otpId']."&authkey=328462AhtDpV27Br5ece5f0aP1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,

));

$response = curl_exec($curl);
$err = curl_error($curl);

 curl_close($curl);
$res=json_decode($response);
// echo $response;
if ($res->type =='error') {
  echo "cURL Error #:" .$res->message;
} else {
// echo "laskjdflsjflj"; 

	
       $name=  $_SESSION["name"];
 $username= $_SESSION["username"];
 $password= $_SESSION["password"];
$mobile=  $_SESSION["mobile"];
$dob=  $_SESSION["dob"];

            $sql_m="SELECT * FROM myguests WHERE mobile='$mobile'";


	 $query="INSERT INTO myguests (name,username,password,mobile,dob) VALUES('$name','$username','$password','$mobile','$dob')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
    $_SERVER['PHP_SELF']; 
         echo '<div>  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";>&times;</span> 
  <strong>Success!</strong> User registered Successfully.
</div>

<a href="reglogin.php">Back to login page</a></div>';

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo "laskjdflsjflj";
 

}}

 

?>