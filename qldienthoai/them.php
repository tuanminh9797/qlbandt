<?php
	$sql_DM= "SELECT * FROM qldongmay";
	$query_DM= mysqli_query($connect, $sql_DM);

	if (isset($_POST['sbm'])){
		$TenDT=$_POST['TenDT'];
		$MaDM=$_POST['MaDM'];
		$AnhDT=$_FILES['AnhDT']['name'];
		$AnhDT_tmp=$_FILES['AnhDT']['tmp_name'];
		$Gia=$_POST['Gia'];
		$SoLuong=$_POST['SoLuong'];
		$MoTa=$_POST['MoTa'];

		$sql= "INSERT INTO qldienthoai (TenDT, MaDM, AnhDT, Gia, SoLuong, MoTa)
		VALUES ('$TenDT', '$MaDM', '$AnhDT', $Gia, $SoLuong, '$MoTa')";
		$query= mysqli_query($connect, $sql);
		move_uploaded_file($AnhDT_tmp, 'Anh/'.$AnhDT);
		header('location: qldienthoai.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Điện Thoại</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Điện Thoại</label>
					<input type="text" name="TenDT" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Dòng Máy</label>
					<select class="form-control" name="MaDM">
						<?php
							while ($row_DM= mysqli_fetch_assoc($query_DM)){?>	
								<option value= "<?php echo $row_DM['MaDM']; ?>"><?php echo $row_DM['TenDM'];?>
								</option>
							<?php } ?>
						
					</select>
				</div>

				<div class="form-group">
					<label for="">Ảnh</label>
					<input type="file" name="AnhDT">
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