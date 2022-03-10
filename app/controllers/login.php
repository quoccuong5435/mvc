<?php 
    class login extends Controller
    {
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }

        public function  index ()
        {
            Session::init();
            if(Session::get('login')== true )
            {
                header("Location:".BASE_URL."login/dashboard");
            }
            $this -> load -> view('cpanel/login');
        }

        public function dashboard()
        {
            Session::checkSession();
            $this ->load -> view('cpanel/layouts/header');
            $this -> load -> view('cpanel/layouts/menu');
            $this ->load -> view('cpanel/index');
            $this ->load -> view('cpanel/layouts/footer');
        }

         public  function login_auth()
         {
           
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $table = 'user';
            $loginmodel =  $this-> load ->model('homemodel');
            $count = $loginmodel  -> login_auth($table , $username , $password );
            
            if($count == 0)
            {
                
                header("Location:".BASE_URL."login");
            }
            else
            {
                $result = $loginmodel -> get_login($table , $username , $password);
                Session::init();
                Session::set('login',true);
                Session::set('username',$result[0]['username']);
                Session::set('id',$result[0]['id']);
                header("Location:".BASE_URL."login/dashboard");
            }
         }

         public function logout()
         {
             Session::init();
             Session::destroy();
             header("Location:".BASE_URL."login");
         }
    }
?>