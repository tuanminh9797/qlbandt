<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qlchucvu WHERE TenCV LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qlcv = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qlchucvu";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qlcv'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Chức Vụ</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qlcv)){
                    if($total_qlcv !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qlcv chức vụ</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy chức vụ nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Chức Vụ</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenCV'];?></td>
			 				<td>
			 				<a href="qlchucvu.php?page_layout=sua&MaCV=<?php echo $row['MaCV'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenCV']; ?>')" href="qlchucvu.php?page_layout=xoa&MaCV=<?php echo $row['MaCV'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qlchucvu.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa chức vụ " + name + "?");
	}
</script>