<?php
class Controller_Admin_Schedule extends Controller{

    function __construct()
    {
        $this->model = new Model_Admin_Schedule();
        $this->view = new View();
    }

    function index()
    {
        session_start();
        //получаем все события
        $data ["all_events"]= $this->model-> show_all_events();

        $data["all_days"]=$this->model->show_all_days();

        $data["all_times"]=$this->model->show_all_time();


        $this->view->generate('admin_schedule_view.php', 'admin_template_view.php', $data);

    }
}