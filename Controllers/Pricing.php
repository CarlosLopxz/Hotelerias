<?php

class pricing extends Controllers
{
    public function __construct()
    {
        parent::__construct();
       
    }
    
    public function pricing()
    {
        
        $data['page_tag'] = "Precios";
        $data['page_title'] = "Precios";
        $data['page_name'] = "Precios";
        $data['page_functions_js'] = "functions_pricing.js";
        $this->views->getView($this, "pricing", $data);
    }

}