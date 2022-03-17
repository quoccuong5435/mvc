<?php
    class giohang extends Controller {
        
        public function __construct()
        {
            
            $data = array();
            parent::__construct();
           
        }
         public function index()
         {
            Session::init();
            $table_category ="category_product";
            $table_post = "category_post";
            $this -> post_model = $post_model = $this -> load -> model('postmodel');
            $data['post'] = $post_model -> list_post($table_post);
            $category_model = $this -> load -> model('categorymodel');
            $this->data['category'] =$data['category'] = $category_model -> category($table_category);
            $this -> load -> view('interface/layouts/header',$data);
            $this -> load -> view('interface/cart/cart_page');
            $this->load->view('interface/layouts/footer');
         }

        public function cart_page()
        {
            
        }

        public function themgiohang()
        {
            Session::init();
            // Session::destroy();
            if(isset($_SESSION["shopping_cart"]))
            {
                $avalable = 0;
                foreach($_SESSION['shopping_cart'] as $key => $value)
                {
                    if($_SESSION['shopping_cart'][$key]['id']== $_POST['id'])
                    {
                        $avalable ++; 
                        $_SESSION['shopping_cart'][$key]['quantily_product'] = $_SESSION['shopping_cart'][$key]['quantily_product'] + $_POST['quantily_product'];
                    }
                }

                if($avalable == 0)
                {
                    $item = array
                (
                    'id' => $_POST['id'],
                    'name_product' => $_POST['name_product'],
                    'price_product' => $_POST['price_product'],
                    'quantily_product' => $_POST['quantily_product'],
                    'image_product' => $_POST['image_product'] 
                );
                $_SESSION['shopping_cart'][]= $item;
                }

            }
            else
            {
                $item = array
                (
                    'id' => $_POST['id'],
                    'name_product' => $_POST['name_product'],
                    'price_product' => $_POST['price_product'],
                    'quantily_product' => $_POST['quantily_product'],
                    'image_product' => $_POST['image_product'] 
                );
                $_SESSION['shopping_cart'][]= $item;
            }
            header("Location:".BASE_URL."giohang");
        }

        public function xoagiohang()
        {
            Session::init();
            if(isset($_POST['delete_cart']))
            {
                if(isset($_SESSION["shopping_cart"]))
                {
                    foreach($_SESSION['shopping_cart'] as $key => $value)
                    {
                        if($_SESSION['shopping_cart'][$key]['id'] == $_POST['delete_cart'])
                        {
                            unset($_SESSION['shopping_cart'][$key]);
                        }
                    }
                    header("Location:". BASE_URL."giohang");
                }
                else
                {
                    header("Location:". BASE_URL."index");
                }
            }
            elseif(isset($_POST['update_cart']))
            {
                foreach($_POST['qty'] as $key => $values)
                {
                    foreach ($_SESSION['shopping_cart'] as $session => $value_session) 
                    {
                        if ($value_session['id'] == $key && $values >=1) 
                        {
                            $_SESSION['shopping_cart'][$session]['quantily_product'] = $values;
                        }
                    }
                }
                header("Location:". BASE_URL."giohang");

            }
            
        }

        public function dathang()
        {
            Session::init();
            $table_order = "orders";
            $table_details = "order_details";
            $order_model = $this -> load -> model('ordermodel');
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $noidung = $_POST['noidung'];
            $diachi = $_POST['diachi'];
            $code_order = rand(0,9999);
            date_default_timezone_set('asia/ho_chi_minh');
            $date = date('d/m/Y');
            $hour = date("h:i:sa");
            $order_date = $date. " " . $hour;
            $data_order = array(
                'order_status' => 0,
                'order_code' => $code_order,
                'order_time' => $order_date
            );

           

            if(Session::get('shopping_cart') == true)
            {
                $result_order = $order_model -> insertOrder($table_order, $data_order);
                foreach(Session::get("shopping_cart") as $key => $value)
                {
                    $data_details = array(
                        'order_code' => $code_order,
                        'name' => $name,
                        'email' => $email,
                        'product_id' => $value['id'],
                        'product_quantily' => $value['quantily_product'],
                        'phone' => $phone,
                        'address' => $diachi,
                        'content_order' => $noidung
                    );
                    $result_details = $order_model -> insertDetails($table_details, $data_details);
                }
                unset($_SESSION['shopping_cart']);
            }
            header('Location:'. BASE_URL ."giohang");
        }
       

    }

?>