<?php
    class category extends Controller {
        
        public function __construct()
        {
            Session::checkSession();
            $data = array();
            $message = array();
            parent::__construct();
        }

        public function index()
        {
            $this ->load -> view('cpanel/layouts/header');
            $this ->load -> view('cpanel/layouts/menu');
            $post_model = $this ->load -> model('postmodel');
            $table = 'category_post';
            $data['category'] = $post_model -> list_post($table);
            $this -> load-> view('cpanel/category/index',$data);
            $this -> load -> view('cpanel/layouts/footer');
        }

        public function insert()
        {
            $this -> load -> view('cpanel/layouts/header');
            $this -> load -> view('cpanel/layouts/menu');
            $this -> load -> view('cpanel/category/insert');
            $this -> load -> view('cpanel/layouts/footer');
        }

        public function insert_category()
        {
            $table = 'category_post';

            $title = $_POST['title'];
            $description = $_POST['description'];

            $data = array(
                'title' => $title,
                'description' => $description
            );

            $post_model =    $this -> load -> model('postmodel');
            $result = $post_model ->  insertPost($table, $data);

            if($result == 1 )
            {
                $message['msg'] =" Thêm mới thành công";
                header("Location:".BASE_URL."category/insert?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = "Thêm mới thất bại";
                header("Location:". BASE_URL."category/insert?msg=".urldecode(serialize($message)));
            }
        }

        public function update($id)
        {
            $table='category_post';
            $post_model = $this->load->model('postmodel');
            $condition = "$table.id= $id";
            $data['category']= $post_model -> selectById($table , $condition);
            $this->load->view('cpanel/layouts/header');
            $this->load->view('cpanel/layouts/menu');
            $this->load->view('cpanel/category/update',$data);
            $this->load->view(('cpanel/layouts/footer'));
        }

        public function update_category($id)
        {
            $table = "category_post";
            $condition = "$table.id = $id";
            $title = $_POST['title'];
            $description = $_POST['description'];
            $data = array(
                'title' => $title,
                'description' => $description
            );
            $post_model = $this ->load-> model('postmodel');
            $result = $post_model ->update_post($table,$data,$condition);

            if($result == 1)
            {
                $message['msg'] = "Update thành công";
                header("Location:".BASE_URL."category?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = "Update thất bại";
                header("Location:".BASE_URL."category?msg=".urldecode(serialize($message)));
            }
        }

        public function delete_category($id)
        {
            $table ="category_post";
            $condition = "$table.id = $id";
            $post_model = $this ->load -> model('postmodel');
            $reslut = $post_model -> deletePost($table , $condition);

            if($reslut == 1)
            {
                $message['msg'] =  "Delete thành công ";
                header("Location:".BASE_URL."category?msg=".urldecode(serialize($message)));
            }
            else
            {
                $message['msg'] = "Delete thất bại";
                header("Location:".BASE_URL."category?msg=".urldecode(serialize($message)));
            }
        }
    }
     

?>