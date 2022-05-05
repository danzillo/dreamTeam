<?php

class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }

    function index()
    {
        session_start();
        /*
        Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
        в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
        Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
        */
        //ссылка на подклчюения к базе данных
        $link = $this->model->set_data();
//        var_dump($link);
//        var_dump($_POST["Name"]);
        //отправляем данные в бдху
        if (isset($_POST["Name"]) && isset($_POST["Price"])) {
            //Вставляем данные, подставляя их в запрос
            //Если вставка прошла успешно
            header("Location:/admin/");
            if ($link) {
                echo '<p>Данные успешно добавлены в таблицу.</p>';

//                unset($_POST["Name"]);
//                var_dump($_POST["Name"]);
//                unset($_POST["Price"]);
            } else {
                echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';

//                unset($_POST["Name"]);
//                unset($_POST["Price"]);
            }
        }
        //  re
        $all_user = $this->model->get_all_user();
        // var_dump($reg_user);
        $data['reg_user'] = $all_user;
//        $id = $_POST["accept"];

        if(isset($_POST["accept"])){
        foreach ($_POST["accept"] as $reg_id){
            $update_status = $this->model->update_user_status($reg_id);
        }
            header("Location:/admin/");
        echo "Данные пользователей обновлены!";
        }

        if(isset($_POST["decline"])){
            foreach ($_POST["decline"] as $reg_id){
                $delete_user = $this->model->delete_user($reg_id);
            }
            header("Location:/admin/");
            echo "Данные пользователей обновлены!";
        }
//        var_dump($_POST["accept"]);
//        if (isset($_POST["accept"])) {
//            $update_status = $this->model->update_user_status();
//            if ($update_status) {
//                echo '<p>Данные успешно добавлены в таблицу.</p>';
//            }}

            $data['update_status'] = $update_status;
            var_dump($data['update_status']);
            // var_dump( $data);
            if ($_SESSION['status'] == "administrator") {
                $this->view->generate('admin_view.php', 'admin_template_view.php', $data);
            } else {
                session_destroy();
                Route::ErrorPage404();
            }
//ошибка с link & data

        }

        // Действие для разлогинивания администратора
        function action_logout()
        {
            session_start();
            session_destroy();
            header('Location:/');
        }

    }
