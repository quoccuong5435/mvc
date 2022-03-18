<h3 style="text-align: center;">Thêm danh mục sản phẩm</h3>
<?php
       if(!empty($_GET['msg']))
       {
         $msg = unserialize(urldecode($_GET['msg']));
         foreach($msg as $key => $value)
         {
           echo '<span style="color:blue;font-weight:bold">'.$value."</span>";
         }
       }   
    ?>
<div class="col-md-12">
<?php  foreach($product as $key => $value)
          {
      ?>
  <form action="<?php echo BASE_URL ?>product/update_product/<?php echo $value['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Tên sản phẩm</label>
      <input type="text" class="form-control" value="<?php echo $value['name_product'] ?>" name="name_product">
    </div>
    <div class="form-group">
      <label for="email">Giá sản phẩm</label>
      <input type="text" class="form-control" value="<?php echo $value['price_product'] ?>" name="price_product" >
    </div>
    <div class="form-group">
      <label for="email">Số lượng</label>
      <input type="number" class="form-control" value="<?php echo $value['quantily_product'] ?>" name="quantily_product"  >
    </div>
    <div class="form-group">
      <label for="email">Hình ảnh</label>
      <img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
      <input type="file" class="form-control" value="<?php echo $value['image_product'] ?>" name="image_product"  >
    </div>
    <div class="form-group">
      <label for="email">Sản phẩm hot</label></label>
      <select class="form-control" name="hot_product">
      <?php if($value['hot_product']== 0){?>
        <option selected value="0">Không</option>
        <option value="1">Có</option>
        <?php }
          else{?>
            <option  value="0">Không</option>
            <option selected value="1">Có</option>
            <?php } ?>
        
      </select>
    </div>
    <div class="form-group">
      <label for="email">Tên danh mục sản phẩm</label></label>
      <select class="form-control" name="id_category_product">
      <?php foreach($category as $key => $values)
      { ?>
        <option <?php if($value['id_category_product'] == $values['id']){ echo "selected" ;} ?> value="<?php echo $values['id'] ?>"><?php echo $values['product_name'] ?></option>
      <?php }?>
      </select>
    </div>
    
    <div class="form-group">
      <label for="email">Mô tả sản phẩm</label>
      <br>
      <textarea  id="editor"  rows="10" value name="description_product"><?php echo $value['description_product'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <?php 
          }
        ?>
</div>