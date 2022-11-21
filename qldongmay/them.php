<?php
	if (isset($_POST['sbm'])){
		$TenDM=$_POST['TenDM'];
		

		$sql= "INSERT INTO qldongmay (TenDM) VALUES ('$TenDM')";
		$query= mysqli_query($connect, $sql);
		header('location: qldongmay.php?page_layout=dongmay');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Dòng Máy</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Tên Dòng Máy</label>
					<input type="text" name="TenDM" class="form-control" required="">
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>	
			</form>
		</div>
	</div>
</div>