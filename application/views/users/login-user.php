
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/reset.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-theme.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-login-user.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<div style="margin:20px; text-align: center;">
					
				</div>
			</div>
			
			<!--Đăng nhập -->
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="bg-login">
					<form method="post" action="login" name="flogin"> 
						<h1 style="margin-left: 10px; margin-top: 40px; font-variant:small-caps;">đăng nhập</h1>
						<i class="fa fa-user" style="margin-left:10px;"></i><span class="err"> </span><br>
						<input type="text" name="fusername" placeholder="UserName" class="txtbox"><br>
						<span class="glyphicon glyphicon-lock" aria-hidden="true" style="margin-left:10px;"></span>
						<span class="err"> </span><br>
						<input type="password" name="fpass" placeholder="PassWord" class="txtbox"><br>
						<input type="checkbox" name="forget" style="margin: 10px;">Ghi nhớ đăng nhập<br>
						<input type="submit" value="ĐĂNG NHẬP" class="submit">
					</form>						
					
					<a href="<?php echo base_url() ?>index.php/users/register" style="text-decoration: none;"><div style="margin-left:10px;color:red;width:93%;text-align:center;">Bạn đã có tài khoản chưa?</div></a>
					<a href="<?php echo base_url() ?>index.php/users/register"><button class="registor">đăng ký tài khoản</button></a>
					<div style="margin-left:10px;width:93%;text-align:center; margin-top:50px; color:#666666;">
						Đơn vị chủ quản: MTP-TEAM<br>
						Địa chỉ: Đại Học Bách Khoa Hà Nội<br>
						Điện thoại: 09xxxxxxxxx<br>
						Email: mtpteam@mtpteam.vn<br>
					</div>
                </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>