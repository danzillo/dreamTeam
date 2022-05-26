<?php
class Controller_Admin_Schedule extends Controller{

    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function index()
    {
        session_start();

    }
}