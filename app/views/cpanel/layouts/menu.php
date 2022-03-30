<body>
<div class="container">
    <div class="col-sm-12">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo BASE_URL ?>login/dashboard">Ecommerce</a>
                </div>
                <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="<?php echo BASE_URL ?>login/dashboard">Trang chủ</a></li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục bài viết
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>category">Danh sách</a></li>
                    <li><a href="<?php echo BASE_URL ?>category/insert">Thêm mới danh mục</a></li>
        
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục sản phẩm
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>product">Danh sách</a></li>
                    <li><a href="<?php echo BASE_URL ?>product/insert">Thêm mới danh mục</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài viết
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>post">Danh sách bài viết</a></li>
                    <li><a href="<?php echo BASE_URL ?>post/insert">Thêm bài viết</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>product/list_page">Danh sách sản phẩm</a></li>
                    <li><a href="<?php echo BASE_URL ?>product/insert_page">Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"href="<?php echo BASE_URL ?>order">Đơn hàng
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>order">Danh sách đơn hàng</a></li>
                    </ul>
                </li>
                <li>
                <a  href="<?php echo BASE_URL ?>login\logout">Đăng xuất
                    </a>
                </li>
                </ul>
               
            </div>
        </nav>
        </div>
    </div>