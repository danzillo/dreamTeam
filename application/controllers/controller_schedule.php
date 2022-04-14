<?php

class Controller_Schedule extends Controller{

    function index(){
        $this->view->generate("schedule_view.php", "template_view.php");
    }
}
