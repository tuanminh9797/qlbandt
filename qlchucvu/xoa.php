<?php
	$MaCV= $_GET['MaCV'];
	$sql= "DELETE FROM qlchucvu WHERE MaCV= $MaCV";
	$query= mysqli_query($connect, $sql);
	header('location: qlchucvu.php?page_layout=chucvu');
?>