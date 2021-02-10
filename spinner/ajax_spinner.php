<?php
session_start();
require_once('../connect.php');
date_default_timezone_set('Asia/Kolkata');

$d = date('Y-m-d');
$t = date('H:i');
//$t = '13:40';
//echo $t."<br>".$d;die;

        $query = "SELECT * FROM `spin_manage` WHERE `date` LIKE '$d' AND `time` LIKE '$t' ORDER BY `schedule_id` DESC";
        //echo $query;
        $res = mysqli_query($db, $query) or die(mysqli_error($db));
        
        $data = array();
        while($row = mysqli_fetch_assoc($res)) {
        
            array_push($data,$row['lucky_num']);
        }
        $time_qr = "SELECT * FROM `spin_manage` where `date` LIKE '$d' AND `time` > '$t' ORDER BY id ASC LIMIT 1";
        //echo $time_qr;
        $rest = mysqli_query($db, $time_qr) or die(mysqli_error($db));
        if(mysqli_num_rows($rest) > 0 ){
        $da = array();
        while($ro = mysqli_fetch_assoc($rest)) {
        
            array_push($da,$ro['time']);

            $strStart = $t;
            $strEnd   = $ro['time'];

            $dteStart = new DateTime($strStart);
            $dteEnd   = new DateTime($strEnd);

            $dteDiff  = $dteStart->diff($dteEnd);

            $time_dif= $dteDiff->format("%H:%I");


        }
        header('Content-Type: application/json');
        echo json_encode(['number'=>$data,'next_spin'=>$da,'time_gap'=>$time_dif, 'c_time'=>$t ]);
        }else{
            header('Content-Type: application/json');
        echo json_encode(['number'=>$data, 'msg'=>"No Spin for Today!", 'next_spin'=>'','time_gap'=>'',]);
        }

    ?>