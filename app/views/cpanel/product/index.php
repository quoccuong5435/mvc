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
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Quantily</th>
        <th>Image</th>
        <th>Category</th>
        <th>HOT</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     $i = 0;
     foreach($product as $key => $value){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['name_product'] ?></td>
        <td><?php echo number_format($value['price_product'],0,',','.').'d'  ?></td>
        <td><?php echo $value['description_product'] ?></td>
        <td><?php echo $value['quantily_product'] ?></td>
        <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value['image_product']?>" height="100px" width="100" alt=""></td>
        <td><?php echo $value['product_name']?></td>
        <?php if($value['hot_product']==0){
            ?>
            <td>Không</td>          
        <?php
          }else{
              ?>
           <td>Có</td>
           <?php
          } ?>
        <td><a href="<?php echo BASE_URL ?>product/edit_product/<?php echo $value['id'] ?>".>Cập nhật</a>|| <a href="<?php echo BASE_URL ?>product/delete_product/<?php echo $value['id'] ?>">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
