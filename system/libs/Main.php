<?php 
  class Main{

      public $url;
      public $controller_default ="index";
      public $method = 'index';
      public $controller_path = 'app/controllers/';
      public $controller;


      // Khởi tạo
    public function __construct()
      {
        $this -> getUrl();
        $this -> loadController();
        $this -> callMethod();
      }

      public function getUrl() 
      {
        $this ->url = isset($_GET['url']) ? $_GET['url'] : NULL ;

        if($this ->url != null)
        {
          $this->url = rtrim($this->url,'/');
          $this->url = explode('/',filter_var($this->url,FILTER_SANITIZE_URL));
        }
        else
        {
          unset($this->url);
        }
      }

      public function loadController()
      {
        if(!isset($this->url[0]))
        {
          include_once ($this-> controller_path.$this -> controller_default.'.php');
          $this -> controller = new $this->controller_default();
        }
        else
        {
          $this -> controller_default = $this -> url[0];
          $filename = ($this -> controller_path.''.$this -> controller_default.'.php');
          if( file_exists($filename))
          {
            include_once  $filename ;
            if(class_exists($this -> controller_default))
            {
              $this -> controller = new $this -> controller_default();
            }
          }
          else
          {
            header("Location:".BASE_URL."index/loadError");
          }
        } 
      }

      public function callMethod()
      {
        if(isset($this -> url[2]))
        {
          $this -> method = $this -> url [1];
          if(method_exists($this ->controller, $this-> method))
          {
            $this -> controller -> {$this -> method}($this -> url[2]);
          }
          else
          {
            header("Location:".BASE_URL."index/loadError");
          }
        }
        else
        {
          if(isset($this -> url [1]))
          {
            $this -> method = $this -> url[1];
            if(method_exists($this->controller, $this -> method ))
            {
              $this -> controller -> {$this -> method}();
            }
            else
            {
              header("Location:".BASE_URL."index/loadError");
            }
          }
          else
          {
            if(method_exists($this->controller, $this -> method ))
            {
              $this -> controller -> {$this -> method}();
            }
            else
            {
              header("Location:".BASE_URL."index/loadError");
            }
          }
        }
      }
  }
?>