<?php 
 class sanpham extends Controller
 {
    public function __construct()
    {
        $data = array();
        parent::__construct();
        $message = array();
        $table_post = "category_post";
        $post_model = $this -> load -> model('postmodel');
        $data['post'] = $post_model -> list_post($table_post);
        $table_category ="category_product";
        $category_model = $this -> load -> model('categorymodel');
        $data['category'] = $category_model -> category($table_category);
        $this->load->view('layouts/header',$data);
    }

     public function danhmuc($id)
     {
        
         $this -> load -> view("home/category_product");
         $this -> load -> view('layouts/footer');
     }
 }
?>