<?php
	$MaBH= $_GET['MaBH'];
	$sql= "DELETE FROM qlbanhang WHERE MaBH= $MaBH";
	$query= mysqli_query($connect, $sql);
	header('location: qlbanhang.php?page_layout=banhang');
?>