<?php

//establish a db connection
$db= mysqli_connect("localhost","root","asdf@1234","dpboss_forum");


if (isset($_POST['register'])) {
	$firstname = $_POST['firstname'];


	// $sql_u="SELECT * FROM luckyone WHERE username='$username'";

	// $res_u=mysqli_query($db,$sql_u) or die(mysqli_error($db));

	// if (mysqli_num_rows($res_u) > 0) {
	// 	$name_error="Sorry... Username already taken";
	// }else {

		$query = "INSERT INTO spinner (firstname) VALUES('$firstname')";
		$result = mysqli_query($db,$query) or die(mysqli_error($db));
		echo "Saved";
		header("Location:spin_to_win.php");
		exit();
	// }
}

