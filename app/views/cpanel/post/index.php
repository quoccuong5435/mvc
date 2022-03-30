<h3 style="text-align: center;">Danh mục</h3>

<div class="container">  
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
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     $i = 0;
     foreach($post as $key => $value){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['name_post'] ?></td>
        <td><?php echo substr($value['description_post'], 0, 300) ?></td>
        <td><img src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $value['image_post']?>" height="100px" width="100" alt=""></td>
        <td><?php echo $value['title']?></td>
        <td><a href="<?php echo BASE_URL ?>post/edit_post/<?php echo $value['id'] ?>".>Cập nhật</a>|| <a href="<?php echo BASE_URL ?>post/delete_post/<?php echo $value['id'] ?>">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
