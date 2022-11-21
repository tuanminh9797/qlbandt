<?php
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM qldongmay WHERE TenDM LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $total_qldm = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM qldongmay";
        $query = mysqli_query($connect, $sql);
    }

    if(isset($_POST['all_qldm'])){
        unset($_POST['sbm']);
    }
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2>Danh Sách Dòng Máy</h2>
			<form method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control">
                <button name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
		</div>
		<div class="card-body">
			<?php
                if(isset($total_qldm)){
                    if($total_qldm !==0){
                        echo "<p class='text-success'>Tìm thấy $total_qldm dòng máy</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy dòng máy nào! </p>";
                    }
                }
            ?>
			 <table class="table bordered">
			 	<thead class="thead-dark">
			 		<tr>
			 			<th>Tên Dòng Máy</th>
			 			<th>Sửa</th>
			 			<th>Xóa</th>
			 			
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php
			 			while ($row = mysqli_fetch_assoc($query)){?>
			 			<tr>
			 				<td><?php echo $row['TenDM'];?></td>
			 				<td>
			 				<a href="qldongmay.php?page_layout=sua&MaDM=<?php echo $row['MaDM'];?>">Sửa</a>
			 				</td>
			 				<td>
			 				<a onclick="return Del('<?php echo $row['TenDM']; ?>')" href="qldongmay.php?page_layout=xoa&MaDM=<?php echo $row['MaDM'];?>">Xóa</a>
			 				</td>
			 		</tr>
			 		<?php } ?>
			 	</tbody>
			 </table>
			 <a class="btn btn-primary" href="qldongmay.php?page_layout=them">Thêm Mới</a>
			 <a class="btn btn-primary" href="menu.php">Thoát</a>
		</div>
	</div>
</div>
<script>
	function Del(name){
		return confirm ("Bạn có muốn xóa dòng máy " + name + "?");
	}
</script>