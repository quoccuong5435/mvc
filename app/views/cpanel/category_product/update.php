<h3 style="text-align: center;">Sửa danh mục sản phẩm</h3>
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
<?php foreach($product as $key => $value){ ?>
  <form action="<?php echo BASE_URL ?>product/update_category/<?php echo $value['id']; ?>" method="POST">
    <div class="form-group">
    
      <label for="email">Tên danh mục</label>
      <input type="text" class="form-control" value="<?php echo $value['product_name']; ?>" name="product_name" id="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Thông tin:</label>
      <input type="text" class="form-control" value="<?php echo $value['description']; ?>" name="description" id="description">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <?php } ?>
</div>