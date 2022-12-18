<?php
	$sql_LK= "SELECT * FROM qlloaikhach";
	$query_LK= mysqli_query($connect, $sql_LK);

	if (isset($_POST['sbm'])){
		$TenKH=$_POST['TenKH'];
		$NgaySinh=$_POST['NgaySinh'];
		$GioiTinh=$_POST['GioiTinh'];
		$MaLK=$_POST['MaLK'];
		$SDT=$_POST['SDT'];

		$sql= "INSERT INTO qlkhachhang (TenKH, NgaySinh, GioiTinh, MaLK, SDT)
		VALUES ('$TenKH', '$NgaySinh', '$GioiTinh', '$MaLK', $SDT)";
		$query= mysqli_query($connect, $sql);
		header('location: qlkhachhang.php?page_layout=khachhang');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Khách Hàng</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input type="text" name="TenKH" class="form-control" required="">
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
					<label for="">Loại Khách</label>
					<select class="form-control" name="MaLK">
						<?php
							while ($row_LK= mysqli_fetch_assoc($query_LK)){?>	
								<option value= "<?php echo $row_LK['MaLK']; ?>"><?php echo $row_LK['TenLK'];?>
								</option>
							<?php } ?>
						
					</select>
				</div>

				<div class="form-group">
					<label for="">Số Điện Thoại</label>
					<input type="number" name="SDT" class="form-control" required="">
				</div>

				
				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>