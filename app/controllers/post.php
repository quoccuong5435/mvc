<?php
    class post extends Controller
    {
        public function __construct()
        {
            Session::checkSession();
            $data = array();
            $message = array();
            parent::__construct();
        }

      public function index()
      {
        $table = "post";
        $table_category = "category_post";
        $postmodel = $this -> load -> model('postmodel');
        $data['post'] = $postmodel -> selectWhere($table_category,$table);
        $this -> load -> view('cpanel/layouts/header');
        $this -> load -> view('cpanel/layouts/menu');
        $this -> load -> view('cpanel/post/index',$data);
        $this -> load -> view('cpanel/layouts/footer');
        
      }

      public function insert()
      {
        $table_category = "category_post";
        $postmodel = $this -> load -> model('postmodel');
        $data['category_post'] = $postmodel -> list_post($table_category); 
        $this -> load -> view('cpanel/layouts/header');
        $this -> load -> view('cpanel/layouts/menu');
        $this -> load -> view('cpanel/post/insert', $data);
        $this -> load -> view('cpanel/layouts/footer');
      }

      public function insert_post()
      {
        $table = "post";
        $postmodel = $this -> load -> model('postmodel');
        $name = $_POST['name_post'];
        $description = $_POST['description_post'];
        $image = $_FILES['image_post']['name'];
        $tmp_image = $_FILES['image_post']['tmp_name'];
        $div = explode('.',$_FILES['image_post']['name']);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;
        $path_uploads = "public/uploads/post/".$unique_image;
        $id_post = $_POST['id_category_post'];

        $data = array(
            'name_post' => $name,
            'description_post' => $description,
            'id_category_post' => $id_post,
            'image_post' => $unique_image
        );

        $result = $postmodel -> insertPost($table , $data);

        if($result == 1 )
        {
            move_uploaded_file($tmp_image,$path_uploads);
            $message['msg'] = "Thêm thành công";
            header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));  
        }
        else
        {
            $message['msg'] = "Thêm thất bại";
            header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));
        }
      }

      public  function delete_post($id)
      {
          $table = "post";
          $condition = "$table.id = $id";
          $postmodel = $this -> load -> model('postmodel');
          $result = $postmodel -> deletePost($table, $condition);
          if($result == 1 )
          {
              $message['msg'] = "Xóa thành công";
              header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));  
          }
          else
          {
              $message['msg'] = "Xóa thất bại";
              header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));
          }

      }
      public function edit_post($id)
      {
          $table_2 =  "post";
          $table_1 = "category_post";
          $condition = "$table_2.id = $id ";
          $postmodel =  $this ->load->model('postmodel');
          $data['post'] = $postmodel ->selectById($table_2,$condition);
          $data['category'] = $postmodel ->list_post($table_1);
          $this ->load->view('cpanel/layouts/header');
          $this->load->view('cpanel/layouts/menu');
          $this->load->view('cpanel/post/update',$data);
          $this->load->view('cpanel/layouts/footer');
      }

      public function update_post($id)
      {
          $table = "post";
          $condition = "$table.id = $id";
          $postmodel = $this->load->model('postmodel');
          $name =  $_POST['name_post'];
          $description = $_POST['description_post'];
          $id_category = $_POST['id_category_post'];
          $image = $_FILES['image_post']['name'];
          $tmp_image = $_FILES['image_post']['tmp_name'];
          $div = explode('.',$_FILES['image_post']['name']);
          $file_ext = strtolower(end($div));
          $unique_image = $div[0].time().'.'.$file_ext;
          $path_uploads = "public/uploads/post/". $unique_image;
          if($image)
          {
              $data['postbyid'] = $postmodel -> selectById($table , $condition);
              foreach ($data['postbyid'] as $key => $value) {
                  unlink("public/uploads/post/". $value['image_post']);
              }
              $data = array(
                  'name_post' => $name,
                  'description_post' => $description,
                  'image_post' => $unique_image,
                  'id_category_post' => $id_category
              );
              move_uploaded_file($tmp_image,$path_uploads);
          }
          else
          {
              $data = array(
                  'name_post' => $name,
                  'description_post' => $description,
                  'id_category_post' => $id_category
              );
          }
          $result = $postmodel ->update_post($table, $data, $condition);

          if($result == 1)
          {
              $message['msg']= 'Update thành công';
              header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));
          }
          else
          {
              $message['msg'] = 'Update thất bại';
              header("Location:".BASE_URL."post?msg=".urldecode(serialize($message)));
          }


          
      }

    }
?>