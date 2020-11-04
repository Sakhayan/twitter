<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$ins2 = "INSERT INTO followings (name, channel, img) VALUES ('".$_GET["name"]."','".$_GET["channel"]."','".$_GET["img"]."')";
	mysqli_query($connect, $ins2);
	header('Location: index.php');
?>
