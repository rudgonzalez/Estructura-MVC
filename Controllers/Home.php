<?php
   
   class Home extends Controllers
   {

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data['page_title'] = "BeReborn Panamá";
        $this->views->getView($this, "home", $data);
    }  

   }
?>