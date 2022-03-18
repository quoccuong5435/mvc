<h3 style="text-align: center;">Chi tiết đơn hàng</h3>

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
    <span>Thông tin khách đặt hàng</span>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Tên khách hàng</th>
        <th>Số điện thoại </th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Nội dung đặt hàng</th>
        
      </tr>
    </thead>
    <tbody>
     <?php 
    
    
     foreach($user as $key => $value){
        
      
       ?>
      <tr>
        <td><?php echo $value['name'] ?></td>
        <td> <?php echo $value['phone'] ?></td>
        <td><?php echo $value['address'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['content_order'] ?></td>
      </tr>
     
      <?php } ?>
      
    </tbody>
  </table>
    <span>Chi tiết đơn hàng</span>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh </th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        
      </tr>
    </thead>
    <tbody>
     <?php 
     $i = 0;
     $total= 0;
     foreach($details as $key => $value){
        $i++;
        $subtotoal  = $value['price_product'] * $value['product_quantily'];
        $total += $subtotoal;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['name_product'] ?></td>
        <td> <img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value['image_product'] ?>" alt="" height="100px", width="100px"></td>
        <td><?php echo $value['product_quantily'] ?></td>
        <td><?php echo $value['price_product'] ?></td>
        <td><?php echo number_format($subtotoal,0,",",".")."đ" ?></td>
        <!-- <td><a href="<?php echo BASE_URL ?>order/detail/<?php echo $value['order_code'] ?>">Xem chi tiết đơn hàng</a></td> -->
      </tr>
     
      <?php } ?>
      <form action="<?php echo BASE_URL ?>order/order_confirm/<?php echo $value['order_code'] ?>" method="post">
      <tr>
          <td colspan="2" align="center"><input type="submit" value="Xử lý đơn hàng"></input></td>
          <td style="font-weight: bold;font-size: 20px;color: red;" align="right" colspan="6">Tổng tiền: <?php echo number_format($total,0,",",".")."đ" ?></td>
      </tr>
      </form>
    </tbody>
  </table>
</div>
