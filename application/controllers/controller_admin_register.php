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
        $all_user = $this->model->get_all_user();
        $data['all_user'] = $all_user;

        $new_user = $this->model->get_reg_user();
        $data['reg_user'] = $new_user;
//        $id = $_POST["accept"];

        if (isset($_POST["accept"])) {
            foreach ($_POST["accept"] as $reg_id) {
                $update_status = $this->model->update_user_status($reg_id);
            }
            header("Location:/admin_register/");
            echo "Данные пользователей обновлены!";
        }

        if (isset($_POST["decline"])) {
            foreach ($_POST["decline"] as $reg_id) {
                $delete_user = $this->model->delete_user($reg_id);
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