<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlbanhang WHERE TenKH,TenSP LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qlkh = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlbanhang";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlbh'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Bán Hàng</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlbh)){
                    if($total_qlbh !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlbh khách hàng</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy khách hàng nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Sản Phẩm</th>
			 			<th>Tên Khách Hàng</th>
			 			<th>Số Lượng</th>
			 			<th>Giá</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenSP'];?></td>
			 				<td><?php echo $row['TenKH'];?></td>
			 				<td><?php echo $row['SoLuong'];?></td>
			 				<td><?php echo $row['Gia'];?></td>
			 				<td>
			 				<a href="qlbanhang.php?page_layout=sua&MaBH=<?php echo $row['MaBH'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenSP']; ?>')" href="qlbanhang.php?page_layout=xoa&MaBH=<?php echo $row['MaBH'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlbanhang.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>   
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa đơn hàng " + name + "?");
	}
</script>