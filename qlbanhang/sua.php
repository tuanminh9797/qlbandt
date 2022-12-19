<?php
	$MaBH= $_GET['MaBH'];

	$sql_update="SELECT * FROM qlbanhang WHERE MaBH= $MaBH";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenSP=$_POST['TenSP'];
		$TenKH=$_POST['TenKH'];
		$Gia=$_POST['Gia'];
		$SoLuong=$_POST['SoLuong'];

		$sql= "UPDATE qlbanhang SET TenSP= '$TenSP', TenKH= '$TenKH', 
			SoLuong=  $SoLuong, Gia= $Gia WHERE MaBH= $MaBH";
		$query= mysqli_query($connect, $sql);
		header('location: qlbanhang.php?page_layout=banhang');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Đơn Hàng</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input type="text" name="TenSP" class="form-control" required value="<?php echo $row_update['TenSP']?>">
				</div>

				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input type="text" name="TenKH" class="form-control" required value="<?php echo $row_update['TenKH']?>">
				</div>

				<div class="form-group">
					<label for="">Số Lượng</label>
					<input type="number" name="SoLuong" class="form-control" required value="<?php echo $row_update['SoLuong']?>">
				</div>

				<div class="form-group">
					<label for="">Giá</label>
					<input type="number" name="Gia" class="form-control" required value="<?php echo $row_update['Gia']?>">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>