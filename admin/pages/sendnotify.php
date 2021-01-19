<?php
date_default_timezone_set('Asia/Kolkata');
  require_once('../../connect.php');
session_start();

$row['admin_id']=$_SESSION['admin_id'];

        if(isset($_SESSION['admin_id'])){  

                $_SERVER["PHP_SELF"];
                }

                else{ 

                   
 header("Location: ../login.php"); 


                   }  ?>


   

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
                <h1>This is notification page</h1>

                <?php

       
	// legacy server fcm api key
	$apiKey = "AAAA7iLipe0:APA91bHTgCzlUXDctd23WdlFosAzVQcV2sA1E8dYVg3FSUqcy9vfSzxh2ET5yG4iOhW-tMkk0y5WjPxr62-DXo4hM7rpgsWAizRnIwj8-kAkL_y7JoqjXP2k20ILamm9fBfiMVZX8v-u";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $t=time();
        $time= date("h:i A",$t);
		$body = $_POST["body"];
		$title = $_POST["title"];
		$reg_id = $_POST["reg_id"];

		sendPushNotification($title, $body, $reg_id, $apiKey,$time);
		
	}


	function sendPushNotification($title, $body, $reg_id, $apiKey,$time) {
		
		$post = array(
						'to' => '/topics/test_topic',
						'data' => array (
								'title' => $title,
								'date' => $title,
								'icon' => 'http://45.77.244.128/dpboss4/download.png',
								'description' => 'hello',
								'time' => $time,
								'description' => $body,
								'reg_id' => $reg_id
						)
					 );

		$headers = array( 
							'Authorization: key=' . $apiKey,
							'Content-Type: application/json'
						);
    
		$ch = curl_init();  
		curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');   
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
            echo 'FCM error: ' . curl_error($ch);
            echo "Unable to send notification";die;
		} else {
            
              
        
                   
            

			echo "<br><div class='textOutput'>Push sent to all devices.</div>";
			echo "<br><a href='notifylist.php'>Send New Push Notification</a>";
		}
		curl_close($ch);
    }
    
    $t=time();
    $time= date("h:i A",$t);
    $date = date('d/m/Y',$t);
    $body = $_POST["body"];
    $title = $_POST["title"];
    $deviceid = $_POST["deviceid"];
    

    $sql_m="INSERT INTO notify (device_id,notify_title,notify_text,notify_time) VALUES('$deviceid','$title','$body','$date $time')";
      
        
        // $sql_bluc="SELECT * FROM users WHERE bestlucky='$bestlucky'";
        $res_m=mysqli_query($db,$sql_m) or die(mysqli_error($db));

?>
               
                </div>
                </div>
                </div>


            <!-- footer -->
            <!-- ============================================================== -->
     <?php include 'footer.php'; ?>