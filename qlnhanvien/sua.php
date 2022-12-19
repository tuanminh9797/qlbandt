<?php
	$MaNV= $_GET['MaNV'];

	$sql_CV= "SELECT * FROM qlchucvu";
	$query_CV= mysqli_query($connect, $sql_CV);

	$sql_update="SELECT * FROM qlnhanvien WHERE MaNV= $MaNV";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenNV=$_POST['TenNV'];
		$NgaySinh=$_POST['NgaySinh'];
		$GioiTinh=$_POST['GioiTinh'];
		$QueQuan=$_POST['QueQuan'];
		$MaCV=$_POST['MaCV'];
		$SDT=$_POST['SDT'];

		$sql= "UPDATE qlnhanvien SET TenNV= '$TenNV', NgaySinh= '$NgaySinh', GioiTinh= '$GioiTinh', 
		QueQuan= '$QueQuan', MaCV=  '$MaCV', SDT= $SDT WHERE MaNV= $MaNV";
		$query= mysqli_query($connect, $sql);
		header('location: qlnhanvien.php?page_layout=nhanvien');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Nhân Viên</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Nhân Viên</label>
					<input type="text" name="TenNV" class="form-control" required value="<?php echo $row_update['TenNV']?>">
				</div>

				<div class="form-group">
					<label for="">Ngày Sinh</label>
					<input type="date" name="NgaySinh" class="form-control" required value="<?php echo $row_update['NgaySinh']?>">
				</div>

				<div class="form-group">
					<label for="">Giới Tính</label>
					<select class="form-control" name="GioiTinh">
						<option value="Nam">Nam</option>
						<option value="Nu">Nữ</option>
						
					</select>
				</div>

				
				<div class="form-group">
					<label for="">Quê Quán</label>
					<input type="text" name="QueQuan" class="form-control" required value="<?php echo $row_update['QueQuan']?>">
				</div>

				<div class="form-group">
					<label for="">Chức Vụ</label>
					<select class="form-control" name="MaCV">
						<?php
							while ($row_CV= mysqli_fetch_assoc($query_CV)){?>	
								<option value= "<?php echo $row_CV['MaCV']; ?>"><?php echo $row_CV['TenCV'];?>
								</option>
							<?php } ?>
						
					</select>
				</div>

				<div class="form-group">
					<label for="">Số Điện Thoại</label>
					<input type="number" name="SDT" class="form-control" required value="<?php echo $row_update['SDT']?>">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>