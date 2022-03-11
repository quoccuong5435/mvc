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
        $table_category ="category_product";
         $table_product = "product";
         $condition = "$table_category.id = $id and $table_product.id_category_product = $table_category.id ";
         $product_model = $this -> load -> model('productmodel');
         $data['categorybyid'] = $product_model -> selectCategoryById($table_product, $table_category, $condition);
         $this -> load -> view("home/category_product",$data);
         $this -> load -> view('layouts/footer');
     }
 }
?>