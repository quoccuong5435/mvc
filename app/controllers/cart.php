<?php
    class cart extends Controller {
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
         public function index()
         {
              $this -> cart_page();
         }

        public function cart_page()
        {
            $this->load->view('layouts/header');
            $this -> load -> view('home/cart_page');
            $this->load->view('layouts/footer');
        }

    }

?>