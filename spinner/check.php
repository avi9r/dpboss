<?php
session_start();
require_once('../connect.php');

$guest_id='10';

if (isset($_POST['login'])) {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        
            $sql="SELECT count(*) as num FROM myguests WHERE username='$username' && password='$password' ";
            
            $sql_id="SELECT id FROM myguests WHERE username='$username' && password='$password' ";
            $sql_f="SELECT count(*) as num FROM fakeuser WHERE username='$username' && password='$password' ";
            
            $sql_fake="SELECT * FROM fakeuser WHERE username='$username' && password='$password' ";
            

            

             $res=mysqli_query($db,$sql) or die(mysqli_error($db));
            

             $res_id=mysqli_query($db,$sql_id) or die(mysqli_error($db));
             $res_f=mysqli_query($db,$sql_f) or die(mysqli_error($db));
            

             $res_fake=mysqli_query($db,$sql_fake) or die(mysqli_error($db));
            

         $data = $res->fetch_assoc();
         $data_u = $res_id->fetch_assoc();
         $data_f = $res_f->fetch_assoc();
         $data_fake = $res_fake->fetch_assoc();
       
             if ($data['num'] > 0 ) {
       //  echo "lo";die;
                     $_SESSION['id']=$data_u['id'];
                   
                     // echo $_SESSION['id'];
             	header("Location: index.php"); 


             }elseif ( $data_f['num'] > 0) {
          //      echo "po";die;
                 $_SESSION['id']=$data_fake['fakeid'];
                     // echo $_SESSION['id'];
                header("Location: index.php"); 
             }



             else{
                

             	echo "'<h1>Login error! Invalid Username and Password</h1>'";
             }



         }
         

             ?>
			