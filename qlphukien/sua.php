<?php
	$MaPK= $_GET['MaPK'];

	$sql_update="SELECT * FROM qlphukien WHERE MaPK= $MaPK";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenPK=$_POST['TenPK'];

		if ($_FILES['AnhPK']['name']=='') {
			$AnhPK= $row_update['AnhPK'];
		}
		else{
			$AnhPK=$_FILES['AnhPK']['name'];
			$AnhPK_tmp=$_FILES['AnhPK']['tmp_name']; 
			move_uploaded_file($AnhPK_tmp, 'Anh/'.$AnhPK);
		}
		$AnhPK=$_FILES['AnhPK']['name'];
		$Gia=$_POST['Gia'];
		$SoLuong=$_POST['SoLuong'];
		$MoTa=$_POST['MoTa'];

		$sql= "UPDATE qlphukien SET TenPK= '$TenPK', AnhPK= '$AnhPK', Gia= $Gia, 
			SoLuong=  $SoLuong, MoTa= '$MoTa' WHERE MaPK= $MaPK";
		$query= mysqli_query($connect, $sql);
		header('location: qlphukien.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Phụ Kiện</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Điện Thoại</label>
					<input type="text" name="TenPK" class="form-control" required value="<?php echo $row_update['TenPK']?>">
				</div>

				<div class="form-group">
					<label for="">Ảnh</label>
					<input type="file" name="AnhPK">
				</div>

				<div class="form-group">
					<label for="">Giá</label>
					<input type="number" name="Gia" class="form-control" required value="<?php echo $row_update['Gia']?>">
				</div>

				<div class="form-group">
					<label for="">Số Lượng</label>
					<input type="number" name="SoLuong" class="form-control" required value="<?php echo $row_update['SoLuong']?>">
				</div>

				<div class="form-group">
					<label for="">Mô Tả</label>
					<input type="text" name="MoTa" class="form-control" required value="<?php echo $row_update['MoTa']?>">
				</div>
				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>	
			</form>
		</div>
	</div>
</div>