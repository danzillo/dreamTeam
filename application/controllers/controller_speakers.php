<?php

class Controller_Speakers extends Controller
{
    function index()
    {
        $this->view->generate('speakers.php');
    }
}
