<?php
	$MaCV= $_GET['MaCV'];

	$sql_update="SELECT * FROM qlchucvu WHERE MaCV= $MaCV";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenCV=$_POST['TenCV'];

		$sql= "UPDATE qlchucvu SET TenCV= '$TenCV' WHERE MaCV= $MaCV";
		$query= mysqli_query($connect, $sql);
		header('location: qlchucvu.php?page_layout=chucvu');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Chức Vụ</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Chức Vụ</label>
					<input type="text" name="TenCV" class="form-control" required value="<?php echo $row_update['TenCV']?>">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>