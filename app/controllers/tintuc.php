<?php 
    class tintuc  extends Controller
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
            $this->load->view('interface/layouts/header',$data);
            
        }

        public function index()
        {
            $table_post = "post";
            $table_category = "category_post";
            $condition = "$table_post.id_category_post = $table_category.id  ";
            $data['listpost'] = $this -> post_model -> selectCategoryById($table_category,$table_post,$condition);
            $this -> load -> view('interface/news/list_news',$data);
            $this -> load -> view('interface/layouts/footer');
        }



        public function danhmuc($id)
        {
            $table_category = "category_post";
            $table_post = "post";
            $condition = "$table_post.id_category_post = $table_category.id  and  $table_category.id = $id";
            $data['categorypostbyid'] = $this ->post_model -> selectCategoryById($table_category,$table_post,$condition);
            $this -> load -> view('interface/news/category_post',$data);
            $this -> load -> view('interface/layouts/footer');
        }

        public function chitiettintuc($id)
        {
            $table_category = "category_post";
            $table_post = "post";
            $condition = "$table_post.id_category_post = $table_category.id  and  $table_post.id = $id";
            $data['details'] = $this -> post_model -> detail($table_post, $table_category, $condition);

            foreach($data['details'] as $key => $value)
            {
                $id_cate = $value['id_category_post'];
            }
            $condition_relate = "$table_post.id_category_post =  $table_category.id and $table_category.id = $id_cate and $table_post.id not in('$id') ";
            $data['relate'] = $this -> post_model -> relate($table_post, $table_category,$condition_relate);
            $this -> load -> view('interface/news/detail_post', $data);
            $this -> load -> view('interface/layouts/footer');

        }
    }

?>