<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>index.php/shop"><span style="color:#03AC9A"><i class="glyphicon glyphicon-home"></i> MTP</span></a>
            </div>
            

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class=""><a href="#">Sản phẩm<span class="sr-only">(current)</span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-gift" style="color:#F68C22"></i> Khuyến mãi</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#"><i class="fa fa-life-ring" style="color:#5bc0de;"></i> Hỗ trợ</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>index.php/users/login" style="color:#08AED8"><i class="fa fa-sign-in"></i> Đăng Nhập</a></li>
                            <li><a href="<?php echo base_url() ?>index.php/users/register" style="color:#F68C22"><i class="fa fa-thumb-tack"></i> Đăng Ký Tài Khoản</a></li>     
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>   
</body>
</html>
