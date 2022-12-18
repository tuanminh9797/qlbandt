<?php
	$sql_CV= "SELECT * FROM qlchucvu";
	$query_CV= mysqli_query($connect, $sql_CV);

	if (isset($_POST['sbm'])){
		$TenNV=$_POST['TenNV'];
		$NgaySinh=$_POST['NgaySinh'];
		$GioiTinh=$_POST['GioiTinh'];
		$QueQuan=$_POST['QueQuan'];
		$MaCV=$_POST['MaCV'];
		$SDT=$_POST['SDT'];

		$sql= "INSERT INTO qlnhanvien (TenNV, NgaySinh, GioiTinh, QueQuan, MaCV, SDT)
		VALUES ('$TenNV', '$NgaySinh', '$GioiTinh', '$QueQuan', '$MaCV', $SDT)";
		$query= mysqli_query($connect, $sql);
		header('location: qlnhanvien.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Nhân Viên</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Nhân Viên</label>
					<input type="text" name="TenNV" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Ngày Sinh</label>
					<input type="date" name="NgaySinh" class="form-control" required="">
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
					<input type="text" name="QueQuan" class="form-control" required="">
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
					<label for="">SDT</label>
					<input type="number" name="SDT" class="form-control" required="">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>