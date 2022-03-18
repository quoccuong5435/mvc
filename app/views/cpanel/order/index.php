<h3 style="text-align: center;">Tất cả đơn hàng</h3>

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
        <th>Code Order</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     $i = 0;
     foreach($order as $key => $value){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['order_code'] ?></td>
        <td><?php echo $value['order_time'] ?></td>
        <?php if( $value['order_status']== 0){ 
        echo "<td>Đơn hàng mới</td>";
        }
        else{
            echo "<td>Đã xử lý</td>";
        } ?>
        <td><a href="<?php echo BASE_URL ?>order/detail/<?php echo $value['order_code'] ?>">Xem chi tiết đơn hàng</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
