<?php
	$MaDT= $_GET['MaDT'];
	$sql= "DELETE FROM qldienthoai WHERE MaDT= $MaDT";
	$query= mysqli_query($connect, $sql);
	header('location: qldienthoai.php?page_layout=danhsach');
?>