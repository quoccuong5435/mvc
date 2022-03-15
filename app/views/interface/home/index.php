    <section>
        <style type="text/css">
            .grids.home_product{
                height: 372px;
            }
        </style>
        <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                        <a class="read_more" href="sanpham.php">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($hot_product as $key => $value){ ?>
                        <div class="grids home_product">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="sanpham.php">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                        </a>

                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <li><?php echo $value['description_product'] ?></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $value['id'] ?>">
                                            <h3><?php echo $value['name_product'] ?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                        <a onclick="return giohang(579);">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                        </a>
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo $value['price_product'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php foreach($category as $key => $value)
            { ?>
                
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $value['product_name'] ?></h1>
                        <a class="read_more" href="sanpham.php">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php
                    foreach ($list_product  as $key => $value_product) {
                    if ($value_product['id_category_product']== $value['id']) {
                        ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="sanpham.php">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value_product['image_product'] ?>" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                                        </a>

                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <li><?php echo $value_product['description_product'] ?></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $value_product['id'] ?>">
                                            <h3><?php echo $value_product['name_product'] ?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                        <a onclick="return giohang(579);">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                        </a>
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo $value_product['price_product'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php      }
                } ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
          <?php
               
            }        
                    ?>

    </section>
    <!--end:body-->
   