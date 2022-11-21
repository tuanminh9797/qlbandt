<?php
	if (isset($_POST['sbm'])){
		$TenPK=$_POST['TenPK'];
		$AnhPK=$_FILES['AnhPK']['name'];
		$AnhPK_tmp=$_FILES['AnhPK']['tmp_name'];
		$Gia=$_POST['Gia'];
		$SoLuong=$_POST['SoLuong'];
		$MoTa=$_POST['MoTa'];

		$sql= "INSERT INTO qlphukien (TenPK, AnhPK, Gia, SoLuong, MoTa)
		VALUES ('$TenPK','$AnhPK', $Gia, $SoLuong, '$MoTa')";
		$query= mysqli_query($connect, $sql);
		move_uploaded_file($AnhPK_tmp, 'Anh/'.$AnhPK);
		header('location: qlphukien.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Phụ Kiện</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Phụ Kiện</label>
					<input type="text" name="TenPK" class="form-control" required="">
				</div>

				
				<div class="form-group">
					<label for="">Ảnh</label>
					<input type="file" name="AnhPK">
				</div>

				<div class="form-group">
					<label for="">Giá</label>
					<input type="number" name="Gia" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Số Lượng</label>
					<input type="number" name="SoLuong" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Mô Tả</label>
					<input type="text" name="MoTa" class="form-control" required="">
				</div>
				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>