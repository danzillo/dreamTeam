<?php

class Controller_Admin_Schedule extends Controller
{

    function __construct()
    {
        $this->model = new Model_Admin_Schedule();
        $this->view = new View();
    }

    function index()
    {
        session_start();
        //получаем все события
        $data ["all_events"] = $this->model->show_all_events();

        $data["all_days"] = $this->model->show_all_days();

        $data["all_times"] = $this->model->show_all_time();

        //добавление нового соьбытия
        if (isset($_POST['day']) && isset($_POST['time']) && isset($_POST['comment'])) {

            // отправка данных в бд
            $this->model->add_event();

            //редирект, чтобы очистить форму
            header("Location:/admin_schedule/");
        }

        //удаления события
        if (isset($_POST["decline"])) {
            foreach ($_POST["decline"] as $event_id) {
                $this->model->delete_event($event_id);
            }
            header("Location:/admin_schedule/");
            echo "Данные пользователей обновлены!";
        }


        $this->view->generate('admin_schedule_view.php', 'admin_template_view.php', $data);

    }
}