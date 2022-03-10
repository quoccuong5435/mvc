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
<?php  foreach($post as $key => $value)
          {
      ?>
  <form action="<?php echo BASE_URL ?>post/update_post/<?php echo $value['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Tên sản phẩm</label>
      <input type="text" class="form-control" value="<?php echo $value['name_post'] ?>" name="name_post">
    </div>
    <div class="form-group">
      <label for="email">Hình ảnh</label>
      <img src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $value['image_post'] ?>" height="100px" width="100px" alt="">
      <input type="file" class="form-control" value="<?php echo $value['image_post'] ?>" name="image_post"  >
    </div>
   
    <div class="form-group">
      <label for="email">Tên danh mục sản phẩm</label></label>
      <select class="form-control" name="id_category_post">
      <?php foreach($category as $key => $values)
      { ?>
        <option <?php if($value['id_category_post'] == $values['id']){ echo "selected" ;} ?> value="<?php echo $values['id'] ?>"><?php echo $values['title'] ?></option>
      <?php }?>
      </select>
    </div>
    
    <div class="form-group">
      <label for="email">Mô tả sản phẩm</label>
      <br>
      <textarea  id=""  rows="10" value name="description_post"><?php echo $value['description_post'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <?php 
          }
        ?>
</div>