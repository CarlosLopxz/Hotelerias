<?php

class about extends Controllers
{
    public function __construct()
    {
        parent::__construct();
       
    }
    
    public function about()
    {
        
        $data['page_tag'] = "Acerca de";
        $data['page_title'] = "Acerca de";
        $data['page_name'] = "Acerca de";
        $data['page_functions_js'] = "functions_about.js";
        $this->views->getView($this, "about", $data);
    }

}