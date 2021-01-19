<?php
session_start();
require_once('../connect.php');

$guest_id='10';

if (isset($_POST['fakeuserlogin'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
            $sql_f="SELECT fakeid FROM fakeuser WHERE username='$username' && password='$password' ";

            $res_f=mysqli_query($db,$sql_f) or die(mysqli_error($db));

         $datafake = $res_f->fetch_assoc();
        //  echo $datafake['fakeid'];die;
        
         if (mysqli_num_rows($res_f) > 0 ) {
                 
                     $_SESSION['fid']=$datafake['fakeid'];
                   
                  
             	header("Location: posting.php"); 


             }else{
                

                 echo "'<h1>Login error! Invalid Username and Password</h1>'";
                 header("Location: signin.php"); 
             }



         }
         
       
           

             ?>