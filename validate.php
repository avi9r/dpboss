<?php
session_start();
require_once('connect.php');

if (isset($_POST['otpa'])) {
        
        $mobile = $_POST['mobile'];

        // $password = $_POST['password'];
        
            // $sql="SELECT * FROM myguests WHERE username='$username' && password='$password' ";
            $sql_m="SELECT mobile FROM myguests WHERE mobile='$mobile'";
          
            
            // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
            // $res=mysqli_query($db,$sql) or die(mysqli_error($db));
  
            $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));
            $data = $res_m->fetch_assoc();
           // echo $data['mobile'];






            


            if (mysqli_num_rows($res_m) > 0) {
            	
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.msg91.com/api/v5/otp?authkey=328462AhtDpV27Br5ece5f0aP1&template_id=5ece67d0d6fc0559043ddb3a&extra_param=&mobile=". $data['mobile']."&country=0",
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
  echo $response;
}

$_SESSION["mobile"]=$mobile;
// $_SESSION["password"]=$password;


            	header("Location: otp.php"); 
            }else{
            	echo "please register";

            	$login_error="First register all the details";
            }
        }

 
?>

