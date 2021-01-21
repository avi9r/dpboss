<?php
session_start();
require_once('../connect.php');

$author = $_POST['u_id'];
$lottery = $_POST['number'];
//print_r($_POST);
$t = date('d/m/Y');
$check = "Select count(*) as num from spin_result where user_id ='$_SESSION[id]' and date = '$t' ";
	$res_sql = mysqli_query($db, $check) or die(mysqli_error($db));
	$data = $res_sql->fetch_assoc();
	if ($data['num'] == 0 && $author == $_SESSION['id']) {

        $query = "INSERT INTO `spin_result`(`user_id`, `result`, `date`) VALUES('$author','$lottery', '$t')";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }elseif($data['num'] > 0){
        echo "Try Again Tomorrow..!";
    }
