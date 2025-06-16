<?php

class home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
       
    }
    
    public function Home()
    {
        
        $data['page_tag'] = "Inicio";
        $data['page_title'] = "Inicio";
        $data['page_name'] = "Inicio";
        $data['page_functions_js'] = "functions_inicio.js";
        $this->views->getView($this, "Home", $data);
    }

}