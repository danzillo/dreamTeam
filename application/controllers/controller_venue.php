<?php

class Controller_Venue extends Controller
{
    function index(){
        $this->view->generate('venue.php');
    }
}
