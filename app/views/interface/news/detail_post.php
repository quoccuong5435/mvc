<section>
   <?php foreach($details as $key => $value){ ?>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right">
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>tintuc/danhmuc/<?php echo $value['id_category_post'] ?>">
                           <span itemprop="name"><?php echo $value['title'] ?></span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           
                           <span itemprop="name"><?php echo $value['name_post'] ?></span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
                  <?php } ?>
                  <!--breadcrumbs-->
                  <div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1><?php echo $value['name_post'] ?></h1>
                        </div>
                     </div>
                     <div class="content_text">
                        <?php echo $value['description_post'] ?>  
                     </div>
                     <div class="clear"></div>
                  </div>
                  <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Sản phẩm liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                           <?php foreach($relate as $key => $values) {?>
                        <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="<?php  echo BASE_URL ?>public/uploads/post/<?php echo $values['image_post'] ?>" data-original="<?php  echo BASE_URL ?>public/image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           <div class="content-overlay"></div>
                           <!-- <div class="content-details fadeIn-top">
                             <ul class="details-product-overlay">
                                <li>Màn hình : Super Amoled 4.5k</li>
                                <li>Độ phân giải : 2K+(1440x3040)</li>
                                <li>Ram : 8GB</li>
                                <li>CPU : Android 9.0</li>
                                <li>GPU : Mali-G76 MP12</li>
                                <li>SSD : 512MB</li>

                             </ul>
                            
                           </div> -->
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL ?>tintuc/chitiettintuc/<?php echo $values['id'] ?>">
                              <h3><?php echo $values['name_post'] ?></h3>
                           </a>
                        </div>
                        
                        <!-- <div class="price_old_new">
                           <div class="price">
                              <span class="news_price">17.800.000đ </span>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
               <!--start:left-->
               <div class="wrapper_all_main_left">
                   
               </div>
               <!--end:left-->
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
      <?php } ?>
      </section>