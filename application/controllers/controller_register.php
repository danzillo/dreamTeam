<?php

class Controller_Register extends Controller
{
    function index(){
        $this->view->generate('register.php');
    }
}