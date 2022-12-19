<?php
	if (isset($_POST['sbm'])){
		$TenKH=$_POST['TenKH'];
		$TenSP=$_POST['TenSP'];
		$NgayBH=$_POST['NgayBH'];
		$HanBH=$_POST['HanBH'];

		$sql= "INSERT INTO qlbaohanh (TenKH, TenSP, NgayBH, HanBH)
		VALUES ('$TenKH', '$TenSP', '$NgayBH', '$HanBH')";
		$query= mysqli_query($connect, $sql);
		header('location: qlbaohanh.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Bảo Hành</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input type="text" name="TenKH" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input type="text" name="TenSP" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Ngày Bảo Hành</label>
					<input type="date" name="NgayBH" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Hạn Bảo Hành</label>
					<input type="date" name="HanBH" class="form-control" required="">
				</div>
				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>