<?php 
require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
//print_r($_REQUEST);
if( $_REQUEST['type'] == 'delSpin'){
	
    $del_spin = "DELETE FROM spin_schedule WHERE id = '$_REQUEST[id]' ";
    //echo $del_spin;die;
     if(mysqli_query($db,$del_spin)){
        $del_spin_manage = "DELETE FROM spin_manage WHERE schedule_id = '$_REQUEST[id]' ";
        mysqli_query($db,$del_spin_manage);
        $data =[ 'pop'=> "Scheduled Spin Deleted Succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}elseif( $_REQUEST['type'] == 'editSpin'){
   
   $qry = "SELECT * FROM `spin_manage` WHERE schedule_id = '$_REQUEST[id]'";
   $res =  mysqli_query($db, $qry) or die(mysqli_error($db));
  
    $result = array();
  while($row = mysqli_fetch_assoc($res)) {
   
    array_push($result,$row);
    }

   header('Content-Type: application/json');
     echo json_encode($result);
}elseif( $_REQUEST['type'] == 'saveLuckNum'){
   $qry = "UPDATE spin_manage set lucky_num = '$_REQUEST[num]' WHERE id = '$_REQUEST[id]' and schedule_id = '$_REQUEST[sch_id]' ";
    //echo $qry;die;
     if(mysqli_query($db,$qry)){
        $data =[ 'pop'=> "Lucky Number Saved succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}elseif( $_REQUEST['type'] == 'deleteLuckNum'){
   $qry = "UPDATE spin_manage set lucky_num = null WHERE id = '$_REQUEST[id]' and schedule_id = '$_REQUEST[sch_id]' ";
    //echo $qry;die;
     if(mysqli_query($db,$qry)){
        $data =[ 'pop'=> "Lucky Number Deleted succesfully!"];
       
     }else{
        $data =[ 'pop'=> "Something Wnet Wrong!"];
        
     }
     header('Content-Type: application/json');
     echo json_encode($data);

}
