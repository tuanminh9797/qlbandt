<?php
	$MaPK= $_GET['MaPK'];
	$sql= "DELETE FROM qlphukien WHERE MaPK= $MaPK";
	$query= mysqli_query($connect, $sql);
	header('location: qlphukien.php?page_layout=danhsach');
?>