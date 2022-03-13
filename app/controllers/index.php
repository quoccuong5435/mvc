<?php
    class index extends Controller {
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
            $table_category ="category_product";
            $table_post = "category_post";
            $post_model = $this -> load -> model('postmodel');
            $data['post'] = $post_model -> list_post($table_post);
            $category_model = $this -> load -> model('categorymodel');
            $data['category'] = $category_model -> category($table_category);
            $this -> load -> view('interface/layouts/header',$data);
        }
         public function index()
         {
            $this -> load -> view('interface/layouts/slider');
            $this -> load -> view('interface/home/index');
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