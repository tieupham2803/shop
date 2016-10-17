<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/reset.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-theme.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-register.css" />
	<link href='<?php echo base_url() ?>asset/font/Pacifico.ttf' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">Đăng Ký</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3"></div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="box-form">
					<form method="post" action="register">
						<div class="head-box">MTP SHOP</div>
						<input type="text" name="fname" placeholder="Họ Tên" class="input"><br>
						<input type="text" name="femail" placeholder="Email" class="input"><br>
						<input type="password" name="fpass" placeholder="Mật Khẩu" class="input"><br>
						<input type="password" placeholder="Xác nhận lại mật khẩu" class="input"><br>
						<p style="margin-top:20px; margin-left: 10px;">
							Bằng việc click vào nút Đăng ký bạn đã đồng ý 
							<a href="#" style="font-weight: bold;">Điều khoản sử dụng</a>
						</p>
						<input type="submit" class="input submit" value="Đăng Ký">					
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3"></div>
		</div>
	</div>
</body>
</html>