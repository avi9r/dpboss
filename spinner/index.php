<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="shortcut icon" href="img/logo/favicon.ico"> -->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

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
	<div class="dot"></div>
	<input type="button" value="Spin Now!" style="float:left;"  id='spin' class="btn btn-light btn-spin">
</div>
<?php 
}else{
	header("Location: login.php");
	
}
?>
<script src="jq.js"></script>
<script src="app.js"></script>
<script>
	
</script>
</body>
</html>