<?php 
date_default_timezone_set('Asia/Kolkata');
session_start();
require_once('connect.php'); 
$data['id']=$_SESSION['id'];

if(isset($data['id'])){  

	$_SERVER["PHP_SELF"];
	}

	else{ 

	   
header("Location: reglogin.php"); 

	   } 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
table{
	display:none;
}
</style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    $(document).ready(function(){
  $("#submitMessage").on('click', function() {
    $("#old-message").val(function() {
        return this.value + "<p class=\"cccc\">" + $("#new-message").val() + "</p>";
    });
    // $("#submitMessage").prop('disabled', true);
  });
})
  })
</script>

</head>
<body>



<h1>Enter Your comment</h1>

<form action="commentbox.php" method="post" id="usrform">
<div>
<input type="text" name="author" class="num11" value="<?php echo $data['id'] ?>" style="display:none">

<input type="text" name="lottery_id" class="num11" value="<?php echo $_GET['lottery_id'] ?>" style="display:none">

<textarea id="old-message" rows="10" cols="100"  name="body" form="usrform" style="display:none;">

<?php if(@ $_GET['postid']){ 

				$q = " SELECT * FROM posts LEFT OUTER JOIN myguests ON posts.author=myguests.id
					left outer join lottery_name on posts.lottery_id=lottery_name.lottery_id
					left outer join fakeuser on fakeuser.fakeid=posts.author
                      where posts.post_id = $_GET[postid] " ;
				// echo $q;
				$r= mysqli_query($db,$q) or die(mysqli_error($db));
              
				

                while($rrow = $r->fetch_assoc()) {
					$dt = new DateTime($rrow['post_time']);

				$date = $dt->format('d/m/Y');
				$time = $dt->format('H:i');
				
					echo "<p class=\"aaaa\">Originally posted by :" .$rrow['name'].$rrow['firstname']."</p><p class=\"bbbb\">";echo $rrow['body']; echo "</p>";

				} 
 }  ?>

</textarea>
<textarea  id="new-message" cols="30" rows="10"></textarea>

</div>
<div>
<button type="submit" name="postinsertauthor" id="submitMessage" class="my-btn sub-btn">Submit</button>
    </form>




</body>
</html>