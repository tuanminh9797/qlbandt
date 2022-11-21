<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qldienthoai INNER JOIN qldongmay ON qldienthoai.MaDM = qldongmay.MaDM WHERE TenDT LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qldt = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qldienthoai inner join qldongmay on  qldienthoai.MaDM = qldongmay.MaDM";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qldt'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Điện Thoại</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qldt)){
                    if($total_qldt !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qldt sản phẩm</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy sản phẩm nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Điện Thoại</th>
			 			<th>Dòng Máy</th>
			 			<th>Ảnh</th>
			 			<th>Giá</th>
			 			<th>Số Lượng</th>
			 			<th>Mô Tả</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenDT'];?></td>
			 				<td><?php echo $row['TenDM'];?></td>
			 				
			 				<td>
			 					<img style="width: 100px" src="Anh/<?php echo $row['AnhDT'];?>">
			 					
			 				</td>

			 				<td><?php echo $row['Gia'];?></td>
			 				<td><?php echo $row['SoLuong'];?></td>
			 				<td><?php echo $row['MoTa'];?></td>
			 				<td>
			 				<a href="qldienthoai.php?page_layout=sua&MaDT=<?php echo $row['MaDT'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenDT']; ?>')" href="qldienthoai.php?page_layout=xoa&MaDT=<?php echo $row['MaDT'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qldienthoai.php?page_layout=them">Thêm Mới</a>
			 
			 <a class="btn btn-primary" href="menu.php">Thoát</a>

		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa điện thoại " + name + "?");
	}
</script>