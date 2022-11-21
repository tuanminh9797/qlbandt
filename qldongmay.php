<?php
	require_once 'config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style>
        label{
            font-weight: 500;
        }

        .card input[type="timkiem"]{
            margin-right: -6px;
        }

        .card input[type="timkiem"]:focus, .card-header button:focus{
            box-shadow: none!important;   
        }

        .card-header button{
            width: 140px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
	<title>Quản Lý Dòng Máy</title>

</head>
<body>
	<?php
		if (isset($_GET['page_layout'])) {
			switch ($_GET['page_layout']) {
				case 'dongmay':
					require_once 'qldongmay/dongmay.php';
					break;

				case 'them':
					require_once 'qldongmay/them.php';
					break;

				case 'sua':
					require_once 'qldongmay/sua.php';
					break;

				case 'xoa':
					require_once 'qldongmay/xoa.php';
					break;
				
				default:
					require_once 'qldongmay/dongmay.php';
					break;
			}
		}
		else{
			require_once 'qldongmay/dongmay.php';
		}
	?>
</body>
</html>