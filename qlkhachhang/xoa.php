<?php
	$MaKH= $_GET['MaKH'];
	$sql= "DELETE FROM qlkhachhang WHERE MaKH= $MaKH";
	$query= mysqli_query($connect, $sql);
	header('location: qlkhachhang.php?page_layout=khachhang');
?>