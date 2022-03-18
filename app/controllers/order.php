<?php 
 class order  extends Controller
 {
     public function index()
     {
         $table = " orders";
         $order_model = $this -> load -> model('ordermodel');
         $data['order'] = $order_model -> list_order($table);
         $this -> load -> view('cpanel/layouts/header');
         $this -> load -> view('cpanel/layouts/menu');
         $this -> load -> view('cpanel/order/index',$data);
         $this -> load -> view('cpanel/layouts/footer');
     }

     public function detail($order_code)
     {
        $table_details = "order_details";
        $table_product = "product";

        $order_model = $this -> load -> model('ordermodel');
        $condition  = "$table_product.id = $table_details.product_id  and $table_details.order_code = $order_code";
        $data['details'] = $order_model -> orderDetail($table_details , $table_product, $condition);
        $condition_info  = " $table_details.order_code = $order_code limit 1";
        $data['user'] = $order_model -> orderUser($table_details,$condition_info);
        $this -> load -> view('cpanel/layouts/header');
        $this -> load -> view('cpanel/layouts/menu');
        $this -> load -> view('cpanel/order/detail',$data);
        $this -> load -> view('cpanel/layouts/footer');

     }
      public function order_confirm($order_code)
      {
        $table = " orders";
        $order_model = $this -> load -> model('ordermodel');
        $data = array(
            'order_status' => 1
        );
        $condition = "$table.order_code = $order_code";
        $result = $order_model -> orderConfirm($table, $data , $condition);
        if($result == 1)
            {
                
                $message['msg'] = 'Xử lý thành công';
                header("Location:".BASE_URL."order?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Xử lý thất bại';
                header("Location:".BASE_URL."order?msg=".urldecode(serialize($message)));
            }
      }
 }

?>