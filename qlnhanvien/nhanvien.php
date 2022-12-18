<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlnhanvien INNER JOIN qlchucvu ON qlnhanvien.MaCV = qlchucvu.MaCV WHERE TenNV LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qldt = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlnhanvien inner join qlchucvu on  qlnhanvien.MaCV = qlchucvu.MaCV";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlnv'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Nhân Viên</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlnv)){
                    if($total_qlnv !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlnv nhân viên</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy nhân viên nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Nhân Viên</th>
			 			<th>Ngày Sinh</th>
			 			<th>Giới Tính</th>
			 			<th>Quê Quán</th>
			 			<th>Chức Vụ</th>
			 			<th>Số Điện Thoại</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenNV'];?></td>
			 				<td><?php echo $row['NgaySinh'];?></td>
			 				<td><?php echo $row['GioiTinh'];?></td>
			 				<td><?php echo $row['QueQuan'];?></td>
			 				<td><?php echo $row['TenCV'];?></td>
			 				<td><?php echo $row['SDT'];?></td>
			 				<td>
			 				<a href="qlnhanvien.php?page_layout=sua&MaNV=<?php echo $row['MaNV'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenNV']; ?>')" href="qlnhanvien.php?page_layout=xoa&MaNV=<?php echo $row['MaNV'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlnhanvien.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa nhân viên " + name + "?");
	}
</script>