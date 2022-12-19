<?php
	$MaBaoHanh= $_GET['MaBaoHanh'];
	$sql= "DELETE FROM qlbaohanh WHERE MaBaoHanh= $MaBaoHanh";
	$query= mysqli_query($connect, $sql);
	header('location: qlbaohanh.php?page_layout=danhsach');
?>