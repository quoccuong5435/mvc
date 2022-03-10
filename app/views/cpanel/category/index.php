<h3 style="text-align: center;">Danh mục sản phẩm</h3>

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
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     $i = 0;
     foreach($category as $key => $value){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $value['description'] ?></td>
        <td><a href="<?php echo BASE_URL ?>category/update/<?php echo $value['id'] ?>".>Cập nhật</a>|| <a href="<?php echo BASE_URL ?>category/delete_category/<?php echo $value['id'] ?>">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
