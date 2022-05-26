<?php

class Controller_Admin_Register extends Controller
{

    function __construct()
    {
        $this->model = new Model_Admin_Register();
        $this->view = new View();
    }

    function index()
    {
        session_start();

        $data['all_user'] = $this->model->get_all_user();
        $new_user = $this->model->get_new_user();

        $data['register_user'] = $new_user;

        if (isset($_POST["accept"])) {
            foreach ($_POST["accept"] as $register_id) {
                $update_status = $this->model->update_user_status($register_id);
            }
            header("Location:/admin_register/");
            echo "Данные пользователей обновлены!";
        }

        if (isset($_POST["decline"])) {
            foreach ($_POST["decline"] as $register_id) {
                $delete_user = $this->model->delete_user($register_id);
            }
            header("Location:/admin_register/");
            echo "Данные пользователей обновлены!";
        }

        if ($_SESSION['status'] == "administrator") {
            $this->view->generate('admin_register_view.php', 'admin_template_view.php', $data);
        } else {
            session_destroy();
            Route::ErrorPage404();
        }
    }
}