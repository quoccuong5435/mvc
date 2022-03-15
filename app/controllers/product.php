<?php 
    class product extends  Controller
    {
         public function __construct()
        {
            Session::checkSession();
            $data = array();
            $message = array();
            parent::__construct();
        }
        // Controller category_product

        public function index()
        {
            $this->load->view('cpanel/layouts/header');
            $this->load->view('cpanel/layouts/menu');
            $productmodel = $this->load->model('productmodel');
            $table = 'category_product';
            $data['product'] = $productmodel -> list_product($table);
            $this->load->view('cpanel/category_product/index', $data);
            $this->load->view('cpanel/layouts/footer');  
        }

        public function insert()
        {
            $this->load->view('cpanel/layouts/header');
            $this->load->view('cpanel/layouts/menu');
            $this->load->view('cpanel/category_product/insert');
            $this->load->view('cpanel/layouts/footer');
        }

        public function insert_category()
        {
            $productmodel = $this -> load ->model('productmodel');
            $table = 'category_product';
            $product_name = $_POST['product_name'];
            $description = $_POST['description'];

            $data = array(
                'product_name' => $product_name,
                'description'  => $description
            );

            $result = $productmodel -> insertProduct($table, $data);

            if($result == 1)
            {
                $message['msg'] = 'Thêm dữ liệu thành công';
                header("Location:".BASE_URL."product/insert?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Thêm dữ liệu thất bại';
                header("Location:".BASE_URL."product/insert?msg=".urldecode(serialize($message)));
            }
        }
        
        public function edit_category($id)
        {
            $table ='category_product';
            $productmodel = $this -> load -> model('productmodel');
            $condition = "$table.id = $id";
            $data['product'] = $productmodel -> selectById($table, $condition);
            $this ->load-> view('cpanel/layouts/header');
            $this ->load->view('cpanel/layouts/menu');
            $this ->load-> view('cpanel/category_product/update',$data);
            $this ->load-> view('cpanel/layouts/footer');
        }

        public function update_category($id)
        {
            $table = 'category_product';
            $condition = "$table.id = $id";

            $product_name = $_POST['product_name'];
            $description = $_POST['description'];

            $data = array(
                'product_name' => $product_name,
                'description' => $description
            );

            $productmodel = $this-> load -> model('productmodel');
            $result = $productmodel ->updateproduct($table, $data, $condition);

            if($result == 1)
            {
                $message['msg']= 'Update thành công';
                header("Location:".BASE_URL."product?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Update thất bại';
                header("Location:".BASE_URL."product?msg=".urldecode(serialize($message)));
            }
        }

        public function delete_category($id)
        {
            $table = 'category_product';
            $condition = "$table.id = '$id'";
            $productmodel = $this -> load -> model('productmodel');
            $result = $productmodel -> delete_product($table, $condition);

            if($result == 1)
            {
                $message['msg'] = 'Xóa thành công';
                header("Location:".BASE_URL."product?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Xóa thất bại';
                header("Location:".BASE_URL."product?msg=".urldecode(serialize($message)));
            }
        }

        // Controller product

        public function list_page()
        {
            $table_1 = "category_product";
            $table_2 = "product";
            $this -> load ->view('cpanel/layouts/header');
            $this ->load->view('cpanel/layouts/menu');
            $productmodel = $this ->load->model('productmodel');
            $data['product'] = $productmodel -> selectWhere($table_1 , $table_2);
            $this ->load->view('cpanel/product/index',$data);
            $this->load->view('cpanel/layouts/footer');
        }

        public function insert_page()
        {
            $table ="category_product";
            $this->load-> view('cpanel/layouts/header');
            $this->load->view('cpanel/layouts/menu');
            $productmodel = $this->load->model('productmodel');
            $data['category'] = $productmodel ->list_product($table);
            $this->load->view('cpanel/product/insert',$data);
            $this->load->view('cpanel/layouts/footer');
        }

        public function insertProducts()
        {
            $table ="product";
            $name = $_POST['name_product'];
            $hot_product = $_POST['hot_product'];
            $price = $_POST['price_product'];
            $quantily = $_POST['quantily_product'];
            $description = $_POST['description_product'];
            $image = $_FILES['image_product']['name'];
            $tmp_image = $_FILES['image_product']['tmp_name'];
            $div = explode('.',$_FILES['image_product']['name']);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/product/". $unique_image;
            $id_category = $_POST['id_category_product'];

            $data = array(
                'name_product' => $name,
                'price_product'=> $price,
                'quantily_product' => $quantily,
                'description_product' => $description,
                'image_product' => $unique_image,
                'id_category_product' => $id_category,
                'hot_product' => $hot_product
            );

            $productmodel = $this->load->model('productmodel');
            $result = $productmodel -> insertProduct($table , $data);

            if($result == 1)
            {
                move_uploaded_file($tmp_image,$path_uploads);
                $message['msg'] = 'Add thành công';
                header("Location:".BASE_URL."product/insert_page?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Add thất bại';
                header("Location:".BASE_URL."product/insert_page?msg=".urldecode(serialize($message)));
            }
            
        }

        public function delete_product($id)
        {
            $table = 'product';
            $condition = "$table.id = '$id'";
            $productmodel = $this -> load -> model('productmodel');
            $result = $productmodel -> delete_product($table, $condition);

            if($result == 1)
            {
                $message['msg'] = 'Xóa thành công';
                header("Location:".BASE_URL."product/list_page?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Xóa thất bại';
                header("Location:".BASE_URL."product/list_page?msg=".urldecode(serialize($message)));
            }
        }

        public function edit_product($id)
        {
            $table_2 =  "product";
            $table_1 = "category_product";
            $condition = "$table_2.id = $id ";
            $productmodel =  $this ->load->model('productmodel');
            $data['product'] = $productmodel ->selectById($table_2,$condition);
            $data['category'] = $productmodel ->list_product($table_1);
            $this ->load->view('cpanel/layouts/header');
            $this->load->view('cpanel/layouts/menu');
            $this->load->view('cpanel/product/update',$data);
            $this->load->view('cpanel/layouts/footer');
        }

        public function update_product($id)
        {
            $table = "product";
            $condition = "$table.id = $id";
            $productmodel = $this->load->model('productmodel');
            $name =  $_POST['name_product'];
            $hot_product = $_POST['hot_product'];
            $price = $_POST['price_product'];
            $description = $_POST['description_product'];
            $quantily = $_POST['quantily_product'];
            $id_category = $_POST['id_category_product'];
            $image = $_FILES['image_product']['name'];
            $tmp_image = $_FILES['image_product']['tmp_name'];
            $div = explode('.',$_FILES['image_product']['name']);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/product/". $unique_image;
            if($image)
            {
                $data['productbyid'] = $productmodel -> selectById($table , $condition);
                foreach ($data['productbyid'] as $key => $value) {
                    unlink("public/uploads/product/". $value['image_product']);
                }
                $data = array(
                    'name_product' => $name,
                    'price_product'=> $price,
                    'quantily_product' => $quantily,
                    'description_product' => $description,
                    'image_product' => $unique_image,
                    'id_category_product' => $id_category,
                    'hot_product' => $hot_product
                );
                move_uploaded_file($tmp_image,$path_uploads);
            }
            else
            {
                $data = array(
                    'name_product' => $name,
                    'price_product'=> $price,
                    'quantily_product' => $quantily,
                    'description_product' => $description,
                    'id_category_product' => $id_category,
                    'hot_product' => $hot_product
                );
            }
            $result = $productmodel ->updateproduct($table, $data, $condition);

            if($result == 1)
            {
                $message['msg']= 'Update thành công';
                header("Location:".BASE_URL."product/list_page?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = 'Update thất bại';
                header("Location:".BASE_URL."product/list_page?msg=".urldecode(serialize($message)));
            }


            
        }
    }


?>

           