<?php 
    class news  extends Controller
    {
        // public $post_model, $category_model;

        public function __construct()
        {
            $data = array();
            parent::__construct();
            $table_category_product ="category_product";
            $table_category = "category_post";
            $this -> post_model =$post_model = $this -> load -> model('postmodel');  
            $data['post'] = $post_model -> list_post($table_category);
            $category_model = $this -> load -> model('categorymodel');
            $data['category'] = $category_model -> category($table_category_product);
            $this->load->view('layouts/header',$data);
            
        }

        public function list()
        {
            $table_post = "post";
            $data['listpost'] = $this -> post_model -> list_post($table_post);
            $this -> load -> view('home/category_post',$data);
            $this -> load -> view('layouts/footer');
        }



        public function listbyid($id)
        {
            $table_category = "category_post";
            $table_post = "post";
            $condition = "$table_post.id_category_post = $table_category.id  and  $table_category.id = $id";
            $data['categorypostbyid'] = $this ->post_model -> selectCategoryById($table_post,$table_category,$condition);
            $this -> load -> view('home/category_post',$data);
            $this -> load -> view('layouts/footer');
        }
    }

?>