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
            $this->load->view('layouts/header',$data);
        }
         public function index()
         {
              $this -> homepage();
         }

        public function homepage()
        {
            $this -> load -> view('home/slider');
            $this->load->view('home/home');
            $this->load->view('layouts/footer');
        }

       

        public function loadError()
        {
            $this->load->view('home/404');
            $this->load->view('layouts/footer');
        }

        public function category_product()
        {
            $this -> load -> view('home/category_product');
            $this -> load -> view('layouts/footer');
        }

        public function detail_product()
        {
            $this -> load -> view('home/detail_product');
            $this -> load -> view('layouts/footer');
        }

        public function category_post()
        {
            $this -> load -> view('home/category_post');
            $this -> load -> view('layouts/footer');
        }

        public function detail_post()
        {
            $this -> load -> view('home/detail_post');
            $this -> load -> view('layouts/footer');
        }

        public function contact()
        {
            $this -> load -> view('home/contact');
            $this -> load -> view('layouts/footer');
        }

    }

?>