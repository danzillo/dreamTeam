<?php

class Controller_Register extends Controller{

    function index(){
        $this->view->generate("register_view.php", "template_view.php");
    }
}
