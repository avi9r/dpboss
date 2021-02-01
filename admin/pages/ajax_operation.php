<?php 
require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
//echo "check";die;
if( $_POST['type'] == 'delSpin'){
	
    $del_spin = "DELETE FROM spin_schedule WHERE id = '$_POST[id]' ";
    //echo $del_spin;die;
     if(mysqli_query($db,$del_spin)){
        $del_spin_manage = "DELETE FROM spin_manage WHERE schedule_id = '$_POST[id]' ";
        mysqli_query($db,$del_spin_manage);
        $data =[ 'pop'=> "Scheduled Spin Deleted Succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}elseif( $_POST['type'] == 'editSpin'){
   $qry = "SELECT * FROM `spin_manage` WHERE schedule_id = '$_POST[id]'";
   $res =  mysqli_query($db, $qry) or die(mysqli_error($db));
   $data = $res->fetch_all();
   header('Content-Type: application/json');
     echo json_encode($data);
}elseif( $_POST['type'] == 'saveLuckNum'){
   $qry = "UPDATE spin_manage set lucky_num = '$_POST[num]' WHERE id = '$_POST[id]' and schedule_id = '$_POST[sch_id]' ";
    //echo $qry;die;
     if(mysqli_query($db,$qry)){
        $data =[ 'pop'=> "Lucky Number Saved succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}elseif( $_POST['type'] == 'deleteLuckNum'){
   $qry = "UPDATE spin_manage set lucky_num = null WHERE id = '$_POST[id]' and schedule_id = '$_POST[sch_id]' ";
    //echo $qry;die;
     if(mysqli_query($db,$qry)){
        $data =[ 'pop'=> "Lucky Number Deleted succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}
