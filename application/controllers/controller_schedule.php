<?php

class Controller_Schedule extends Controller
{
    function index(){
        $this->view->generate('schedule.php');
    }
}