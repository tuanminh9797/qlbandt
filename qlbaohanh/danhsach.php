<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlbaohanh WHERE TenKH LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qlb = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlbaohanh";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlb'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Bảo Hành</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlb)){
                    if($total_qlb !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlb sản phẩm</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy sản phẩm nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Khách Hàng</th>
			 			<th>Tên Sản Phẩm</th>
			 			<th>Ngày Bảo Hành</th>
			 			<th>Ngày Hết Hạn</th> 
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenKH'];?></td>
			 				<td><?php echo $row['TenSP'];?></td>
			 				<td><?php echo $row['NgayBH'];?></td>
			 				<td><?php echo $row['HanBH'];?></td>
			 				<td>
			 				<a href="qlbaohanh.php?page_layout=sua&MaBaoHanh=<?php echo $row['MaBaoHanh'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenKH']; ?>')" href="qlbaohanh.php?page_layout=xoa&MaBaoHanh=<?php echo $row['MaBaoHanh'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlbaohanh.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa bảo hành " + name + "?");
	}
</script>