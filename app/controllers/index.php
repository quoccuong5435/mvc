<?php
    class index extends Controller {
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
            $table_category ="category_product";
            $table_post = "category_post";
            $this -> post_model = $post_model = $this -> load -> model('postmodel');
            $data['post'] = $post_model -> list_post($table_post);
            $category_model = $this -> load -> model('categorymodel');
            $this->data['category'] =$data['category'] = $category_model -> category($table_category);
            $this -> load -> view('interface/layouts/header',$data);
        }
         public function index()
         {
            $table ="product";
            $table_post= 'post';
            $data['category'] = $this->data['category'];
            $product_model = $this -> load -> model('productmodel');
            $data['list_product']= $product_model ->list_product_index($table);
            $condition ="order by id desc limit 5";
            $data['hot_product']  = $product_model -> selectProductHot($table);
            $data['list_post'] = $this -> post_model -> selectSort($table_post, $condition);
            $this -> load -> view('interface/layouts/slider',$data);
            $this -> load -> view('interface/home/index',$data);
            $this -> load -> view('interface/layouts/footer');
         }

        public function loadError()
        {
            $this -> load -> view('interface/home/404');
            $this -> load -> view('interface/layouts/footer');
        }

       


       
        public function contact()
        {
            $this -> load -> view('interface/home/contact');
            $this -> load -> view('interface/layouts/footer');
        }

    }

?>