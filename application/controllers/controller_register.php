<?php

class Controller_Register extends Controller{
    function __construct()
    {
        $this->model = new Model_Register();
        $this->view = new View();
    }

    function index(){
        $get_person =$this->model->set_data();
        if (isset($_POST['name']) && isset($_POST['phone'])  &&isset($_POST['mail'])){
            // отправка данных в бд
            //добавить редирект

        }
        $this->view->generate("register_view.php", "template_view.php");
    }
}
