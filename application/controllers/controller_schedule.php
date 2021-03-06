<?php

class Controller_Schedule extends Controller
{
    function __construct()
    {
        $this->model = new Model_Schedule();
        $this->view = new View();
    }

    function index()
    {
        $time_table = $this->model->get_event_data();
        $data['event_data'] = array_reverse($time_table);

        $this->view->generate('schedule_view.php', 'template_view.php', $data);
    }
}