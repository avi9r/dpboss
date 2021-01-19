<?php
 require_once('connect.php'); 

session_start();

if (isset($_POST['commentinsert'])) {
        $post_id = $_POST['post_id'];
        $quote = $_POST['quote'];
        $user_id = $_POST['user_id'];

        $query="INSERT INTO comments (post_id,quote,user_id) VALUES('$post_id','$quote','$user_id')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Comment Sent to Admin Successfully.
</div>
</div>';
header('Location: kalyan-guessing-forum.php');
   echo '<a href="kalyan-guessing-forum.php">  <div class="alert" style="color:blue;">
 
   Go back to Posts
</div>
</a>';




        }

        if (isset($_POST['commentinsertauthor'])) {
        $post_id = $_POST['post_id'];
        $quote = $_POST['quote'];
        $user_id = $_POST['user_id'];

        $query="INSERT INTO comments (post_id,quote,user_id) VALUES('$post_id','$quote','$user_id')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Comment Sent to Admin Successfully.
</div>
</div>';

   echo '<a href="kalyan-guessing-forum.php">  <div class="alert" style="color:blue;">
 
   Go back to Posts
</div>
</a>';




        }



if (isset($_POST['postinsert'])) {
        $repost_id = $_POST['repost_id'];
        $body = $_POST['body'];
        $fakeuser = $_POST['fakeuser'];

        $query="INSERT INTO posts (repost_id,body,fakeuser) VALUES('$repost_id','$body','$fakeuser')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Repost Done Successfully.
</div>
</div>';
header('Location: kalyan-guessing-forum.php');
   echo '<a href="kalyan-guessing-forum.php">  <div class="alert" style="color:blue;">
 
   Go back to Posts
</div>
</a>';




        }


        if (isset($_POST['postinsertauthor']) && $_POST['lottery_id'] ) {
       
        $body = $_POST['body'];
        $author = $_POST['author'];
        $lottery=$_POST['lottery_id'];
    //   echo $_SESSION['id']."   ".$author;die;
        if($author == $_SESSION['id']){
        $query="INSERT INTO posts (body,author,lottery_id) VALUES('$body','$author','$lottery')";
                // echo $query;die;
              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Repost Done Successfully.
</div>
</div>';
header('Location: kalyan-guessing-forum.php');
   echo '<a href="kalyan-guessing-forum.php">  <div class="alert" style="color:blue;">
 
   Go back to Posts
</div>
</a>';
        }else{
                header('Location: kalyan-guessing-forum.php');
        }


        }else if (isset($_POST['postinsertauthor'])) {
       
                $body = $_POST['body'];
                $author = $_POST['author'];
               // echo $_SESSION['id']."   ".$author;die;
        if($author == $_SESSION['id']){
               
        
                $query="INSERT INTO posts (body,author) VALUES('$body','$author')";
                        // echo $query;die;
                      $result=mysqli_query($db,$query) or die(mysqli_error($db));
                      $_SERVER['PHP_SELF'];
                      echo '<div>  <div class="alert" style="color:green;">
          <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
          <strong>Success!</strong> Repost Done Successfully.
        </div>
        </div>';
        header('Location: kalyan-guessing-forum.php');
           echo '<a href="kalyan-guessing-forum.php">  <div class="alert" style="color:blue;">
         
           Go back to Posts
        </div>
        </a>';
        
        }else{
                header('Location: kalyan-guessing-forum.php');
        }
        
        
                }


?>