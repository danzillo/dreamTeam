<?php

class Controller_Schedule extends Controller{
    function __construct()
    {
        $this->model = new Model_Schedule();
        $this->view = new View();
    }

    function index()
    {
        $time_table = $this->model->get_event_data();
//
        $data['event_data'] = array_reverse($time_table);
//        $data['title'] = 'Портфолио';
        //  $data = $this->model->getNews();
        $this->view->generate('schedule_view.php', 'template_view.php', $data);
    }

//    function index(){
//        $this->view->generate("schedule_view.php", "template_view.php");
//    }
}

//