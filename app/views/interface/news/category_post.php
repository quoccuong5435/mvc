<section>
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div class="wrapper_all_main_right">
            <div class="tags_products">
               <a href="sanpham.php">
               Tủ mạng
               </a>
               <a href="sanpham.php">
               Cáp mạng
               </a>
               <a href="sanpham.php">
               Thiết bị mạng
               </a>
               <a href="sanpham.php">
               Nas Synology
               </a>
               <a href="sanpham.php">
               Phụ kiện và thiết bị thi công mạng
               </a>
            </div>
            <!--breadcrumbs-->
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
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php $name="";
                        foreach($categorypostbyid as $key => $values)
                        {
                           $name = $values['title'];
                        }
                        echo $name;
                     ?>
                     </strong>  
                     </span>
                     <meta itemprop="position" content="2" />
                  </li>
               </ol>
            </div>
            <!--breadcrumbs-->
            <div class="content_page">
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Tin tức</h1>
                  </div>
               </div>
               <div class="content_text">
                  <ul class="list_ul">
                     <?php foreach($categorypostbyid as $key => $value) {?>
                     <li class="lists ">
                        <div class="img-list">
                           <a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html">
                           <img style="height: 200px; width: 200px;" src="<?php  echo BASE_URL ?>public/uploads/post/<?php echo $value['image_post'] ?>" alt="So sánh công nghệ hiển thị 3LCD và DLP" class="img-list-in">
                           </a>
                        </div>
                        <div class="content-list">
                           <div class="content-list_inm">
                              <div class="title-list">
                                 <h3>
                                    <a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html"><?php echo $value['name_post'] ?></a>
                                 </h3>
                                 <p class="list-news-status-p">
                                    <a title="Thiết bị văn phòng"><?php echo $value['title'] ?></a> | <a title="26-12-2017" >26-12-2017</a>
                                 </p>
                              </div>
                              <div class="content-list-in">
                                 <p><span style="font-size:16px"><?php echo substr( $value['description_post'],0,200) ?></span></p>
                                </div>
                              <div class="xt"><a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html">Xem thêm</a></div>
                           </div>
                        </div>
                        <?php } ?>

                        <div class="clear"></div>
                     </li>
                  </ul>
                  <div class="clear"></div>
                  <div class="wp_page">
                     <div class="page">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--start:left-->
        
         <!--end:left-->
         <div class="clear"></div>
      </div>
   </div>
</section>