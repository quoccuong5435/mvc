<section>

         <div class="bg_in">
            <div class="breadcrumbs">

                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                           <a itemprop="item" href=".">

                           <span itemprop="name">Trang chủ</span></a>

                           <meta itemprop="position" content="1" />

                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                           <a itemprop="item" href="">
                           <?php $name ="";
                                 foreach($categorybyid as $key => $values)
                              {
                                 $name = $values['product_name'];
                              }
                              ?>
                            <span itemprop="name"><?php echo $name ?></span></a>
                        

                           <meta itemprop="position" content="2" />

                        </li>

                       
                     </ol>

                  </div>
         <div class="module_pro_all">
            <div class="box-title">
               <div class="title-bar">
                 
                  
                  <h1>Danh mục :<?php echo $name ?></h1>
                  
                  <a class="read_more" href="">
                  Xem thêm
                  </a>
               </div>
            </div>
            <div class="pro_all_gird">
               <div class="girds_all list_all_other_page ">
                  <?php foreach($categorybyid as $key =>  $value) {
                    ?>
                     <form action="<?php echo BASE_URL ?>giohang/themgiohang" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">  
                            <input type="hidden" name="name_product" value="<?php echo $value['name_product'] ?>">
                            <input type="hidden" name="price_product" value="<?php echo $value['price_product'] ?>">
                            <input type="hidden" name="quantily_product" value="1">
                            <input type="hidden" name="image_product" value="<?php echo $value['image_product'] ?>">
                  <div class="grids">
                     <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $value['id'] ?>">
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
         
         
      </section>