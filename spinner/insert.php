<?php
session_start();
require_once('../connect.php');
if($_POST['type'] == 'insert'){
$author = $_POST['u_id'];
//$lottery = $_POST['number'];
$bet_num = $_POST['bet_num'];
$price = $_POST['price'];
//print_r($_POST);
$t = date('d/m/Y');
// $check = "Select count(*) as num from spin_result where user_id ='$_SESSION[id]' and date = '$t' ";
// 	$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
// 	$data = $res_sql->fetch_assoc();
// 	if ($data['num'] == 0 && $author == $_SESSION['id']) {

        $query = "INSERT INTO `spin_result`(`user_id`, `bet_number`, `bet_price`, `date`) 
                    VALUES('$author','$bet_num','$price', '$t')";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
       
        $data =[ 'pop'=> "Sucessfully Bid on number '$bet_num' for points '$price' <br>"];
        header('Content-Type: application/json');
        echo json_encode($data);
    // }elseif($data['num'] > 0){
    //     echo "Try Again Tomorrow..! One Spin Per Day..";
    // }
}elseif($_POST['type'] == 'spin_res'){
    $author = $_POST['u_id'];
    
    $query = "SELECT * FROM `spin_result` WHERE user_id = $author and bet_price != 0 ORDER BY `id` DESC";
        //echo $query;
        $res = mysqli_query($db, $query) or die(mysqli_error($db));
        
        $data = array();
        while($row = mysqli_fetch_assoc($res)) {
            
        $x="Sucessfully Bid on number '$row[bet_number]' for points '$row[bet_price]' <br>";
            array_push($data,$x);
        }
        //print_r($data);
        header('Content-Type: application/json');
        echo json_encode(['data' => $data]);
}
    ?>