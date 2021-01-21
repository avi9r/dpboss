<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- jQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
<!-- local style css -->
<link rel="stylesheet" href="bt.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php
session_start();
require_once('../connect.php');
if(isset($_SESSION['id'])){
	
?>

<div class="spinner-div">
	<div class="div-img">
		<img src="my-spin2.png" alt="" class="img-spin">
		<p href="#" class="value11">54</p>
	</div>
	<input type="hidden" class="u_id" value="<?php echo $_SESSION['id']; ?>">
	<div class="dot"></div>
	<input type="button" value="Spin Now!" style="float:left;"  id='spin' class="btn btn-light btn-spin">
</div>
<?php 
}else{
	header("Location: login.php");
	
}
?>
<!-- <script src="jq.js"></script> -->
<script src="app.js"></script>
<script>
	
</script>
</body>
</html>