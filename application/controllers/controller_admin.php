<?php

class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function index()
    {
        session_start();
        if ($_SESSION['status'] == "administrator") {
            $this->view->generate('admin_view.php', 'admin_template_view.php', $data);
        } else {
            session_destroy();
            Route::ErrorPage404();
        }

    }

    // Действие для разлогинивания администратора
    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }

}
