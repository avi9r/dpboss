<?php

require_once('connect.php');
?>

	    <?php
      session_start();

if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
            $sql_m="SELECT * FROM myguests WHERE mobile='$mobile'";
          
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));
          
         


           
           
            if (mysqli_num_rows($res_m) > 0) {

            	$mobile_error="Sorry... Mobile number already taken";
            	header("Location: reglogin.php"); 
            }else{

            	

              $curl = curl_init();

curl_setopt_array($curl, array( 
  CURLOPT_URL => "https://api.msg91.com/api/v5/otp?authkey=328462AhtDpV27Br5ece5f0aP1&template_id=5ece67d0d6fc0559043ddb3a&extra_param=&mobile=". $mobile ."&country=0",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $_SESSION["name"]=$name;
  $_SESSION["username"]=$username;
  $_SESSION["password"]=$password;
  $_SESSION["mobile"]=$mobile;
  $_SESSION["dob"]=$dob;
//call the validateRegOtp
header("Location: validateRegOtp.php"); 
            	// echo "saved";
            	// Die with a success message


            
            }}}

            ?>

        

          
