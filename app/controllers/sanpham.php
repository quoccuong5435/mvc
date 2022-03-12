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
        $this->load->view('interface/layouts/header',$data);
    }

        public  function danhsach()
        {
            $table_product = "product";
            $product_model = $this -> load -> model('productmodel');
            $data['list_product'] =  $product_model -> list_product($table_product);
            $this -> load -> view('interface/product/list_product',$data);
            $this -> load -> view('interface/layouts/footer');
        }

     public function danhmuc($id)
     {
         $table_category ="category_product";
         $table_product = "product";
         $condition = "$table_category.id = $id and $table_product.id_category_product = $table_category.id ";
         $product_model = $this -> load -> model('productmodel');
         $data['categorybyid'] = $product_model -> selectCategoryById($table_product, $table_category, $condition);
         $this -> load -> view("interface/product/category_product",$data);
         $this -> load -> view('interface/layouts/footer');
     }

     public function chitietsanpham($id)
     {
         $table_product = "product";
         $table_category ="category_product";
         $condition = "$table_product.id_category_product = $table_category.id and $table_product.id = $id";
         $product_model = $this -> load -> model('productmodel');
         $data['detail'] =$product_model -> selectCategoryById($table_product, $table_category, $condition);
         $this -> load -> view('interface/product/detail_product',$data);
         $this -> load -> view('interface/layouts/footer');
     }
 }
?>