<?php require_once('connect.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signin Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    if (isset($_POST['blocklogin'])) {
        $admin_email = $_POST['block_email'];
        $admin_password = $_POST['block_password'];


        $sql = "SELECT * FROM block_admin WHERE username='$admin_email' && password='$admin_password'";
        $sql_id = "SELECT id FROM block_admin WHERE username ='$admin_email'";
        echo $sql;
        die;
        $res = mysqli_query($db, $sql) or die(mysqli_error($db));
        $result = mysqli_query($db, $sql_id) or die(mysqli_error($db));
        if (mysqli_num_rows($res) > 0) {

            $row = $result->fetch_assoc();
            // echo $row['admin_id'];
            $_SESSION['id'] = $row['id'];


            header("Location: pages/block_user.php");
        } else {

            echo ' 
				 
  <span style="position:absolute;top:0;left:50%;transform:translateX(-50%);color:red"><span class="" onclick="this.parentElement.style.display="none";></span> 
  <strong>Invalid!  Username Or Password.</strong></span>
';
        }
    }


    ?>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->

    \
        <div class="card text-white  mb-3" style="max-width: 18rem; background: rgba(0,0,0,0.5)">

            <div class="col-md-12">
                <div class="card-header">
                    <h2>User Login</h2>
                </div>
            </div>

            <br>

            <form action="block_login.php" method="post">

                <div class="colums">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
               
            </form>
        </div>

    
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>