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
 
  <form action="<?php echo BASE_URL ?>post/insert_post" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Tên sản phẩm</label>
      <input type="text" class="form-control" name="name_post">
    </div>
    <div class="form-group">
      <label for="email">Hình ảnh</label>
      <input type="file" class="form-control" name="image_post"  >
    </div>
   
    <div class="form-group">
      <label for="email">Tên danh mục sản phẩm</label></label>
      <select class="form-control" name="id_category_post">
      <?php  foreach($category_post as $key => $value)
          {
      ?>
        <option value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
        <?php 
          }
        ?>
      </select>
    </div>
    
    <div class="form-group">
      <label for="email">Mô tả sản phẩm</label>
      <br>
      <textarea  id="editor"  rows="10" name="description_post"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 
</div>