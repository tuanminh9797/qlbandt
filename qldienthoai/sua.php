<?php
	$MaDT= $_GET['MaDT'];

	$sql_DM= "SELECT * FROM qldongmay";
	$query_DM= mysqli_query($connect, $sql_DM);

	$sql_update="SELECT * FROM qldienthoai WHERE MaDT= $MaDT";
	$query_update= mysqli_query($connect, $sql_update);
	$row_update= mysqli_fetch_assoc($query_update);  
	
	if (isset($_POST['sbm'])){
		$TenDT=$_POST['TenDT'];

		if ($_FILES['AnhDT']['name']=='') {
			$AnhDT= $row_update['AnhDT'];
		}
		else{
			$AnhDT=$_FILES['AnhDT']['name'];
			$AnhDT_tmp=$_FILES['AnhDT']['tmp_name']; 
			move_uploaded_file($AnhDT_tmp, 'Anh/'.$AnhDT);
		}
		$MaDM=$_POST['MaDM'];
		$AnhDT=$_FILES['AnhDT']['name'];
		$Gia=$_POST['Gia'];
		$SoLuong=$_POST['SoLuong'];
		$MoTa=$_POST['MoTa'];

		$sql= "UPDATE qldienthoai SET TenDT= '$TenDT', MaDM= $MaDM, AnhDT= '$AnhDT', Gia= $Gia, 
			SoLuong=  $SoLuong, MoTa= '$MoTa' WHERE MaDT= $MaDT";
		$query= mysqli_query($connect, $sql);
		header('location: qldienthoai.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Danh Sách Điện Thoại</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên Điện Thoại</label>
					<input type="text" name="TenDT" class="form-control" required value="<?php echo $row_update['TenDT']?>">
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