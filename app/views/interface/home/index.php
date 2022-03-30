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
                       
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($hot_product as $key => $value){ ?>
                        <form action="<?php echo BASE_URL ?>giohang/themgiohang" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">  
                            <input type="hidden" name="name_product" value="<?php echo $value['name_product'] ?>">
                            <input type="hidden" name="price_product" value="<?php echo $value['price_product'] ?>">
                            <input type="hidden" name="quantily_product" value="1">
                            <input type="hidden" name="image_product" value="<?php echo $value['image_product'] ?>">
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
                                    <div class="">
                                        <a>
                                           <i class="fa -fa-shopping-cart"></i>
                                            <input type="submit"  class="btn-success" name="add_cart" value="Đặt hàng"> </input>
                                        </a> 
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span style="margin-left: 30px;" class="news_price"><?php echo number_format( $value['price_product'],0,",",".")."đ" ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
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
                       
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php
                    foreach ($list_product  as $key => $value_product) {
                        
                    if ($value_product['id_category_product']== $value['id']) {
                        ?>
                        <form action="<?php echo BASE_URL ?>giohang/themgiohang" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $value_product['id'] ?>">  
                            <input type="hidden" name="name_product" value="<?php echo $value_product['name_product'] ?>">
                            <input type="hidden" name="price_product" value="<?php echo $value_product['price_product'] ?>">
                            <input type="hidden" name="quantily_product" value="1">
                            <input type="hidden" name="image_product" value="<?php echo $value_product['image_product'] ?>">
                        <div class="grids">
                        <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="sanpham.php">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value_product['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
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
                                    <div class="">
                                        <a>
                                           <i class="fa -fa-shopping-cart"></i>
                                            <input type="submit"  class="btn-success" name="add_cart" value="Đặt hàng"> </input>
                                        </a> 
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span style="margin-left: 30px;" class="news_price"><?php echo number_format( $value_product['price_product'],0,",",".")."đ" ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
   