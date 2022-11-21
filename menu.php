<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      background-image: url("1.jpg");
      background-size: 50%;

    }
    ul{
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color:#202020;
    }
    li{
      float: left;
    }
    li a, .dropbtn{
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover, .dropdown:hover . dropbtn{
      background-color: rgb(255,0,43);
    }
    li.dropdown{
      display: inline-block;
    }
    .dropdown-content{
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a{
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .dropdown-content a:hover{
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content{
      display: block;
    }
  </style>
  <title></title>
</head>
<body>
  <ul>
    <li><a href=""><b>Website Bán Điện Thoại</a></li>
    <li class="dropdown">
      <a class="dropbtn"><b>Quản Lý</a>
      <div class="dropdown-content">
        <a href="qlnhanvien.php">Nhân Viên</a>
        <a href="qlkhachhang.php">Khách Hàng</a>
        <a href="qlchucvu.php">Chức Vụ</a>
      </div>
    </li>
    <li class="dropdown">
      <a class="dropbtn"><b>Danh Mục</a>
      <div class="dropdown-content">
        <a href="qldienthoai.php">Quản Lý Điện Thoại</a>
        <a href="qldongmay.php">Quản Lý Dòng Máy</a>
        <a href="qlphukien.php">Quản Lý Phụ Kiện</a>
        
      </div>
    </li>
     <li class="dropdown">
      <a class="dropbtn"><b>Bán Hàng</a>
      <div class="dropdown-content">
        <a href="qlbanhang.php">Quản Lý Bán Hàng</a>
        <a href="qlbaohanh.php">Quản Lý Bảo Hành  </a>
        
      </div>
    </li>
  </ul>
</body>
</html>