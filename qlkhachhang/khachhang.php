<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlkhachhang INNER JOIN qlloaikhach ON qlkhachhang.MaLK = qlloaikhach.MaLK WHERE TenKH LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qlkh = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlkhachhang inner join qlloaikhach on  qlkhachhang.MaLK = qlloaikhach.MaLK";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlkh'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Khách Hàng</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlkh)){
                    if($total_qlkh !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlkh khách hàng</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy khách hàng nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Khách Hàng</th>
			 			<th>Ngày Sinh</th>
			 			<th>Giới Tính</th>
			 			<th>Loại Khách</th>
			 			<th>Số Điện Thoại</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenKH'];?></td>
			 				<td><?php echo $row['NgaySinh'];?></td>
			 				<td><?php echo $row['GioiTinh'];?></td>
			 				<td><?php echo $row['TenLK'];?></td>
			 				<td><?php echo $row['SDT'];?></td>
			 				<td>
			 				<a href="qlkhachhang.php?page_layout=sua&MaKH=<?php echo $row['MaKH'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenKH']; ?>')" href="qlkhachhang.php?page_layout=xoa&MaKH=<?php echo $row['MaKH'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlkhachhang.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa khách hàng " + name + "?");
	}
</script>