<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlphukien WHERE TenPK LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qldt = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlphukien ";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlpk'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Phụ Kiện</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlpk)){
                    if($total_qlpk !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlpk sản phẩm</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy sản phẩm nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Phụ Kiện</th>
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
			 				<td><?php echo $row['TenPK'];?></td>
			 				
			 				
			 				<td>
			 					<img style="width: 100px" src="Anh/<?php echo $row['AnhPK'];?>">
			 					
			 				</td>

			 				<td><?php echo $row['Gia'];?></td>
			 				<td><?php echo $row['SoLuong'];?></td>
			 				<td><?php echo $row['MoTa'];?></td>
			 				<td>
			 				<a href="qlphukien.php?page_layout=sua&MaPK=<?php echo $row['MaPK'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenPK']; ?>')" href="qlphukien.php?page_layout=xoa&MaPK=<?php echo $row['MaPK'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlphukien.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa phụ kiện " + name + "?");
	}
</script>