<?php require_once('connect.php'); 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<form action="otp.php" method="post">
  <label for="#"><h4>Enter your OTP</h4></label>
	<input type="text" id="otpId" name="otp" placeholder="Enter otp" class="form-control mt-1">
	<button type="submit" name="mmm" class="btn btn-success btn-block mt-3">submit</button>
	<p id="message"></p>
</form>
<?php  $mobile=$_SESSION['mobile']; 

$_SESSION['mobile']=$mobile;
  ?>
  <div>
<a href="otpbycall.php" class="btn btn-sm btn-warning">Resend Otp</a>
</div>
</div>
</div>

</body>
</html>


      


<?php


if (isset($_POST['mmm'])) {
        
        $mobile = $_SESSION['mobile'];
        // $password = $_SESSION['password'];
        // echo $mobile;
    

$sql_m="SELECT mobile FROM myguests WHERE mobile='$mobile'";
          
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            
  
            $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));
            $data = $res_m->fetch_assoc(); 

            // echo $_POST['otp'];
            // echo $data['mobile'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.msg91.com/api/v5/otp/verify?mobile=". $mobile."&otp=". $_POST["otp"]."&authkey=328462AhtDpV27Br5ece5f0aP1&country=0",
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
if ($res->type =='error') {
  echo "cURL Error #:" .$res->message;
} else {
header("Location: signin.php"); 
}



}?>




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	function verifyOtp(id,id1){
		var otp =document.getElementById(id);
			var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://api.msg91.com/api/v5/otp/verify?mobile="+<?php$data['mobile']?>+"&otp="+otp+"&authkey=295253A8PjGtRjv5df78267",
  "method": "POST",
  "headers": {'Access-Control-Allow-Origin': 'true'}
}

$.ajax(settings).done(function (response) {
  console.log(response);
  document.getElementById(id1).text(response.message);
});
	}

</script> -->