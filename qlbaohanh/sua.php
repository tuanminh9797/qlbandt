<?php
	$MaBaoHanh= $_GET['MaBaoHanh'];

	$sql_update="SELECT * FROM qlbaohanh WHERE MaBaoHanh= $MaBaoHanh";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenKH=$_POST['TenKH'];
		$TenSP=$_POST['TenSP'];
		$NgayBH=$_POST['NgayBH'];
		$HanBH=$_POST['HanBH'];

		$sql= "UPDATE qlbaohanh SET TenKH= '$TenKH', TenSP= '$TenSP', NgayBH= '$NgayBH', HanBH= '$HanBH' 
				WHERE MaBaoHanh= $MaBaoHanh";
		$query= mysqli_query($connect, $sql);
		header('location: qlbaohanh.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Bảo Hành</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input type="text" name="TenKH" class="form-control" required value="<?php echo $row_update['TenKH']?>">
				</div>

				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input type="text" name="TenSP" class="form-control" required value="<?php echo $row_update['TenSP']?>">
				</div>

				<div class="form-group">
					<label for="">Ngày Bảo Hành</label>
					<input type="date" name="NgayBH" class="form-control" required value="<?php echo $row_update['NgayBH']?>">
				</div>

				<div class="form-group">
					<label for="">Hạn Bảo Hành</label>
					<input type="date" name="HanBH" class="form-control" required value="<?php echo $row_update['HanBH']?>">
				</div>
				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>