<?php	
	if (isset($_POST['sbm'])){
		$TenSP=$_POST['TenSP'];
		$TenKH=$_POST['TenKH'];
		$SoLuong=$_POST['SoLuong'];
		$Gia=$_POST['Gia'];

		$sql= "INSERT INTO qlbanhang (TenSP, TenKH, SoLuong, Gia)
		VALUES ('$TenSP', '$TenKH', '$SoLuong', '$Gia')";
		$query= mysqli_query($connect, $sql);
		header('location: qlbanhang.php?page_layout=banhang');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Đơn Hàng</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input type="text" name="TenSP" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input type="text" name="TenKH" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Số Lượng</label>
					<input type="number" name="SoLuong" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Giá</label>
					<input type="number" name="Gia" class="form-control" required="">
				</div>

				
				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>