<?php
	$MaDM= $_GET['MaDM'];
	$sql= "DELETE FROM qldongmay WHERE MaDM= $MaDM";
	$query= mysqli_query($connect, $sql);
	header('location: qldongmay.php?page_layout=dongmay');
?>