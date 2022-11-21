<?php
	$MaDM= $_GET['MaDM'];

	$sql_update="SELECT * FROM qldongmay WHERE MaDM= $MaDM";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenDM=$_POST['TenDM'];

		$sql= "UPDATE qldongmay SET TenDM= '$TenDM'WHERE MaDM= $MaDM";
		$query= mysqli_query($connect, $sql);
		header('location: qldongmay.php?page_layout=dongmay');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Dòng Máy</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Dòng Máy</label>
					<input type="text" name="TenDM" class="form-control" required value="<?php echo $row_update['TenDM']?>">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>