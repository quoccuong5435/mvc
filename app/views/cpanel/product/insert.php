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
 
  <form action="<?php echo BASE_URL ?>product/insertProducts" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Tên sản phẩm</label>
      <input type="text" class="form-control" name="name_product">
    </div>
    <div class="form-group">
      <label for="email">Giá sản phẩm</label>
      <input type="text" class="form-control" name="price_product" >
    </div>
    <div class="form-group">
      <label for="email">Số lượng</label>
      <input type="number" class="form-control" name="quantily_product"  >
    </div>
    <div class="form-group">
      <label for="email">Hình ảnh</label>
      <input type="file" class="form-control" name="image_product"  >
    </div>
    <div class="form-group">
      <label for="email">Sản phẩm hot</label></label>
      <select class="form-control" name="hot_product">
      
        <option value="0">Không</option>
        <option value="1">Có</option>
      </select>
    </div>

    <div class="form-group">
      <label for="email">Tên danh mục sản phẩm</label></label>
      <select class="form-control" name="id_category_product">
      <?php  foreach($category as $key => $value)
          {
      ?>
        <option value="<?php echo $value['id'] ?>"><?php echo $value['product_name'] ?></option>
        <?php 
          }
        ?>
      </select>
    </div>
    
    <div class="form-group">
      <label for="email">Mô tả sản phẩm</label>
      <br>
      <textarea  id=""  rows="10" name="description_product"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 
</div>