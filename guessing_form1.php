<?php
// lafksjl
 require_once('connect.php'); 

session_start();

if (isset($_POST['submitpost'])) {
        $body = $_POST['body'];
        $author = $_POST['author'];

        $query="INSERT INTO posts (body,author) VALUES('$body','$author')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Post Submitted Successfully.
</div>
</div>';


        }elseif (isset($_POST['submitfakepost'])) {
        $body = $_POST['body'];
        $fakeuser = $_POST['fakeuser'];

        $query="INSERT INTO posts (body,fakeuser) VALUES('$body','$fakeuser')";

              $result=mysqli_query($db,$query) or die(mysqli_error($db));
              $_SERVER['PHP_SELF'];
              echo '<div>  <div class="alert" style="color:green;">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Success!</strong> Post Submitted Successfully.
</div>
</div>';


        }else{
$_SERVER['PHP_SELF']; 
         echo '<div>  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";></span> 
  <strong>Please!</strong> Fill it completely.
</div>
</div>';

        }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>DP BOSS 143 GUESSING FORUM KALYAN MATKA RESULT GUESSING MADHUR - </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- bootstrap css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- google fot roboto -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="style.css"> -->

<style>
    /* pre css style */
body{
background-color:#fc9 !important;
text-align: center;
padding-left: 10px;
padding-right: 10px;
font-family: 'Roboto', sans-serif;
}
.pink-border {
border: 4px solid #ff006c;
border-top-left-radius: 10px;
}
.logo{
height: 120px;
}
.h3-header {
font-family: 'Gelasio', serif;
}
.mfnc-ul {
list-style: none;
}
.mfnc-ul li {
text-decoration: none;
padding: 20px ;
}
.mfnc-ul li a {
text-decoration: none;
}
.violet-border{
border-top-left-radius: 10px;
border: 4px solid #000080;
border-top-left-radius: 10px ;
}
.border-b-v {
border-bottom: 2px solid #000080;
}
.violet-bg{
background: #8100B9;
}
.mfnc-ul h2 span{
color: #222;
font-size: 30px;
font-weight: bolder;
font-style: italic;
font-family: 'Gelasio', serif;
}
.row.text-center.m-0 .btn.col-6.bg-warning {
font-family: 'Gelasio', serif;

}

div .btn.col-6.bg-info {
font-family: 'Gelasio', serif;

}

.mfnc-ul h5{
color: red;
font-size: 25px;
font-family: 'Montserrat', sans-serif;
}
.footer-wrapper.pink-border{
margin-top: 0px !important;
}
/* pre css style */
/*NTW style css*/
.first-table-headding a{font-size: 24px; color: #f5fffa !important   ;}
.first-table-headding +div span{color: #f5fffa !important   ;}
.first-table-headding u{position: relative; top: -7%; font-family: 'Gelasio', serif; font-size: 20px;
        color: #f5fffa !important   ;

}
.first-table-headding +div{font-family: 'Gelasio', serif;}
.pink-border111{border: 3px solid   #800080; border-top-left-radius: 10px ;}
/*.pink-bg111{background-color: pink;}*/
.pink-header111 {
    background-color: #9c27b0; 
    border-top-left-radius: 7px;
}
.pink-header111 .text-light {
}
.pink-bg111 .col-6{border-radius: 0;}
.pink-header111 + div {font-family: 'Montserrat', sans-serif;}
.pink-header111 + div + div{font-family: 'Gelasio', serif;}
.fixed-bottom p {
    color: #333;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 5px;
}
.font-r {font-family: 'Roboto', sans-serif;}
.font-g{font-family: 'Gelasio', serif;}
.font-m{font-family: 'Montserrat', sans-serif;}
.pink-header111 +div{font-size: 14px;}
.fixed-bottom >div:hover  {
    background: #e6aaff;
}
.fixed-bottom >div:hover svg,
.fixed-bottom >div:hover p {
    color: red !important;
}
.text-t {
    color: transparent;
}
.ptag-m-b-0>p{
    margin-bottom: 0;
}
.first-table-headding.ml-2 {
    /*font-size: */
}
.d-flex.justify-content-between.font-weight-bold.font-italic.text-light.pink-header111 {
    color: #22f5ff !important;
    padding: 10px 0px;
}
/*NTW style css*/
@media only screen and (max-width: 500px) {
.first-table-headding.ml-2 {
    text-align: left;
}
.first-table-headding.ml-2 u { 
    font-size: 14px;
}
.first-table-headding.ml-2 + div>span {
    font-size: 12px;
}
}
</style>
</head>
<!-- 11111111111111111 -->
<body>
<!--header start-->
<header class="mt-2" id="top-head">
    <div class="pink-border p-2">
        <a href="#" class="logo">
            <img src="data:image/webp;base64,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" alt="DPBOSS.NET">
        </a>
    </div>
</header>
<div class="p-3 pink-border mt-2" style="font-family: 'Montserrat', sans-serif; color: #cc0000;">
    Use Google Chrome or Mozilla Firefox, Safari Browser to use and see this Website. Do not use UC Browser UC Mini and opera Mini.
    <div>इस वेबसाइट का उपयोग करने और देखने के लिए Google क्रोम या मोज़िला फ़ायरफ़ॉक्स, सफ़ारी ब्राउज़र का उपयोग करें। यूसी ब्राउज़र यूसी मिनी और ओपेरा मिनी का उपयोग न करें।.</div>
</div>
<!--header end--><!--posting rules start-->
<div class="p-3 pink-border mt-2" style="font-family: 'Montserrat', sans-serif; color: #111; background: bisque;"><h4>Kalyan matka result satta matka guessing forum all satta bazar guessing<br>सात्त मटका कल्याण मटका  मटका रेसुल्ट</h4></div>
<div class="mb-3 text-center p-0 violet-border mt-2 mfnc-ul">
    <div  class="violet-bg mt-2 text-light pt-2 pb-2 ml-2 mr-2 mb-2 font-italic text-left" onclick="myFunction()">
        <h5 style="display: flex;justify-content: space-between;" class="">
            <span class="text-light">  ☔Posting Rules:-☔ </span>

           

                   
                  <!-- $data['id']=$_SESSION['id'];
                   

                   if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                     -->

            <a href="guestlogout.php" class="btn btn-danger">logout</a>
            <!-- <?php?> -->


            <span class="text-light text-right mr-3"><i class="fas fa-plus-square"></i></span>
        </h5>
        
    </div>
    <div id="myDIV" style="display: none;">
        <p style="color: red; font-size: 20px; font-style: italic;font-weight: bold;">2 OPEN YA CLOSE<br/>
            6 JODI<br/>
            AUR 8 PANNA<br/>
            AUR RESULT TIME SE 20 MIN PHELE GAME POST KARNA HOGA....!!!!<br>
            Dont Mention Date Or Time In Your Post.<br><hr>
            <small><center><b><font color="red">Top 10 Guesser Of Guessing Forum..<br/>
            Will Be Allowed To Experts Forum & Chatforum<br/>
            Top 10 Guessers Will Be Announced On Every Sunday<br/></font></b></center></small>
        </p>
        <a href="#" style="text-decoration:none;">
            <div class="btn btn-danger btn-block rounded-0">Click Here To Read Full Guessing Forum Rules</div>
        </a>
        
    </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}    
</script>

<!-- <div class="mb-3 text-center p-0 violet-border mt-3 mfnc-ul"> -->
    <!-- </div> -->
<!-- </div> -->
        <div class="text-center mt-3">
            <input type="button" class="btn btn-light shadow shadow-secondary" value="Refresh">
        </div>

        <form class="text-center" action="guessing_form.php" method="post">
            <div class="pink-border p-2 mt-3">
                <div class="">
                    <textarea class="form-control" rows="5" name="body" placeholder="enter text here..."></textarea>
                    
                </div>
                <div>
                   <?php

                   
                  // $data['id']=$_SESSION['id'];
                   

                   if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>
                    <input type="text" name="author" value="<?php echo $data['id'] ?>" style="display:none; ;">
                   
<input class="btn btn-success mt-3" style="width: 25%;" name="submitpost" type="submit" value="SUBMIT" />
          <?php }elseif (isset($_SESSION['fakeid'])){
 $dataf['fakeid']=$_SESSION['fakeid'];  ?>


 <input type="text" name="fakeuser" value="<?php echo $dataf['fakeid']; ?>" style="display: none;">
<input class="btn btn-success mt-3" style="width: 25%;" name="submitfakepost" type="submit" value="SUBMIT" />

 
        <?php  } else{ ?>

                   
                    <a href="reglogin.php" class="btn btn-success mt-3" style="width: 25%;">LOGIN</a>

                    <?php }  ?>
                </div>
            </div>
        </form>


<!-- <h1>ljdsafl</h1> -->

<!--form end-->

 
<!-- Repostings -->



<!--Comment-->

 <?php   $sql="SELECT * from posts p left outer join myguests q on q.id=p.author left outer join fakeuser r on r.fakeid=p.fakeuser left outer join admin s on s.admin_id=p.admin_id left outer join subadmin t on t.subadmin_id=p.subadmin_id where q.status=1 ORDER BY post_id DESC";
      // echo $sql;die;
            $res=mysqli_query($db,$sql) or die(mysqli_error($db));
               // $data=$res->fetch_assoc();
               // var_dump($data);
                $i=1;
                if ($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {   
echo "<tr>";
                    ?>
<table>
<div class="pink-border111 mt-3 pink-bg111">
    <div class="d-flex justify-content-between font-weight-bold font-italic text-light pink-header111">
        <div class="first-table-headding ml-2">
            <a><i class="fas fa-user-circle"></i></a>
            <u><?php echo $row['name']; echo $row['firstname']; echo $row['admin_name']; echo $row['fullname']; ?></u>
        </div>
        <div class="mt-1"><span><?php echo $row['post_time']; ?></span> &nbsp;&nbsp;</div>
    </div>
    <div class="text-danger font-italic">
        <div style="background: #e6aaff; font-size: 13px;" class="mb-3 ptag-m-b-0">


           
                                                
                                                
                                                
                                           
                                          
                                       
<p class="text-t">.</p>
<!-- <p>Originally Posted By: </p> -->

<p><?php 
if($row['repost_id']){
  $sql_repost="SELECT body FROM posts WHERE repost_id='".$row['repost_id']."' AND publication_status=1 ";
  $res_repost=mysqli_query($db,$sql_repost) or die(mysqli_error($db));
  
  while($datare=$res_repost->fetch_assoc()){
    
  $sql_post="SELECT body FROM posts WHERE post_id='".$row['repost_id']."' AND publication_status=1 ";
  $res_post=mysqli_query($db,$sql_post) or die(mysqli_error($db));
  while($data=$res_post->fetch_assoc()){
    echo $data['body']; 
  
  }
  echo '<br>';
break;
  echo $datare['body']; 
 

     
  }
 
  
}
echo $row['body'];

 
?></p>

<?php
$idd=$row['post_id'];
 $sql_c="SELECT quote FROM comments WHERE post_id='$idd' AND publication_status=1 ";
 // $sql_c="SELECT '$idd', GROUP_CONCAT(quote SEPARATOR ', ') AS quotes FROM comments GROUP BY '$idd'";


            $res_c=mysqli_query($db,$sql_c) or die(mysqli_error($db));
               // $datac=$res_c->fetch_assoc();
?>
</div>
<?php

if ($res_c->num_rows > 0) {  while($datac=$res_c->fetch_assoc()){?>
  <p class="text-dark font-weight-bold" style="font-size: 14px;"><?php  echo $datac['quote']; ?></p>
 
<?php } }else{
  echo "</div>";
  echo "No comments";
}
 ?>

   


    <div class="row text-center m-0">

      <?php if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];  ?>
                    <div class="btn col-6 bg-warning" onclick="showPost('postid_<?php echo $i; ?>')" data-id="<?php echo $row['post_id']; ?>" data-toggle="modal" data-target="#exampleModalpost">Repost</div>
            <?php     }elseif (isset($_SESSION['fakeid'])){
 $dataf['fakeid']=$_SESSION['fakeid'];  ?>
 <div class="btn col-6 bg-warning" onclick="showPost('postid_<?php echo $i; ?>')" data-id="<?php echo $row['post_id']; ?>" data-toggle="modal" data-target="#exampleModalpost">Repost</div>
     <?php }else{ ?>
      <div class="btn col-6 bg-warning"><a href="reglogin.php">Login to Repost</a></div>

      <?php } ?>
        <div class="btn col-6 bg-info"><a id="postid_<?php echo $i; ?>" style="text-decoration:none;color: #fff!important;" onclick="showQuote('postid_<?php echo $i; ?>')" data-id="<?php echo $row['post_id']; ?>" data-toggle="modal" data-target="#exampleModal"> (Comment)</a></div>
    </div>
    <div class="row text-center m-0">
        <div class="btn col-6 bg-info">
            <a href="#top-head">
                <u style="color:#fff;">GoTop</u>
            </a> 
        </div>
        <div class="btn col-6 bg-warning">
            <a href="#btm-link-move">
                <u style="color:#000;">GoBottom</u>
            </a>
        </div>
    </div>
    </div>
</div>



 <?php $i++; } }
echo "</tr></table>";
             ?>
         </div>
</div>
             
</div>

        <br/>
        <div id="bottom"></div>
        <div style="float:left; width:100%;">
            <br>
            <div class="">
                <a class="btn btn-outline-primary" style="background: #fc9; color: #ff006c;"><b>PREV</b></a>
                <a class="btn btn-outline-primary" style="background: #fc9; color: #ff006c;"><b>1</b></a>
                <a class="btn btn-outline-primary" href="#"><b>2</b></a>
                <a class="btn btn-outline-primary" href="#"><b>3</b></a>
                <a class="btn btn-outline-primary" href="#"><b>4</b></a>
                <a class="btn btn-outline-primary" href="#"><b>5</b></a>
                <a class="btn btn-outline-primary" href="#"><b>6</b></a>
                <a class="btn btn-outline-primary" href="#"><b>7</b></a>
                <a class="btn btn-outline-primary" href="#"><b>8</b></a>
                <a class="btn btn-outline-primary" href="#"><b>9</b></a>
                <a class="btn btn-outline-primary" href='#'>...</a>
                <a class="btn btn-outline-primary" href="#"><b>99</b></a>
                <a class="btn btn-outline-primary" href="#"><b>100</b></a>
                <a class="btn btn-outline-primary" href="#"><b>NEXT</b></a>
            </div>
        </div>
        <br>
        <br>
        <div >
            <!--refresh start-->
            <a href="#top" class="btn btn-warning btn-lg text-light mb-3 mt-3">
                Go To Top
            </a>
        </div><!----------- ------------>

            <!--FOOTER START-->
<div class="footer-wrapper " >

    <div class="footer pink-border pb-2" style="border: 4px solid #ff006c;
    border-top-left-radius: 10px;">
        <div class="row mx-0">
            <div class="col-md-4 offset-md-4">
                <div class="text-center pb-2">
                    <img src="data:image/webp;base64,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" alt="DPBOSS.NET">
                  <br>
                    <div class="p-2">
                        <a href="#" class="btn btn-danger rounded btn-sm ">Home</a>
                        <a href="#" class="btn btn-danger rounded btn-sm ">Back</a>   
                    </div>
                </div>
            </div>
        </div>
    <div class="footer dark">
        <div class="row mx-0">
            <div class="col  text-center text-dark" id="btm-link-move">
                Copyright @2019, DP boss 
                <br>
                Powered by DPBOSS.NET
            </div>
        </div>
    </div>
    </div>
</div>
<div  style="color: transparent; height: 85px;">.</div>
            <!--FOOTER end-->
            
            <!--------------------------fixed navigation start-------------------------->
    <div class="fixed-bottom row ml-0 mr-0 bg-light pt-0"><!-- 11111111111111111111 -->
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-home"></i></b>
                        <p>Home</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="far fa-question-circle"></i></b>
                        <p>Guessing<br/>Forum</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" >
                        <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-user-shield"></i></b>
                        <p>Experts<br/>Forum</p>
                </a>
            </div>
            <div class="col-3 text-center pt-2">
                <a  style="text-decoration:none;" href="#" onClick="window.location.reload();" >
                            <b style="font-size: 20px; color:#333 !important;"><i class="fas fa-sync"></i></b>
                        <p>Refresh<br/>Page</p>
                </a>
            </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comment Box</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php  if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>
        
        <form action="commentbox.php" method="post" >
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
          
            <input type="" name="user_id" style="display: ;" value="<?php echo $data['id'] ?>" >
            <input type="" name="post_id" style="display:;" class="mpost" value="">
            <textarea class="form-control" name="quote" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="commentinsertauthor">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
 

 <?php } elseif(isset($_SESSION['fakeid'])){  
                    $dataf['fakeid']=$_SESSION['fakeid'];
                   
                     ?>
       


         <form action="commentbox.php" method="post" >
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <input type="" name="user_id" style="display:; ;" value="<?php echo $dataf['fakeid'] ?>" >
            
             
           <input type="" name="post_id" style="display:;" class="mpost" value="">
            <textarea class="form-control" name="quote" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="commentinsert">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>


         <?php } else{  
                  
                   
                     ?>
       <form action="commentbox.php" method="post" >
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>

           
           
           <input type="" name="post_id" style="display:;" class="mpost" value="">
            <input type="" name="user_id" style="display:; ;" value="Guest" >
           
            <textarea class="form-control" name="quote" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="commentinsert">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

  <?php }  ?>

      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


  <!--Repost Modal -->
<div class="modal fade" id="exampleModalpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeled" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabeled">Quote Box</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php  if(isset($_SESSION['id'])){  
                    $data['id']=$_SESSION['id'];
                   
                     ?>
        
        <form action="commentbox.php" method="post" >
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
          
            <input type="" name="author" style="display: ;" value="<?php echo $data['id'] ?>" >
            <input type="" name="repost_id" style="display:;" class="mrepost" value="">
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="postinsertauthor">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
 

 <?php } elseif(isset($_SESSION['fakeid'])){  
                    $dataf['fakeid']=$_SESSION['fakeid'];
                   
                     ?>
       


         <form action="commentbox.php" method="post" >
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <input type="" name="fakeuser" style="display:; ;" value="<?php echo $dataf['fakeid'] ?>" >
            
             
           <input type="" name="repost_id" style="display:;" class="mrepost" value="">
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="postinsert">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>


         <?php }  ?>
   

      </div>
    </div>
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>

    
    function showQuote(id){
        $(".mpost").val( $("#"+id).attr('data-id'));
        
           $("#exampleModal").modal('show');
           console.log(this);
            
        }
    
    function showPost(id){
        $(".mrepost").val( $("#"+id).attr('data-id'));
        
           $("#exampleModalpost").modal('show');
           console.log(this);
            
        }


        //  function showAgainPost(id){
        // $(".mrepostagain").val( $("#"+id).attr('data-id'));
        
        //    $("#exampleModalagainpost").modal('show');
        //    console.log(this);
            
        // }

        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>


    <!-- <script src="bootstrap/js/jquery-3.3.1.min.js"></script> -->

<!-- fontawesome cdn -->
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <!--  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>