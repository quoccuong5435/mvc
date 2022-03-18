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
  <form action="<?php echo BASE_URL ?>product/insert_category" method="POST">
    <div class="form-group">
    
      <label for="email">Tên danh mục</label>
      <input type="text" class="form-control" name="product_name" id="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Thông tin:</label>
      <textarea id="editor" type="text" class="form-control" name="description" id="description"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>