<?php 
    class khachhang  extends Controller
    {
        public function __construct()
        {
           $message = array();
           parent::__construct();
        }

        public function index()
        {

            $data = array();
            
            $table_category ="category_product";
            $table_post = "category_post";
            $this -> post_model = $post_model = $this -> load -> model('postmodel');
            $data['post'] = $post_model -> list_post($table_post);
            $category_model = $this -> load -> model('categorymodel');
            $this->data['category'] =$data['category'] = $category_model -> category($table_category);
            $this -> load -> view('interface/layouts/header',$data);
            $this -> load -> view('interface/user/login');
            $this -> load -> view('interface/layouts/footer');
        }

        public function dangky()
        {
            
            $table = 'customer';

            $name = $_POST['customer_name'];
            $phone = $_POST['customer_phone'];
            $address = $_POST['customer_address'];
            $email = $_POST['customer_email'];
            $password = md5( $_POST['password']);

            $data = array(
                'customer_name' => $name,
                'customer_email' => $email,
                'customer_phone' => $phone,
                'password' => $password,
                'customer_address' => $address,
                
            );

            $customer_model =    $this -> load -> model('customermodel');
            $result = $customer_model ->  insertCustomer($table, $data);

            if($result == 1 )
            {
                $message['msg'] =" Đăng ký thành công";
                header("Location:".BASE_URL."khachhang?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = "Đăng ký thất bại";
                header("Location:". BASE_URL."khachhang/insert?msg=".urldecode(serialize($message)));
            }
        }

        public function dangnhap()
        {
           
               $email = $_POST['customer_email'];
               $password = md5($_POST['password']);
               $table = 'customer';
               $customer_model =  $this-> load ->model('customermodel');
               $count = $customer_model  -> login_auth($table , $email , $password );
               
               if($count == 0)
               {
                   
                   header("Location:".BASE_URL."login");
               }
               else
               {
                   $result = $customer_model -> get_login($table , $email , $password);
                   Session::init();
                   Session::set('login',true);
                   Session::set('username',$result[0]['username']);
                   Session::set('id',$result[0]['id']);
                   header("Location:".BASE_URL."login/dashboard");
               }
            
        }
    }

?>