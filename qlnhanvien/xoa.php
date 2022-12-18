<?php
	$MaNV= $_GET['MaNV'];
	$sql= "DELETE FROM qlnhanvien WHERE MaNV= $MaNV";
	$query= mysqli_query($connect, $sql);
	header('location: qlnhanvien.php?page_layout=nhanvien');
?>