<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MTP-SHOP</title>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/reset.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-theme.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-shop.css" />
    <link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/coin-slider-styles.css"/>
    <link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-product.css"/>

    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coin-slider.min.js"></script>
</head>
<body>
	<?php include 'navbar-user.php';?>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo base_url() ?>index.php/shop">
                    <img src="<?php echo base_url() ?>asset/images/logo.png" style="margin-bottom:10px; margin-left: 15px;">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-md-9 hidden-xs">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="box1">
                        <i class="fa fa-facebook-square"></i> Facebook
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="box2">
                        <i class="fa fa-clock-o"></i> Mở cửa<br>
                        <span style="font-size: 18px;">9h30 - 21h30</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="box3">
                        <i class="fa fa-phone-square"></i> Hotline<br>
                        <span style="font-size: 18px;">0912345678</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Khau hieu -->
    <div style="background:#03AC9A; width:100%; border-top:solid 1px #0D97D0; border-bottom:solid 1px #0D97D0; padding:5px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#" style="text-decoration: none;"><span class="khauhieu"><i class="fa fa-cc-visa"></i> thanh toán linh hoạt </span></a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#" style="text-decoration: none;"><span class="khauhieu"><i class="fa fa-mail-reply-all"></i> đổi trả dễ dàng </span></a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#" style="text-decoration: none;"><span class="khauhieu"><i class="fa fa-truck"></i> giao hàng miễn phí </span></a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#" style="text-decoration: none;"><span class="khauhieu"><i class="fa fa-shopping-cart"></i> uy tín-chất lượng </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Khau hieu -->

    <div class="container">
        <div class="row">
        	<!--sidebar-->
            <div class="col-xs-12 col-sm-3 col-md-3" style="color: #fff;">                
                <div class="panel-dark">Danh mục sản phẩm</div>
                <div class="panel-dark-body panel-bg">
                    <ul class="menu-watch">
                        <?php 
                        foreach ($catalog as $row){
                            if($row['parent#'] == null){
                                echo '<li><a href ="#"><i class="fa fa-caret-right"></i> '. $row['name'] .'</a><ul>';
                                foreach ($catalog as $row2){
                                    if($row2['parent#'] == $row['catalog#'])
                                        echo '<li>'. $row2['name'].'</li>';
                                }                                
                                echo '</ul>';              
                                echo '</li>';
                            }                                                                       
                        }
                        ?>
                    </ul>
               	</div>
                
                <div class="panel-news hidden-xs"><i class="fa fa-list"></i> HỖ TRỢ TRỰC TUYẾN</div>
                <div class="panel-news-body hidden-xs">
                    <div style="margin-bottom: 20px;">
                        <a href="#"><img src="<?php echo base_url() ?>asset/images/yahoo-on.png"></a>
                    </div>
                    <div>
                        <a href="#"><img src="<?php echo base_url() ?>asset/images/skype-on.png"></a>
                    </div>
                </div>

                <div class="panel-news hidden-xs"><i class="fa fa-list"></i> TIN TỨC</div>
                <div class="panel-news-body hidden-xs">
                    <?php
                    for($i=0; $i<5; $i++){
                        echo '<div class="list-group">';
                        echo '<a href="#" class="list-group-item">';
                        echo '<h4 class="list-group-item-heading"><i class="fa  fa-thumb-tack fa-fw"></i>News time one</h4>';
                        echo '<p class="list-group-item-text">Wrap buttons or secondary text in 
                        .panel-footer. Note that panel footers do not inherit colors and borders..
                        </p>';
                        echo '</a>';
                        echo '</div>';
                    }                  
                    ?>
                </div>
            </div>
            <!--/sidebar-->

            <!--main-->
            <div class="col-xs-12 col-sm-9 col-md-9" style="color: #fff;">
                <!-- Slideshows-->
                <div id='coin-slider' style="margin-top:20px;">
                    <a href="#" target="_blank">
                        <img src='<?php echo base_url() ?>asset/images/1.jpg' >
                        <span>
                            Sơ mi Hàn Quốc
                        </span>
                    </a>

                    <a href="#">
                        <img src='<?php echo base_url() ?>asset/images/2.jpg' >
                        <span>
                            Áo thun đẹp tuyệt vời :v
                        </span>
                    </a>

                    <a href="#">
                        <img src='<?php echo base_url() ?>asset/images/3.jpg' >
                        <span>
                            Áo khoác
                        </span>
                    </a>

                    <a href="#">
                        <img src='<?php echo base_url() ?>asset/images/4.jpg' >
                        <span>
                            Vest nam siêu đẹp từ Hàn Xẻng
                        </span>
                    </a>

                    <a href="#">
                        <img src='<?php echo base_url() ?>asset/images/5.jpg' >
                        <span>
                            Back to school
                        </span>
                    </a>

                    <a href="#">
                        <img src='<?php echo base_url() ?>asset/images/6.jpg' >
                        <span>
                            Quần Jeans cao cấp
                        </span>
                    </a>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#coin-slider').coinslider();
                    });
                </script>
                <!-- /Slideshows-->

                <div class="panel-dark">Sản Phẩm</div>
                <div class="panel-dark-body2">
					<?php 
                        foreach ($product as $row) {
                            echo '<div class="col-xs-12 col-sm-6 col-md-3 product">';
                            echo '<a href="'. base_url().'index.php/product/index?id='.$row['product#'] .'">';
                            echo '<img width="180" height="260" src="' . $row['images'] . '">';
                            echo '<div class="title">'. $row['name'] .'</div>';
                            echo '<div class="price">'. $row['price'] .' VNĐ</div>';
                            echo '</a>';
                            echo '<button class="add-to-cart" id="add"><i class="fa fa-cart-arrow-down"></i> ADD TO CART</button>';
                            echo '</div>';
                        }
                    ?>
                    <div style="clear: left;">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
            <!--/main-->
        </div>
    </div>

	<?php include 'footer.php'; ?>
</body>
</html>