<?php
	if (isset($_POST['sbm'])){
		$TenCV=$_POST['TenCV'];
		

		$sql= "INSERT INTO qlchucvu(TenCV) VALUES ('$TenCV')";
		$query= mysqli_query($connect, $sql);
		header('location: qlchucvu.php?page_layout=chucvu');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Chức Vụ</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Chức Vụ</label>
					<input type="text" name="TenCV" class="form-control" required="">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>