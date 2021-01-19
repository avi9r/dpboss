<?php

 require_once('../../connect.php');
 

// session_start();
// $data=$_SESSION['quote'];
// echo $data;

//  $sql="UPDATE comments SET publication_status=1 WHERE quote = '$data'"; 
// $res=mysqli_query($db,$sql) or die(mysqli_error($db));

 // header("Location: manage_guess_form.php"); 


 if (isset($_GET['approve'])) {

	$id=$_GET['approve'];
	 
	// $sql="SELECT * FROM myguests WHERE id='$id'";
	$sqll="UPDATE comments SET publication_status=1 WHERE comment_id = '$id'"; 
	$ress=mysqli_query($db,$sqll) or die(mysqli_error($db));
	// echo $ress;die;

	?>
	
	<script type="text/javascript">
window.location.href = 'manage_guess_form.php';
</script>
	

	


<?php	} 


	 elseif (isset($_GET['disapprove'])) {

	$id=$_GET['disapprove'];
	// echo $id;die;
	// $sql="SELECT * FROM myguests WHERE id='$id'";
	$sqlll="UPDATE comments SET publication_status=0 WHERE comment_id = '$id'"; 
	$resss=mysqli_query($db,$sqlll) or die(mysqli_error($db));

	?>
	
	<script type="text/javascript">
window.location.href = 'manage_guess_form.php';
</script>
	

	


<?php	}
?>